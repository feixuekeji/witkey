<?php
error_reporting(0);
session_start();
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);
$realname=$_POST['realname'];
$email=$_POST['email'];
$mobilephone=$_POST['mobilephone'];
$QQ=$_POST['QQ'];
$regtime=time();
$fcode=strtolower($_POST['fcode']);
$vcode=strtolower($_SESSION['vcode']);

if($fcode===$vcode){
if($password===$repassword)
{
$sql="insert into user(Username,Password,Realname,Regtime,Email,Mobilephone,QQ)values('$username','$password','$realname','$regtime','$email','$mobilephone','$QQ')";
	if(mysql_query($sql))
	{
	    $_SESSION['username']=$username;
		$_SESSION['login']=1;
		$_SESSION['id']=mysql_insert_id();
		
	}
	//创建账户
$sql1="insert into account(accName,accCardID,accBalance,UID)values('$username','$email','0','{$_SESSION['id']}')";
	if(mysql_query($sql1))
	{
		$_SESSION['accID']=mysql_insert_id();
		echo "<script>alert('注册成功！')</script>";
		echo "<script>location='{$_SESSION[url]}'</script>";
	}

}
else{
echo "<script>alert('两次密码不一致，请重新输入！')</script>";
    $_SESSION['httpref']=$_SESSION['url'];
	
	echo "<script>location='register.php'</script>";
}
	
}
else{
echo "<script>alert('验证码错误！')</script>";
    $_SESSION['httpref']=$_SESSION['url'];
	
	echo "<script>location='register.php'</script>";
	
}





?>