<?php
/* Smarty version 3.1.31, created on 2017-06-11 10:35:29
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\article-savesuccess.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593cac719b26d4_01926296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b06bff3186e78a65927728f3b135181170193a77' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\article-savesuccess.html',
      1 => 1497148527,
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
function content_593cac719b26d4_01926296 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head runat="server">
    <meta charset="UTF-8" />
    <title>文章发布成功 - 七院创新基地</title>
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
                        <h2>文章发布成功</h2>
                        <div class="send">
                            <span class="send-success">
                                <i class="iconfont icon-chenggong"></i>
                            </span>
                            <h3>你的文章已经发布成功</h3>
                            <p>
                                <a href="index.php?controller=index&method=article" class="btn mainbtn">返回全部博文</a>
                            </p>
                            <p>
                                <a class="look">查看我的文章</a>
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
        $(".send .look").attr("href","index.php?controller=index&method=article&id="+id);
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
