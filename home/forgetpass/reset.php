<?php
header("Content-type:text/html;charset=utf-8");
session_start();
include_once("../../public/common/config.inc.php");
$token = stripslashes(trim($_GET['token']));
$email = stripslashes(trim($_GET['email']));
$sql = "select * from user where Email='$email'";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
if($row){
	$mt = md5($row['ID'].$row['Username'].$row['Password']);
	if($mt==$token){
		if(time()-$row['repasstime']>24*60*60){
			$msg = '该链接已过期！';
		}else{
			//重置密码...
      $_SESSION['email']=$email;
			$msg = '
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>找回密码</title>
<link href="../login/images/base.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="../login/html5shiv.js"></script>
<![endif]-->
</head>
<body id="login_body">
<section class="reg_box">
	<form name="form1" class="login-form" action="updatapass.php" method="post">
                   		<div class="logo_icon"></div>
						<div class="logo_text">请输入新密码</div>
       <div class="form_body">
          
          <div class="control-group">
            <label class="control-label" for="inputPassword">新密 码</label>
            <div class="controls">
              <input type="password" id="password"  class="span3" placeholder="请输入新密码" nullmsg="请填写密码" name="password">
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="repassword">确认密码</label>
            <div class="controls">
              <input type="password" id="repassword" class="span3" placeholder="请再次输入密码" nullmsg="请填确认密码" name="repassword">
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
            <img src="../login/verify.php" style="cursor:pointer" onclick="this.src=\'../login/verify.php?rand=\'+Math.random()"/><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;看不清?再换一张</a> 
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
     var password = document.getElementById(\'password\').value;
     var repassword = document.getElementById(\'repassword\').value;
     var fcode = document.getElementById(\'fcode\').value;
      if(password.length<3|| password.length>16) 
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
';
		}
	}else{
		$msg =  '无效的链接<br/>'.$mt.'<br/>'.$token;
	}
}else{
	$msg =  '错误的链接！';	
}
echo $msg;
?>