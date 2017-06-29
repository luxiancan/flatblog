<?php
/* Smarty version 3.1.31, created on 2017-06-10 16:01:29
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593ba759bffc19_68367416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d5993c30b78dfafcdff997dec198d6d4667aafd' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\sidebar.html',
      1 => 1497081687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593ba759bffc19_68367416 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="mask"></div>
    <div id="sidebar">
        <ul>
            <li><a href="index.php">首页</a></li>
            <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
            <li><a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
">个人主页</a></li>
            <li><a href="index.php?controller=index&method=articlewrite">写新博文</a></li>
            <li><a href="index.php?controller=index&method=wendawrite">发布问题</a></li>
            <li><a href="index.php?controller=index&method=logout">退出登录</a></li>
            <?php } else { ?>
            <li><a href="jacascript:;" class="js-lgn">个人主页</a></li>
            <li><a href="javascript:;" class="js-lgn">写新博文</a></li>
            <li><a href="javascript:;" class="js-lgn">发布问题</a></li>
            <li><a href="javascript:;">退出登录</a></li>
            <?php }?>
        </ul>
        <a href="#sidebar" class="close_sidebar"></a>
    </div>
    <a class="back-to-top mainbtn">顶部</a><?php }
}
