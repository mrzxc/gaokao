<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- <link href="/gaokao/Public/css/bootstrap.min.css" rel="stylesheet"> -->
    <style >
    .denglu{
      margin-left: 400px;
      display: inline;
    }
    header {
      height: 68px;
    }
    ul{
      height: 68px;
      margin: 0;
      padding: 0;
      list-style: none;
      padding-top: 10px;
    }
    h3{
      color: black;
    }
    p{
      margin: 0;
      padding: 0;
      display: inline;
    }
    li.first{
      float: left;
      position: relative;
      height: 68px;
      padding:0;
      margin:0;
    }
    li.second {
      float: left;
      height: 55px;
      font-family: KaiTi;
      font-size: 40px;
      width: calc(100% - 80px);
      border-bottom: 5px solid #55c28b;
    }
    .tu{
      display: inline;
      margin-top: 10px;
    }
    .biaoti {
      float: left;
    }
    nav{ 
      background-color: #55c28b;
      margin: 0px;
      padding: 0px;
    }
    .navbar-text{
      color:black;
      margin: 0px;
    }
    .status {
      float: right;
    }
    .container-fluid {
      margin-right: 0px;
      font-size: 24px;
    }
    .navbar-nav {
      float: right;
    }
      .form{
        padding-top: 50px;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <header><ul>
    <li class="first"><img src="/gaokao/Public/img/yq.png" width="80" height="50"></li>
    <li class="second"><div class="biaoti">云起高考信息服务平台</div><div class="status"><?php echo ($status); ?></div></li>
  </ul></header>
    <nav class="navbar navbar-static-top " role="navgation">
        <div class="container-fluid container">
          <div id="navbar" class="collapse navbar-collapse ">
            <ul class="nav navbar-nav ">
            <li><a href="" class="navbar-text">招生计划</a></li>
            <li><a href="" class="navbar-text">招生简章</a></li>
            <li><a href="" class="navbar-text">专业信息</a></li>
            <li><a href="" class="navbar-text">高校信息</a></li>
            <li><a href="/gaokao/index.php/Home/Inqure" class="navbar-text">模拟志愿</a></li>
            </ul>
          </div>
        </div>
    </nav>
      <div class="col-md-5 form ">
        <form action="/gaokao/index.php/Home/Register/input" method="post">
        <div class="form-group">
          <label for="username">账号：</label>
          <input type="text" class="form-control" name="username" value="" >
        </div>
        <div class="form-group">
          <label for="password">密码：</label>
          <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
          <label for="phonenumber">手机号：</label>
          <input type="text" class="form-control" name="phonenumber">
        </div>
        <div class="form-group">
          <label for="email">邮箱：</label>
          <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default">提交</button>
        </div>
        </form>
        <a href="/gaokao/index.php/Home/Login/login" class="btn btn-default" role="button">返回登陆</a>
      </div>
      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/gaokao/Public/js/bootstrap.min.js"></script>
  </body>
</html>