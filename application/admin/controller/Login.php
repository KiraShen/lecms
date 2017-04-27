<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin;
class Login extends Controller
{
    public function index()
    {
    	if(request()->isPost()){
    		$admin = new Admin();
    		$data = input('post.');
    		$ref = $admin->login($data);
    		if($ref==3){
    			$this->success('信息正确,跳转中...','index/index');
    		}elseif($ref==2){
    			$this->error('用户或密码错误');
    		}else{
    			$this->error('用户不存在');
    		}
    	}
        return $this->fetch('login');
    }
}
