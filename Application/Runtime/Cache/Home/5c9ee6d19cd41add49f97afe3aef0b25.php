<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>stackfull首页</title>
    <link rel="stylesheet" href="/StackFull/Public/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="/StackFull/Public/home.css" />
    <script type="text/javascript" src="/StackFull/Public/bootstrap/js/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="/StackFull/Public/bootstrap/js/bootstrap.min.js"></script>
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


<!--注册登录页面二级导航-->
<div class="user-nav">
    <ul class="nav nav-tabs">
        <li role="presentation"><a href="reg.html">注册</a></li>
        <li role="presentation"  class="active"><a href="login.html">登录</a></li>
    </ul>
</div>

<!--注册页面表单-->
<div class="form_user">
    <form method="post" action="<?php echo U('Home/User/login_submit');?>" >

        <!--登录名-->
        <div class="form-group has-default has-feedback">
            <label class="control-label" for="inputGroupDefault1">登录账号</label>
            <div class="input-group">
                <!--<span class="input-group-addon">&nbsp;U&nbsp;</span>-->
                <span class="glyphicon glyphicon-user input-group-addon" ></span>
                <input type="text" name="username" required class="form-control" id="inputGroupDefault1" aria-describedby="inputGroupDefault1Status" placeholder="用户名/手机号/邮箱">
            </div>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputGroupDefault1Status" class="sr-only">(success)</span>
        </div>

        <!--密码-->
        <div class="form-group has-default has-feedback">
            <label class="control-label" for="inputGroupDefault2">密码</label>
            <div class="input-group">
                <!--<span class="input-group-addon">&nbsp;P &nbsp;</span>-->
                <span class="glyphicon glyphicon-lock input-group-addon" ></span>
                <input type="password" name="password" required class="form-control" id="inputGroupDefault2" aria-describedby="inputGroupDefault2Status" placeholder="六位以上字母、数字、特殊符号">
            </div>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputGroupDefault2Status" class="sr-only">(success)</span>
        </div>

        <!-- 复选框 -->
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input  type="checkbox" name="agree"> <span>我同意</span>
                </label>
            </div>
        </div>

        <!--验证码-->
        <div class="form-group">
            <img src="<?php echo U('Home/User/vcode');?>" height="45px" />
            <input type="text" name="vcode" placeholder="输入验证码" required><br>
        </div>


        <!--注册登录按钮-->
        <div class="form-group">
            <p><a href="login.html"><button type="button" class="btn btn-primary btn-block" style="background-color: #4285F4;">登录</button></a></p>
            <p><a href="reg.html"><button type="button" class="btn btn-warning btn-block">注册</button>
        </div></a></p>

    </form>
</div>

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