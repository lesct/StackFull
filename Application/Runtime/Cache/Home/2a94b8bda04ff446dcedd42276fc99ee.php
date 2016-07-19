<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>stackfull首页</title>
    <link rel="stylesheet" href="/wsp/Public/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="/wsp/Public/home.css" />
    <script type="text/javascript" src="/wsp/Public/bootstrap/js/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="/wsp/Public/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<nav class="navbar navbar-dark bg-primary" style="background-color: #4285F4;" role="navigation">
    <div class="navbar-header">
        <div class="navbar-default">
        <button type="button" class="nav navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse" >
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" style="color: #ffffff;">StackFull</a></div>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="active">
            <a class="" href="#">StayFoolish</a>
        </li>
        <li class="">
            <a class="" href="#">StayHungry</a>
        </li>
        <li class="">
            <a class="" href="#">Webnav</a>
        </li>
    </ul>
        <form class="form-inline navbar-form pull-right">
            <input class="form-control" type="text" placeholder="Search" >
            <span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;</span>

            <a href="<?php echo U('Home/User/login');?>"><button type="button" class="btn btn-info btn-xs">登录</button></a>
            <a href="<?php echo U('Home/User/reg');?>"><button type="button" class="btn btn-warning btn-xs" href="reg.html">注册</button></a>
        </form>

        </div>

</nav>




<!--<div class="footer">-->
    <!--<div class="foot-content">-->
        <!--<a href="#">关于我们</a>　|　-->
        <!--<a href="#">联系我们</a>　|　-->
        <!--<a href="#">版权声明</a>　|　-->
        <!--<a href="#">友情链接</a>-->
        <!--<span><a href="mailto:stackfull@163.com">Email : stackfull@163.com</a>　　&copy;SF</span>-->
    <!--</div>-->
<!--</div>-->

<div class="row footer center-block">
    <div class="col-xs-8 col-md-4 col-lg-12">
        <a href="#">关于我们</a>　|　
        <a href="#">联系我们</a>　|　
        <a href="#">版权声明</a>　|　
        <a href="#">友情链接</a>　|　
        <span><a href="mailto:stackfull@163.com">Email : stackfull@163.com</a>　&copy;SF</span>
    </div>
</div>

</div>
</body>
</html>