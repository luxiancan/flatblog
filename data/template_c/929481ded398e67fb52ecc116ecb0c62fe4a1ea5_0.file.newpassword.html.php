<?php
/* Smarty version 3.1.31, created on 2017-06-19 11:14:19
  from "F:\XAMPP\htdocs\flatBlog\tpl\user\newpassword.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5947418b71ed97_20964317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '929481ded398e67fb52ecc116ecb0c62fe4a1ea5' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\user\\newpassword.html',
      1 => 1497841513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/link_css.html' => 1,
    'file:index/script_js.html' => 1,
  ),
),false)) {
function content_5947418b71ed97_20964317 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>扁平化博客-重设密码</title>
    <?php $_smarty_tpl->_subTemplateRender('file:index/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" type="text/css" href="static/css/login.css">
</head>
<body>
    <div class="sig-head">
        <a href="index.php" class="logo">
            <img src="static/img/logo1.png">
        </a>
    </div>
    <div class="main">
        <div class="page-wrap">
            <div class="page-content">
                <div class="page-header">
                    <div class="page-title">
                        <h2>设置新密码</h2>
                    </div>
                    <div class="link-info cf">
                        <h3>请在下方输入你的新密码</h3>
                        <a href="index.php?controller=user&method=newforgot" class="right-back">返回修改登录名</a>
                    </div>
                </div>
                <div class="page-body">
                    <form id="forgot-form">
                        <p class="tips" id="js-forgot-error"></p>
                        <div class="form-item">
                            <input type="text" name="password" id="newpassword" class="field password" placeholder="请输入新密码">
                            <p class="error-tip" error-hint="请输入正确的密码"></p>
                        </div>
                        <div class="form-item">
                            <input type="password" name="password" id="repeat-newpassword" class="field password" placeholder="请再次输入新密码">
                            <p class="error-tip" error-hint="请输入正确的密码"></p>
                        </div>
                        <div class="form-item">
                            <a id="js-newpwd-submit" class="mainbtn btn-login">提 交</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="vright">&copy;&nbsp;2017&nbsp;flatblog.com All Rights Reserved</div>
    <?php $_smarty_tpl->_subTemplateRender('file:index/script_js.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="static/js/forgot.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
