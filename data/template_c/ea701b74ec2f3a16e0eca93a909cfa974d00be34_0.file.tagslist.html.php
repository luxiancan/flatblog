<?php
/* Smarty version 3.1.31, created on 2017-05-15 17:01:04
  from "F:\XAMPP\htdocs\flatBlog\tpl\admin\tagslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59196e50ecb941_30975542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea701b74ec2f3a16e0eca93a909cfa974d00be34' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\admin\\tagslist.html',
      1 => 1494838818,
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
function content_59196e50ecb941_30975542 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\XAMPP\\htdocs\\flatBlog\\framework\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>博客后台管理系统</title>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        const tname = "tags";
    <?php echo '</script'; ?>
>
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
                                <li class="active">标签管理</li>
                            </ol>
                        </div>
                        <div class="details">
                            <div class="details_operation">
                                <div class="left-wrap">
                                    <div class="btn btn-comment" id="all-del" onclick="delAll(tname)">批量删除</div>
                                    <a class="btn btn-comment" href="admin.php?controller=admin&method=tagsrevise">添加</a>
                                </div>
                                <div class="right-wrap">
                                    <div class="input-group search">
                                        <input type="text" class="form-control" name="key" placeholder="标签名称">
                                        <span class="input-group-btn">
                                            <a class="btn btn-comment" onclick="searchContent(tname)">搜索</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="main-con">
                                <div class="table-wrap">
                                    <table class="table" cellspacing="0" cellpadding="0">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" id="all-select">
                                                    <label for="all-select" class="label">编号</label>
                                                </th>
                                                <th>id</th>
                                                <th>标签所属分类</th>
                                                <th>标签名称</th>
                                                <th>关联文章数</th>
                                                <th>关联问题数</th>
                                                <th>最后修改时间</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, NULL, 'name', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration']++;
?>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="check" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
                                                    <label for="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="label"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration'] : null);?>
</label>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['class_name'];?>
</td>
                                                <td>
                                                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value['tag_name'];?>
</a>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['art_num'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['que_num'];?>
</td>
                                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['create_at'],'%Y-%m-%d %H:%M:%S');?>
</td>
                                                <td>
                                                    <a href="admin.php?controller=admin&method=tagsrevise&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                                                    <a onclick="delOne(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
,tname)">删除</a>
                                                </td>
                                            </tr>
                                        <?php
}
} else {
?>

                                            <tr>
                                                <td>暂无标签</td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </tbody>
                                    </table>
                                </div>
                                <?php echo $_smarty_tpl->tpl_vars['page_banner']->value;?>

                            </div>
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
