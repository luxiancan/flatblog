<?php
/* Smarty version 3.1.31, created on 2017-05-15 19:49:48
  from "F:\XAMPP\htdocs\flatBlog\tpl\admin\usersrevise.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_591995dc775411_67507947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b29c706fc5fdb4cb97fee7ee65532d82c130a28d' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\admin\\usersrevise.html',
      1 => 1494065269,
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
function content_591995dc775411_67507947 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <div class="users" id="users">
                        <div class="sub-nav">
                            <ol class="breadcrumb">
                                <li><a href="admin.php?controller=admin&method=index">首页</a></li>
                                <li><a href="admin.php?controller=admin&method=userslist">用户管理</a></li>
                                <li class="active">用户修改</li>
                            </ol>
                        </div>
                        <div class="revise">
                            <div class="top">
                                <h3>你要修改的用户是：<?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
</h3>
                            </div>
                            <p class="desc">管理员只能对前台用户的状态进行修改，请选择以下其中一种状态进行修改</p>
                            <form action="admin.php?controller=admin&method=usersrevise" method="post" class="revise-form">
                                <span class="title">状态：</span>
                                <div class="select-item">
                                    <label for="1">有效</label>
                                    <input type="radio" id="1" name="status" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['status'] == 1) {?> checked="checked" <?php }?>>
                                </div>
                                <div class="select-item">
                                    <label for="2">无效</label>
                                    <input type="radio" id="2" name="status" value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['status'] == 2) {?> checked="checked" <?php }?>>
                                </div>
                                <div class="ipt-btm">
                                    <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
                                    <input type="submit" class="btn btn-comment" value="提交">
                                </div>
                            </form>
                        </div>
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
