<?php
/* Smarty version 3.1.31, created on 2017-06-18 14:59:37
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\user-bbs.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_594624d9d6c232_10072378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efcd3d92a462230d9642af86bd532b17b5032a36' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\user-bbs.html',
      1 => 1497768852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/link_css.html' => 1,
    'file:index/top-nav.html' => 1,
    'file:index/user-head-info.html' => 1,
    'file:index/user-left-menu.html' => 1,
    'file:index/footer.html' => 1,
    'file:index/signin.html' => 1,
    'file:index/sidebar.html' => 1,
    'file:index/script_js.html' => 1,
  ),
),false)) {
function content_594624d9d6c232_10072378 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\XAMPP\\htdocs\\flatBlog\\framework\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
的问答 - 七院创新基地</title>
    <?php $_smarty_tpl->_subTemplateRender('file:index/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="static/css/user.css">
</head>
<body>
    <div class="main-wrapper user">
        <header><!-- 页头开始 -->
            <?php $_smarty_tpl->_subTemplateRender('file:index/top-nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender('file:index/user-head-info.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </header><!-- 页头结束 -->
        <div class="content"><!-- 内容开始 -->
            <div class="main-wrap">
                <?php $_smarty_tpl->_subTemplateRender('file:index/user-left-menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="u-container">
                    <div id="articleMain" class="article-main">
                        <ul class="toptab">
                            <li class="active">
                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=bbs"><?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>我<?php } else { ?>Ta<?php }?>的提问</a>
                            </li>
                            <li>
                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=bbs&sort=reply"><?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>我<?php } else { ?>Ta<?php }?>的回答</a>
                            </li>
                            <li>
                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=bbs&sort=follow"><?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>我<?php } else { ?>Ta<?php }?>的关注</a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
                            <a href="index.php?controller=index&method=wendawrite" class="mainbtn wanna-build"><i class="iconfont icon-jia"></i>我要提问</a>
                            <?php } else { ?>
                            <a href="javascript:;" class="mainbtn wanna-build js-lgn"><i class="iconfont icon-jia"></i>我要提问</a>
                            <?php }?>
                        </ul>
                        <div class="main-content">
                            <div class="con-wrap">
                                <div class="table-top cf">
                                    <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>
                                    <div class="left-wrap">
                                        <div class="mainbtn del-btn js-del-more">批量删除</div>
                                    </div>
                                    <?php }?>
                                </div>
                                <table id="lstBox" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <input type="checkbox" id="all-select">
                                                <label for="all-select">编号</label>
                                            </th>
                                            <th class="title">标题</th>
                                            <th>最后编辑时间</th>
                                            <th>浏览</th>
                                            <th>回答</th>
                                            <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>
                                            <th>操作</th>
                                            <?php }?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wenda_data']->value, 'value', false, NULL, 'name', array (
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
                                            <td class="title">
                                                <a href="index.php?controller=index&method=wenda&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
                                            </td>
                                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['update_at'],'%Y-%m-%d %H:%M:%S');?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['read_num'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['answer_num'];?>
</td>
                                            <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>
                                            <td>
                                                <a href="index.php?controller=index&method=wendawrite&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">编辑</a> |
                                                <a href="javascript:;" class="js-del" data-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</a>
                                            </td>
                                            <?php }?>
                                        </tr>
                                        <?php
}
} else {
?>

                                        <tr>
                                            <td>暂无内容</td>
                                        </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </tbody>
                                </table>
                                <div class="page-wrap">
                                    <?php echo $_smarty_tpl->tpl_vars['page_banner']->value;?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- 内容结束 -->
        <?php $_smarty_tpl->_subTemplateRender('file:index/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:index/signin.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender('file:index/sidebar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php $_smarty_tpl->_subTemplateRender('file:index/script_js.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="static/js/user.main.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
    <?php echo '<script'; ?>
 src="static/js/user.follow.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function(){

            <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
            var uid = Number($("#nav .user").attr("data-uid"));

            $(".js-del").on("click",function(){
                if(confirm('确认删除这条数据吗？删除后不可恢复！')){
                    var data_id = $(this).attr("data-id");
                    var url = "index.php?controller=index&method=ajaxdelwenda";
                    var data = new Object();
                    data.uid = uid;
                    data.id = data_id;
                    data.do = "del_one";
                    $.post(url, data, function(res){
                        // res = $.parseJSON(res);
                        switch(res){
                            case 'success':
                                alert("删除成功！");
                                location.reload(true);
                                break;
                            case 'fail':
                                alert("删除失败！");
                                location.reload(true);
                                break;
                        }
                    });
                }
            });

            $(".js-del-more").on("click",function(){
                var idStr = "";
                $("#lstBox .check:checked").each(function(){
                    idStr += $(this).attr("id") + ',';
                });
                idStr = idStr.substr(0,idStr.length-1);
                if(idStr.length>0){
                    if(confirm("确认删除这些数据吗？删除后不可恢复！")){
                        var url = "index.php?controller=index&method=ajaxdelwendamore";
                        var data = new Object();
                        data.uid = uid;
                        data.id = idStr;
                        data.do = "del_more";
                        $.post(url, data, function(res){
                            switch(res){
                                case 'success':
                                    alert("删除多条数据成功！");
                                    location.reload(true);
                                    break;
                                case 'fail':
                                    alert("删除失败！");
                                    location.reload(true);
                                    break;
                            }
                        });
                    }
                }else{
                    alert("请选择需要删除的数据！");
                }
            });

            <?php }?>
        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
