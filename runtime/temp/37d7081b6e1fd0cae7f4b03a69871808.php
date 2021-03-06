<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"/Users/apple/Documents/workspace/lecms/application/admin/view/admin/push.html";i:1493274164;s:80:"/Users/apple/Documents/workspace/lecms/application/admin/view/common/header.html";i:1493260694;s:81:"/Users/apple/Documents/workspace/lecms/application/admin/view/common/sidebar.html";i:1493262434;s:80:"/Users/apple/Documents/workspace/lecms/application/admin/view/common/footer.html";i:1493261343;}*/ ?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>乐点后台管理</title>
  <meta name="description" content="这是一个form页面">
  <meta name="keywords" content="form">
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
      <div class="am-fl am-cf">
        <strong class="am-text-primary am-text-lg">导入</strong> /
        <small>push</small>
      </div>
    </div>

    <hr>

    <div class="am-tabs am-margin" data-am-tabs>
      <ul class="am-tabs-nav am-nav am-nav-tabs">
        <li class="am-active"><a href="#tab1">基本信息</a></li>
        
      </ul>

      <div class="am-tabs-bd">
        <div class="am-tab-panel am-fade am-in am-active" id="tab1">
<!--         <div class="am-form-group am-form-file">
        <h3>导入Excel表：</h3>
		  <button type="button" class="am-btn am-btn-default am-btn-sm">
		    <i class="am-icon-cloud-upload"></i> 选择要上传的文件</button>
		  <input type="file" multiple>
		</div> -->
<!-- 		<form method="post" action="php文件" enctype="multipart/form-data">
			<h3>导入Excel表：</h3><input type="file" name="file_stu" />
		 	<div class="am-margin">
		 	<button type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
		 	</div>
		</form> -->
		<h2>文件上传示例</h2>
<FORM method="post" enctype="multipart/form-data" class="form" action="<?php echo url('up'); ?>">
选择文件：<INPUT type="file" class="file" name="file"><br/>
<INPUT type="submit" class="btn" value=" 提交 ">
</FORM>

    
        </div>

      </div>
    </div>
<!-- 
    <div class="am-margin">
      <button type="button" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
      <button type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
    </div>
 -->  </div>


        <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2017 桐乡乌镇乐点软件网络开发有限公司.</p>
    </footer>
</div>
<!-- content end -->

</div>
<!-- 
<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer> -->

<!--[if lt IE 9]>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="__PUBLIC__/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<!--<![endif]-->
<script src="__PUBLIC__/assets/js/amazeui.min.js"></script>
<script src="__PUBLIC__/assets/js/app.js"></script>
</body>
</html>
