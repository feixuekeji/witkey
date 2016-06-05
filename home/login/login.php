<?php 
error_reporting(0);
session_start();
$url=$_SERVER[HTTP_REFERER];

if($_SESSION['httpref']){
  $_SESSION['url']=$_SESSION['httpref'];
}else{
  $_SESSION['url']=$url;
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
<title>会员登录</title>
<link href="images/base.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="images/html5shiv.js"></script>
<![endif]-->
</head>
<body>
<div class="login_top_btn"><a class="btn" href="register.php">新用户注册</a></div>
<section class="reg_box">
	<form class="login-form" action="loginCheck.php" method="post">
                   		<div class="logo_icon"></div>
						<div class="logo_text">会员登录</div>
       <div class="form_body">
          <div class="control-group">
            <label class="control-label" for="username">用户名</label>
            <div class="controls">
              <input type="text" id="username" class="span3" placeholder="请输入用户名" nullmsg="请填写用户名" value="" name="username">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputPassword">密 码</label>
            <div class="controls">
              <input type="password" id="inputPassword"  class="span3" placeholder="请输入密码" nullmsg="请填写密码" name="password">
            </div>
          </div>     
          <div class="control-group">
            <label class="control-label" for="fcode">验证码</label>
            <div class="controls">
              <input type="text" id="fcode"  class="span3" placeholder="请输入验证码" nullmsg="请填写验证码" name="fcode">
            </div>
          </div>  
          <div class="control-group">
            <label class="control-label" for="fcode">&nbsp;</label>
            <div class="controls">
              <img src="verify.php" alt="" style='cursor:pointer' onclick="this.src='verify.php?rand='+Math.random()"/><a href="">&nbsp;&nbsp;&nbsp;&nbsp;看不清?再换一张</a>
            </div>
      
            
          </div>   
    

          <div class="control-group">
          	<label class="control-label">&nbsp;</label>
            <div class="controls">
              <button type="submit" class="btn btn-large">登 录</button>
              <a href="../forgetpass/forget.php">&nbsp;&nbsp;忘记密码</a>
            </div>
          </div>
      </div>
    </form>
</section>
</body>
</html>