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


<!--注册登录页面二级导航-->
<div class="user-nav">
<ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="reg.html">注册</a></li>
    <li role="presentation"><a href="login.html">登录</a></li>
</ul>
</div>

<!--注册页面表单-->
<div class="form_user">
    <form method="post" action="<?php echo U('Home/User/reg_submit');?>" >

        <!--用户名-->
        <div class="form-group has-default has-feedback">
            <label class="control-label" for="inputGroupDefault1">用户名</label>
            <div class="input-group">
                <!--<span class="input-group-addon">&nbsp;U&nbsp;</span>-->
                <span class="glyphicon glyphicon-user input-group-addon" ></span>
                <input type="text" name="uname" required class="form-control" id="inputGroupDefault1" aria-describedby="inputGroupDefault1Status" placeholder="字母、数字，用户名唯一">
            </div>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputGroupDefault1Status" class="sr-only">(success)</span>
        </div>

        <!--手机号-->
        <div class="form-group has-default has-feedback">
            <label class="control-label" for="inputGroupDefault2">手机号</label>
            <div class="input-group">
                <!--<span class="input-group-addon">&nbsp;M&nbsp;</span>-->
                <span class="glyphicon glyphicon-phone input-group-addon"></span>
                <input type="text" name="mobile" required class="form-control" id="inputGroupDefault2" aria-describedby="inputGroupDefault2Status" placeholder="11位数字">
            </div>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputGroupDefault2Status" class="sr-only">(success)</span>
        </div>

        <!--邮箱-->
        <div class="form-group has-default has-feedback">
            <label class="control-label" for="inputGroupDefault3"> Email</label>
            <div class="input-group">
                <!--<span class="input-group-addon">&nbsp;@</span>-->
                <span class="glyphicon glyphicon-envelope input-group-addon"></span>
                <input type="email" name="email" required class="form-control" id="inputGroupDefault3" aria-describedby="inputGroupDefault3Status" placeholder="sf@stackfull.com">
            </div>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputGroupDefault3Status" class="sr-only">(success)</span>
        </div>

        <!--密码-->
        <div class="form-group has-default has-feedback">
            <label class="control-label" for="inputGroupDefault4">密  码</label>
            <div class="input-group">
                <!--<span class="input-group-addon">&nbsp;P &nbsp;</span>-->
                <span class="glyphicon glyphicon-lock input-group-addon" ></span>
                <input type="password" name="password" required class="form-control" id="inputGroupDefault4" aria-describedby="inputGroupDefault4Status" placeholder="不少于六位，至少有两种字母、数字和特殊符号等">
            </div>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputGroupDefault4Status" class="sr-only">(success)</span>
        </div>

        <!--确认密码-->
        <div class="form-group has-default has-feedback">
            <label class="control-label" for="inputGroupDefault5">确认密码</label>
            <div class="input-group">
                <!--<span class="input-group-addon">&nbsp;P &nbsp;</span>-->
                <span class="glyphicon glyphicon-lock input-group-addon" ></span>
                <input type="password" name="passwords" required class="form-control" id="inputGroupDefault5" aria-describedby="inputGroupDefault5Status" placeholder="确认输入密码">
            </div>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputGroupDefault5Status" class="sr-only">(success)</span>
        </div>

        <!-- 复选框 -->
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" required name="agree"> <span>我同意</span>
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
            <p><a href="reg.html"><button type="button" class="btn btn-warning btn-block">注册</button></a></p>
            <p><a href="login.html"><button type="button" class="btn btn-primary btn-block" style="background-color: #4285F4;">登录</button></a></p>
        </div>

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