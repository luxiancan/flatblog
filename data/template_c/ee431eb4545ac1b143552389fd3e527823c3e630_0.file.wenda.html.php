<?php
/* Smarty version 3.1.31, created on 2017-06-10 16:10:26
  from "F:\XAMPP\htdocs\flatBlog\tpl\index\wenda.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_593ba972c2bf70_96301265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee431eb4545ac1b143552389fd3e527823c3e630' => 
    array (
      0 => 'F:\\XAMPP\\htdocs\\flatBlog\\tpl\\index\\wenda.html',
      1 => 1497082217,
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
function content_593ba972c2bf70_96301265 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\XAMPP\\htdocs\\flatBlog\\framework\\libs\\view\\Smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>技术问答 - 七院创新基地</title>
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
                        <h1 class="det">一个聪明人，永远会发问</h1>
                        <p class="sub-heading">能解决别人的问题，才能证明你真正掌握了它</p>
                    </div>
                </div>
            </div>
        </header><!-- 页头结束 -->

        <div class="content article"><!-- 内容开始 -->
            <div class="content_wrapper det">
                <div class="tabs_header">
                    <h2>技术问答</h2>
                    <?php if ($_smarty_tpl->tpl_vars['indexauth']->value != '') {?>
                    <a href="index.php?controller=index&method=wendawrite" class="mainbtn"><i class="iconfont icon-jia"></i>发布问题</a>
                    <?php } else { ?>
                    <a href="javascript:;" class="mainbtn js-lgn"><i class="iconfont icon-jia"></i>发布问题</a>
                    <?php }?>
                </div>
                <div class="wenda">
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
                                                    <a href">全部分类</a>
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
                                    <dd><a href class="read_num js-see" data-see="read">浏览量</a></dd>/
                                    <dd><a href class="answer_num js-see" data-see="answer">回答数</a></dd>/
                                    <dd><a href class="answer_zero js-see" data-see="answer_zero">待回答</a></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="asklist">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wenda']->value, 'value', false, NULL, 'name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <ul class="cf">
                                <li class="askstatus">
                                    <a href="javascript:;" class="reply">
                                        <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['answer_num'];?>
</strong>
                                        <p>回答</p>
                                    </a>
                                </li>
                                <li class="askpv">
                                    <div>
                                        <strong><?php echo $_smarty_tpl->tpl_vars['value']->value['read_num'];?>
</strong>
                                        <p>浏览</p>
                                    </div>
                                </li>
                                <li class="asktit">
                                    <h3>
                                        <a href="index.php?controller=index&method=wenda&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
                                    </h3>
                                    <p class="mark">
                                        <span class="tag-group">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['tag'], 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
                                            <a href="index.php?controller=index&method=wenda&tag=<?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
" class="tag"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name'];?>
</a>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </span>
                                        <span class="questioner">
                                            <a href="index.php?controller=index&method=user&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</a>
                                        </span>
                                        <!-- <span class="answerer">奋进的小哥哥</span> -->
                                        <span class="create-time"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['create_at'],'%Y-%m-%d %H:%M:%S');?>
 提问</span>
                                    </p>
                                </li>
                            </ul>
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
                        <!-- 没有针对此分类的提问~ -->
                        <div class="page-wrap">
                            <?php echo $_smarty_tpl->tpl_vars['page_banner']->value;?>

                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="hot hot-que">
                            <h4>热门问答</h4>
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hot_answer']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <li>
                                    <a href="index.php?controller=index&method=wenda&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a>
                                    <div class="show-box">
                                        <span class="spacer"><?php echo $_smarty_tpl->tpl_vars['value']->value['read_num'];?>
浏览</span>
                                        <span class="spacer"><?php echo $_smarty_tpl->tpl_vars['value']->value['answer_num'];?>
回答</span>
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


    <?php echo '<script'; ?>
 type="text/javascript">
        $(function(){
            $(".asklist .askstatus>a").each(function(){
                var answer_num = Number($(this).find("strong").text());
                if(answer_num==0){
                    $(this).attr("class","noreply");
                }
            });

            $(".tag-nav li a").attr("href",function(){
                var text = $(this).text().replace(/\+/g, '%2B');
                var href = "index.php?controller=index&method=wenda&tag=" + text;
                return href;
            });

            $(".tag-nav li.all a").attr("href","index.php?controller=index&method=wenda");
        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
