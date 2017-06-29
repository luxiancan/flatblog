<?php
/* Smarty version 3.1.31, created on 2017-05-08 17:09:28
  from "C:\xampp\htdocs\flatBlog\tpl\index\wenda.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_591035c8739892_25548289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0a15b6edb2a373de0ccb88d4b66be6c12267974' => 
    array (
      0 => 'C:\\xampp\\htdocs\\flatBlog\\tpl\\index\\wenda.html',
      1 => 1494234511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/link_css.html' => 1,
    'file:index/signin.html' => 1,
    'file:index/sidebar.html' => 1,
    'file:index/script_js.html' => 1,
  ),
),false)) {
function content_591035c8739892_25548289 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <li><a href="index.php?controller=index&method=allarticles">全部博文</a></li>
                    <li><a href="index.php?controller=index&method=wenda" class="active">技术问答</a></li>
                    <li id="sidebar_trigger"><a href="#sidebar">菜单</a></li>
                </ul>
            </nav>
            <div id="banner">
                <div class="inner">
                    <h1 class="det">一个聪明人，永远会发问</h1>
                    <p class="sub-heading">能解决别人的问题，才能证明你真正掌握了它</p>
                </div>
            </div>
        </header><!-- 页头结束 -->

        <div class="content article"><!-- 内容开始 -->
            <div class="content_wrapper det">
                <div class="tabs_header">
                    <h2>技术问答</h2>
                    <a href="write-question.html" class="mybtn"><i class="iconfont icon-jia"></i>发布问题</a>
                </div>
                <div class="wenda">
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
                                    <dd><a href="#" class="noreply">待回复</a></dd>/
                                    <dd><a href="#" class="new">最新创建</a></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="asklist">
                            <ul class="cf">
                                <li class="askstatus">
                                    <a href="javascript:;" class="reply">
                                        <strong>3</strong>
                                        <p>回答</p>
                                    </a>
                                </li>
                                <li class="askpv">
                                    <div>
                                        <strong>166</strong>
                                        <p>浏览</p>
                                    </div>
                                </li>
                                <li class="asktit">
                                    <h3>
                                        <a href="wenda-detail.html">函数参数的问题</a>
                                    </h3>
                                    <p class="mark">
                                        <span class="questioner">splendid</span>
                                        <span class="tag-group">
                                            <i class="tag">PHP</i>
                                            <i class="tag">MySQL</i>
                                        </span>
                                        <span class="answerer">奋进的小哥哥</span>
                                        <span class="ans-time">2017-04-06 20:42:26 回答</span>
                                    </p>
                                </li>
                            </ul>
                            <ul class="cf">
                                <li class="askstatus">
                                    <a href="javascript:;" class="noreply">
                                        <strong>0</strong>
                                        <p>回答</p>
                                    </a>
                                </li>
                                <li class="askpv">
                                    <div>
                                        <strong>26</strong>
                                        <p>浏览</p>
                                    </div>
                                </li>
                                <li class="asktit">
                                    <h3>
                                        <a href="wenda-detail.html">轮播图有BUG，求解决</a>
                                    </h3>
                                    <p class="mark">
                                        <span class="questioner">splendid</span>
                                        <span class="tag-group">
                                            <i class="tag">PHP</i>
                                            <i class="tag">数据库</i>
                                        </span>
                                        <span class="answerer">奋进的小哥哥</span>
                                        <span class="ans-time">2017-04-06 20:42:26 回答</span>
                                    </p>
                                </li>
                            </ul>
                            <ul class="cf">
                                <li class="askstatus">
                                    <a href="javascript:;" class="reply">
                                        <strong>3</strong>
                                        <p>回答</p>
                                    </a>
                                </li>
                                <li class="askpv">
                                    <div>
                                        <strong>166</strong>
                                        <p>浏览</p>
                                    </div>
                                </li>
                                <li class="asktit">
                                    <h3>
                                        <a href="#">函数参数的问题</a>
                                    </h3>
                                    <p class="mark">
                                        <span class="questioner">splendid</span>
                                        <span class="tag-group">
                                            <i class="tag">PHP</i>
                                            <i class="tag">MySQL</i>
                                        </span>
                                        <span class="answerer">奋进的小哥哥</span>
                                        <span class="ans-time">2017-04-06 20:42:26 回答</span>
                                    </p>
                                </li>
                            </ul>
                            <ul class="cf">
                                <li class="askstatus">
                                    <a href="javascript:;" class="reply">
                                        <strong>3</strong>
                                        <p>回答</p>
                                    </a>
                                </li>
                                <li class="askpv">
                                    <div>
                                        <strong>166</strong>
                                        <p>浏览</p>
                                    </div>
                                </li>
                                <li class="asktit">
                                    <h3>
                                        <a href="#">函数参数的问题</a>
                                    </h3>
                                    <p class="mark">
                                        <span class="questioner">splendid</span>
                                        <span class="tag-group">
                                            <i class="tag">PHP</i>
                                            <i class="tag">MySQL</i>
                                        </span>
                                        <span class="answerer">奋进的小哥哥</span>
                                        <span class="ans-time">2017-04-06 20:42:26 回答</span>
                                    </p>
                                </li>
                            </ul>
                            <ul class="cf">
                                <li class="askstatus">
                                    <a href="javascript:;" class="reply">
                                        <strong>3</strong>
                                        <p>回答</p>
                                    </a>
                                </li>
                                <li class="askpv">
                                    <div>
                                        <strong>166</strong>
                                        <p>浏览</p>
                                    </div>
                                </li>
                                <li class="asktit">
                                    <h3>
                                        <a href="#">函数参数的问题</a>
                                    </h3>
                                    <p class="mark">
                                        <span class="questioner">splendid</span>
                                        <span class="tag-group">
                                            <i class="tag">PHP</i>
                                            <i class="tag">MySQL</i>
                                        </span>
                                        <span class="answerer">奋进的小哥哥</span>
                                        <span class="ans-time">2017-04-06 20:42:26 回答</span>
                                    </p>
                                </li>
                            </ul>
                            <ul class="cf">
                                <li class="askstatus">
                                    <a href="javascript:;" class="reply">
                                        <strong>3</strong>
                                        <p>回答</p>
                                    </a>
                                </li>
                                <li class="askpv">
                                    <div>
                                        <strong>166</strong>
                                        <p>浏览</p>
                                    </div>
                                </li>
                                <li class="asktit">
                                    <h3>
                                        <a href="#">函数参数的问题</a>
                                    </h3>
                                    <p class="mark">
                                        <span class="questioner">splendid</span>
                                        <span class="tag-group">
                                            <i class="tag">PHP</i>
                                            <i class="tag">MySQL</i>
                                        </span>
                                        <span class="answerer">奋进的小哥哥</span>
                                        <span class="ans-time">2017-04-06 20:42:26 回答</span>
                                    </p>
                                </li>
                            </ul>
                            <ul class="cf">
                                <li class="askstatus">
                                    <a href="javascript:;" class="noreply">
                                        <strong>0</strong>
                                        <p>回答</p>
                                    </a>
                                </li>
                                <li class="askpv">
                                    <div>
                                        <strong>26</strong>
                                        <p>浏览</p>
                                    </div>
                                </li>
                                <li class="asktit">
                                    <h3>
                                        <a href="#">轮播图有BUG，求解决</a>
                                    </h3>
                                    <p class="mark">
                                        <span class="questioner">splendid</span>
                                        <span class="tag-group">
                                            <i class="tag">PHP</i>
                                            <i class="tag">数据库</i>
                                        </span>
                                        <span class="answerer">奋进的小哥哥</span>
                                        <span class="ans-time">2017-04-06 20:42:26 回答</span>
                                    </p>
                                </li>
                            </ul>
                            <ul class="cf">
                                <li class="askstatus">
                                    <a href="javascript:;" class="reply">
                                        <strong>3</strong>
                                        <p>回答</p>
                                    </a>
                                </li>
                                <li class="askpv">
                                    <div>
                                        <strong>166</strong>
                                        <p>浏览</p>
                                    </div>
                                </li>
                                <li class="asktit">
                                    <h3>
                                        <a href="#">函数参数的问题</a>
                                    </h3>
                                    <p class="mark">
                                        <span class="questioner">splendid</span>
                                        <span class="tag-group">
                                            <i class="tag">PHP</i>
                                            <i class="tag">MySQL</i>
                                        </span>
                                        <span class="answerer">奋进的小哥哥</span>
                                        <span class="ans-time">2017-04-06 20:42:26 回答</span>
                                    </p>
                                </li>
                            </ul>
                            <ul class="cf">
                                <li class="askstatus">
                                    <a href="javascript:;" class="reply">
                                        <strong>3</strong>
                                        <p>回答</p>
                                    </a>
                                </li>
                                <li class="askpv">
                                    <div>
                                        <strong>166</strong>
                                        <p>浏览</p>
                                    </div>
                                </li>
                                <li class="asktit">
                                    <h3>
                                        <a href="#">函数参数的问题</a>
                                    </h3>
                                    <p class="mark">
                                        <span class="questioner">splendid</span>
                                        <span class="tag-group">
                                            <i class="tag">PHP</i>
                                            <i class="tag">MySQL</i>
                                        </span>
                                        <span class="answerer">奋进的小哥哥</span>
                                        <span class="ans-time">2017-04-06 20:42:26 回答</span>
                                    </p>
                                </li>
                            </ul>
                            <ul class="cf">
                                <li class="askstatus">
                                    <a href="javascript:;" class="reply">
                                        <strong>3</strong>
                                        <p>回答</p>
                                    </a>
                                </li>
                                <li class="askpv">
                                    <div>
                                        <strong>166</strong>
                                        <p>浏览</p>
                                    </div>
                                </li>
                                <li class="asktit">
                                    <h3>
                                        <a href="#">函数参数的问题</a>
                                    </h3>
                                    <p class="mark">
                                        <span class="questioner">splendid</span>
                                        <span class="tag-group">
                                            <i class="tag">PHP</i>
                                            <i class="tag">MySQL</i>
                                        </span>
                                        <span class="answerer">奋进的小哥哥</span>
                                        <span class="ans-time">2017-04-06 20:42:26 回答</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        （每页显示20条记录）
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
                                <span>共56条记录，3页</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="hot hot-que">
                            <h4>热门问答</h4>
                            <ul>
                                <li>
                                    <a href="#">标题标题标题标题标题</a>
                                    <div class="show-box">
                                        <span class="spacer">658浏览</span>
                                        <span class="spacer">3回答</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">标题标题标题标题标题</a>
                                    <div class="show-box">
                                        <span class="spacer">658浏览</span>
                                        <span class="spacer">3回答</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">标题标题标题标题标题</a>
                                    <div class="show-box">
                                        <span class="spacer">658浏览</span>
                                        <span class="spacer">3回答</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">标题标题标题标题标题</a>
                                    <div class="show-box">
                                        <span class="spacer">658浏览</span>
                                        <span class="spacer">3回答</span>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">标题标题标题标题标题</a>
                                    <div class="show-box">
                                        <span class="spacer">658浏览</span>
                                        <span class="spacer">3回答</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- 内容结束 -->

        <footer><!-- 页尾开始 -->
            <div class="wrapper">
                <ul class="share-group">
                    <li><a href="blog-index.html">博文首页</a></li>
                    <li><a href="index.html">基地主页</a></li>
                    <li><a href="http://www.guet.edu.cn">学校主页</a></li>
                    <li><a href="#">管理员登录</a></li>
                </ul>
            </div>
            <div class="copy">&copy 七院创新基地 - 博文 - 2017</div>
        </footer><!-- 页尾结束 -->
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
