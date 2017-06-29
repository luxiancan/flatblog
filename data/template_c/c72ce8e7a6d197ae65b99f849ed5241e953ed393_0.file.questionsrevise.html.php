<?php
/* Smarty version 3.1.31, created on 2017-05-18 11:30:23
  from "F:\XAMPP\htdocs\flatBlog\tpl\admin\questionsrevise.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_591d154f8916b7_00275201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c72ce8e7a6d197ae65b99f849ed5241e953ed393' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\admin\\questionsrevise.html',
      1 => 1494065581,
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
function content_591d154f8916b7_00275201 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <div class="question" id="question">
                        <div class="sub-nav">
                            <ol class="breadcrumb">
                                <li><a href="admin.php?controller=admin&method=index">首页</a></li>
                                <li><a href="admin.php?controller=admin&method=questionslist">问题管理</a></li>
                                <li class="active">问题修改</li>
                            </ol>
                        </div>
                        <div class="revise">
                            <div class="top">
                                <h3>你要修改的问题是：<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h3>
                                <h4>问题发布者：<?php echo $_smarty_tpl->tpl_vars['data']->value['author'];?>
</h4>
                            </div>
                            <p class="desc">管理员只能对前台问题的状态进行修改，请选择以下其中一种状态进行修改</p>
                            <form action="admin.php?controller=admin&method=questionsrevise" method="post" class="revise-form">
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
