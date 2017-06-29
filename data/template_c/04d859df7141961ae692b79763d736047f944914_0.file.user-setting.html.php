<?php
/* Smarty version 3.1.31, created on 2017-06-21 17:38:11
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\user-setting.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_594a3e833db486_53778738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04d859df7141961ae692b79763d736047f944914' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\user-setting.html',
      1 => 1498037878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/link_css.html' => 1,
    'file:index/top-nav.html' => 1,
    'file:index/footer.html' => 1,
    'file:index/sidebar.html' => 1,
    'file:index/script_js.html' => 1,
  ),
),false)) {
function content_594a3e833db486_53778738 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\XAMPP\\htdocs\\flatBlog\\framework\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head runat="server">
    <meta charset="UTF-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['user_info']->value['username'];?>
个人信息设置 - 七院创新基地</title>
    <?php $_smarty_tpl->_subTemplateRender('file:index/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <link rel="stylesheet" href="static/css/user.css">
</head>
<body>
    <div class="main-wrapper user">
        <header><!-- 页头开始 -->
            <?php $_smarty_tpl->_subTemplateRender('file:index/top-nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </header><!-- 页头结束 -->
        <div class="content setting"><!-- 内容开始 -->
            <div class="content_wrapper">
                <div class="settings-con">
                    <div class="setting-left">
                        <div class="avator-wrapper">
                            <a data-toggle="modal" data-target="#modal-replace-avatar" class="avator-mode js-avator-link">
                                <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['indexauth']->value['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
">
                                <div class="update-avator">
                                    <p>更换头像</p>
                                </div>
                                <div class="border"></div>
                            </a>
                            <div class="des-mode">
                                <p><?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="setting-right">
                        <div class="setting-right-wrap">
                            <div class="page-settings">
                                <div class="oplog-tip">登陆时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['indexauth']->value['last_login_time'],'%Y-%m-%d %H:%M:%S');?>
</div>
                                <div class="title">账户管理</div>
                                <div class="settings">
                                    <div class="contentBox">
                                        <div class="itemBox">
                                            <div class="left">
                                                <i class="iconfont icon-youxiang"></i>
                                            </div>
                                            <div class="center">
                                                <p>
                                                    <span class="font1">邮箱</span>
                                                    <span class="font3"><?php echo $_smarty_tpl->tpl_vars['indexauth']->value['email'];?>
 已绑定</span>
                                                </p>
                                                <p class="font2">可用邮箱加密码登录博客网站，可用邮箱找回密码</p>
                                            </div>
                                            <div class="right">
                                                <a class="btn btn-default change js-change" data-toggle="modal" data-target="#modal-yanzheng">更改</a>
                                            </div>
                                        </div>
                                        <div class="itemBox">
                                            <div class="left">
                                                <i class="iconfont icon-shouji"></i>
                                            </div>
                                            <div class="center">
                                                <p>
                                                    <span class="font1">手机</span>
                                                    <span class="font4">187****3672</span>
                                                </p>
                                                <p class="font2">可用手机号加密码登录博客网站，可通过手机号找回密码</p>
                                            </div>
                                            <div class="right">
                                                <a class="btn btn-default change js-change">更改</a>
                                            </div>
                                        </div>
                                        <div class="itemBox">
                                            <div class="left">
                                                <i class="iconfont icon-anquan"></i>
                                            </div>
                                            <div class="center">
                                                <p>
                                                    <span class="font1">密码</span>
                                                    <span class="font3">已设置</span>
                                                </p>
                                                <p class="font2">用于保护账号信息和登录安全</p>
                                            </div>
                                            <div class="right">
                                                <a class="btn btn-default change js-change" data-toggle="modal" data-target="#modal-revise-password">修改</a>
                                            </div>
                                        </div>
                                        <div class="itemBox">
                                            <div class="left">
                                                <i class="iconfont icon-gerenxinxi"></i>
                                            </div>
                                            <div class="center">
                                                <p>
                                                    <span class="font1">个人信息</span>
                                                </p>
                                                <p class="font2">个人信息的完整有利于你发布的博客或者问题被更多的人看到</p>
                                            </div>
                                            <div class="right">
                                                <a class="btn btn-default change js-change" data-toggle="modal" data-target="#modal-edit-info">编辑</a>
                                            </div>
                                        </div>
                                        <div class="itemBox h190">
                                            <div class="left">
                                                <i class="iconfont icon-shejiao"></i>
                                            </div>
                                            <div class="center">
                                                <p>
                                                    <span class="font1">社交账号</span>
                                                </p>
                                                <p class="font2">绑定第三方帐号，可以直接登录，还可以将内容同步到以下平台，与更多好友分享</p>
                                                <div class="accountBox cf">
                                                    <div class="inner-i-box">
                                                        <i class="iconfont icon-weixin"></i>
                                                        <p class="ml87 bind-name">微信</p>
                                                        <p class="ml87 red">未绑定</p>
                                                        <a href="#" class="btn btn-default js-bind ml87">添加绑定</a>
                                                    </div>
                                                    <div class="inner-i-box">
                                                        <i class="iconfont icon-weibo"></i>
                                                        <p class="ml87 bind-name">微博</p>
                                                        <p class="ml87 red">未绑定</p>
                                                        <a href="#" class="btn btn-default js-bind ml87">添加绑定</a>
                                                    </div>
                                                    <div class="inner-i-box">
                                                        <i class="iconfont icon-qq color_blue"></i>
                                                        <p class="ml87 bind-name">QQ</p>
                                                        <p class="ml87 bind-status">已绑定</p>
                                                        <a href="#" class="btn btn-default js-bind ml87">解除绑定</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="right">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- 内容结束 -->
        <?php $_smarty_tpl->_subTemplateRender('file:index/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>

    <!-- 更换头像模态框 -->
    <div class="modal fade setting-modal replace-avatar" id="modal-replace-avatar" role="dialog" aria-labelledby="issueModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="title">更换头像</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="avator-wrap">
                        <div class="avator-mode">
                            <img src="./static/img/head_img/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['indexauth']->value['avatar'])===null||$tmp==='' ? 'default_avatar.jpg' : $tmp);?>
" class="avator-img" id="js-portrait">
                        </div>
                        <div class="avator-btm">
                            <form action="index.php?controller=index&method=uploadavatar&id=<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
" method="post" class="upload-avatar" enctype="multipart/form-data" target="uploadtarget" runat="server">
                                <a class="avator-btn-fake">上传头像</a>
                                <input type="file" class="hide" title="上传头像" id="upload" name="fileavatar" multiple="multiple" accept="image/gif,image/jpeg,image/jpg,image/png">
                                <input type="submit" id="js-avator-submit" class="hide" value="提交">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mr10 js-avator-save">确定</button>
                    <button type="button" class="btn btn-default js-modal-close" data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 更换头像模态框 end-->

    <!-- 修改密码模态框 -->
    <div class="modal fade setting-modal revise-password" id="modal-revise-password" role="dialog" aria-labelledby="issueModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="js-pwd-content">
                <div class="modal-header">
                    <span class="title">修改密码</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="password-wrap">
                        <div class="input-group">
                            <label for="js-old-pwd" class="label-item">输入原始密码：</label>
                            <div class="control-input">
                                <input type="password" class="form-control input-item" id="js-old-pwd" placeholder="输入密码">
                                <div class="rlf-tip-wrap errorHint"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="js-new-pwd" class="label-item">输入新密码：</label>
                            <div class="control-input">
                                <input type="password" class="form-control input-item" id="js-new-pwd" placeholder="输入密码">
                                <div class="rlf-tip-wrap errorHint"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="js-new-pwd-repeat" class="label-item">确认新密码：</label>
                            <div class="control-input">
                                <input type="password" class="form-control input-item" id="js-new-pwd-repeat" placeholder="再次输入密码">
                                <div class="rlf-tip-wrap errorHint"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mr10" id="js-password-save">确定</button>
                    <button type="button" class="btn btn-default js-modal-close" data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 修改密码模态框 -->

    <!-- 编辑个人信息模态框 -->
    <div class="modal fade setting-modal edit-info" id="modal-edit-info" role="dialog" aria-labelledby="issueModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="title">编辑个人信息</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="info-wrap">
                        <div class="input-group">
                            <label class="label-item">昵称：</label>
                            <div class="control-input">
                                <input type="text" class="form-control input-item" id="js-username-ipt" value="<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
">
                                <div class="rlf-tip-wrap errorHint">昵称即为你的登录名，请谨慎修改</div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label-item">职位：</label>
                            <div class="control-input">
                                <select class="form-control input-item" name="job" hidefocus="true" id="js-job" data-validate="require-select" data-value="<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['job'];?>
">
                                    <option value>请选择职位</option>
                                    <option value="学生">学生</option>
                                    <option value="上班族">上班族</option>
                                    <option value="Python工程师">Python工程师</option>
                                    <option value="页面重构设计师">页面重构设计师</option>
                                    <option value="Web前端工程师">Web前端工程师</option>
                                    <option value="JS工程师">JS工程师</option>
                                    <option value="PHP开发工程师">PHP开发工程师</option>
                                    <option value="JAVA开发工程师">JAVA开发工程师</option>
                                    <option value="Android开发工程师">Android开发工程师</option>
                                    <option value="iOS开发工程师">iOS开发工程师</option>
                                    <option value="全栈工程师">全栈工程师</option>
                                    <option value="大数据分析工程师">大数据分析工程师</option>
                                    <option value="软件测试工程师">软件测试工程师</option>
                                    <option value="Linux系统工程师">Linux系统工程师</option>
                                    <option value="C/C++/C#工程师">C/C++/C#工程师</option>
                                    <option value="数据库工程师">数据库工程师</option>
                                    <option value="交互设计师">交互设计师</option>
                                    <option value="产品经理">产品经理</option>
                                    <option value="UI设计师">UI设计师</option>
                                    <option value="CG影视动画师">CG影视动画师</option>
                                    <option value="转行">转行</option>
                                </select>
                                <div class="rlf-tip-wrap errorHint"><!-- 请选择一个选项 --></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label-item">性别：</label>
                            <div class="radio-group sex-sel" id="js-sex">
                                <label><input type="radio" value="0" name="sex" <?php if ($_smarty_tpl->tpl_vars['indexauth']->value['sex'] == 0) {?>checked="checked"<?php }?>>保密</label>
                                <label><input type="radio" value="1" name="sex" <?php if ($_smarty_tpl->tpl_vars['indexauth']->value['sex'] == 1) {?>checked="checked"<?php }?>>男</label>
                                <label><input type="radio" value="2" name="sex" <?php if ($_smarty_tpl->tpl_vars['indexauth']->value['sex'] == 2) {?>checked="checked"<?php }?>>女</label>
                                <div class="rlf-tip-wrap errorHint nomargin"><!-- 请选择一个选项 --></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="aboutme" class="label-item">个性签名：</label>
                            <div class="pr">
                                <textarea name="aboutme" id="aboutme" class="form-control aboutme"><?php echo $_smarty_tpl->tpl_vars['indexauth']->value['signature'];?>
</textarea>
                                <p class="numCanInput js-numCanInput">还可以输入125个字符</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mr10" id="js-info-save">确定</button>
                    <button type="button" class="btn btn-default js-modal-close" data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 编辑个人信息模态框 end-->

    <!-- 更换邮箱模态框 -->
    <div class="modal fade setting-modal yanzheng" id="modal-yanzheng" role="dialog" aria-labelledby="issueModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="title">验证身份</span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="yanzheng-wrap">
                        <div class="keybox">
                            <i class="iconfont icon-yaochi"></i>
                        </div>
                        <div class="font1">
                            <p>请输入登录密码验证身份</p>
                            <p>XXXXX@qq.com</p>
                        </div>
                        <div class="input-group">
                            <label class="label-item">密码：</label>
                            <input type="text" class="form-control input-item" placeholder="请输入密码">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mr10 js-password-save">确定</button>
                    <button type="button" class="btn btn-default js-modal-close" data-dismiss="modal">取消</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 更换邮箱模态框 end-->

    <?php $_smarty_tpl->_subTemplateRender('file:index/sidebar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php $_smarty_tpl->_subTemplateRender('file:index/script_js.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="static/js/user.setting.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
