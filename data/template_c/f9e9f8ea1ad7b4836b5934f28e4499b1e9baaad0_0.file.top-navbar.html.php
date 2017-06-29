<?php
/* Smarty version 3.1.31, created on 2017-05-07 20:31:27
  from "C:\xampp\htdocs\flatBlog\tpl\admin\top-navbar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590f139fe7b4e9_19335678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9e9f8ea1ad7b4836b5934f28e4499b1e9baaad0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\flatBlog\\tpl\\admin\\top-navbar.html',
      1 => 1494160265,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590f139fe7b4e9_19335678 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-fixed-top top-navbar">
    <div class="logo">
        <h3 class="title-text">博客后台管理系统</h3>
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
</nav><?php }
}
