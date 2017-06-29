<?php
/* Smarty version 3.1.31, created on 2017-05-15 19:49:51
  from "F:\XAMPP\htdocs\flatBlog\tpl\admin\adminsrevise.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_591995df337277_42218406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f274b0b54de433f2b09243dbd4f831d75a2a56' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\admin\\adminsrevise.html',
      1 => 1494065442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/link_css.html' => 1,
    'file:admin/top-navbar.html' => 1,
    'file:admin/left-nav.html' => 1,
    'file:admin/script_js.html' => 1,
  ),
),false)) {
function content_591995df337277_42218406 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>博客后台管理系统</title>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>
    <div class="wrapper">
        <?php $_smarty_tpl->_subTemplateRender('file:admin/top-navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="main">
            <?php $_smarty_tpl->_subTemplateRender('file:admin/left-nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <section class="content-wrap">
                <section class="content">
                    <div class="admins" id="admins">
                        <div class="sub-nav">
                            <ol class="breadcrumb">
                                <li><a href="admin.php?controller=admin&method=index">首页</a></li>
                                <li><a href="admin.php?controller=admin&method=adminslist">管理员管理</a></li>
                                <li class="active">管理员修改</li>
                            </ol>
                        </div>
                        <div class="revise">
                            <p class="desc">管理员可以添加添加更多的管理员，或者修改自己的个人信息</p>
                            <form action="admin.php?controller=admin&method=adminsrevise" method="post" class="revise-form" autocomplete="off" onsubmit="<?php if (count($_smarty_tpl->tpl_vars['data']->value) != 0) {?> return reviseSubmit() <?php } else { ?> return addSubmit() <?php }?>">
                                <div class="ipt-group">
                                    <span class="title">用户名：</span>
                                    <div class="ipt-item">
                                        <input class="ipt" type="text" name="username" id="username" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['username'])===null||$tmp==='' ? '' : $tmp);?>
">
                                        <p class="error-tip" error-hint="请输入正确的用户名"></p>
                                    </div>
                                </div>
                                <div class="ipt-group">
                                    <span class="title">密码：</span>
                                    <div class="ipt-item">
                                        <input class="ipt" type="password" name="password" id="password" value="">
                                        <p class="error-tip" error-hint="请输入正确的密码"></p>
                                    </div>
                                </div>
                                <!-- 修改操作 -->
                                <?php if (count($_smarty_tpl->tpl_vars['data']->value) != 0) {?>
                                <div class="ipt-group">
                                    <span class="title">新密码：</span>
                                    <div class="ipt-item">
                                        <input class="ipt" type="password" name="newpwd" id="newpwd" value="">
                                        <p class="error-tip" error-hint="请输入正确的密码"></p>
                                    </div>
                                </div>
                                <div class="ipt-group">
                                    <span class="title">再次输入新密码：</span>
                                    <div class="ipt-item">
                                        <input class="ipt" type="password" name="newpwdRepeat" id="newpwdRepeat" value="">
                                        <p class="error-tip" error-hint="请输入正确的密码"></p>
                                    </div>
                                </div>
                                <!-- 添加操作 -->
                                <?php } else { ?>
                                <div class="ipt-group">
                                    <span class="title">再次确认密码：</span>
                                    <div class="ipt-item">
                                        <input class="ipt" type="password" name="pwdRepeat" id="pwdRepeat" value="">
                                        <p class="error-tip" error-hint="请输入正确的密码"></p>
                                    </div>
                                </div>
                                <?php }?>
                                <div class="ipt-group">
                                    <span class="title">邮箱：</span>
                                    <div class="ipt-item">
                                        <input class="ipt" type="email" name="email" id="email" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['email'])===null||$tmp==='' ? '' : $tmp);?>
">
                                        <p class="error-tip" error-hint="请输入正确的邮箱"></p>
                                    </div>
                                </div>
                                <div class="ipt-btm">
                                    <input type="hidden" name="id" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
                                    <input type="submit" class="btn btn-comment" id="submit" value="提交">
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:admin/script_js.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        $("#username").blur(function(){
            regName($(this));
        });
        $("#password").blur(function(){
            regPassword($(this));
        });
        $("#pwdRepeat").blur(function(){
            regPwdRepeat($(this),$("#password"));
        });
        $("#newpwd").blur(function(){
            regPassword($(this));
        });
        $("#newpwdRepeat").blur(function(){
            regPwdRepeat($(this),$("#newpwd"));
        });
        $("#email").blur(function(){
            regEmail($(this));
        });

        function addSubmit(){
            if(regName($("#username"))){
                if(regPassword($("#password"))){
                    if(regPwdRepeat($("#pwdRepeat"),$("#password"))){
                        if(regEmail($("#email"))){
                            return true;
                        }else{
                            return false;
                        }
                    }else{ return false; }
                }else{ return false; }
            }else{ return false; }
        }

        function reviseSubmit(){
            if(regName($("#username"))){
                if(regPassword($("#password"))){
                    if(regPassword($("#newpwd"))){
                        if(regPwdRepeat($("#newpwdRepeat"),$("#newpwd"))){
                            if(regEmail($("#email"))){
                                return true;
                                // return pwdSubmit();
                            }else{
                                return false;
                            }
                        }else{ return false; }
                    }else{ return false; }
                }else{ return false; }
            }else{ return false; }
        }

        function pwdSubmit(){
            var url = "admin.php?controller=admin&method=adminsrevise";
            var data = new Object();
            data.password = $("#password").val();
            $.post(url ,data, function(res){
                alert(res);
            });
            return false;
        }

    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
