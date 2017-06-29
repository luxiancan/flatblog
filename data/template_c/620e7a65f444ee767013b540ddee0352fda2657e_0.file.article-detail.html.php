<?php
/* Smarty version 3.1.31, created on 2017-06-20 21:03:59
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\article-detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59491d3f3b14d9_06826817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '620e7a65f444ee767013b540ddee0352fda2657e' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\article-detail.html',
      1 => 1497963837,
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
function content_59491d3f3b14d9_06826817 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\XAMPP\\htdocs\\flatBlog\\framework\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>jQuery笔记总结 - splendid的博客</title>
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
                        <h1 class="det"><?php echo $_smarty_tpl->tpl_vars['article_data']->value['author'];?>
的文章</h1>
                    </div>
                </div>
            </div>
        </header>
        <!-- 页头结束 -->
        <!-- 内容开始 -->
        <div class="content article">
            <div class="opus-wrap">
                <div class="detail-left">
                    <!-- 文章内容开始 -->
                    <div class="detail-content-wrap" data-aid="<?php echo $_smarty_tpl->tpl_vars['article_data']->value['id'];?>
">
                        <div class="article-title">
                            <h3><?php echo $_smarty_tpl->tpl_vars['article_data']->value['title'];?>

                                <span class="type"><?php if ($_smarty_tpl->tpl_vars['article_data']->value['cat_name'] == 1) {?>原创<?php } else { ?>转载<?php }?></span>
                            </h3>
                        </div>
                        <div class="detail-info">
                            <span>编辑于<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article_data']->value['update_at'],'%Y-%m-%d %H:%M:%S');?>
</span>
                            <span><?php echo $_smarty_tpl->tpl_vars['article_data']->value['read_num'];?>
阅读</span>
                            <span class="js-comment-num"><?php echo $_smarty_tpl->tpl_vars['article_data']->value['comment_num'];?>
评论</span>
                            <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>
                            <a href="index.php?controller=index&method=articlewrite&id=<?php echo $_smarty_tpl->tpl_vars['article_data']->value['id'];?>
" class="detail-edit">编辑</a>
                            <?php }?>
                        </div>
                        <article>
                            <p><?php echo $_smarty_tpl->tpl_vars['article_data']->value['content'];?>
</p>
                        </article>
                        <p class="original">本文原创发布于七院创新基地博文 ，转载请注明出处，谢谢合作！</p>
                        <div class="cat-box">
                            <div class="cat-wrap">
                                <span class="art-tags">相关标签：</span>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_data']->value['tag'], 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                                <a href="index.php?controller=index&method=article&tag=<?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
" class="tag-item"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
</a>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </div>
                        </div>
                        <div class="praise-box">
                            <button class="<?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>js-praise<?php } else { ?>js-lgn<?php }?> icon-praise mainbtn <?php echo $_smarty_tpl->tpl_vars['article_data']->value['praise'];?>
" title="推荐">
                                <i class="iconfont icon-dianzan"></i>
                            </button>
                        </div>
                        <div class="show-praise-wrap">
                            <div class="show-praise-user">
                                <div class="praise-icon">
                                    <ul id="js-praise-show" class="cf">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['praise_data']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                            <li>
                                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" title="<?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
"></a>
                                            </li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </div>
                                <div class="praise-num">
                                    <span class="num"><?php echo $_smarty_tpl->tpl_vars['article_data']->value['praise_num'];?>
</span>
                                    <span class="person">人</span>推荐
                                </div>
                            </div>
                        </div>
                        <div class="active-box">
                            <div class="share-collect-wrap">
                                <div class="share-box">
                                    <div class="share-wrap">
                                        <a href="#" class="icon-nav bds_weixin" data-cmd="weixin" title="分享到微信"><i class="iconfont icon-weixin"></i></a>
                                        <a href="#" class="icon-nav bds_weibo" data-cmd="weibo" title="分享到微博"><i class="iconfont icon-weibo"></i></a>
                                        <a href="#" class="icon-nav bds_qzone" data-cmd="qzone" title="分享到QQ空间"><i class="iconfont icon-qq"></i></a>
                                    </div>
                                </div>
                                <div class="collect-box">
                                    <span data-aid="<?php echo $_smarty_tpl->tpl_vars['article_data']->value['id'];?>
" class="dc-collect <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>js-collect<?php } else { ?>js-lgn<?php }?> <?php echo $_smarty_tpl->tpl_vars['article_data']->value['collect'];?>
">
                                        <span>收藏</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 文章内容结束 -->
                    <!-- 评论开始 -->
                    <div class="feedback-wrap">
                        <div class="fb-ipt-wrap" id="comment">
                            <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
                            <div class="feeds-author">
                                <span>
                                    <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['indexauth']->value['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
">
                                    <span class="nick"><?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
</span>
                                </span>
                            </div>
                            <div class="feeds-text">
                                <div id="js-reply-editor-box" class="reply-editor-box">
                                    <textarea id="reply-ipt" class="reply-ipt"></textarea>
                                </div>
                                <p id="feed-error" class="feed-error"></p>
                                <div class="reply-editor-bot cf">
                                    <button id="js-submit" class="mainbtn r">评论</button>
                                </div>
                            </div>
                            <?php } else { ?>
                            <div class="feeds-author">
                                <span>
                                    <img src="./static/img/head_img/default_avatar_s.png">
                                    <span class="nick">未知生物</span>
                                </span>
                            </div>
                            <div class="feeds-text">
                                <div class="reply-editor-box">
                                    <textarea class="js-lgn reply-ipt" readonly>你还没有登录，请登录后，再发表评论</textarea>
                                </div>
                                <div class="reply-editor-bot cf">
                                    <button class="mainbtn disabled js-lgn r">评论</button>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        <div class="fb-title js-comment-num" id="all_comments"><?php echo $_smarty_tpl->tpl_vars['comment_num']->value;?>
评论</div>
                        <div class="fb-list" id="js-fb-list-wrap">
                            <div id="js-fb-list">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment_data']->value, 'value', false, NULL, 'name', array (
  'total' => true,
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration']++;
?>
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="feed-author">
                                            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['from_uid'];?>
">
                                                <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['user']['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['user']['username'];?>
">
                                            </a>
                                            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['from_uid'];?>
" class="nick"><?php echo $_smarty_tpl->tpl_vars['value']->value['user']['username'];?>
</a>
                                            <span class="com-floor r"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['total'] : null)-(isset($_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration'] : null)+1;?>
F</span>
                                        </div>
                                        <div class="feed-list-content js-layer">
                                            <p><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</p>
                                            <div class="comment-footer">
                                                <span class="feed-list-times"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['comment_at'],'%Y-%m-%d %H:%M:%S');?>
</span>
                                                <div class="r">
                                                    <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['id'] == $_smarty_tpl->tpl_vars['value']->value['from_uid']) {?>
                                                    <span class="<?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>js-del-comment-btn<?php } else { ?>js-lgn<?php }?> reply-btn" data-commentid="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['value']->value['from_uid'];?>
" data-username="<?php echo $_smarty_tpl->tpl_vars['value']->value['user']['username'];?>
">删除</span>
                                                    <?php }?>
                                                    <span class="<?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>js-reply-btn<?php } else { ?>js-lgn<?php }?> reply-btn" data-commentid="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['value']->value['from_uid'];?>
" data-username="<?php echo $_smarty_tpl->tpl_vars['value']->value['user']['username'];?>
">回复</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reply-box">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['reply'], 'reply', false, NULL, 'name', array (
  'total' => true,
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration']++;
?>
                                        <div class="comment">
                                            <div class="feed-author l">
                                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_uid'];?>
">
                                                    <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['reply']->value['from_avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_username'];?>
">
                                                </a>
                                            </div>
                                            <div class="feed-list-content js-replyer">
                                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_uid'];?>
" class="from-user"><?php echo $_smarty_tpl->tpl_vars['reply']->value['from_username'];?>
</a>回复
                                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['reply']->value['to_uid'];?>
" class="to-user"><?php echo $_smarty_tpl->tpl_vars['reply']->value['to_username'];?>
</a>：
                                                <span class="feed-list-time r"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reply']->value['reply_at'],'%Y-%m-%d %H:%M:%S');?>
</span>
                                                <p><?php echo $_smarty_tpl->tpl_vars['reply']->value['content'];?>
</p>
                                                <div class="comment-footer">
                                                    <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['id'] == $_smarty_tpl->tpl_vars['reply']->value['from_uid']) {?>
                                                    <span class="<?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>js-del-reply-btn<?php } else { ?>js-lgn<?php }?> reply-btn reply-btns" data-commentid="<?php echo $_smarty_tpl->tpl_vars['reply']->value['comment_id'];?>
" data-replyid="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_uid'];?>
" data-username="<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_username'];?>
">删除</span>
                                                    <?php }?>
                                                    <span class="<?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>js-reply-btn<?php } else { ?>js-lgn<?php }?> reply-btn reply-btns" data-commentid="<?php echo $_smarty_tpl->tpl_vars['reply']->value['comment_id'];?>
" data-replyid="<?php echo $_smarty_tpl->tpl_vars['reply']->value['id'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_uid'];?>
" data-username="<?php echo $_smarty_tpl->tpl_vars['reply']->value['from_username'];?>
">回复</span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </div>
                                    <div class="release-reply">
                                        <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
                                        <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
" class="user-head">
                                            <img src="static/img/splendid_head.jpg" alt="username">
                                        </a>
                                        <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
" class="nick"><?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
</a>
                                        <div class="reply-con">
                                            <div class="textarea-wrap">
                                                <textarea placeholder="写下你的回复..."></textarea>
                                            </div>
                                            <p class="errtip"></p>
                                            <div class="reply-ctrl cf">
                                                <div class="btn-wrap">
                                                    <div class="cancel-btn">取消</div>
                                                    <div data-comment-uid="<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
" class="mainbtn release-reply-btn js-reply-submit">提交</div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                                <?php
}
} else {
?>

                                <p class="feedback-none">暂无评论</p>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </div>
                        </div>
                    </div>
                    <!-- 评论结束 -->
                </div>
                <div class="detail-right">
                    <div class="aside-author">
                        <div class="user-avator">
                            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
" target="_blank">
                                <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_info']->value['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
">
                            </a>
                        </div>
                        <p class="user-name">
                            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
" class="nick" target="_blank" data-uid="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
</a>
                        </p>
                        <span class="user-job"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['job'];?>
</span>
                        <span class="user-desc">
                            <?php if ($_smarty_tpl->tpl_vars['user_info']->value['signature'] == '') {?>
                            这位同学很懒，木有签名的说~
                            <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['user_info']->value['signature'];?>

                            <?php }?>
                        </span>
                        <div class="btm-box">
                            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=articles" class="article-num r-bor" target="_blank"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['article_num'];?>
篇博文</a>
                            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=articles&type=praise" class="article-praise" target="_blank"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['praise_num'];?>
推荐</a>
                        </div>
                    </div>
                    <div class="other-article">
                        <div class="hot hot-art">
                            <h4>作者的热门博文</h4>
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['author_hot_article']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <li>
                                    <a href="index.php?controller=index&method=article&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
                                    <div class="show-box">
                                        <span class="spacer"><?php echo $_smarty_tpl->tpl_vars['value']->value['read_num'];?>
浏览</span>
                                        <span class="spacer"><?php echo $_smarty_tpl->tpl_vars['value']->value['praise_num'];?>
推荐</span>
                                        <span class="spacer"><?php echo $_smarty_tpl->tpl_vars['value']->value['comment_num'];?>
评论</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 内容结束 -->
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

            var praise_num = Number($(".praise-num .num").text());
            if(praise_num==0){
                $(".show-praise-wrap").hide();
            }

            <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
            var username = "<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
";
            var uid = "<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
";
            var aid = $(".dc-collect").attr("data-aid");


            if($(".js-praise").hasClass("praised")){
                $(".js-praise").attr("title","取消推荐");
            }else{
                $(".js-praise").attr("title","推荐");
            }

            if($(".js-collect").hasClass("collected")){
                $(".js-collect").find("span").text("取消收藏");
            }else{
                $(".js-collect").find("span").text("收藏");
            }


            /*推荐按钮事件*/
            $(".js-praise").on("click",function(){
                if($(this).hasClass("praised")){
                    $(this).removeClass("praised").addClass("praise");
                    $(this).attr("title","推荐");
                    removeOnePraise();
                    praise_num = praise_num-1;
                    if(praise_num==0){
                        $(".show-praise-wrap").hide();
                    }
                    var url = "index.php?controller=index&method=ajaxdelpraise";
                    var data = new Object();
                    data.aid = aid;
                    data.uid = uid;
                    console.log(data);
                    $.post(url, data, function(res){ });
                }else{
                    $(this).removeClass("praise").addClass("praised");
                    $(this).attr("title","取消推荐");
                    addOnePraise();
                    $(".show-praise-wrap").show();
                    praise_num = praise_num+1;
                    var url = "index.php?controller=index&method=ajaxpraise";
                    var data = new Object();
                    data.aid = aid;
                    data.uid = uid;
                    data.praise_at = getTimestamp();
                    $.post(url, data, function(res){ });
                }
                $(".praise-num .num").text(praise_num);
            });

            function addOnePraise(){
                var praise_dom = '<li> <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
"><img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['indexauth']->value['avatar'])===null||$tmp==='' ? "default_avatar.jpg" : $tmp);?>
" title="<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
"></a> </li> ';
                $("#js-praise-show").prepend(praise_dom);
            }

            function removeOnePraise(){
                $("#js-praise-show li:first").remove();
            }

            /*收藏按钮事件*/
            $(".js-collect").on("click",function(){
                if($(this).hasClass("collected")){
                    $(this).removeClass("collected").addClass("collect");
                    $(this).find("span").text("收藏");
                    var url = "index.php?controller=index&method=ajaxdelcollect";
                    var data = new Object();
                    data.aid = aid;
                    data.uid = uid;
                    $.post(url, data, function(res){ });
                }else{
                    $(this).removeClass("collect").addClass("collected");
                    $(this).find("span").text("取消收藏");
                    var url = "index.php?controller=index&method=ajaxcollect";
                    var data = new Object();
                    data.aid = aid;
                    data.uid = uid;
                    data.collect_at = getTimestamp();
                    $.post(url, data, function(res){ });
                }
            });

            /*添加评论按钮事件*/
            $("#js-submit").on("click",function(){
                var content = $("#reply-ipt").val(),
                    floor = $(".comment-box").length+1;
                if(content.replace(/\s+/g,"").length>0 && content.length>=10){
                    comment_at = getTimestamp();
                    var url = "index.php?controller=index&method=ajaxcomment";
                    var data = new Object();
                    data.aid = aid;
                    data.from_uid = uid;
                    data.content = content;
                    data.comment_at = comment_at;
                    $.post(url, data, function(res){
                        var jsonobj = JSON.parse(res);
                        switch(jsonobj.result){
                            case 'success':
                                var commentBox = '<div class="comment-box"><div class="comment"><div class="feed-author"> <a href="index.php?controller=index&method=user&id='+uid+'"> <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['indexauth']->value['avatar'])===null||$tmp==='' ? "default_avatar.jpg" : $tmp);?>
" alt="'+username+'"> </a> <a href="index.php?controller=index&method=user&id='+uid+'" class="nick">'+username+'</a> <span class="com-floor r">'+floor+'F</span> </div> <div class="feed-list-content js-layer"> <p>'+content+'</p> <div class="comment-footer"> <span class="feed-list-times">刚刚</span> <div class="r"> <span class="js-del-comment-btn reply-btn" data-commentid="'+jsonobj.insert_id+'" data-uid="'+uid+'" data-username="'+username+'">删除</span> <span class="js-reply-btn reply-btn" data-commentid="'+jsonobj.insert_id+'" data-uid="'+uid+'" data-username="'+username+'">回复</span> </div> </div> </div> </div> <div class="reply-box"></div> <div class="release-reply"> <a href="index.php?controller=index&method=user&id='+uid+'" class="user-head"> <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['indexauth']->value['avatar'])===null||$tmp==='' ? "default_avatar.jpg" : $tmp);?>
" alt="'+username+'"> </a> <a href="index.php?controller=index&method=user&id='+uid+'" class="nick">'+username+'</a> <div class="reply-con"> <div class="textarea-wrap"> <textarea placeholder="写下你的回复..."></textarea> </div> <p class="errtip"></p> <div class="reply-ctrl cf"> <div class="btn-wrap"> <div class="cancel-btn">取消</div> <div data-comment-uid="" class="mainbtn release-reply-btn js-reply-submit">提交</div> </div> </div> </div> </div> </div>';
                                $(".feedback-none").remove();
                                $("#feed-error").text("");
                                $("#reply-ipt").val("");
                                $("#js-fb-list").prepend(commentBox);
                                showCommentNum();
                                break;
                            case 'fail':
                                alter("添加评论失败!");
                                break;
                        }
                    });
                }else{
                    $("#feed-error").text("评论字数不能少于10个字！");
                }
            });

            /*删除评论按钮事件*/
            $(document).on("click",".js-del-comment-btn",function(){
                if(confirm("确认删除这条评论？删除后不可恢复")){
                    var commentbox = $(this).parents(".comment-box");
                    var url = "index.php?controller=index&method=ajaxdelcomment";
                    data = new Object();
                    data.uid = uid;
                    data.aid = aid;
                    data.comment_id = $(this).attr("data-commentid");
                    $.post(url, data, function(res){
                        switch(res){
                            case 'success':
                                commentbox.remove();
                                showCommentNum();
                                if(comment_num==0){
                                    $("#js-fb-list").append('<p class="feedback-none">暂无评论</p>');
                                }
                                break;
                            case 'fail':
                                alter("删除失败!");
                                break;
                        }
                    })
                }
            });

            /*回复提交按钮事件*/
            $("#js-fb-list").on("click",".js-reply-submit",function(){
                var comment_box = $(this).parents(".comment-box"),
                    content = comment_box.find("textarea").val();
                if(content.replace(/\s+/g,"").length>0 && content.length>=3){
                    reply_at = getTimestamp();
                    var url = "index.php?controller=index&method=ajaxarticlereply";
                    var data = new Object();
                    data.aid = aid;
                    data.comment_id = comment_id;
                    data.from_uid = uid;
                    data.to_uid = to_uid;
                    data.content = content;
                    data.reply_at = reply_at;
                    $.post(url, data, function(res){
                        var jsonobj = JSON.parse(res);
                        switch(jsonobj.result){
                            case 'success':
                                comment_box.find(".errtip").text("");
                                var comment = '<div class="comment"> <div class="feed-author l"> <a href="index.php?controller=index&method=user&id='+uid+'"> <img src="static/img/user2_head.jpg" alt="'+username+'"> </a> </div> <div class="feed-list-content js-replyer"> <a href="index.php?controller=index&method=user&id='+uid+'" class="from-user">'+username+'</a>回复 <a href="index.php?controller=index&method=user&id='+to_uid+'" class="to-user">'+reply_username+'</a>： <span class="feed-list-time r">刚刚</span> <p>'+content+'</p> <div class="comment-footer"> <span class="js-del-reply-btn reply-btn reply-btns" data-commentid="'+comment_id+'" data-replyid="'+jsonobj.insert_id+'" data-uid="'+uid+'" data-username="'+username+'">删除</span> <span class="js-reply-btn reply-btn reply-btns" data-commentid="'+comment_id+'" data-replyid="'+jsonobj.insert_id+'" data-uid="'+uid+'" data-username="'+username+'">回复</span> </div> </div> </div>';
                                if(comment_box.find(".reply-box .comment").length>0){
                                    comment_box.find(".reply-box .comment:last").after(comment);
                                }else{
                                    comment_box.find(".reply-box").append(comment);
                                }
                                $(".release-reply").hide();
                                break;
                            case 'fail':
                                alter("添加回复失败!");
                                break;
                        }
                    });
                }else{
                    comment_box.find(".errtip").text("回复内容不得少于3个字");
                }
                comment_box.find(".getMoreReply").html("收起回复").addClass("js-show");
                comment_box.find(".reply-box .comment").show();
            });

            /*删除回复按钮事件*/
            $(document).on("click",".js-del-reply-btn",function(){
                if(confirm("确认删除这条回复？")){
                    var all_comment = $(this).parents(".reply-box").find(".comment");
                    var comment = $(this).parents(".comment");
                    var more_reply = $(this).parents(".reply-box").find(".getMoreReply");
                    var url = "index.php?controller=index&method=ajaxdelarticlereply";
                    data = new Object();
                    data.reply_id = $(this).attr("data-replyid");
                    $.post(url, data, function(res){
                        switch(res){
                            case 'success':
                                comment.remove();
                                all_comment.show();
                                if(all_comment.length>4){
                                    more_reply.addClass("js-show").html("收回回复");
                                }else{
                                    more_reply.remove();
                                }
                                break;
                            case 'fail':
                                alter("删除失败!");
                                break;
                        }
                    })
                }
            });

            /*针对评论的回复按钮事件*/
            $("#js-fb-list").on("click",".js-layer .js-reply-btn",function(){
                var $this = $(this).parent();
                window.reply_username = $(this).attr("data-username");
                window.to_uid = $(this).attr("data-uid");
                window.comment_id = $(this).attr("data-commentid");
                showReply($this,reply_username);
            });

            /*针对回复的回复按钮事件*/
            $("#js-fb-list").on("click",".js-replyer .js-reply-btn",function(){
                var $this = $(this).parent();
                window.reply_username = $(this).attr("data-username");
                window.to_uid = $(this).attr("data-uid");
                window.comment_id = $(this).attr("data-commentid");
                showReply($this,reply_username);
            });

            /*取消按钮事件*/
            $("#js-fb-list").on("click",".cancel-btn",function(){
                $(".release-reply").hide();
                $(".release-reply textarea").val("");
            });

            /*展示回复框事件*/
            function showReply($this,name){
                var $parent = $this.parent().parent().parent().parent();
                var $textarea = $parent.find(".release-reply textarea");
                $(".release-reply").hide();
                $parent.find(".release-reply").show();
                $textarea.val("").attr("placeholder","回复 "+name+"：").focus();
            }

            /*计算评论次数事件*/
            function showCommentNum(){
                window.comment_num = $(".comment-box").length;
                $(".js-comment-num").text(comment_num+"评论");
            }

            <?php }?>


            /*页面加载完成后判断，如果回复数量大于3就append一段代码，再隐藏3之后的回复*/
            $(".reply-box").each(function(){
                var comment = $(this).find(".comment");
                if(comment.length>3){
                    $(this).append('<div class="getMoreReply" data-replyid="">点击展开后面<span>'+(comment.length-3)+'</span>条回复</div>');
                    for(var i=3; i<comment.length;i++){
                        comment.eq(i).hide();
                    }
                }
            });

            /*展开收起回复*/
            $("#js-fb-list").on("click",".getMoreReply",function(){
                var comment = $(this).parent().find(".comment");
                for(var i=3; i<comment.length;i++){
                    comment.eq(i).toggle();
                }
                $(this).toggleClass("js-show");
                if($(this).hasClass("js-show")){
                    $(this).html("收回回复");
                }else{
                    $(this).html("点击展开后面<span>"+(comment.length-3)+"</span>条回复");
                }
            });

        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
