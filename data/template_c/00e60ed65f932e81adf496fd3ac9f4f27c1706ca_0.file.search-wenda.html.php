<?php
/* Smarty version 3.1.31, created on 2017-06-11 11:19:38
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\search-wenda.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593cb6caa51cf5_00450072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00e60ed65f932e81adf496fd3ac9f4f27c1706ca' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\search-wenda.html',
      1 => 1497151177,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/link_css.html' => 1,
    'file:index/top-nav.html' => 1,
    'file:index/footer.html' => 1,
    'file:index/signin.html' => 1,
    'file:index/sidebar.html' => 1,
    'file:index/script_js.html' => 1,
  ),
),false)) {
function content_593cb6caa51cf5_00450072 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
_搜索 - 七院创新基地</title>
    <?php $_smarty_tpl->_subTemplateRender('file:index/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>
    <div class="main-wrapper nobg">
        <!-- 页头开始 -->
        <header>
            <?php $_smarty_tpl->_subTemplateRender('file:index/top-nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </header>
        <!-- 页头结束 -->
        <!-- 内容开始 -->
        <div class="content search">
            <div class="search-main">
                <div class="search-header">
                    <div class="serach-box">
                        <i class="iconfont icon-sousuo_sousuo"></i>
                        <input type="text" class="serach-box-ipt js-serach-ipt" id="js-serach-ipt" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" placeholder="请输入想要搜索的内容">
                        <span class="serach-box-btn js-serach-btn">搜索</span>
                    </div>
                </div>
                <div class="serach-body">
                    <div class="search-nav-wrap">
                        <ul class="search-nav" id="js-search-nav">
                            <li><a href="javascript:;" data-page="index">全站</a></li>
                            <li><a href="javascript:;" data-page="article">博文</a></li>
                            <li><a href="javascript:;" data-page="wenda" class="active">问答</a></li>
                        </ul>
                    </div>
                    <div class="search-related">共找到<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
个相关内容</div>
                    <?php if ($_smarty_tpl->tpl_vars['keyword']->value != '') {?>
                    <?php if ($_smarty_tpl->tpl_vars['count']->value != 0) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wenda_data']->value, 'value', false, NULL, 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <div class="wenda-item">
                            <div class="wenda-item-title">
                                <a href="index.php?controller=index&method=wenda&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
                            </div>
                            <div class="content-wrap">
                                <p class="content"><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</p>
                            </div>
                        </div>
                        <?php
}
} else {
?>

                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['pagesize']->value) {?>
                        <?php echo $_smarty_tpl->tpl_vars['page_banner']->value;?>

                        <?php }?>
                    <?php } else { ?>
                    <p class="notdata">没有与 “<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
” 相关的搜索结果</p>
                    <?php }?>
                    <?php } else { ?>
                    <p class="notdata">请在输入框搜索想搜索的内容</p>
                    <?php }?>
                </div>
            </div>
        </div>
        <!-- 内容结束 -->
        <?php $_smarty_tpl->_subTemplateRender('file:index/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:index/signin.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender('file:index/sidebar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php $_smarty_tpl->_subTemplateRender('file:index/script_js.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 src="static/js/search.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
