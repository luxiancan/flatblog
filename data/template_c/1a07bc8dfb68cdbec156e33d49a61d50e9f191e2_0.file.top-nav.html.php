<?php
/* Smarty version 3.1.31, created on 2017-06-10 15:31:11
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\top-nav.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593ba03f9750d7_54170833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a07bc8dfb68cdbec156e33d49a61d50e9f191e2' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\top-nav.html',
      1 => 1497079824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_593ba03f9750d7_54170833 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav id="nav">
    <div class="logo">
    <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
        <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
" class="user"><?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
</a>
    <?php } else { ?>
        <a data-toggle="modal" data-target="#signin" id="js-signin-btn">登录</a>
        <a data-toggle="modal" data-target="#signin" id="js-signup-btn">注册</a>
    <?php }?>
    </div>
    <ul class="menu">
        <li><a href="index.php">首页</a></li>
        <li><a href="index.php?controller=index&method=article">全部博文</a></li>
        <li><a href="index.php?controller=index&method=wenda">技术问答</a></li>
        <li id="sidebar_trigger"><a href="javascript:;">菜单</a></li>
    </ul>
    <div class="search-wrap">
        <div class="search-area">
            <input type="text" class="search-input" id="js-top-search-ipt" autocomplete="off" placeholder="搜索本站">
        </div>
        <div class="search-btn js-top-search">
            <i class="iconfont icon-sousuo_sousuo"></i>
        </div>
    </div>
</nav><?php }
}
