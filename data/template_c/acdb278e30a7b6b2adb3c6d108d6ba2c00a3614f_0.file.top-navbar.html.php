<?php
/* Smarty version 3.1.31, created on 2017-05-22 15:55:47
  from "F:\XAMPP\htdocs\flatBlog\tpl\admin\top-navbar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59229983899175_99520889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acdb278e30a7b6b2adb3c6d108d6ba2c00a3614f' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\admin\\top-navbar.html',
      1 => 1495439744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59229983899175_99520889 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="top-navbar">
    <div class="left-wrap">
        <div class="logo">
            <h3 class="title-text">博客后台管理系统</h3>
        </div>
    </div>
    <div class="right-wrap">
        <div class="front-page">
            <a href="index.php" target="_blank">前台首页</a>
        </div>
        <div class="admin-card-box" id="header-admin-card">
            <div class="admin-card cf" id="admin-card">
                <a id="admin-avator" class="admin-avator js-admin-avator">
                    <img src="static/img/splendid_head.jpg">
                </a>
                <span class="caret"></span>
            </div>
            <ul class="logout">
                <li class="cf">
                    <a href="admin.php?controller=admin&method=logout">退出登录</a>
                </li>
            </ul>
        </div>
    </div>
</nav><?php }
}
