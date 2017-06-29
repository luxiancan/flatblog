<?php
/* Smarty version 3.1.31, created on 2017-05-28 13:52:31
  from "F:\XAMPP\htdocs\flatBlog\tpl\admin\questionslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_592a659f432671_41407476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b5b5907da816af6dc448b268d6e2388f94ce16c' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\admin\\questionslist.html',
      1 => 1495950735,
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
function content_592a659f432671_41407476 (Smarty_Internal_Template $_smarty_tpl) {
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
        const qname = "questions";
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
                    <div class="question" id="question">
                        <div class="sub-nav">
                            <ol class="breadcrumb">
                                <li><a href="admin.php?controller=admin&method=index">首页</a></li>
                                <li class="active">问题管理</li>
                            </ol>
                        </div>
                        <div class="details">
                            <div class="details_operation">
                                <div class="left-wrap">
                                    <div class="btn btn-comment" id="all-del" onclick="delAll(qname)">批量删除</div>
                                </div>
                                <div class="right-wrap">
                                    <div class="status-wrap">
                                        <span class="fl">状态：</span>
                                        <div class="status-select">
                                            <select name id="select" class="select" onchange="selectStatus(this,qname)">
                                                <option value="0">全部</option>
                                                <option value="1" class="select-item" <?php if ($_smarty_tpl->tpl_vars['val']->value == 1) {?> selected='selected' <?php }?>>有效</option>
                                                <option value="2" class="select-item" <?php if ($_smarty_tpl->tpl_vars['val']->value == 2) {?> selected='selected' <?php }?>>无效</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-group search">
                                        <input type="text" class="form-control" name="key" placeholder="问题标题">
                                        <span class="input-group-btn">
                                            <a class="btn btn-comment" onclick="searchContent(qname)">搜索</a>
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
                                                <th>标题</th>
                                                <th>标签</th>
                                                <th>发布者</th>
                                                <th>发布时间</th>
                                                <th>回答</th>
                                                <th>状态</th>
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
                                                <td class="title">
                                                    <a href="index.php?controller=index&method=wenda&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
                                                </td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['tag_name'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</td>
                                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['create_at'],'%Y-%m-%d %H:%M:%S');?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['answer_num'];?>
</td>
                                                <td><?php if ($_smarty_tpl->tpl_vars['value']->value['status'] == 1) {?>有效<?php } else { ?>无效<?php }?></td>
                                                <td>
                                                    <a href="admin.php?controller=admin&method=questionsrevise&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>
                                                    <a onclick="delOne(<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
,qname)">删除</a>
                                                </td>
                                            </tr>
                                        <?php
}
} else {
?>

                                            <tr>
                                                <td>暂无问题</td>
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
