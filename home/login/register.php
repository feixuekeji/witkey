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
<title>会员注册</title>
<link href="images/base.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="images/html5shiv.js"></script>
<![endif]-->
</head>
<body id="login_body">
<div class="login_top_btn"><a class="btn" href="login.php">立即登录</a></div>
<section class="reg_box">
	<form name="form1" class="login-form" action="regCheck.php" method="post">
                   		<div class="logo_icon"></div>
						<div class="logo_text">会员注册</div>
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
              <input type="password" id="password"  class="span3" placeholder="请输入密码" nullmsg="请填写密码" name="password">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="repassword">确认密码</label>
            <div class="controls">
              <input type="password" id="repassword" class="span3" placeholder="请再次输入密码" nullmsg="请填确认密码" name="repassword">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="inputEmail">邮箱</label>
            <div class="controls">
              <input type="email" id="email" class="span3" placeholder="请输入电子邮件" nullmsg="请填写邮箱" value="" name="email">
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
              <button type="submit" class="btn btn-large" onclick="javascript:return check();window.close();">注 册</button>
            </div>
          </div>
      </div>
    </form>
    <script language="javascript">
    function check(){
     var password = document.getElementById('password').value;
     var repassword = document.getElementById('repassword').value;
     var username = document.getElementById('username').value;
     var fcode = document.getElementById('fcode').value;
     var mail = document.getElementById('email').value;
     var pattern  = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
     flag = pattern.test(mail)
     if(username.length<3|| username.length>16) 
       {  
           alert("用户名长度须在3-16之间!");
                form1.username.select();
                return false;
       }
       else if(password.length<3|| password.length>16) 
       {  
           alert("密码长度须在3-16之间!");
                form1.password.select();
                return false;
       }
       else if(password!=repassword){
     alert("两次密码不一致!");
     form1.repassword.select();
      return false;
     }
     else if (!flag) {
     alert("请输入正确的邮箱地址！");
     form1.email.select();
      return false;
     }
      
       else if(fcode.length<4){
     alert("请输入验证码！");
     form1.fcode.select();
      return false;
     }  
    }
    
    </script>
</section>
</body>
</html>