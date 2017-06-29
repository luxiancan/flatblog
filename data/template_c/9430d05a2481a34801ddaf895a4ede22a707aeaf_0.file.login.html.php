<?php
/* Smarty version 3.1.31, created on 2017-05-01 15:38:05
  from "C:\xampp\htdocs\flatBlog\tpl\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5906e5dde4bc84_42531513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9430d05a2481a34801ddaf895a4ede22a707aeaf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\flatBlog\\tpl\\admin\\login.html',
      1 => 1493624245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/link_css.html' => 1,
    'file:admin/script_js.html' => 1,
  ),
),false)) {
function content_5906e5dde4bc84_42531513 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>博客系统后台登录</title>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>
    <div class="login-wrap">
        <div class="back_mask">
            <div class="login-box">
                <div class="login-header">
                    <h1 class="title">欢迎登录博客系统</h1>
                </div>
                <div class="login-body">
                    <form id name method="post" action="admin.php?controller=admin&method=login">
                        <div class="input-group">
                            <input type="text" name="username" class="input-item" placeholder="账户名">
                            <p class="error-tip" error-hint="请输入正确的用户名"></p>
                        </div>
                        <div class="input-group">
                            <input type="password" name="password" class="input-item" placeholder="密码">
                            <p class="error-tip" error-hint="请输入正确的密码"></p>
                        </div>
                        <div class="input-group">
                            <a href="#" class="forget-pass">忘记密码</a>
                        </div>
                        <div class="input-group">
                            <input type="submit" id="signin-btn" class="btn-login" value="登 录">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/script_js.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
