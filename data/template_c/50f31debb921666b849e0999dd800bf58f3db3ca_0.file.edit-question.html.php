<?php
/* Smarty version 3.1.31, created on 2017-06-11 10:13:24
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\edit-question.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593ca744bf29d9_07263874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50f31debb921666b849e0999dd800bf58f3db3ca' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\edit-question.html',
      1 => 1497081998,
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
function content_593ca744bf29d9_07263874 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php if (count($_smarty_tpl->tpl_vars['data']->value) != 0) {?>编辑问题<?php } else { ?>发布问题<?php }?> - 七院创新基地</title>
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
                        <h1 class="det">一个聪明人，永远会发问</h1>
                    </div>
                </div>
            </div>
        </header><!-- 页头结束 -->

        <div class="content article"><!-- 内容开始 -->
            <div class="content_wrapper det">
                <div class="release-wrap question-wrap">
                    <div class="que-main">
                        <div class="release-title">
                            <h2><?php if (count($_smarty_tpl->tpl_vars['data']->value) != 0) {?>编辑问题<?php } else { ?>发布问题<?php }?></h2>
                        </div>
                        <div class="release-form">
                            <div class="form-group rel-tle">
                                <span class="needed">*</span>
                                <div class="form-ipt-wrap">
                                    <label for="que-title">问题</label>
                                    <input type="text" id="que-title" class="rel-title que-title" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
" placeholder="请用一句话说明你的问题">
                                    <p class="form-ipt-error"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-ipt-wrap edit-area-de">
                                    <label for="sup-edit">问题补充</label>
                                    <textarea id="sup-edit" class="sup-edit" name="sup-edit" placeholder="(选填)"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['content'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
                                </div>
                            </div>
                            <div class="form-group tag-selector">
                                <span class="needed">*</span>
                                <div class="tag-selector-wrap">
                                    <p class="tip">问题标签，最多可选3个</p>
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
                                    <button class="mainbtn btm-box" id="js-submit"><?php if (count($_smarty_tpl->tpl_vars['data']->value) != 0) {?>提交<?php } else { ?>发布<?php }?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="que-sidebar">
                        <div class="que-attention">
                            <div class="atten-body">
                                <div class="atten-title">
                                    <i class="iconfont icon-tishi"></i>
                                    <h3>提问注意事项</h3>
                                </div>
                                <dl>
                                    <dd>1、你是来解决问题的？请先去首页搜索是否已经有同类问题吧。这样你就省心少打字。</dd>
                                    <dd>2、没找到是么？那就在发问题时精确描述你的问题，不要写与问题无关的内容哟~</dd>
                                    <dt>问答禁止这些提问</dt>
                                    <dd>1、禁止发布求职、交易、推广、广告类等与问答无关的信息，这些信息将被一律清理。</dd>
                                    <dd>2、尽可能详细描述你的问题，如标题与内容不符，或与问答无关的信息将被删除。</dd>
                                </dl>
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
        $(".rel-title").on("input propertychange", queErrorTip);
        var old_tag = $("#js-tags .for-choice.active");
        var old_tag_name = "";
        old_tag_name = getSelectTag(old_tag,old_tag_name);

        function getSelectTag(tag,tag_name){
            tag.each(function(){
                tag_name += $(this).text() + ",";
            });
            return (tag_name.substr(tag_name.length-1)==',')?tag_name.substr(0,tag_name.length-1):tag_name;
        }

        function queErrorTip(){
            var title = $("#que-title").val();
            if(title.replace(/\s+/g,"").length==0 || title.length<5){
                tle_err.text("标题不能少于5个汉字！");
                title_ipt.addClass("ipt-error");
            }else if(title.length>50){
                tle_err.text("标题不能超过50个单位长度！");
                title_ipt.addClass("ipt-error");
            }else{
                tle_err.text("");
                title_ipt.removeClass("ipt-error");
                return true;
            }
        }

        function yanzheng(){
            var que_tle = $("#que-title").val(),
                que_abs = $("#sup-edit").val(),
                tag = $("#js-tags .for-choice.active"),
                tags_len = tag.length,
                tag_name = "";
            tag_name = getSelectTag(tag,tag_name);

            que_abs = (que_abs=="")?que_tle:que_abs;

            if(queErrorTip()){
                if(tags_len<1){
                    tag_err.text("问题至少选择一个分类！");
                }else{
                    tag_err.text("");
                    var timestamp = Date.parse(new Date());
                    timestamp = timestamp/1000;
                    var data = new Object();
                    data.title = que_tle;
                    data.content = que_abs;
                    data.old_tag_name = old_tag_name;
                    data.tag_name = tag_name;
                    data.author = '<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
';
                    data.create_at = timestamp;
                    data.id = id?id:"";

                    var url = "index.php?controller=index&method=wendasave";
                    $.post(url, data, function(res){
                        var jsonObj = JSON.parse(res);
                        if(jsonObj.result=='0'){
                            alert('操作失败！');
                            window.location = "index.php?controller=index&method=wendanwrite";
                        }
                        if(jsonObj.result=='1'){
                            alert('修改成功！');
                            window.location = "index.php?controller=index&method=wenda&id="+jsonObj.update_id;
                        }
                        if(jsonObj.result=='2'){
                            // alert('发表成功！');
                            window.location = "index.php?controller=index&method=wendasavesuccess&id="+jsonObj.insert_id;
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
