<?php
/* Smarty version 3.1.31, created on 2017-06-21 13:51:04
  from "F:\XAMPP\htdocs\flatBlog\tpl\user\newsignup.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_594a0948b78037_34562278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7239bb33056a98299d6fa7c1a3f3d0b6e7cc6542' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\user\\newsignup.html',
      1 => 1498024258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/link_css.html' => 1,
    'file:index/script_js.html' => 1,
  ),
),false)) {
function content_594a0948b78037_34562278 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>扁平化博客-注册</title>
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
                        <h2 class="l">欢迎注册</h2>
                        <div class="right-wrap r">
                            <span>已有账号？</span>
                            <a href="index.php?controller=user&method=newlogin" class="no-register">直接登录</a>
                        </div>
                    </div>
                </div>
                <div class="page-body">
                    <form id="register-form">
                        <p class="tips" id="js-sig-error"></p>
                        <div class="form-item" id="userNameInput">
                            <input type="text" name="reg-userName" id="reg-userName" class="field username" placeholder="请输入用户名" autocomplete="off">
                            <p class="error-tip" error-hint="请输入正确的账户名"></p>
                        </div>
                        <div class="form-item" id="passwordInput">
                            <input type="text" name="reg-password" id="reg-password" class="field password" placeholder="4-20位密码，区分大小写，不能用空格" autocomplete="off">
                            <p class="error-tip" error-hint="请输入正确的密码"></p>
                        </div>
                        <div class="form-item" id="pwdRepeatInput">
                            <input type="password" name="reg-pwdRepeat" id="reg-pwdRepeat" class="field pwdRepeat" placeholder="请再次确认密码" autocomplete="off">
                            <p class="error-tip" error-hint="请输入正确的密码"></p>
                        </div>
                        <div class="form-item" id="emailInput">
                            <input type="email" name="reg-email" id="reg-email" class="field email" placeholder="请输入邮箱" autocomplete="off">
                            <p class="error-tip" error-hint="请输入邮箱"></p>
                        </div>
                        <div class="form-item">
                            <a id="signup-btn" class="mainbtn btn-login">注 册</a>
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
