<?php
/* Smarty version 3.1.31, created on 2017-06-11 10:15:53
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\wenda-savesuccess.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593ca7d90ae347_87146722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4757c98278cd4cfaa6037e195521de398610f19' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\wenda-savesuccess.html',
      1 => 1497147351,
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
function content_593ca7d90ae347_87146722 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head runat="server">
    <meta charset="UTF-8" />
    <title>问题发布成功 - 七院创新基地</title>
    <?php $_smarty_tpl->_subTemplateRender('file:index/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body class="save">
    <div class="main-wrapper nobg">
        <header><!-- 页头开始 -->
            <?php $_smarty_tpl->_subTemplateRender('file:index/top-nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </header><!-- 页头结束 -->

        <div class="content wrap"><!-- 内容开始 -->
            <div class="content_wrapper">
                <div class="bbs">
                    <div class="successpage">
                        <h2>问题发布成功</h2>
                        <div class="send">
                            <span class="send-success">
                                <i class="iconfont icon-chenggong"></i>
                            </span>
                            <h3>你的问题已经提交成功</h3>
                            <p>请耐心等待，肯定会有很多热心的同学回答你的问题</p>
                            <p>
                                <a href="index.php?controller=index&method=wenda" class="btn mainbtn">返回技术问答</a>
                            </p>
                            <p>
                                <a class="look">查看我提的问题</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- 内容结束 -->
        <?php $_smarty_tpl->_subTemplateRender('file:index/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:index/sidebar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php $_smarty_tpl->_subTemplateRender('file:index/script_js.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(".send .look").attr("href","index.php?controller=index&method=wenda&id="+id);
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
