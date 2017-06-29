<?php
/* Smarty version 3.1.31, created on 2017-06-19 10:07:47
  from "F:\XAMPP\htdocs\flatBlog\tpl\user\newlogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_594731f3d6a431_04277532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4db362f8318b91c874ba900ac13424d5a7a8f4c' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\user\\newlogin.html',
      1 => 1497838031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/link_css.html' => 1,
    'file:index/script_js.html' => 1,
  ),
),false)) {
function content_594731f3d6a431_04277532 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>扁平化博客-登录</title>
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
                    <div class="page-top cf">
                        <h2 class="l">登录</h2>
                        <div class="right-wrap r">
                            <span>没有账号？</span>
                            <a href="index.php?controller=user&method=newsignup" class="no-register">立即注册</a>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <form id="login-form">
                        <p class="tips" id="js-sig-error"></p>
                        <div class="form-item" id="userNameInput">
                            <input type="text" name="username" id="login-userName" class="field username" placeholder="请输入登录邮箱/用户名" autocomplete="off">
                            <p class="error-tip" error-hint="请输入正确的用户名"></p>
                        </div>
                        <div class="form-item" id="passwordInput">
                            <input type="password" name="password" id="login-password" class="field password" placeholder="4-20位密码，区分大小写，不能用空格" autocomplete="off">
                            <p class="error-tip" error-hint="请输入正确的密码"></p>
                        </div>
                        <div class="form-item autosignin">
                            <label for="auto-signin" class="autoin">
                                <input type="checkbox" checked="checked" class="auto-cbx" id="auto-signin">下次自动登录
                            </label>
                            <a href="index.php?controller=user&method=newforgot" class="forget-pass r">忘记密码</a>
                        </div>
                        <div class="form-item">
                            <a id="signin-btn" class="mainbtn btn-login">登 录</a>
                        </div>
                    </form>
                </div>
                <div class="page-footer">
                    <div class="pop-login-sns">
                        <span>其他方式登录</span>
                        <div class="other-login">
                            <a href="#" class="pop-sns-qq"><i class="iconfont icon-qq"></i></a>
                            <a href="#" class="pop-sns-weixin"><i class="iconfont icon-weixin"></i></a>
                            <a href="#" class="pop-sns-weibo"><i class="iconfont icon-weibo"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vright">&copy;&nbsp;2017&nbsp;flatblog.com All Rights Reserved</div>
    <?php $_smarty_tpl->_subTemplateRender('file:index/script_js.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
