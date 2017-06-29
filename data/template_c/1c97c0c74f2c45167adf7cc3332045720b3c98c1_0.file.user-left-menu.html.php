<?php
/* Smarty version 3.1.31, created on 2017-06-20 20:42:45
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\user-left-menu.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59491845b2b4f3_69252647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c97c0c74f2c45167adf7cc3332045720b3c98c1' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\user-left-menu.html',
      1 => 1497962564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59491845b2b4f3_69252647 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="slider">
    <div class="user-pic">
        <div class="user-pic-wrap">
            <img class="img" src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['user_info']->value['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
">
        </div>
        <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
        <?php if ($_smarty_tpl->tpl_vars['indexauth']->value['id'] != $_smarty_tpl->tpl_vars['user_info']->value['id']) {?>
        <div class="follow-wrap already-follow hide js-already-follow" data-uid="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['relation_type'];?>
">
            <i class="iconfont icon-guanzhu1"></i>
            <div class="u-info-tips u-info-followed-tips">
                <span class="title">已成功关注Ta</span>
                <p class="content">关注后可及时了解Ta的动态信息</p>
                <a href="javascript:;" class="cancel-follow js-cancel-follow">取消关注</a>
                <div class="drop_up_wrap">
                    <i class="icon-drop_up icon-drop-followed_up"></i>
                </div>
            </div>
        </div>
        <div class="follow-wrap add-follow js-add-follow" data-uid="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['relation_type'];?>
">
            <i class="iconfont icon-guanzhu1"></i>
            <div class="u-info-tips u-info-follow-tips">
                <span class="title">关注Ta</span>
                <p class="content">关注后可及时了解Ta的动态信息</p>
                <div class="drop_up_wrap">
                    <i class="icon-drop_up icon-drop-follow_up"></i>
                </div>
            </div>
        </div>
        <?php }?>
        <?php } else { ?>
        <div class="follow-wrap add-follow js-lgn" data-uid="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['user_info']->value['relation_type'];?>
">
            <i class="iconfont icon-guanzhu1"></i>
            <div class="u-info-tips u-info-follow-tips">
                <span class="title">关注Ta</span>
                <p class="content">关注后可及时了解Ta的动态信息</p>
                <div class="drop_up_wrap">
                    <i class="icon-drop_up icon-drop-follow_up"></i>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
    <ul>
        <li>
            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
">
                <i class="iconfont icon-shouye"></i>
                <span>主页</span>
                <i class="iconfont icon-right"></i>
            </a>
        </li>
        <li>
            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=articles">
                <i class="iconfont icon-wenzhang"></i>
                <span>博文</span>
                <i class="iconfont icon-right"></i>
            </a>
        </li>
        <li>
            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=bbs">
                <i class="iconfont icon-wenti"></i>
                <span>问答</span>
                <i class="iconfont icon-right"></i>
            </a>
        </li>
        <li>
            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=follows">
                <i class="iconfont icon-guanzhu"></i>
                <span>关注</span>
                <i class="iconfont icon-right"></i>
            </a>
        </li>
    </ul>
</div><?php }
}
