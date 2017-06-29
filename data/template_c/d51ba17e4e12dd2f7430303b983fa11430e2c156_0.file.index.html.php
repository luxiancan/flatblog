<?php
/* Smarty version 3.1.31, created on 2017-05-14 15:54:06
  from "F:\XAMPP\htdocs\flatBlog\tpl\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59180d1ec17cc9_66389019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd51ba17e4e12dd2f7430303b983fa11430e2c156' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\admin\\index.html',
      1 => 1494213549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/link_css.html' => 1,
    'file:admin/top-navbar.html' => 1,
    'file:admin/left-nav.html' => 1,
    'file:admin/script_js.html' => 1,
  ),
),false)) {
function content_59180d1ec17cc9_66389019 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>博客后台管理系统</title>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>
    <div class="wrapper">
        <?php $_smarty_tpl->_subTemplateRender('file:admin/top-navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="main">
            <?php $_smarty_tpl->_subTemplateRender('file:admin/left-nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <section class="content-wrap">
                <section class="content">
                    <div class="home" id="home">
                        <div class="sub-nav">
                            <ol class="breadcrumb">
                                <li class="active">首页</li>
                            </ol>
                        </div>
                        <div class="box-wrap">
                            <ul>
                                <li class="box-group">
                                    <a href="admin.php?controller=admin&method=articleslist" class="box">
                                        <span>文章管理</span>
                                        <i class="iconfont icon-wenzhangguanli"></i>
                                    </a>
                                </li>
                                <li class="box-group">
                                    <a href="admin.php?controller=admin&method=questionslist" class="box">
                                        <span>问题管理</span>
                                        <i class="iconfont icon-wentiguanli"></i>
                                    </a>
                                </li>
                                <li class="box-group">
                                    <a href="admin.php?controller=admin&method=tagslist" class="box">
                                        <span>标签管理</span>
                                        <i class="iconfont icon-biaoqianguanli"></i>
                                    </a>
                                </li>
                                <li class="box-group">
                                    <a href="admin.php?controller=admin&method=userslist" class="box">
                                        <span>用户管理</span>
                                        <i class="iconfont icon-yonghuguanli"></i>
                                    </a>
                                </li>
                                <li class="box-group">
                                    <a href="admin.php?controller=admin&method=adminslist" class="box">
                                        <span>管理员管理</span>
                                        <i class="iconfont icon-guanliyuanguanli"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- 站点共有<?php echo $_smarty_tpl->tpl_vars['articlesnum']->value;?>
篇文章 -->
                    </div>
                </section>
            </section>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/script_js.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
