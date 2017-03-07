<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>主页</title>

    <!-- Bootstrap -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        html, body {
            background: #ebebeb none repeat scroll 0 0;
            color: #505050;
            font-family: "Helvetica Neue",Helvetica,Arial,"Hiragino Sans GB","Hiragino Sans GB W3","WenQuanYi Micro Hei","Microsoft YaHei UI","Microsoft YaHei",sans-serif;
            line-height: 1.75em;
            position: relative;
        }
        .home-template .main-header {
            background: no-repeat center 20%;
            background-size: cover;
            padding-bottom: 62px;
            padding-top: 62px;
        }
        .main-header {
            background: #ffffff none repeat scroll 0 0;
            padding: 42px 0;
            text-align: center;
        }
        .main-header {
            text-align: center;
        }
        .main-navigation {
            background: #ffffff none repeat scroll 0 0;
            border-bottom: 2px solid #e1e1e1;
            border-top: 1px solid #ebebeb;
            margin-bottom: 35px;
            text-align: center;
        }
        .main-navigation .menu {
            margin: 0;
            padding: 0;
        }
        .main-navigation .menu li.nav-current {
            border-bottom: 2px solid #e67e22;
            margin-bottom: -2px;
        }
        .main-navigation .menu li {
            display: inline-block;
            list-style: outside none none;
            position: relative;
        }
        .main-navigation .menu li a {
            color: #505050;
            display: block;
            line-height: 4em;
            padding: 0 21px;
        }
        a {
            color: #337ab7;
            text-decoration: none;
        }
        a {
            color: #e67e22;
            outline: medium none;
        }
        a {
            background-color: transparent;
        }
        .post .post-head .post-title a {
            color: #303030;
        }
        .post {
            background: #ffffff none repeat scroll 0 0;
            margin-bottom: 35px;
            overflow: hidden;
            padding: 35px;
            position: relative;
        }
        .post .post-head {
            text-align: center;
        }
        .post .post-head .post-title {
            font-size: 2.5em;
            line-height: 1em;
            margin: 0;
        }
        h1 {
            font-size: 3em;
        }
        h1, h2, h3, h4, h5, h6 {
            color: #303030;
            font-weight: 400;
        }
        .post .post-head .post-meta {
            color: #959595;
            margin: 14px 0 0;
        }
        .post .post-head .post-meta span {
            margin: 0 7px;
            white-space: nowrap;
        }
        .post .post-content {
            margin: 30px 0;
        }
        .post-content {
            color: #444443;
            font: 400 18px/1.62 "Georgia","Xin Gothic","Hiragino Sans GB","Droid Sans Fallback","Microsoft YaHei",sans-serif;
        }
        .btn-default {
            background: #e67e22 none repeat scroll 0 0;
            border: 1px solid #e67e22;
            color: #ffffff;
            transition: all 0.2s ease-in-out 0s;
        }
        .btn {
            border-radius: 2px;
            padding: 7px 14px;
        }
        .post .post-footer {
            border-top: 1px solid #ebebeb;
            margin-top: 30px;
            padding: 21px 0 0;
        }
        .post .post-footer .tag-list {
            color: #959595;
            line-height: 28px;
        }
    </style>
</head>
<body class="home-template">
<header class="main-header" style="background-image: url(http://static.ghostchina.com/image/6/d1/fcb3879e14429d75833a461572e64.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a class="branding" href="http://www.oathsign.com" title="Ghost 开源博客平台"><img src="http://static.ghostchina.com/image/b/46/4f5566c1f7bc28b3f7ac1fada8abe.png" alt="Ghost 开源博客平台"></a>
                <h2 class="text-hide">Ghost 是一个简洁、强大的写作平台。你只须专注于用文字表达你的想法就好，其余的事情就让 Ghost 来帮你处理吧。</h2>
                <img src="http://static.ghostchina.com/image/6/d1/fcb3879e14429d75833a461572e64.jpg" alt="Ghost 博客系统" class="hide">
            </div>
        </div>
    </div>
</header>
<nav class="main-navigation">
    <div class="container">
        <div class="row">
            <div id="main-menu" class="collapse navbar-collapse">
                <ul class="menu">
                    <li class="nav-current" role="presentation"><a href="/">首页</a></li>
                    <li role="presentation"><a href="/">论坛</a></li>
                    <li role="presentation"><a href="/">快捷手册</a></li>
                    <li role="presentation"><a href="/">中文文档</a></li>
                    <li role="presentation"><a href="/">下载</a></li>
                    <li role="presentation"><a href="/">关于</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<section class="content-wrap">
    <div class="container">
        <div class="row">
            <main class="col-sm-8 main-context">
                <article id="98" class="post">
                    <div class="post-head">
                        <h1 class="post-title"><a href="/moving-to-node-js-v4-lts/">Node.js v4 LTS 成为 Ghost 推荐版本</a></h1>
                        <div class="post-meta">
                            <span class="author">作者：<a href="/author/wangsai/">王赛</a></span> •
                            <time class="post-date" datetime="2016年7月26日星期二上午9点54分" title="2016年7月26日星期二上午9点54分">2016年7月26日</time>
                        </div>
                    </div>
                    <div class="post-content">
                        <p>从这周起，我们将 Ghost 推荐 Node.js 版本升级为 Node.js v4 LTS。 我们这样做其实已经落后于计划了。然而，经过大量测试之后，我们确信 Ghost 可以在 Node.js v4 平台上流畅的运行并且内存消耗比原来也减少了。目前，Ghost(Pro) 上托</p>
                    </div>
                    <div class="post-permalink">
                        <a class="btn btn-default" href="/moving-to-node-js-v4-lts/">阅读全文</a>
                    </div>
                    <footer class="post-footer clearfix">
                        <div class="pull-left tag-list">
                            <i class="fa fa-folder-open-o"></i>
                        </div>
                    </footer>
                </article>
            </main>
            <aside class="col-sm-4 sidebar"></aside>
        </div>
    </div>
</section>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</body>
</html>