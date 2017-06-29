<?php
/* Smarty version 3.1.31, created on 2017-06-10 16:19:24
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\blog-index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593bab8ce3ce83_38760853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37082d2c83883df5d91619cef6626f748ea231b3' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\blog-index.html',
      1 => 1497081965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/link_css.html' => 1,
    'file:index/footer.html' => 1,
    'file:index/signin.html' => 1,
    'file:index/sidebar.html' => 1,
    'file:index/script_js.html' => 1,
  ),
),false)) {
function content_593bab8ce3ce83_38760853 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>七院创新基地 - 博文</title>
    <?php $_smarty_tpl->_subTemplateRender('file:index/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>
    <div class="main-wrapper index">
        <header><!-- 页头开始 -->
            <nav id="nav" class="alt">
                <div class="logo">
                <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
                    <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['indexauth']->value['id'];?>
" class="user"><?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
</a>
                <?php } else { ?>
                    <a data-toggle="modal" data-target="#signin" id="js-signin-btn">登录</a>
                    <a data-toggle="modal" data-target="#signin" id="js-signup-btn">注册</a>
                <?php }?>
                </div>
                <ul class="menu">
                    <li><a href="index.php" class="active">首页</a></li>
                    <li><a href="index.php?controller=index&method=article">全部博文</a></li>
                    <li><a href="index.php?controller=index&method=wenda">技术问答</a></li>
                    <li id="sidebar_trigger"><a href="javascript:;">菜单</a></li>
                </ul>
                <div class="search-wrap">
                    <div class="search-area">
                        <input type="text" class="search-input" id="js-top-search-ipt" autocomplete="off" placeholder="搜索本站">
                    </div>
                    <div class="search-btn js-top-search">
                        <i class="iconfont icon-sousuo_sousuo"></i>
                    </div>
                </div>
            </nav>
            <div id="banner">
                <div class="inner">
                    <h1>七院创新基地 - 博文</h1>
                    <p class="sub-heading">优秀博文，你我共创！</p>
                    <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
                    <a href="index.php?controller=index&method=articlewrite" id="main-btn" class="mainbtn">写博文</a>
                    <?php } else { ?>
                    <a href="javascript:;" id="main-btn" class="mainbtn js-lgn">写博文</a>
                    <?php }?>
                </div>
                <a class="more"></a>
            </div>
        </header><!-- 页头结束 -->

        <div class="content"><!-- 内容开始 -->
            <section class="green-section" id="one">
                <div class="wrapper">
                    <div class="inner">
                        <h2>这个程序在我的计算机上可以很好的运行！</h2>
                        <div class="hr"></div>
                        <div class="search-wrap">
                            <input id="js-index-search-ipt" class="search-input" type="text" autocomplete="off" placeholder="搜索你感兴趣的博文，问答...">
                            <div class="search-btn js-index-search-btn">
                                <a href="javascript:;" class="mainbtn"><i class="iconfont icon-sousuo"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="icon-group">
                        <span class="icon"><i class="iconfont icon-java"></i></span>
                        <span class="icon"><i class="iconfont icon-c"></i></span>
                        <span class="icon"><i class="iconfont icon-python"></i></span>
                        <span class="icon"><i class="iconfont icon-PHP"></i></span>
                        <span class="icon"><i class="iconfont icon-javascript"></i></span>
                    </div>
                </div>
            </section>
            <section class="gray-section">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_read']->value, 'value', false, NULL, 'name', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration']++;
?>
                <div class="article-preview cf">
                    <div class="img-section">
                        <img src="static/img/pic<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration'] : null);?>
.jpg">
                    </div>
                    <div class="text-section">
                        <h2><a href="index.php?controller=index&method=article&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h2>
                        <p><?php echo $_smarty_tpl->tpl_vars['value']->value['summary'];?>
</p>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            </section>
            <section class="purple-section">
                <div class="wrapper">
                    <div class="heading-wrapper">
                        <h2>技术问答</h2>
                        <div class="hr"></div>
                        <p>程序员见到了上帝。上帝：小伙子，我可以满足你一个愿望。程序员：我希望中国队能打进世界杯。上帝：这个不好办呐，你再说一个！程序员：那好！我希望每天都能休息6个小时以上。上帝：还是让中国队打进世界杯吧...</p>
                    </div>
                    <div class="card-group cf">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['que_answer']->value, 'value', false, NULL, 'name', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_name']->value['iteration']++;
?>
                        <div class="card">
                            <h3><a href="index.php?controller=index&method=wenda&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['value']->value['content'];?>
</p>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </div>
                </div>
            </section>
        </div><!-- 内容结束 -->
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
 type="text/javascript">
        $(function(){
            var banner = $("#banner"),
                nav = $("#nav"),
                more = $(".more");
            $(window).on("scroll",function(){
                if($(window).scrollTop() >= (banner.height()-nav.height())){
                    $("#nav").removeClass("alt");
                }else{
                    $("#nav").addClass("alt");
                }
            });
            //浏览器刷新触发scroll事件
            $(window).trigger("scroll");

            more.on("click",function(){
                $("html, body").animate({
                    scrollTop: banner.height()-nav.height() + "px"
                }, 1200);
            });

            /*搜索框*/
            $(".js-index-search-btn").on("click",function(){
                var key_word = $("#js-index-search-ipt").val();
                if(key_word.length > 0){
                    window.location  = "index.php?controller=index&method=search&word="+key_word;
                }else{
                    alert("请输入搜索内容！");
                }
            });

            $(".green-section .search-wrap").keypress(function(e){
                // 回车键事件
                if(e.which == 13){
                    $(".js-index-search-btn").click();
                }
            });

            // $("#signin").modal("show");
            // $("#signin").modal("hide");

        });
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
