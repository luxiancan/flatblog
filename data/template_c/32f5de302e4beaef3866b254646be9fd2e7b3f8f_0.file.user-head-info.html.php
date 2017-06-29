<?php
/* Smarty version 3.1.31, created on 2017-06-14 16:56:25
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\user-head-info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5940fa39da7392_66154732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32f5de302e4beaef3866b254646be9fd2e7b3f8f' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\user-head-info.html',
      1 => 1497430584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5940fa39da7392_66154732 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="user-head-info">
    <div class="user-info">
        <h3 class="user-name"><?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
</h3>
        <p class="user-desc">
            <?php if ($_smarty_tpl->tpl_vars['user_info']->value['signature'] == '') {?>
            这位同学很懒，木有签名的说~
            <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['user_info']->value['signature'];?>

            <?php }?>
        </p>
        <div class="study-info">
            <div class="item follows">
                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=follows">
                    <em><?php echo $_smarty_tpl->tpl_vars['user_info']->value['follower_num'];?>
</em>
                </a>
                <span>关注</span>
            </div>
            <div class="item fans">
                <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=follows&sort=fans">
                    <em><?php echo $_smarty_tpl->tpl_vars['user_info']->value['fans_num'];?>
</em>
                </a>
                <span>粉丝</span>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '' && $_smarty_tpl->tpl_vars['indexauth']->value['username'] == $_smarty_tpl->tpl_vars['user_info']->value['username']) {?>
        <div class="set-btn">
            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['user_info']->value['id'];?>
&menu=setting">设置<i class="iconfont icon-shezhi"></i></a>
        </div>
        <?php }?>
    </div>
</div><?php }
}
