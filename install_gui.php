<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>SakuraPuare Todo Installer</title>
<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/css/mdui.min.css">
<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.2/js/mdui.min.js"></script>
</head>
<body>
<body class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-blue mdui-loaded">
<header class="mdui-appbar mdui-appbar-fixed">
  <div class="mdui-toolbar mdui-color-theme">
    <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: &#39;#main-drawer&#39;, swipe: true}"><i class="mdui-icon material-icons">menu</i></span>
    <a href="<?php $_SERVER['HTTP_HOST']; ?>" class="mdui-typo-headline mdui-hidden-xs">Todo Installer</a>

    <div class="mdui-toolbar-spacer"></div>
    </a>
  </div>
</header>
<!--左侧的菜单-->
<div class="mdui-drawer" id="main-drawer">
  <div class="mdui-list" mdui-collapse="{accordion: true}" style="margin-bottom: 76px;">
    <div class="mdui-collapse-item ">
      <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-blue">near_me</i>
        <div class="mdui-list-item-content">安装流程</div>
        <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
      </div>
      <div class="mdui-collapse-item-body mdui-list">
        <a href="/install_pages/tos.html" class="mdui-list-item mdui-ripple ">同意条款</a>
		<a href="/install_pages/set_db.html" class="mdui-list-item mdui-ripple ">设置数据库</a>
        <a href="/install_pages/install_db.html" class="mdui-list-item mdui-ripple ">安装数据库</a>
		<a href="/install_pages/create_adminuser.html" class="mdui-list-item mdui-ripple ">创建后台管理员账户</a>
        <a href="/install_pages/delete.html" class="mdui-list-item mdui-ripple ">删除多余文件</a>
		<a href="/install_pages/finished.html" class="mdui-list-item mdui-ripple ">安装完成</a>
		<a href="https://ivampiresp.com/todo" class="mdui-list-item mdui-ripple ">关于SPTODO</a>
      </div>
    </div>
      </div>

</div>
<!--菜单结束-->
<div class="mdui-container doc-container doc-no-cover">
  <h1 class="doc-title mdui-text-color-theme">SakuraPuare Todo</h1>
	<div class="doc-chapter">
    <div class="mdui-typo">
      <p>欢迎安装SakuraPuare Todo -by iVampireSP</p>
      <p>点击左侧菜单，开始吧！</p>
    </div>
		
	<div class="mdui-typo">
		<a href="/install_pages/tos.html">
	<button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent">Start!</button>
<!-- 显示区域 -->

</body>
</html>