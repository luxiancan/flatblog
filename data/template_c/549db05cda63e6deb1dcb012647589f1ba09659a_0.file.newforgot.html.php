<?php
/* Smarty version 3.1.31, created on 2017-06-19 15:00:45
  from "F:\XAMPP\htdocs\flatBlog\tpl\user\newforgot.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5947769d1b2c02_43797917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '549db05cda63e6deb1dcb012647589f1ba09659a' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\user\\newforgot.html',
      1 => 1497855643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/link_css.html' => 1,
    'file:index/script_js.html' => 1,
  ),
),false)) {
function content_5947769d1b2c02_43797917 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>扁平化博客-忘记密码</title>
    <?php $_smarty_tpl->_subTemplateRender('file:index/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="static/css/login.css">
    <style id="antiClickjack">body{ display: none !important; }</style>
</head>
<body>
    <div class="sig-head">
        <a href="index.php" class="logo">
            <img src="static/img/logo1.png">
        </a>
    </div>
    <div class="main">
        <div class="page-wrap">
            <div class="page-content" id="js-forgot-content">
                <div class="page-header">
                    <div class="page-title">
                        <h2>忘记密码</h2>
                    </div>
                    <div class="link-info cf">
                        <h3>通过注册邮箱重设密码</h3>
                        <a href="index.php?controller=user&method=newlogin" class="right-back">返回立即登录</a>
                    </div>
                </div>
                <div class="page-body">
                    <form id="forgot-form">
                        <p class="tips" id="js-forgot-error"></p>
                        <div class="form-item">
                            <input type="text" name="username" id="forgot-userName" class="field username" placeholder="请输入登录名" autocomplete="off">
                            <p class="error-tip" error-hint="请输入正确的用户名"></p>
                        </div>
                        <div class="form-item">
                            <input type="text" name="email" id="forgot-email" class="field email" placeholder="请输入登录邮箱" autocomplete="off">
                            <p class="error-tip" error-hint="请输入正确的邮箱"></p>
                        </div>
                        <div class="form-item">
                            <a id="js-forgot-submit" class="mainbtn btn-login">提 交</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="page-content hide" id="js-forgot-result">
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
                    <form id="forgot-result-form">
                        <p class="tips" id="js-forgot-result-error"></p>
                        <div class="form-item">
                            <input type="text" name="password" id="js-newpassword" class="field password" placeholder="请输入新密码">
                            <p class="error-tip" error-hint="请输入正确的密码"></p>
                        </div>
                        <div class="form-item">
                            <input type="password" name="password" id="js-repeat-newpwd" class="field password" placeholder="请再次输入新密码">
                            <p class="error-tip" error-hint="请输入正确的密码"></p>
                        </div>
                        <div class="form-item hide">
                            <input type="text" id="js-forgot-username-ipt" class="field" placeholder="请输入登录名">
                            <p class="error-tip" error-hint="请输入正确的用户名"></p>
                        </div>
                        <div class="form-item hide">
                            <input type="text" id="js-forgot-email-ipt" class="field" placeholder="请输入登录邮箱">
                            <p class="error-tip" error-hint="请输入正确的邮箱"></p>
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
    <?php echo '<script'; ?>
 type="text/javascript">
        if(self === top){
            var antiClickjack = $("#antiClickjack");
            antiClickjack.remove();
        }else{
            top.location = self.location;
        }
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
