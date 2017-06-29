<?php
/* Smarty version 3.1.31, created on 2017-06-21 13:51:40
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\signin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_594a096c6f69a0_24636424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '786e6a1a30746d114fa196a72659b6388bdadbfc' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\signin.html',
      1 => 1498024293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594a096c6f69a0_24636424 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="signin" role="dialog" aria-labelledby="issueModalLabel" aria-hidden="true">
        <div class="modal-dialog rl-moal" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#loginWrap" class="sign-btn" aria-controls="loginWrap" role="tab" data-toggle="tab">登录</a></li>
                        <li role="presentation"><a href="#registerWrap" class="sign-btn" aria-controls="registerWrap" role="tab" data-toggle="tab">注册</a></li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="loginWrap">
                            <form id="login-form">
                                <div class="form-item" id="userNameInput">
                                    <input type="text" name="username" id="login-userName" class="field username" placeholder="请输入登录邮箱/用户名">
                                    <p class="error-tip" error-hint="请输入正确的用户名"></p>
                                </div>
                                <div class="form-item" id="passwordInput">
                                    <input type="password" name="password" id="login-password" class="field password" placeholder="4-20位密码，区分大小写，不能用空格">
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
                        <div role="tabpanel" class="tab-pane" id="registerWrap">
                            <form id="register-form" method="post">
                                <div class="form-item" id="userNameInput">
                                    <input type="text" name="reg-userName" id="reg-userName" class="field username" placeholder="请输入用户名">
                                    <p class="error-tip" error-hint="请输入正确的账户名"></p>
                                </div>
                                <div class="form-item" id="passwordInput">
                                    <input type="text" name="reg-password" id="reg-password" class="field password" placeholder="4-20位密码，区分大小写，不能用空格">
                                    <p class="error-tip" error-hint="请输入正确的密码"></p>
                                </div>
                                <div class="form-item" id="pwdRepeatInput">
                                    <input type="password" name="reg-pwdRepeat" id="reg-pwdRepeat" class="field pwdRepeat" placeholder="请再次确认密码">
                                    <p class="error-tip" error-hint="请输入正确的密码"></p>
                                </div>
                                <div class="form-item" id="emailInput">
                                    <input type="email" name="reg-email" id="reg-email" class="field email" placeholder="请输入邮箱">
                                    <p class="error-tip" error-hint="请输入邮箱"></p>
                                </div>
                                <div class="form-item">
                                    <a id="signup-btn" class="mainbtn btn-login">注 册</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
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
    </div><?php }
}
