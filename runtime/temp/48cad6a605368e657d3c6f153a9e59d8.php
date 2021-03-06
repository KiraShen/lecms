<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"/Users/apple/Documents/workspace/lecms/application/admin/view/admin/list.html";i:1493264239;s:80:"/Users/apple/Documents/workspace/lecms/application/admin/view/common/header.html";i:1493260694;s:81:"/Users/apple/Documents/workspace/lecms/application/admin/view/common/sidebar.html";i:1493262434;s:80:"/Users/apple/Documents/workspace/lecms/application/admin/view/common/footer.html";i:1493261343;}*/ ?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin table Examples</title>
  <meta name="description" content="这是一个 table 页面">
  <meta name="keywords" content="table">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="__PUBLIC__/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="__PUBLIC__/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="__PUBLIC__/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="__PUBLIC__/assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->


<header class="am-topbar am-topbar-inverse admin-header">
  <div class="am-topbar-brand">
    <strong>LEDIAN</strong> <small>乐点后台管理</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <!-- <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 通知 <span class="am-badge am-badge-warning">1</span></a></li> -->
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> <?php echo \think\Request::instance()->session('username'); ?> <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-user"></span> 信息</a></li>
          <!-- <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li> -->
          <li><a href="<?php echo url('admin/logout'); ?>"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="#"><span class="am-icon-home"></span> 首页</a></li>
        <li><a href="#"><span class="am-icon-file "></span> 新闻</a></li>
        <li><a href="#"><span class="am-icon-comment "></span> 通知</a></li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-bars"></span> 管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
            <!-- <li><a href="admin-user.html" class="am-cf"><span class="am-icon-check"></span> 个人资料<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li> -->
            <li><a href="#"><span class="am-icon-group"></span> 子公司管理</a></li> 
            <li><a href="#"><span class="am-icon-user"></span> 会员管理</a></li>
            <!-- <li><a href="admin-gallery.html"><span class="am-icon-th"></span> 相册页面<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
            <li><a href="admin-log.html"><span class="am-icon-calendar"></span> 系统日志</a></li>
            <li><a href="admin-404.html"><span class="am-icon-bug"></span> 404</a></li> -->
          </ul>
        </li>
        <li><a href="<?php echo url('admin/lst'); ?>"><span class="am-icon-gear"></span> 设置</a></li>
       <!--  <li><a href="admin-form.html"><span class="am-icon-pencil-square-o"></span> 表单</a></li>
        <li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li> -->
      </ul>

<!--       <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>时光静好，与君语；细水流年，与君同。—— Amaze UI</p>
        </div>
      </div>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> wiki</p>
          <p>Welcome to the Amaze UI wiki!</p>
        </div>
      </div> -->
    </div>
  </div>
  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">表格</strong> / <small>Table</small></div>
      </div>

      <hr>

      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
          <div class="am-btn-toolbar">
            <div class="am-btn-group am-btn-group-xs">
              <button type="button" class="am-btn am-btn-default" onclick="javascript:window.location.href='add.html' "><span class="am-icon-plus"></span> 新增</button>
              <button type="button" class="am-btn am-btn-default" onclick="javascript:window.location.href='push.html'" ><span class="am-icon-file-excel-o"></span> 导入</button>
              <button type="button" class="am-btn am-btn-default"><span class="am-icon-share"></span> 导出</button>
              <!-- <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button> -->
            </div>
          </div>
        </div>
        <div class="am-u-sm-12 am-u-md-3">
          <div class="am-form-group">
            <select data-am-selected="{btnSize: 'sm'}">
              <option value="option1">按”会员名称“搜索</option>
              <option value="option2">按”子公司名称“搜索</option>
<!--               <option value="option3">数码产品</option>
              <option value="option3">笔记本电脑</option>
              <option value="option3">平板电脑</option>
              <option value="option3">只能手机</option>
              <option value="option3">超极本</option> -->
            </select>
          </div>
        </div>
        <div class="am-u-sm-12 am-u-md-3">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
          </div>
        </div>
      </div>

      <div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-check"><input type="checkbox" /></th><th class="table-id">ID</th><th class="table-title">标题</th><th class="table-type">类别</th><th class="table-author am-hide-sm-only">作者</th><th class="table-date am-hide-sm-only">修改日期</th><th class="table-set">操作</th>
              </tr>
              </thead>
              <tbody>
              <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
              <tr>
                <td><input type="checkbox" /></td>
                <td><?php echo $vo['id']; ?></td>
                <td><a href="#"><?php echo $vo['username']; ?></a></td>
                <td>default</td>
                <td class="am-hide-sm-only">测试1号</td>
                <td class="am-hide-sm-only">2014年9月4日 7:28:47</td>
                <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="javascript:window.location.href='<?php echo url('admin/edit',array('id'=>$vo['id'])); ?>' "><span class="am-icon-pencil-square-o"></span> 编辑</button>
                      <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-eye"></span> 查看</button>
                      <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="javascript:window.location.href=  
                      '<?php echo url('admin/del',array('id'=>$vo['id'])); ?>' ">
                      <span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                  </div>
                </td>
              </tr>
              <?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
            <div class="am-cf">
              共<?php echo $list->total(); ?>条记录
              <div class="am-fr">
                  <?php echo $page; ?>
              </div>
            </div>
            <hr />
            <!-- <p>注：.....</p> -->
          </form>
        </div>

      </div>
    </div>
        <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2017 桐乡乌镇乐点软件网络开发有限公司.</p>
    </footer>
  </div>
  <!-- content end -->
</div>

<!-- <a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>
 -->
<!--[if lt IE 9]>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="__PUBLIC__/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<!--<![endif]-->
<script src="__PUBLIC__/assets/js/amazeui.min.js"></script>
<script src="__PUBLIC__/assets/js/app.js"></script>
<script type="text/javascript">
  $(".pagination").addClass("am-pagination");
  $(".disable").addClass("am-disable");
  $(".active").addClass("am-active");
</script>
</body>
</html>
