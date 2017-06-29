<?php
/* Smarty version 3.1.31, created on 2017-06-11 10:22:23
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\article.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593ca95f157382_45642134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6902ead7b1509f91376f3a86f71fbe50bb6a1f63' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\article.html',
      1 => 1497147741,
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
function content_593ca95f157382_45642134 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\XAMPP\\htdocs\\flatBlog\\framework\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';
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
            <?php $_smarty_tpl->_subTemplateRender('file:index/top-nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div id="banner">
                <div class="banner-mask">
                    <div class="inner">
                        <h1 class="det">能说算不上什么，有本事就把你的代码给我看看</h1>
                    </div>
                </div>
            </div>
        </header><!-- 页头结束 -->

        <div class="content article"><!-- 内容开始 -->
            <div class="content_wrapper det">
                <div class="tabs_header">
                    <h2>全部博文</h2>
                    <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
                    <a href="index.php?controller=index&method=articlewrite" class="mainbtn"><i class="iconfont icon-jia"></i>写新博文</a>
                    <?php } else { ?>
                    <a href="javascript:;" class="mainbtn js-lgn"><i class="iconfont icon-jia"></i>写新博文</a>
                    <?php }?>
                </div>
                <div class="all_art">
                    <div class="main">
                        <div class="qsort">
                            <div class="qsort-mode">
                                <div class="quesall">
                                    <h3 class="allques-title"><?php if ($_smarty_tpl->tpl_vars['tag']->value == '') {?>全部分类<?php } else {
echo $_smarty_tpl->tpl_vars['tag']->value;
}?>
                                        <span class="caret"></span>
                                    </h3>
                                    <div class="tag-nav cf">
                                        <ul class="cf">
                                            <li>
                                                <div>
                                                    <a href>移动开发</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href>Android</a></li>
                                                            <li><a href>iOS</a></li>
                                                            <li><a href>Unity 3D</a></li>
                                                            <li><a href>Cocos2d-x</a></li>
                                                            <li><a href>游戏开发</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href>前端开发</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href>HTML/CSS</a></li>
                                                            <li><a href>JavaScript</a></li>
                                                            <li><a href>jQuery</a></li>
                                                            <li><a href>Bootstrap</a></li>
                                                            <li><a href>Vue.js</a></li>
                                                            <li><a href>WebApp</a></li>
                                                            <li><a href>HTML5游戏</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href>后端开发</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href>Java</a></li>
                                                            <li><a href>C/C++</a></li>
                                                            <li><a href>PHP</a></li>
                                                            <li><a href>Node.js</a></li>
                                                            <li><a href>JSP</a></li>
                                                            <li><a href>ASP.NET</a></li>
                                                            <li><a href>Ruby</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href>大数据</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href>SAS</a></li>
                                                            <li><a href>Python</a></li>
                                                            <li><a href>R语言</a></li>
                                                            <li><a href>Hadoop</a></li>
                                                            <li><a href>Spark</a></li>
                                                            <li><a href>云计算</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href>数据库</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href>MySQL</a></li>
                                                            <li><a href>SQL Server</a></li>
                                                            <li><a href>Oracle</a></li>
                                                            <li><a href>SQLite</a></li>
                                                            <li><a href>DB2</a></li>
                                                            <li><a href>MongoDB</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href>操作系统</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>

                                                            <li><a href>Windows</a></li>
                                                            <li><a href>Mac OS</a></li>
                                                            <li><a href>Linux</a></li>
                                                            <li><a href>运维/测试</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href>数据结构</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href>数据结构</a></li>
                                                            <li><a href>算法</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <a href>开发工具</a>
                                                    <i class="iconfont icon-you"></i>
                                                    <div class="tag-nav-list">
                                                        <ul>
                                                            <li><a href>Git/Github</a></li>
                                                            <li><a href>Gulp</a></li>
                                                            <li><a href>Grunt</a></li>
                                                            <li><a href>VI</a></li>
                                                            <li><a href>SVN</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="all">
                                                <div>
                                                    <a href>全部分类</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="qsort-see js-qsort-see">
                                <dl>
                                    <dt>查看：</dt>
                                    <dd><a href class="defalut">默认</a></dd>/
                                    <dd><a href class="read_num js-see" data-see="read">阅读量</a></dd>/
                                    <dd><a href class="praise_num js-see" data-see="praise">推荐数</a></dd>/
                                    <dd><a href class="comment_num js-see" data-see="comment">评论数</a></dd>
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
                                <h2 class="article_title"><a href="index.php?controller=index&method=article&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h2>
                                <div class="article_con">
                                    <p class="article_abs"><?php echo $_smarty_tpl->tpl_vars['value']->value['summary'];?>
</p>
                                </div>
                                <div class="article_info cf">
                                    <span class="writer">
                                        <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</a>
                                    </span>
                                    <span class="tags">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['tag'], 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                                        <a href="index.php?controller=index&method=article&tag=<?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
" class="tag"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
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
                                        <!-- <span class="share">分享</span> -->
                                    </div>
                                </div>
                            </div>
                            <?php
}
} else {
?>

                            <p class="no-content">暂无内容</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </div>
                        <div class="page-wrap">
                            <?php echo $_smarty_tpl->tpl_vars['page_banner']->value;?>

                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="hot hot-art">
                            <h4>精选推荐</h4>
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article_praise']->value, 'value', false, NULL, 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <li>
                                    <a href="index.php?controller=index&method=article&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
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

                                <li>暂无推荐</li>
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


    <?php echo '<script'; ?>
 type="text/javascript">
        $(function(){
            $(".tag-nav li a").attr("href",function(){
                var text = $(this).text().replace(/\+/g, '%2B');
                var href = "index.php?controller=index&method=article&tag=" + text;
                return href;
            });
            $(".tag-nav li.all a").attr("href","index.php?controller=index&method=article");


        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
