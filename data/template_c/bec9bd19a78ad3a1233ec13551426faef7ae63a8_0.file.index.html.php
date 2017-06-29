<?php
/* Smarty version 3.1.31, created on 2017-04-29 10:03:10
  from "C:\xampp\htdocs\flatBlog\tpl\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_590448be946e52_95595074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bec9bd19a78ad3a1233ec13551426faef7ae63a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\flatBlog\\tpl\\index\\index.html',
      1 => 1493122341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590448be946e52_95595074 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 1080px;
            margin: 0 auto;
        }
        #content{
            width: 740px;
            float: left;
            margin-right: 20px;
        }
        #sidebar{
            width: 240px;
            float: left;
        }
        .cf:before,.cf:after{
            clear: both;
            content: '';
            display: block;
            height: 0;
            overflow: hidden;
            visibility: hidden;
        }
    </style>
</head>
<body>

    <div class="container">
        <div id="header-wrapper">
            <div id="header">
                <div id="menu">
                    <ul>
                        <li><a href="index.php" class="first">首页</a></li>
                        <li><a href="#about">关于我们</a></li>
                    </ul>
                </div>
                <div id="search" style="display:none">
                    <form action="" method="get">
                        <fieldset>
                            <input type="text" name="s" id="search-text" size="15">
                            <input type="submit" id="search-submit" value="GO">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div id="logo">
            <h1><a href="#">新闻发布系统</a></h1>
            <p><em>MVC综合实例-微型框架的制作与运用</em></p>
        </div>
        <hr />
        <div id="page">
            <div id="page-bgtop" class="cf">
                <div id="content">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'news');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
?>
                    <div class="post">
                        <p class="meta">
                            <?php echo $_smarty_tpl->tpl_vars['news']->value['author'];?>
发布于<span class="date"><?php echo $_smarty_tpl->tpl_vars['news']->value['dateline'];?>
</span>
                        </p>
                        <h2 class="title">
                            <a href="index.php?controller=index&method=newsshow&id=<?php echo $_smarty_tpl->tpl_vars['news']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a>
                        </h2>
                        <div class="entry">
                            <p><?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
</p>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <div class="post">
                        <p class="meta">
                            splendid发布于<span class="date">Sunday,April 26,2017</span>7:27 AM
                        </p>
                        <h2 class="title">
                            <a href="#">标题标题标题标题标题</a>
                        </h2>
                        <div class="entry">
                            <p>内容内容内容内容内容内容内容内容内容内容</p>
                        </div>
                    </div>
                </div>
                <div id="sidebar">
                    <div class="about">
                        <ul>
                            <li>
                                <h2>关于我们</h2>
                                <p><?php echo $_smarty_tpl->tpl_vars['about']->value;?>
</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php }
}
