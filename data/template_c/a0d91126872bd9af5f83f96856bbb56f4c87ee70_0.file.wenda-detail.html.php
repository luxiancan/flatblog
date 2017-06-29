<?php
/* Smarty version 3.1.31, created on 2017-06-20 20:55:02
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\wenda-detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59491b26bb7748_56688249',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0d91126872bd9af5f83f96856bbb56f4c87ee70' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\wenda-detail.html',
      1 => 1497963290,
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
function content_59491b26bb7748_56688249 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\XAMPP\\htdocs\\flatBlog\\framework\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>问题标题 - 七院创新基地技术问答</title>
    <?php $_smarty_tpl->_subTemplateRender('file:index/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>
    <div class="main-wrapper article">
        <!-- 页头开始 -->
        <header>
            <?php $_smarty_tpl->_subTemplateRender('file:index/top-nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div id="banner">
                <div class="banner-mask">
                    <div class="inner">
                        <h1 class="det">一个聪明人，永远会发问</h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- 页头结束 -->
        <!-- 内容开始 -->
        <div class="content article">
            <div class="opus-wrap">
                <div class="detail-left">
                    <!-- 问题内容开始 -->
                    <div class="que-content">
                        <div class="que-content-inner">
                            <div id="js-content-main">
                                <div class="detail-q-title cf">
                                    <h2 class="detail-wenda-title l"><?php echo $_smarty_tpl->tpl_vars['wenda_data']->value['title'];?>
</h2>
                                </div>
                                <div class="detail-info">
                                    <span>编辑于<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['wenda_data']->value['create_at'],'%Y-%m-%d %H:%M:%S');?>
</span>
                                    <span><?php echo $_smarty_tpl->tpl_vars['wenda_data']->value['read_num'];?>
阅读</span>
                                    <span class="js-answer-num"><?php echo $_smarty_tpl->tpl_vars['wenda_data']->value['answer_num'];?>
回答</span>
                                    <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>
                                    <a href="index.php?controller=index&method=wendawrite&id=<?php echo $_smarty_tpl->tpl_vars['wenda_data']->value['id'];?>
" class="detail-edit">编辑</a>
                                    <?php }?>
                                </div>
                                <div id="js-que-wenda" class="detail-q-text">
                                    <p><?php echo $_smarty_tpl->tpl_vars['wenda_data']->value['content'];?>
</p>
                                </div>
                            </div>
                            <div class="cat-box">
                                <div class="cat-wrap">
                                    <span class="art-tags">相关标签：</span>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wenda_data']->value['tag'], 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                                    <a href="index.php?controller=index&method=wenda&tag=<?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
" class="tag-item"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
</a>
                                    <?php
}
} else {
?>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </div>
                            </div>
                            <div class="detail-user-tips">
                                <div class="left-wrap">
                                    <span class="detail-provider">提问者</span>
                                    <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
" class="que-author" data-uid="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['wenda_data']->value['author'];?>
</a>
                                </div>
                                <div class="right-wrap">
                                    <div class="share-follow-wrap cf">
                                        <div class="share-box l">
                                            <div class="share-wrap">
                                                <a href="#" class="icon-nav bds_weixin" data-cmd="weixin" title="分享到微信"><i class="iconfont icon-weixin"></i></a>
                                                <a href="#" class="icon-nav bds_weibo" data-cmd="weibo" title="分享到微博"><i class="iconfont icon-weibo"></i></a>
                                                <a href="#" class="icon-nav bds_qzone" data-cmd="qzone" title="分享到QQ空间"><i class="iconfont icon-qq"></i></a>
                                            </div>
                                        </div>
                                        <div class="follow-box r">
                                            <span data-qid="<?php echo $_smarty_tpl->tpl_vars['wenda_data']->value['id'];?>
" class="dc-follow <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>js-follow<?php } else { ?>js-lgn<?php }?> <?php echo $_smarty_tpl->tpl_vars['wenda_data']->value['follow'];?>
" title="关注">
                                                <i class="iconfont icon-heart"></i>
                                                <span class="detail-hearts js-detail-follow"><?php echo $_smarty_tpl->tpl_vars['wenda_data']->value['follow_num'];?>
</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 问题内容结束 -->
                    <!-- 回复输入框开始 -->
                    <div id="js-que-comment-input" class="detail-comment-input">
                        <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
                        <div class="feeds-author">
                            <span>
                                <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['indexauth']->value['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
">
                            </span>
                            <span class="nick"><?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
</span>
                        </div>
                        <div class="feeds-text">
                            <div id="js-reply-editor-box" class="reply-editor-box">
                                <textarea id="reply-ipt" class="reply-ipt"></textarea>
                            </div>
                            <p id="feed-error" class="feed-error"></p>
                            <div class="reply-editor-bot cf">
                                <button id="js-answer" class="mainbtn r">回答</button>
                            </div>
                        </div>
                        <?php } else { ?>
                        <div id="add-answer" class="detail-ci-avator">
                            <h3 class="answer-add-tip">添加回答</h3>
                            <button id="answer-frame" class="answer-btn js-lgn"></button>
                        </div>
                        <?php }?>
                    </div>
                    <!-- 回复输入框结束 -->
                    <div class="ans_num js-answer-num"><?php echo $_smarty_tpl->tpl_vars['answer_num']->value;?>
回答</div>
                    <!-- 问题回复开始 -->
                    <div id="js-answer-list" class="ques-answer-list">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['answer_data']->value, 'value', false, NULL, 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <div class="ques-answer">
                            <div class="answer-con">
                                <div class="user-detail cf">
                                    <div class="user-pic l">
                                        <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['from_uid'];?>
">
                                            <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['user']['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['user']['username'];?>
">
                                        </a>
                                    </div>
                                    <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['from_uid'];?>
" class="user-name"><?php echo $_smarty_tpl->tpl_vars['value']->value['user']['username'];?>
</a>
                                    <span class="time r"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['answer_at'],'%Y-%m-%d %H:%M:%S');?>
</span>
                                </div>
                                <div class="answer-content">
                                    <p><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</p>
                                </div>
                                <div class="ctrl-bar js-wenda-tool">
                                    <span class="agree-with <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>js-agree-with<?php } else { ?>js-lgn<?php }?> <?php echo $_smarty_tpl->tpl_vars['value']->value['agree'];?>
" data-ques-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['qid'];?>
" data-answer-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">
                                        <b>赞同</b>
                                        <em><?php echo $_smarty_tpl->tpl_vars['value']->value['praise_num'];?>
</em>
                                    </span>
                                    <span class="reply js-hasData" data-answer-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['value']->value['from_uid'];?>
" data-username="<?php echo $_smarty_tpl->tpl_vars['value']->value['user']['username'];?>
" data-replynum="<?php echo $_smarty_tpl->tpl_vars['value']->value['reply_num'];?>
">
                                        <em class="js-num"><?php echo $_smarty_tpl->tpl_vars['value']->value['reply_num'];?>
</em>个回复
                                    </span>
                                    <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['id'] == $_smarty_tpl->tpl_vars['value']->value['from_uid']) {?>
                                    <span class="js-del-answer" data-answer-id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">删除</span>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="reply-con">
                                <ul class="reply-list">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['reply'], 'reply', false, NULL, 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
?>
                                    <li>
                                        <div class="user-pic">
                                            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_uid'];?>
">
                                                <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['reply']->value['from_avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_username'];?>
">
                                            </a>
                                        </div>
                                        <div class="user-info cf">
                                            <?php if ($_smarty_tpl->tpl_vars['user_info']->value['id'] == $_smarty_tpl->tpl_vars['reply']->value['from_uid']) {?>
                                            <em>提问者</em>
                                            <?php }?>
                                            <a class="from-user" href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['from_username'];?>
</a>
                                            <span>回复</span>
                                            <?php if ($_smarty_tpl->tpl_vars['user_info']->value['id'] == $_smarty_tpl->tpl_vars['reply']->value['to_uid']) {?>
                                            <em>提问者</em>
                                            <?php }?>
                                            <a class="to-user" href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['reply']->value['to_uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['reply']->value['to_username'];?>
</a>
                                            <span class="time r"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reply']->value['reply_at'],'%Y-%m-%d %H:%M:%S');?>
</span>
                                        </div>
                                        <div class="reply-content">
                                            <p><?php echo $_smarty_tpl->tpl_vars['reply']->value['content'];?>
</p>
                                        </div>
                                        <div class="reply-footer">
                                            <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['id'] == $_smarty_tpl->tpl_vars['reply']->value['from_uid']) {?>
                                            <div class="reply-btn js-del-reply-btn" data-answer-id="<?php echo $_smarty_tpl->tpl_vars['reply']->value['answer_id'];?>
" data-reply-id="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_uid'];?>
" data-username="<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_username'];?>
">删除</div>
                                            <?php }?>
                                            <div class="reply-btn js-reply-btn" data-answer-id="<?php echo $_smarty_tpl->tpl_vars['reply']->value['answer_id'];?>
" data-reply-id="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_uid'];?>
" data-username="<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_username'];?>
">回复</div>
                                        </div>
                                    </li>
                                    <?php
}
} else {
?>

                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </ul>
                                <div class="release-reply-con">
                                    <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
                                    <div class="user-pic">
                                        <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
">
                                            <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['indexauth']->value['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
">
                                        </a>
                                    </div>
                                    <div class="user-name">
                                        <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
</a>
                                    </div>
                                    <div class="textarea-con">
                                        <textarea name="release-reply" placeholder="写下你的回复"></textarea>
                                    </div>
                                    <p class="error-tip"></p>
                                    <div class="userCtrl cf">
                                        <div class="js-do-reply do-reply-btn mainbtn r" data-ques-uid="<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
">回复</div>
                                    </div>
                                    <?php } else { ?>
                                    <div class="user-pic">
                                        <img src="./static/img/head_img/default_avatar_s.png">
                                    </div>
                                    <div class="user-name">
                                        <span class="travel_name">未知生物</span>
                                    </div>
                                    <div class="textarea-con">
                                        <div class="txt-reply">你还没有登录，请先<span class="lgn js-lgn">登录</span>或<span class="regst js-rgr">注册</span>博客帐号</div>
                                    </div>
                                    <p class="error-tip"></p>
                                    <div class="userCtrl cf">
                                        <div class="do-reply-btn js-lgn mainbtn r">回复</div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                        <?php
}
} else {
?>

                        <p class="answer-none">暂无回答</p>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </div>
                    <!-- 问题回复结束 -->
                </div>
                <!-- 右边栏开始 -->
                <div class="detail-right">
                    <div class="quiz">
                        <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
                        <a href="index.php?controller=index&method=wendawrite" class="mainbtn">我要提问</a>
                        <?php } else { ?>
                        <a href="javascript:;" class="mainbtn js-lgn">我要提问</a>
                        <?php }?>
                    </div>
                    <div class="panel about-ques">
                        <div class="panel-heading">
                            <h3 class="panel-title">相关问题</h3>
                        </div>
                        <div class="panel-body">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['related_wenda']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <div class="mkhotlist">
                                <a href="index.php?controller=index&method=wenda&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="relwenda" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
                                <i class="answer-num"><?php echo $_smarty_tpl->tpl_vars['value']->value['answer_num'];?>
 回答</i>
                            </div>
                            <?php
}
} else {
?>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </div>
                    </div>
                </div>
                <!-- 右边栏结束 -->
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
 type="text/javascript">
        $(function(){

            <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
            var username = "<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
";
            var uid = "<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
";
            var qid = $(".dc-follow").attr("data-qid");

            if($(".js-follow").hasClass("followed")){
                $(".js-follow").attr("title","取消关注");
            }

            $(".js-agree-with").each(function(){
                if($(this).hasClass("agreed")){
                    $(this).find("b").text("已赞同");
                }
            });


            /*关注按钮事件*/
            $(".follow-box .js-follow").on("click",function(){
                var follow_num = Number($(".js-detail-follow").text());
                if($(this).hasClass("followed")){
                    $(this).removeClass("followed").addClass("follow");
                    $(this).attr("title","关注");
                    follow_num = follow_num-1;
                    var url = "index.php?controller=index&method=ajaxdelfollow";
                    var data = new Object();
                    data.qid = qid;
                    data.uid = uid;
                    $.post(url, data, function(res){ });
                }else{
                    $(this).removeClass("follow").addClass("followed");
                    $(this).attr("title","取消关注");
                    follow_num = follow_num+1;
                    var url = "index.php?controller=index&method=ajaxfollow";
                    var data = new Object();
                    data.qid = qid;
                    data.uid = uid;
                    data.follow_at = getTimestamp();
                    $.post(url, data, function(res){ });
                }
                $(".js-detail-follow").text(follow_num);
            });

            /*添加回答*/
            $(document).on("click","#js-answer",function(){
                var content = $("#reply-ipt").val();
                if(content.replace(/\s+/g,"").length>0 && content.length>=3){
                    answer_at = getTimestamp();
                    var url = "index.php?controller=index&method=ajaxanswer";
                    var data = new Object();
                    data.qid = qid;
                    data.from_uid = uid;
                    data.content = content;
                    data.answer_at = answer_at;
                    $.post(url, data, function(res){
                        var jsonobj = JSON.parse(res);
                        switch(jsonobj.result){
                            case 'success':
                                var quesAnswer = '<div class="ques-answer"> <div class="answer-con"> <div class="user-detail cf"> <div class="user-pic l"> <a href="index.php?controller=index&method=user&id='+uid+'"> <img src="static/img/user1_head.jpg" alt="'+username+'"> </a> </div> <a href="index.php?controller=index&method=user&id='+uid+'" class="user-name">'+username+'</a> <span class="time r">刚刚</span> </div> <div class="answer-content"> <p>'+content+'</p> </div> <div class="ctrl-bar js-wenda-tool"> <span class="agree-with js-agree-with" data-ques-id="'+qid+'" data-answer-id="'+jsonobj.insert_id+'"> <b>赞同</b> <em>0</em> </span> <span class="reply js-hasData" data-answer-id="'+jsonobj.insert_id+'" data-uid="'+uid+'" data-username="'+username+'" data-replynum="0"> <em class="js-num">0</em>个回复</span> <span class="js-del-answer" data-answer-id="'+jsonobj.insert_id+'">删除</span> </div> </div> <div class="reply-con"> <ul class="reply-list"> </ul> <div class="release-reply-con"> <div class="user-pic"> <a href="index.php?controller=index&method=user&id='+uid+'"> <img src="static/img/splendid_head.jpg" alt="'+username+'"> </a> </div> <div class="user-name"> <a href="index.php?controller=index&method=user&id='+uid+'">'+username+'</a> </div> <div class="textarea-con"> <textarea name="release-reply" placeholder="写下你的回复"></textarea> </div> <p class="error-tip"></p> <div class="userCtrl cf"> <div class="js-do-reply do-reply-btn mainbtn r" data-answer-id="'+jsonobj.insert_id+'" data-ques-uid="'+uid+'">回复</div> </div> </div> </div> </div>';
                                $(".answer-none").remove();
                                $("#feed-error").text("");
                                $("#reply-ipt").val("");
                                $("#js-answer-list").prepend(quesAnswer);
                                showAnsNum();
                                break;
                            case 'fail':
                                alter("添加回答失败!");
                                break;
                        }
                    });
                }else{
                    $("#feed-error").text("回答字数不少于3个！");
                }
            });

            /*删除回答*/
            $(document).on("click",".js-del-answer",function(){
                if(confirm("确认删除这条回答？删除后不可恢复")){
                    var ques_answer = $(this).parents(".ques-answer");
                    var url = "index.php?controller=index&method=ajaxdelanswer";
                    data = new Object();
                    data.uid = uid;
                    data.qid = qid;
                    data.answer_id = $(this).attr("data-answer-id");
                    $.post(url, data, function(res){
                        switch(res){
                            case 'success':
                                ques_answer.remove();
                                showAnsNum();
                                if(answer_num==0){
                                    $("#js-answer-list").append('<p class="answer-none">暂无回答</p>');
                                }
                                break;
                            case 'fail':
                                alter("删除失败!");
                                break;
                        }
                    })
                }
            });

            /*添加回复*/
            $(document).on("click",".js-do-reply",function(){
                var release_reply_con = $(this).parents(".release-reply-con"),
                    content = release_reply_con.find("textarea").val(),
                    reply_num = $(this).parents(".ques-answer").find(".js-hasData");
                if(content.replace(/\s+/g,"").length>0 && content.length>=3){
                    reply_at = getTimestamp();
                    var url = "index.php?controller=index&method=ajaxwendareply";
                    var data = new Object();
                    data.answer_id = answer_id;
                    data.from_uid = uid;
                    data.to_uid = to_uid;
                    data.content = content;
                    data.reply_at = reply_at;
                    $.post(url, data, function(res){
                        var jsonobj = JSON.parse(res);
                        switch(jsonobj.result){
                            case 'success':
                                var li = '<li> <div class="user-pic"> <a href="index.php?controller=index&method=user&id='+uid+'"> <img src="static/img/user2_head.jpg" alt="'+username+'"> </a> </div> <div class="user-info cf"> <?php if ($_smarty_tpl->tpl_vars['user_info']->value['id'] == '+uid+') {?><em>提问者</em><?php }?> <a href="index.php?controller=index&method=user&id='+uid+'" class="from-user">'+username+'</a> <span>回复</span> <?php if ($_smarty_tpl->tpl_vars['user_info']->value['id'] == '+uid+') {?><em>提问者</em><?php }?> <a class="to-user" href="index.php?controller=index&method=user&id='+to_uid+'">'+reply_username+'</a> <span class="time r">刚刚</span> </div> <div class="reply-content"> <p>'+content+'</p> </div> <div class="reply-btn js-del-reply-btn" data-answer-id="'+answer_id+'" data-reply-id="'+jsonobj.insert_id+'" data-uid="'+uid+'" data-username="'+username+'">删除</div> <div class="js-reply-btn reply-btn" data-answer-id="'+answer_id+'" data-reply-id="'+jsonobj.insert_id+'" data-uid="'+uid+'" data-username="'+username+'">回复</div> </li>';
                                release_reply_con.find(".error-tip").text("");
                                release_reply_con.parent().find(".reply-list").append(li);
                                release_reply_con.find("textarea").val("");
                                reply_num.attr("data-replynum",(Number(reply_num.attr("data-replynum"))+1));
                                break;
                            case 'fail':
                                alter("添加回复失败!");
                                break;
                        }
                    });
                }else{
                    release_reply_con.find(".error-tip").text("字数不够，最少3个字");
                }
            });

            /*删除回复*/
            $(document).on("click",".js-del-reply-btn",function(){
                if(confirm("确认删除这条回复？删除后不可恢复")){
                    var li = $(this).parents("li");
                    var reply_num = $(this).parents(".ques-answer").find(".js-hasData");
                    var url = "index.php?controller=index&method=ajaxdelwendareply";
                    data = new Object();
                    data.reply_id = $(this).attr("data-reply-id");
                    $.post(url, data, function(res){
                        switch(res){
                            case 'success':
                                li.remove();
                                reply_num.attr("data-replynum",(Number(reply_num.attr("data-replynum"))-1));
                                break;
                            case 'fail':
                                alter("删除失败!");
                                break;
                        }
                    });
                }
            });

            /*回复按钮聚焦事件*/
            $(document).on("click",".js-reply-btn",function(){
                var textarea = $(this).parents(".reply-con").find("textarea");
                window.reply_username = $(this).attr("data-username");
                window.to_uid = $(this).attr("data-uid");
                window.answer_id = $(this).attr("data-answer-id");
                textarea.val("").attr("placeholder","回复 "+reply_username+"：").focus();
            });

            /*赞同按钮事件*/
            $(document).on("click",".js-agree-with",function(){
                var num = Number($(this).find("em").text());
                var answer_id = Number($(this).attr("data-answer-id"));
                if($(this).hasClass("agreed")){
                    $(this).removeClass("agreed").addClass("agree");
                    num--;
                    $(this).find("b").text("赞同");
                    var url = "index.php?controller=index&method=ajaxdelagree";
                    var data = new Object();
                    data.uid = uid;
                    data.answer_id = answer_id;
                    $.post(url, data, function(res){ });
                }else{
                    $(this).removeClass("agree").addClass("agreed");
                    num++;
                    $(this).find("b").text("已赞同");
                    var url = "index.php?controller=index&method=ajaxagree";
                    var data = new Object();
                    data.qid = qid;
                    data.uid = uid;
                    data.answer_id = answer_id;
                    data.agree_at = getTimestamp();
                    $.post(url, data, function(res){ });
                }
                $(this).find("em").text(num);
            });

            /*计算回答次数事件*/
            function showAnsNum(){
                window.answer_num = $(".ques-answer").length;
                $(".js-answer-num").text(answer_num+"回答");
            }

            <?php }?>

            /*展开或收起回复事件*/
            $(document).on("click",".js-hasData",function(){
                replyNum();
                var ques_answer = $(this).parents(".ques-answer");
                var other = ques_answer.siblings().find(".js-hasData");
                window.reply_username = $(this).attr("data-username");
                window.to_uid = $(this).attr("data-uid");
                window.answer_id = $(this).attr("data-answer-id");
                $(".reply-con").hide();
                $(this).toggleClass("js-show");
                if($(this).hasClass("js-show")){
                    $(this).html("收起回复");
                    ques_answer.find(".reply-con").show();
                    ques_answer.find(".reply-con textarea").attr("placeholder","回复 "+reply_username+"：").focus();
                }else{
                    $(this).html('<em class="js-num">'+$(this).attr('data-replynum')+'</em>个回复');
                }
                other.removeClass("js-show");
                other.each(function(){
                    $(this).html('<em class="js-num">'+$(this).attr('data-replynum')+'</em>个回复');
                });
            });

            /*获取回复数量*/
            function replyNum(){
                $(".js-num").each(function(){
                    var len = $(this).parents(".ques-answer").find(".reply-list li").length;
                    $(this).text(len);
                    $(this).parent().attr("data-replynum",len);
                });
            }

        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
