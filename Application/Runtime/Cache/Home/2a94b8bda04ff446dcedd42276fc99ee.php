<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>stackfull首页</title>
    <link rel="stylesheet" href="/StackFull/Public/foolish.css" />
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
        <a class="navbar-brand" href="<?php echo U('home/index/index');?>" style="color: #ffffff;">StackFull</a></div>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="active">
            <a class="" href="<?php echo U('home/index/index');?>">StayFoolish</a>
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
          <span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;</span>

          <a href="<?php echo U('Home/User/login');?>"><button type="button" class="btn btn-info">登录</button></a>
          <a href="<?php echo U('Home/User/reg');?>"><button type="button" class="btn btn-warning" href="reg.html">注册</button></a>
      </form>

        </div>

</nav>



<!--stayfoolish页面，求知，问答-->

<div class="container">
    <div class="row">

        <div class="col-xs-10 col-md-9 main">
            <ul class="nav nav-tabs nav-tabs-zen mb10 mt30">
                <li class="active"><a href="#">最新的</a></li>
            </ul>

            <!--主内容，question-->
            <div class="stream-list">
                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes plus hidden-xs">
                            6<small>投票</small>
                        </div>
                        <div class="answers answered">
                            8<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            1024<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li class="pull-right" title="9 收藏">
                                <small class="glyphicon glyphicon-bookmark"></small> 9
                            </li>
                            <li>
                                <a href="#">stackfull</a>
                                <span class="split"></span>
                                <a href="#">5分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="#">PHP 开发中有哪些不好的编程习惯需要避免?</a></h2>
                        <ul class="taglist--inline ib">
                            <li class=""><a class="tag tag-sm" href="#" data-toggle="popover" data-original-title="php" data-id="">php</a></li>
                        </ul>
                    </div>
                </section>
            </div>

            <!--主内容，question-->
            <div class="stream-list ">
                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes plus hidden-xs">
                            6<small>投票</small>
                        </div>
                        <div class="answers answered">
                            8<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            1024<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li class="pull-right" title="9 收藏">
                                <small class="glyphicon glyphicon-bookmark"></small> 9
                            </li>
                            <li>
                                <a href="#">stackfull</a>
                                <span class="split"></span>
                                <a href="#">5分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="#">php如何获取 页面多个相同name的 input 值</a></h2>
                        <ul class="taglist--inline ib">
                            <li class=""><a class="tag tag-sm" href="#" data-toggle="popover" data-original-title="php" data-id="">php</a></li>
                        </ul>
                    </div>
                </section>
            </div>

            <!--主内容，question-->
            <div class="stream-list ">
                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes plus hidden-xs">
                            6<small>投票</small>
                        </div>
                        <div class="answers answered">
                            8<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            1024<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li class="pull-right" title="9 收藏">
                                <small class="glyphicon glyphicon-bookmark"></small> 9
                            </li>
                            <li>
                                <a href="#">stackfull</a>
                                <span class="split"></span>
                                <a href="#">5分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="#">thinkphp中的配置：'DEFAULT_CHARSET' 是在哪些地方生效的？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class=""><a class="tag tag-sm" href="#" data-toggle="popover" data-original-title="php" data-id="">php</a></li>
                            <li class=""><a class="tag tag-sm" href="#" data-toggle="popover" data-original-title="thinkphp" data-id="">thinkphp</a></li>
                        </ul>
                    </div>
                </section>
            </div>


            <!--主内容，question-->
            <div class="stream-list ">
                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes plus hidden-xs">
                            6<small>投票</small>
                        </div>
                        <div class="answers answered">
                            8<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            1024<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li class="pull-right" title="9 收藏">
                                <small class="glyphicon glyphicon-bookmark"></small> 9
                            </li>
                            <li>
                                <a href="#">stackfull</a>
                                <span class="split"></span>
                                <a href="#">5分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="#">【大神在哪里】mysql并发的问题，能不能有办法避免sql出错的情况，数据的完整性怎才能做到……？</a></h2>
                        <ul class="taglist--inline ib">
                            <li class=""><a class="tag tag-sm" href="#" data-toggle="popover" data-original-title="php" data-id="">php</a></li>
                            <li class=""><a class="tag tag-sm" href="#" data-toggle="popover" data-original-title="mysql" data-id="">mysql</a></li>
                            <li class=""><a class="tag tag-sm" href="#" data-toggle="popover" data-original-title="sql" data-id="">sql</a></li>
                        </ul>
                    </div>
                </section>
            </div>

            <!--主内容，question-->
            <div class="stream-list ">
                <section class="stream-list__item">
                    <div class="qa-rank">
                        <div class="votes plus hidden-xs">
                            6<small>投票</small>
                        </div>
                        <div class="answers answered">
                            8<small>回答</small>
                        </div>
                        <div class="views hidden-xs">
                            1024<small>浏览</small>
                        </div>
                    </div>
                    <div class="summary">
                        <ul class="author list-inline">
                            <li class="pull-right" title="9 收藏">
                                <small class="glyphicon glyphicon-bookmark"></small> 9
                            </li>
                            <li>
                                <a href="#">stackfull</a>
                                <span class="split"></span>
                                <a href="#">5分钟前回答</a>
                            </li>
                        </ul>
                        <h2 class="title"><a href="#">PHP 开发中有哪些不好的编程习惯需要避免?</a></h2>
                        <ul class="taglist--inline ib">
                            <li class=""><a class="tag tag-sm" href="#" data-toggle="popover" data-original-title="php" data-id="">php</a></li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <!--侧边栏-->
        <div class="col-xs-12 col-md-3 side mt30">
            <div class="side-ask alert alert-warning">
                <p>StackFull 是一个程序员的求知、求职的社区。</p>
                <div class="mt10 side-system-notice">
                    <i class="fa fa-bullhorn pull-left"></i>
                    <a class="side-system-notice--title" href="#">The good seaman is known in bad weather.</a>
                </div>
            </div>
        </div>

        <!--排行榜-->
        <div class="col-xs-12 col-md-3 side mt30">

            <div class="list-group">
                <a href="#" class="list-group-item active">
                    排行榜
                </a>
                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item">Morbi leo risus</a>
                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>

        </div>


    </div>
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