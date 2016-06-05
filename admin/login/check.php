<?php
include "../../public/common/config.inc.php";
session_start();
$username=$_POST['username'];
$password=md5($_POST['password']);
$sqlAdmin="select * from user where Username='{$username}' and Password='{$password}'";
$rstAdmin=mysql_query($sqlAdmin);
$a=mysql_num_rows($rstAdmin);

if(mysql_num_rows($rstAdmin)){
	$_SESSION['adminname']=$username;
	$_SESSION['adminlogin']=1;
	
	echo "<script>location='../index.php'</script>";
}else{
	echo "<script>alert('用户名或密码错误')</script>";
	echo "<script>location='login.php'</script>";
}
?>