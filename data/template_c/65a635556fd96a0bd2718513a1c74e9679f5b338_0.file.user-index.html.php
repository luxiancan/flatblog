<?php
/* Smarty version 3.1.31, created on 2017-06-20 20:43:47
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\user-index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_594918834a3f10_09911028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65a635556fd96a0bd2718513a1c74e9679f5b338' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\user-index.html',
      1 => 1497962624,
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
function content_594918834a3f10_09911028 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\XAMPP\\htdocs\\flatBlog\\framework\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
的主页 - 七院创新基地</title>
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
                    <div class="page-home">
                        <div class="title-wrap">
                            <p class="title"><?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>最新动态<?php } else { ?>Ta的动态<?php }?></p>
                        </div>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_dynamic']->value, 'value', false, NULL, 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['value']->value['type'] == 1 || $_smarty_tpl->tpl_vars['value']->value['type'] == 2 || $_smarty_tpl->tpl_vars['value']->value['type'] == 3 || $_smarty_tpl->tpl_vars['value']->value['type'] == 4) {?>
                        <div class="item newarticle cf">
                            <span class="share js-share" data-shareid="">
                                分享<i class="iconfont icon-fenxiang" data-shareid=""></i>
                                <div class="shareWrapBox">
                                    <div class="share-box-con" data-article-id="" data-bd-bind="">
                                        <a href="javascript:;" class="link" data-cmd="weixin" title="分享到微信"><i class="iconfont icon-weixin"></i></a>
                                        <a href="javascript:;" class="link" data-cmd="weibo" title="分享到微博"><i class="iconfont icon-weibo"></i></a>
                                        <a href="javascript:;" class="link" data-cmd="qzone" title="分享到QQ空间"><i class="iconfont icon-qq"></i></a>
                                    </div>
                                </div>
                            </span>
                            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['user']['id'];?>
" target="_blank">
                                <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['user']['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" class="userhead">
                            </a>
                            <div class="content cf">
                                <div class="head">
                                    <div class="name">
                                        <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['user']['id'];?>
" data-userid="" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['user']['username'];?>
</a>
                                    </div>
                                    <div class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</div>
                                    <div class="title"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</div>
                                </div>
                                <a href="index.php?controller=index&method=article&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['content']['id'];?>
" target="_balnk">
                                    <div class="body">
                                        <div class="subtitle"><?php echo $_smarty_tpl->tpl_vars['value']->value['content']['title'];?>
</div>
                                        <div class="detail"><?php echo $_smarty_tpl->tpl_vars['value']->value['content']['summary'];?>
</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['value']->value['type'] == 5 || $_smarty_tpl->tpl_vars['value']->value['type'] == 6 || $_smarty_tpl->tpl_vars['value']->value['type'] == 7) {?>
                        <div class="item newanswer cf">
                            <span class="share js-share" data-shareid="">
                                分享<i class="iconfont icon-fenxiang" data-shareid=""></i>
                                <div class="shareWrapBox">
                                    <div class="share-box-con" data-ques-id="" data-bd-bind="">
                                        <a href="javascript:;" class="link" data-cmd="weixin" title="分享到微信"><i class="iconfont icon-weixin"></i></a>
                                        <a href="javascript:;" class="link" data-cmd="weibo" title="分享到微博"><i class="iconfont icon-weibo"></i></a>
                                        <a href="javascript:;" class="link" data-cmd="qzone" title="分享到QQ空间"><i class="iconfont icon-qq"></i></a>
                                    </div>
                                </div>
                            </span>
                            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['user']['id'];?>
" target="_blank">
                                <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['user']['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" class="userhead">
                            </a>
                            <div class="content cf">
                                <div class="head">
                                    <div class="name">
                                        <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['user']['id'];?>
" data-userid="<?php echo $_smarty_tpl->tpl_vars['value']->value['user']['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['user']['username'];?>
</a>
                                    </div>
                                    <div class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</div>
                                    <div class="title"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</div>
                                </div>
                                <div class="body">
                                    <div class="tag">
                                        <span>来自</span>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['content']['tag'], 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                                        <a href="index.php?controller=index&method=wenda&tag=<?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
" target="_blank">
                                            <span class="tab-item"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
</span>
                                        </a>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </div>
                                    <div class="subtitle">
                                        <a href="index.php?controller=index&method=wenda&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['content']['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['content']['title'];?>
</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['value']->value['type'] == 8) {?>
                        <div class="item newuser cf">
                            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['user']['id'];?>
" target="_blank">
                                <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['user']['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" class="userhead">
                            </a>
                            <div class="content cf">
                                <div class="head">
                                    <div class="name">
                                        <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['user']['id'];?>
" data-userid="" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['user']['username'];?>
</a>
                                    </div>
                                    <div class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</div>
                                    <div class="title"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</div>
                                </div>
                                <div class="body cf">
                                    <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['content']['id'];?>
" class="u-avator l" target="_blank">
                                        <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['content']['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" class="userhead mr10">
                                    </a>
                                    <div class="content">
                                        <div class="subtitle">
                                            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['content']['id'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['value']->value['content']['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['content']['username'];?>
</a>
                                        </div>
                                        <div class="tag">
                                            <span class="mr10 icon">
                                                <?php if ($_smarty_tpl->tpl_vars['value']->value['content']['sex'] == 0) {?>
                                                <i class="iconfont icon-baomi"></i>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['value']->value['content']['sex'] == 1) {?>
                                                <i class="iconfont icon-nan"></i>
                                                <?php }?>
                                                <?php if ($_smarty_tpl->tpl_vars['value']->value['content']['sex'] == 2) {?>
                                                <i class="iconfont icon-nv"></i>
                                                <?php }?>
                                            </span>
                                            <span class="mr10"><?php echo $_smarty_tpl->tpl_vars['value']->value['content']['job'];?>
</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                        <?php
}
} else {
?>

                        <p class="notdata">暂无任何动态</p>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


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
