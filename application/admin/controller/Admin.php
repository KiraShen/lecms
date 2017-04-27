<?php
namespace app\admin\controller;
use think\Controller;
use think\Validate;
use think\Db;
use app\admin\model\Admin as AdminModel;
//use app\admin\controller\Base;
use PHPExcel_IOFactory;
use PHPExcel;
use think\Request;
class Admin extends Controller
{
    public function lst()
    {   
        $model= new AdminModel();
    	$list = AdminModel::paginate(3);
        $page = $list->render();
    	$this->assign('list',$list);
        $this->assign('page',$page);
        //dump($page);
        return $this->fetch('list');
    }

    public function add()
    {	
     	if(request()->isPost()){

			$data=[
    			'username'=>input('username'),
    			'password'=>md5(input('password')),
    		];
   //  		$validate = \think\Loader::validate('Admin');
   //  		if(!$validate->scene('add')->check($data)){
			//    $this->error($validate->getError()); die;
			// }
    		if(Db::name('admin')->insert($data)){
    			return $this->success('添加管理员成功！','lst');
    		}else{
    			return $this->error('添加管理员失败！');
    		}
    		return;
     	}
        return $this->fetch('add');
    }

    public function edit(){
    	$id=input('id');
    	$admins=db('admin')->find($id);
        //dump($admins);die;
    	if(request()->isPost()){
    		$data=[
    			'id'=>input('id'),
    			'username'=>input('username'),
    		];
    		if(input('password')){
				$data['password']=md5(input('password'));
			}else{
				$data['password']=$admins['password'];
			}
			//$validate = \think\Loader::validate('Admin');
   //  		if(!$validate->scene('edit')->check($data)){
			//    $this->error($validate->getError()); die;
			// }
            $save=db('admin')->update($data);
    		if($save !== false){
    			$this->success('修改管理员成功！','lst');
    		}else{
    			$this->error('修改管理员失败！');
    		}
    		return;
    	}
    	$this->assign('admins',$admins);
    	return $this->fetch();
    }

    public function del(){
    	$id=input('id');
    	if($id != 2){
    		if(db('admin')->delete(input('id'))){
    			$this->success('删除管理员成功！','lst');
    		}else{
    			$this->error('删除管理员失败！');
    		}
    	}else{
    		$this->error('初始化管理员不能删除！');
    	}
    	
    }
    public function push(){
        //$objPHPExcel = new ／vendor/PHPoffice/PHPExcel(); 
        return $this->fetch();
    }

    public function logout(){
        session(null);
        $this->success('退出成功！','Login/index');
    }

    public function up(Request $request)
    {
        // 获取表单上传文件
        $file = $request->file('file');
        // // 上传文件验证(后期扩展为独立的验证文件)
        // $result = $this->validate(['file' => $file], ['file'=>'require|iamge:xls,xlsx'],['file.require' => '请选择上传文件', 'file.image' => '非法文件']);
        // if(true !== $result){
        //     $this->error($result);
        //}
        if (empty($file)) {
            $this->error('请选择上传文件');
        }
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->validate(['ext' => 'xls,xlsx'])->move(ROOT_PATH . 'public' . DS . 'uploads');
        if ($info) {
            //$this->success('文件上传成功：' . $info->getRealPath());
            //echo $info->getSaveName();die;
            $res = $info->getSaveName();
        } else {
            // 上传失败获取错误信息
            $this->error($file->getError());
        }
        $objReader = PHPExcel_IOFactory::createReader('Excel5');
        $objPHPExcel = $objReader->load(ROOT_PATH.'public/uploads/'.$res,$encode='utf-8');
        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow(); // 取得总行数
        $highestColumn = ord($sheet->getHighestColumn())-64; // 取得总列数
        $column = ['','A','B','C','D','E','F','G'];
        //echo $highestRow;die;
        for($i=1;$i<=$highestRow;$i++){
            $data['username'] = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getValue();  
            $data['password'] = md5($objPHPExcel->getActiveSheet()->getCell('B'.$i)->getValue());
        }
        if(Db::name('admin')->insert($data)){
            return $this->success('添加管理员成功！','lst');
        }else{
            return $this->error('添加管理员失败！');
        }
    }
}



















