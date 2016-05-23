<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="/gaokao/Public/css/bootstrap.min.css" rel="stylesheet">
    <style >
    .denglu{
      margin-left: 400px;
      display: inline;
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
    .status {
      float: right;
    }
    .form{
      margin-top: 50px;
      border-color: #55c28b;
    }
    .green {
      height: 80px;
      background-color: #55c28b;
    }
    #log {
      margin-left: 35%;
      margin-right: 3%;
    }
    .mid {
      width: 80%;
      height: 80px;
      border: 3px solid #55c28b;
      margin-left: 10%;
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
    <div class="green"></div>
    <div class="col-md-4 col-md-offset-3 form">
      <form class="form-horizontal" id="logfm" action="/gaokao/index.php/Home/Login/addData" method="post">
        <div class="form-group">
          <label class="col-md-3" for="name">姓名</label>
          <div class="col-md-4">
            <input class="form-control" name="name" type="text">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-3" >
            <p>性别</p>
          </div>
          <div class="radio col-md-3">
            <label>
            <input type="radio" name="sex" value="1">
            男
            </label>
          </div>
          <div class="radio col-md-3">
            <label>
            <input type="radio" name="sex" value="0">
            女
            </label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3" for="year">生日</label>
          <div class="col-md-3">
            <select id="year" class="form-control" name="year">
              <option selected value="">请选择</option>
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
            </select>
          </div>
          <div class="col-md-3">
            <select id="month" class="form-control" name="month">
              <option selected value="">请选择</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
            </select>
          </div>
          <div class="col-md-3">
            <select id="day" class="form-control" name="day" >

            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-3" >
            <p>考生类型</p>
          </div>
          <div class="radio col-md-3">
            <label>
              <input type="radio" name="type" value="art">
              文科
            </label>
          </div>
          <div class="radio col-md-3">
            <label>
              <input type="radio" name="type" value="science">
              理科
            </label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3" for="province">省份</label>
          <div class="col-md-4">
            <select id="province" class="form-control" name="province">
              <option value="10000">上海</option>
              <option value="10001">云南</option>
              <option value="10002">内蒙古</option>
              <option value="10003">北京</option>
              <option value="10004">吉林</option>
              <option value="10005">四川</option>
              <option value="10006">天津</option>
              <option value="10007">宁夏</option>
              <option value="10008">安徽</option>
              <option value="10009">山东</option>
              <option value="10010">山西</option>
              <option value="10011">广东</option>
              <option value="10012">广西</option>
              <option value="10013">新疆</option>
              <option value="10014">江苏</option>
              <option value="10015">江西</option>
              <option value="10016">河北</option>
              <option value="10017">河南</option>
              <option value="10018">浙江</option>
              <option value="10019">海南</option>
              <option value="10020">香港</option>
              <option value="10021">湖北</option>
              <option value="10022">湖南</option>
              <option value="10023">甘肃</option>
              <option value="10024">福建</option>
              <option value="10025">西藏</option>
              <option value="10026">贵州</option>
              <option value="10027">辽宁</option>
              <option value="10028">重庆</option>
              <option value="10029">陕西</option>
              <option value="10030">青海</option>
              <option value="10031">黑龙江</option>
              <option value="10145">澳门</option>
              <option value="10146">台湾</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3" for="city">市</label>
          <div class="col-md-4">
            <input class="form-control" name="city" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3" for="school">毕业学校</label>
          <div class="col-md-4">
            <input class="form-control" name="school" type="text">
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <button class="form-control col-md-2" type="submit" id="log">提交</button>
        </div>
      </form>
    </div>
    <script src="/gaokao/Public/js/jquery.min.js"></script>
    <script>
    $year = $("#year")
    $month = $("#month")
    $day = $("#day")
    $option = $("<option>")
    $year.change(birthdayChange)
    $month.change(birthdayChange)
    function birthdayChange(){
      $day.html("")
      switch ($month.val()) {
        case '2':
          if ($year.val()%400==0 || $year.val()%4==0 && $year.val()%100!=0) {
          appendOption(29)
          }else{
            appendOption(28)
          }
        break;
        case '4':
        case '6':
        case '9':
        case '11':
        appendOption(30)
        break;
        default:
        appendOption(31)
      }
    }
    function appendOption(n){
      for (var i = 0; i < n; i++) {
          $option = $("<option>")
          $option.html(i+1).attr('value', i+1).appendTo("#day")
      };
    }

    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>