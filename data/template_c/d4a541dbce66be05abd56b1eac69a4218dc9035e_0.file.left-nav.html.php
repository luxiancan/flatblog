<?php
/* Smarty version 3.1.31, created on 2017-05-14 15:54:06
  from "F:\XAMPP\htdocs\flatBlog\tpl\admin\left-nav.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59180d1ecfc5e9_33854968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4a541dbce66be05abd56b1eac69a4218dc9035e' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\admin\\left-nav.html',
      1 => 1493556505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59180d1ecfc5e9_33854968 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="left-nav">
    <div class="title cf">
        <div class="admin-avator">
            <img src="static/img/splendid_head.jpg">
        </div>
        <div class="admin-info">
            <a href="javascript:" class="admin-name">splendid</a>
            <p>管理员</p>
        </div>
    </div>
    <div class="nav-list">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a href="admin.php?controller=admin&method=index"><i class="iconfont icon-shouye"></i>首页</a>
            </li>
            <li class="nav-item">
                <a href="admin.php?controller=admin&method=articleslist"><i class="iconfont icon-wenzhangguanli"></i>文章管理</a>
            </li>
            <li class="nav-item">
                <a href="admin.php?controller=admin&method=questionslist"><i class="iconfont icon-wentiguanli"></i>问题管理</a>
            </li>
            <li class="nav-item">
                <a href="admin.php?controller=admin&method=tagslist"><i class="iconfont icon-biaoqianguanli"></i>标签管理</a>
            </li>
            <li class="nav-item">
                <a href="admin.php?controller=admin&method=userslist"><i class="iconfont icon-yonghuguanli"></i>用户管理</a>
            </li>
            <li class="nav-item">
                <a href="admin.php?controller=admin&method=adminslist"><i class="iconfont icon-guanliyuanguanli"></i>管理员管理</a>
            </li>
        </ul>
    </div>
</section>
<?php }
}
