<?php
/* Smarty version 3.1.31, created on 2017-06-14 17:50:31
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\user-article-comment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_594106e70d3654_20876176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd153e37c01f254bf8dfa459074b851353e4435b7' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\user-article-comment.html',
      1 => 1497431372,
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
function content_594106e70d3654_20876176 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
的博文 - 七院创新基地</title>
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
&menu=articles"><?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>我<?php } else { ?>Ta<?php }?>的博文</a>
                            </li>
                            <li>
                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=articles&type=collect"><?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>我<?php } else { ?>Ta<?php }?>的收藏</a>
                            </li>
                            <li>
                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=articles&type=praise"><?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>我<?php } else { ?>Ta<?php }?>的推荐</a>
                            </li>
                            <li class="active">
                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=articles&type=comment"><?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>我<?php } else { ?>Ta<?php }?>的评论</a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
                            <a href="index.php?controller=index&method=articlewrite" class="mainbtn wanna-build"><i class="iconfont icon-jia"></i>写博文</a>
                            <?php } else { ?>
                            <a href="javascript:;" class="mainbtn wanna-build js-lgn"><i class="iconfont icon-jia"></i>写博文</a>
                            <?php }?>
                        </ul>
                        <div class="main-content">
                            <div class="con-wrap">
                                <?php if (count($_smarty_tpl->tpl_vars['comment_data']->value) != 0) {?>
                                <div class="article-list">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment_data']->value, 'value', false, NULL, 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <div class="list-item">
                                        <h3 class="item-title">
                                            <a href="index.php?controller=index&method=article&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" target="_blank" class="title-detail"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
                                        </h3>
                                        <span class="share js-share" data-shareid="">
                                            分享<i class="iconfont icon-fenxiang" data-shareid=""></i>
                                            <div class="shareWrapBox" data-article-id="" data-bd-bind="">
                                                <div class="share-box-con">
                                                    <a href="#" class="link" data-cmd="weixin" title="分享到微信"><i class="iconfont icon-weixin"></i></a>
                                                    <a href="#" class="link" data-cmd="weibo" title="分享到微博"><i class="iconfont icon-weibo"></i></a>
                                                    <a href="#" class="link" data-cmd="qzone" title="分享到QQ空间"><i class="iconfont icon-qq"></i></a>
                                                </div>
                                            </div>
                                        </span>
                                        <p class="item-content"><?php echo $_smarty_tpl->tpl_vars['value']->value['summary'];?>
</p>
                                        <div class="item-btm cf">
                                            <div class="left-info l">
                                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
" class="publisher-name" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</a>
                                            </div>
                                            <div class="right-info r">
                                                <div class="favorite">
                                                    <em class="read"><?php echo $_smarty_tpl->tpl_vars['value']->value['read_num'];?>
浏览</em>
                                                </div>
                                                <div class="favorite">
                                                    <em class="praise"><?php echo $_smarty_tpl->tpl_vars['value']->value['praise_num'];?>
推荐</em>
                                                </div>
                                                <div class="favorite">
                                                    <em class="comment"><?php echo $_smarty_tpl->tpl_vars['value']->value['comment_num'];?>
评论</em>
                                                </div>
                                            </div>
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
                                <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>你还没有任何收藏，可以先<a href="index.php?controller=index&method=article" target="_blank" class="fontred">去看看博文</a>
                                <?php } else { ?>
                                Ta还没有任何收藏
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
</html>
<?php }
}
