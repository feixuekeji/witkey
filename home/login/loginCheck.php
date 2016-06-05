<?php
session_start();
error_reporting(0);
header('content-type:text/html;charset=utf-8');
include '../../public/common/config.inc.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$fcode=strtolower($_POST['fcode']);
$vcode=strtolower($_SESSION['vcode']);



$sqlUser="select * from user where Username='{$username}' and Password='{$password}'";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);


if($fcode===$vcode){
 if(mysql_num_rows($rstUser)){
	$_SESSION['id']=$rowUser['ID'];
	$_SESSION['username']=$username;
	$_SESSION['login']=1;
	echo "<script>alert('登录成功！')</script>";

	$sqlacc="select * from account where UID='{$_SESSION['id']}'";
	$rstacc=mysql_query($sqlacc);
	$rowacc=mysql_fetch_assoc($rstacc);
	$_SESSION['accID']=$rowacc['accID'];

	echo "<script>location='{$_SESSION[url]}'</script>";
}
 else{
    echo "<script>alert('用户名或密码错误！')</script>";
	$_SESSION['httpref']=$_SESSION['url'];
	echo "<script>location='login.php'</script>";
}
	
}else{
    echo "<script>alert('验证码错误！')</script>";
    $_SESSION['httpref']=$_SESSION['url'];
	
	echo "<script>location='login.php'</script>";
	}

?>