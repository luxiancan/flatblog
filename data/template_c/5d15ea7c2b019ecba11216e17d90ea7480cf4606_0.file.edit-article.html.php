<?php
/* Smarty version 3.1.31, created on 2017-06-11 15:43:04
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\edit-article.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593cf48869cb07_10683333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d15ea7c2b019ecba11216e17d90ea7480cf4606' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\edit-article.html',
      1 => 1497166932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/link_css.html' => 1,
    'file:index/top-nav.html' => 1,
    'file:index/footer.html' => 1,
    'file:index/signin.html' => 1,
    'file:index/sidebar.html' => 1,
    'file:index/script_js.html' => 1,
  ),
),false)) {
function content_593cf48869cb07_10683333 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php if (count($_smarty_tpl->tpl_vars['data']->value) != 0) {?>编辑文章<?php } else { ?>发表文章<?php }?> - 七院创新基地</title>
    <?php $_smarty_tpl->_subTemplateRender('file:index/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>
    <div class="main-wrapper article">
        <header><!-- 页头开始 -->
            <?php $_smarty_tpl->_subTemplateRender('file:index/top-nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div id="banner">
                <div class="banner-mask">
                    <div class="inner">
                        <h1 class="det">努力学习，勤奋工作，让青春更加光彩</h1>
                    </div>
                </div>
            </div>
        </header><!-- 页头结束 -->

        <div class="content article"><!-- 内容开始 -->
            <div class="content_wrapper det">
                <div class="release-wrap article-wrap">
                    <div class="release-title">
                        <h2><?php if (count($_smarty_tpl->tpl_vars['data']->value) != 0) {?>编辑文章<?php } else { ?>发表文章<?php }?></h2>
                    </div>
                    <div class="release-form article-form">
                        <div class="form-group rel-tle art-tle">
                            <span class="needed">*</span>
                            <div class="form-ipt-wrap">
                                <label for="art-title">文章标题</label>
                                <input type="text" id="art-title" class="rel-title art-title" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="请输入标题，最多32个单位长度">
                                <input type="radio" class="art-type" name="art-type" value="1" id="ori" <?php if (count($_smarty_tpl->tpl_vars['data']->value) != 0) {
if ($_smarty_tpl->tpl_vars['data']->value['cat_name'] == 1) {?> checked="checked" <?php }
}?>><label for="ori">原创</label>
                                <input type="radio" class="art-type" name="art-type" value="2" id="rep" <?php if (count($_smarty_tpl->tpl_vars['data']->value) != 0) {
if ($_smarty_tpl->tpl_vars['data']->value['cat_name'] == 2) {?> checked="checked" <?php }
}?>><label for="rep">转载</label>
                                <p class="form-ipt-error"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="needed">*</span>
                            <div class="form-ipt-wrap edit-area">
                                <label for="art-edit">文章内容</label>
                                <textarea id="art-edit" class="art-edit" name="art-edit" placeholder="请输入文章内容"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                                <p class="form-ipt-error"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-ipt-wrap edit-area-de">
                                <label for="abs-edit">摘要：（默认自动提取您文章的前100字显示在博客首页作为文章摘要，您也可以在这里自行编辑）</label>
                                <textarea id="abs-edit" class="de-edit" name="abs-edit" placeholder="(选填)"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['summary'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group tag-selector">
                            <span class="needed">*</span>
                            <div class="tag-selector-wrap">
                                <p class="tip">文章标签，最多可选3个</p>
                                <div id="js-tags" class="tag-box">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tag']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <span class="for-choice <?php if (count($_smarty_tpl->tpl_vars['data']->value) != 0) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['tag'], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
if ($_smarty_tpl->tpl_vars['v']->value['tag_name'] == $_smarty_tpl->tpl_vars['value']->value['tag_name']) {?>active<?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>" tag-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['tag_name'];?>
</span>
                                <?php
}
} else {
?>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </div>
                                <p class="form-ipt-error"></p>
                            </div>
                        </div>
                        <div class="form-group form-bottom">
                            <div class="form-ipt-wrap">
                                <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
                                <button class="mainbtn btm-box" id="js-submit"><?php if (count($_smarty_tpl->tpl_vars['data']->value) != 0) {?>提交<?php } else { ?>发布<?php }?></button>
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
 src="static/js/write.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        var art_con_err = $(".edit-area .form-ipt-error");

        $(".rel-title").on("input propertychange", artErrorTip);

        function artErrorTip(){
            var title = $("#art-title").val();
            // content.replace(/\s+/g,"").length>0 && content.length>=10
            if(title.replace(/\s+/g,"").length==0 || title.length<10){
                tle_err.text("标题不能少于10个单位长度！");
                title_ipt.addClass("ipt-error");
            }else if(title.length>32){
                tle_err.text("标题不能超过32个单位长度！");
                title_ipt.addClass("ipt-error");
            }else{
                tle_err.text("");
                title_ipt.removeClass("ipt-error");
                return true;
            }
        }

        function yanzheng(){
            var art_tle = $("#art-title").val(),
                art_type = $(".art-type:checked").val(),
                art_con = $("#art-edit").val(),
                art_con_len = art_con.length,
                art_abs = $("#abs-edit").val(),
                tag = $("#js-tags .for-choice.active"),
                tags_len = tag.length,
                tag_name = "";
            tag_name = getSelectTag(tag,tag_name);

            art_abs = (art_abs=="")?art_con.substr(0,180):art_abs.substr(0,180);

            if(artErrorTip()){
                if(art_type==null){
                    tle_err.text("请选择一个文章类型!");
                }else if(art_con_len<100){
                    tle_err.text("");
                    art_con_err.text("内容不能少于100个字！");
                }else if(tags_len<1){
                    art_con_err.text("");
                    tag_err.text("文章至少选择一个分类！");
                }else{
                    art_con_err.text("");
                    tag_err.text("");
                    var data = new Object();
                    data.title = art_tle;
                    data.cat_name = art_type;
                    data.content = art_con;
                    data.summary = art_abs;
                    data.old_tag_name = old_tag_name;
                    data.tag_name = tag_name;
                    data.author = '<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
';
                    data.create_at = getTimestamp();
                    data.id = id?id:"";
                    var url = "index.php?controller=index&method=articlepublish";
                    $.post(url, data, function(res){
                        var jsonObj = JSON.parse(res);
                        if(jsonObj.result=='0'){
                            alert('操作失败！');
                            window.location = "index.php?controller=index&method=articlewrite";
                        }
                        if(jsonObj.result=='1'){
                            alert('修改成功！');
                            window.location = "index.php?controller=index&method=article&id="+jsonObj.update_id;
                        }
                        if(jsonObj.result=='2'){
                            // alert('发表成功！');
                            window.location = "index.php?controller=index&method=articlesavesuccess&id="+jsonObj.insert_id;
                        }
                    });
                }
            }
        }

        $("#js-submit").on("click",function(){
            yanzheng();
        });

    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
