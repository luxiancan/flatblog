<?php
/* Smarty version 3.1.31, created on 2017-05-15 18:58:07
  from "F:\XAMPP\htdocs\flatBlog\tpl\admin\tagsrevise.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_591989bfa287e4_13775257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab2df933fbbcc298dea5e87da5580e2ce9f1fef1' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\admin\\tagsrevise.html',
      1 => 1494218018,
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
function content_591989bfa287e4_13775257 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <div class="tags" id="tags">
                        <div class="sub-nav">
                            <ol class="breadcrumb">
                                <li><a href="admin.php?controller=admin&method=index">首页</a></li>
                                <li><a href="admin.php?controller=admin&method=tagslist">标签管理</a></li>
                                <li class="active"><?php if (count($_smarty_tpl->tpl_vars['data']->value) != 0) {?>标签修改<?php } else { ?>标签添加<?php }?></li>
                            </ol>
                        </div>
                        <div class="revise">
                            <p class="desc">管理员可以添加标签，或者修改标签，请输入以下内容</p>
                            <form action="admin.php?controller=admin&method=tagsrevise" method="post" class="revise-form">
                                <div class="ipt-group">
                                    <span class="title">所属分类：</span>
                                    <div class="ipt-item">
                                        <input class="ipt" type="text" name="class_name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['class_name'])===null||$tmp==='' ? '' : $tmp);?>
">
                                        <p class="error-tip" error-hint="请输入正确的分类名"></p>
                                    </div>
                                </div>
                                <div class="ipt-group">
                                    <span class="title">名称：</span>
                                    <div class="ipt-item">
                                        <input class="ipt" type="text" name="tag_name" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['tag_name'])===null||$tmp==='' ? '' : $tmp);?>
">
                                        <p class="error-tip" error-hint="请输入正确的标签名"></p>
                                    </div>
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
