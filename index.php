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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
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
            color: #e67e22;
            outline: medium none;
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</body>
</html>