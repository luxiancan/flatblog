<?php
/* Smarty version 3.1.31, created on 2017-06-14 17:50:35
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\user-bbs-reply.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_594106eb8ce886_27765360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5b876ebbe0c2b056d7750e4a26cd55d45c0e336' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\user-bbs-reply.html',
      1 => 1497431390,
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
function content_594106eb8ce886_27765360 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <li>
                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=bbs"><?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>我<?php } else { ?>Ta<?php }?>的提问</a>
                            </li>
                            <li class="active">
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
                                <?php if (count($_smarty_tpl->tpl_vars['answer_data']->value) != 0) {?>
                                <div class="ques-list">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['answer_data']->value, 'value', false, NULL, 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <div class="ques-answer-item">
                                        <span class="share js-share" data-shareid="">
                                            分享<i class="iconfont icon-fenxiang" data-shareid=""></i>
                                            <div class="shareWrapBox">
                                                <div class="share-box-con" data-ques-id="" data-bd-bind="">
                                                    <a href="#" class="link" data-cmd="weixin" title="分享到微信"><i class="iconfont icon-weixin"></i></a>
                                                    <a href="#" class="link" data-cmd="weibo" title="分享到微博"><i class="iconfont icon-weibo"></i></a>
                                                    <a href="#" class="link" data-cmd="qzone" title="分享到QQ空间"><i class="iconfont icon-qq"></i></a>
                                                </div>
                                            </div>
                                        </span>
                                        <div class="from-tag">来自
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['tag'], 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                                            <a href="index.php?controller=index&method=wenda&tag=<?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
</a>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </div>
                                        <div class="ques-con">
                                            <a href="index.php?controller=index&method=wenda&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="ques-con-content" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
                                        </div>
                                        <div class="answer-con" data-answer-id="2">
                                            <div class="user">我的回答</div>
                                            <div class="answer-content">
                                                <a href="index.php?controller=index&method=wenda&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['answer']['content'];?>
</a>
                                            </div>
                                        </div>
                                        <div class="about-info">
                                            <span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['answer']['answer_at'],'%Y-%m-%d %H:%M:%S');?>
</span>
                                            <a href="index.php?controller=index&method=wenda&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="reply-num" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['answer_num'];?>
个回答</a>
                                        </div>
                                    </div>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['pagesize']->value) {?>
                                <div class="page-wrap"><?php echo $_smarty_tpl->tpl_vars['page_banner']->value;?>
</div>
                                <?php }?>
                                <?php } else { ?>
                                <p class="notattend">
                                <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>你还没有任何回答，可以先<a href="index.php?controller=index&method=wenda" target="_blank" class="fontred">去看看技术问答</a>
                                <?php } else { ?>
                                Ta还没有任何回答
                                <?php }?>
                                </p>
                                <?php }?>
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
</body>
</html><?php }
}
