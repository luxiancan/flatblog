<?php
/* Smarty version 3.1.31, created on 2017-05-08 21:35:34
  from "C:\xampp\htdocs\flatBlog\tpl\index\all-article.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59107426c6e707_47916745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f1f90528c4c7f4e4ce054cbc9d2b4bfaecfa633' => 
    array (
      0 => 'C:\\xampp\\htdocs\\flatBlog\\tpl\\index\\all-article.html',
      1 => 1494250530,
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
function content_59107426c6e707_47916745 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\flatBlog\\framework\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>全部博文 - 七院创新基地</title>
    <?php $_smarty_tpl->_subTemplateRender('file:index/link_css.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>
<body>
    <div class="main-wrapper article">
        <header><!-- 页头开始 -->
            <nav id="nav">
                <div class="logo">
                <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
                    <a href=""><?php echo $_smarty_tpl->tpl_vars['indexauth']->value['username'];?>
</a>
                <?php } else { ?>
                    <a data-toggle="modal" data-target="#signin" id="js-signin-btn">登录</a>
                    <a data-toggle="modal" data-target="#signin" id="js-signup-btn">注册</a>
                <?php }?>
                </div>
                <ul class="menu">
                    <li><a href="index.php">首页</a></li>
                    <li><a href="index.php?controller=index&method=allarticles" class="active">全部博文</a></li>
                    <li><a href="index.php?controller=index&method=wenda">技术问答</a></li>
                    <li id="sidebar_trigger"><a href="#sidebar">菜单</a></li>
                </ul>
            </nav>
            <div id="banner">
                <div class="inner">
                    <h1 class="det">能说算不上什么，有本事就把你的代码给我看看</h1>
                </div>
            </div>
        </header><!-- 页头结束 -->

        <div class="content article"><!-- 内容开始 -->
            <div class="content_wrapper det">
                <div class="tabs_header">
                    <h2>全部博文</h2>
                    <a href="write-article.html" class="mybtn"><i class="iconfont icon-jia"></i>写新博文</a>
                </div>
                <div class="all_art">
                    <div class="main">
                        <div class="qsort">
                            <div class="qsort-mode">
                                <div class="quesall">
                                    <h3 class="allques-title">全部分类
                                        <span class="caret"></span>
                                    </h3>
                                    <div class="tag-nav cf">
                                        <ul class="cf">
                                            <li>
                                                <div>
                                                    <a href="#">移动开发</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href="#">Android</a></li>
                                                            <li><a href="#">iOS</a></li>
                                                            <li><a href="#">游戏开发</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="#">前端开发</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href="#">HTML/CSS</a></li>
                                                            <li><a href="#">JavaScript</a></li>
                                                            <li><a href="#">jQuery</a></li>
                                                            <li><a href="#">Bootstrap</a></li>
                                                            <li><a href="#">HTML5游戏</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="#">后端开发</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href="#">JAVA</a></li>
                                                            <li><a href="#">C/C++</a></li>
                                                            <li><a href="#">PHP</a></li>
                                                            <li><a href="#">Node.js</a></li>
                                                            <li><a href="#">JSP</a></li>
                                                            <li><a href="#">ASP.NET</a></li>
                                                            <li><a href="#">Ruby</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="#">大数据</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href="#">SAS</a></li>
                                                            <li><a href="#">Python</a></li>
                                                            <li><a href="#">R语言</a></li>
                                                            <li><a href="#">Hadoop</a></li>
                                                            <li><a href="#">Spark</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="#">数据库</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href="#">MySQL</a></li>
                                                            <li><a href="#">SQL Server</a></li>
                                                            <li><a href="#">Oracle</a></li>
                                                            <li><a href="#">SQLite</a></li>
                                                            <li><a href="#">MongoDB</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="#">操作系统</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href="#">Linux</a></li>
                                                            <li><a href="#">Windows</a></li>
                                                            <li><a href="#">Mac OS</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="#">数据结构</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href="#">数据结构</a></li>
                                                            <li><a href="#">算法</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="#">开发工具</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href="#">Git/Github</a></li>
                                                            <li><a href="#">SVN</a></li>
                                                            <li><a href="#">VI</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href="#">全部分类</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="qsort-see">
                                <dl>
                                    <dt>查看：</dt>
                                    <dd><a href="#" class="defalut">默认</a></dd>/
                                    <dd><a href="#" class="noreply">阅读量</a></dd>/
                                    <dd><a href="#" class="comment">评论数</a></dd>/
                                    <dd><a href="#" class="new">最新创建</a></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="article_list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value, 'value', false, NULL, 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <div class="article_item cf">
                                <h2 class="article_title"><a href="article.html"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h2>
                                <div class="article_con">
                                    <p class="article_abs"><?php echo $_smarty_tpl->tpl_vars['value']->value['summary'];?>
</p>
                                </div>
                                <div class="article_info cf">
                                    <span class="writer"><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</span>
                                    <span class="tags">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['tag_name'], 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                                        <a href="" class="tag"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </span>
                                    <span class="time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['create_at'],'%Y-%m-%d %H:%M:%S');?>
</span>
                                    <div class="article_bot">
                                        <span class="read">阅读(<?php echo $_smarty_tpl->tpl_vars['value']->value['read_num'];?>
)</span>
                                        <span class="praise">推荐(<?php echo $_smarty_tpl->tpl_vars['value']->value['praise_num'];?>
)</span>
                                        <span class="comment">评论(<?php echo $_smarty_tpl->tpl_vars['value']->value['comment_num'];?>
)</span>
                                        <span class="share">分享</span>
                                    </div>
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

                        </div>
                        <div class="pages small">
                            <div class="article_pages">
                                <a href="#" class="ebtn">首页</a>
                                <a href="#" class="pre">&lt; 上一页</a>
                                <a href="#" class="ebtn active">1</a>
                                <a href="#" class="ebtn">2</a>
                                <a href="#" class="ebtn">3</a>
                                <a href="#" class="ebtn">4</a>
                                <a href="#" class="ebtn">5</a>
                                <a href="#" class="next">下一页 &gt;</a>
                                <a href="#" class="ebtn">尾页</a>
                                <div class="skip cf">
                                    <input type="text" name="skip_page" placeholder="跳转页面">
                                    <a href="#" class="mybtn">GO</a>
                                </div>
                                <span>共666条记录，67页</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="hot hot-art">
                            <h4>精选推荐</h4>
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articlepraise']->value, 'value', false, NULL, 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <li>
                                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
                                    <div class="show-box">
                                        <span class="spacer"><?php echo $_smarty_tpl->tpl_vars['value']->value['read_num'];?>
浏览</span>
                                        <span class="spacer"><?php echo $_smarty_tpl->tpl_vars['value']->value['praise_num'];?>
推荐</span>
                                        <span class="spacer"><?php echo $_smarty_tpl->tpl_vars['value']->value['comment_num'];?>
评论</span>
                                    </div>
                                </li>
                                <?php
}
} else {
?>

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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

</body>
</html><?php }
}
