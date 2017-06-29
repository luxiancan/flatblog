<?php
/* Smarty version 3.1.31, created on 2017-06-20 20:45:18
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\user-follows-fans.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_594918de840523_90834806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3827b95b0422d5d2ac79c3810a81a3b588c35089' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\user-follows-fans.html',
      1 => 1497962716,
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
function content_594918de840523_90834806 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
的粉丝 - 七院创新基地</title>
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
&menu=follows"><?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>我<?php } else { ?>Ta<?php }?>的关注</a>
                            </li>
                            <li class="active">
                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=follows&sort=fans"><?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>我<?php } else { ?>Ta<?php }?>的粉丝</a>
                            </li>
                        </ul>
                        <div class="main-content">
                            <div class="con-wrap">
                                <?php if ($_smarty_tpl->tpl_vars['user_info']->value['fans_num'] != 0) {?>
                                <div class="concern-list js-fans-list">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fans_data']->value, 'value', false, NULL, 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                        <li class="box">
                                            <div class="left-img">
                                                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" target="_blank">
                                                    <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['value']->value['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" class="top_head">
                                                </a>
                                            </div>
                                            <div class="right-c">
                                                <div class="title">
                                                    <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="nickname" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</a>
                                                </div>
                                                <p class="desc" title=""><?php echo $_smarty_tpl->tpl_vars['value']->value['job'];?>
</p>
                                                <div class="fs-line">
                                                    <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&menu=follows" class="u-target">
                                                        <span class="group">
                                                            <em>关注</em>
                                                            <em class="u-margin-l-4"><?php echo $_smarty_tpl->tpl_vars['value']->value['follower_num'];?>
</em>
                                                        </span>
                                                    </a>
                                                    <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&menu=follows&sort=fans" class="u-target">
                                                        <span class="group">
                                                            <em>粉丝</em>
                                                            <em class="u-margin-l-4"><?php echo $_smarty_tpl->tpl_vars['value']->value['fans_num'];?>
</em>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="btn-line js-btn-line" data-is-fans="<?php echo $_smarty_tpl->tpl_vars['value']->value['is_fans'];?>
"  data-is-concern="<?php echo $_smarty_tpl->tpl_vars['value']->value['is_concern'];?>
">
                                                    <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['indexauth']->value['id'] != $_smarty_tpl->tpl_vars['value']->value['id']) {?>
                                                    <a href="javascript:" data-uid="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn-o btn-gray hide js-concern-mutual">互相关注</a>
                                                    <a href="javascript:" data-uid="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn-o btn-gray hide js-concern-already">已关注</a>
                                                    <a href="javascript:" data-uid="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" class="btn-o btn-green hide js-concern-follow">关注</a>
                                                    <!-- <a href="javascript:" target="_blank" class="btn-o btn-gray hide js-concern-msg">私信</a> -->
                                                    <?php }?>
                                                    <?php } else { ?>
                                                    <a href="javascript:" class="btn-o btn-green js-lgn">关注</a>
                                                    <?php }?>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['follower_pagesize']->value) {?>
                                <div class="page-wrap"><?php echo $_smarty_tpl->tpl_vars['page_banner']->value;?>
</div>
                                <?php }?>
                                <?php } else { ?>
                                <p class="notattend">
                                <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['id'] == $_smarty_tpl->tpl_vars['user_info']->value['id']) {?>你还没有任何粉丝，快去<a href="index.php?controller=index&method=articlewrite" target="_blank" class="fontblue">发表博文</a>获取更多关注吧~
                                <?php } else { ?>
                                Ta还没有任何粉丝
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
