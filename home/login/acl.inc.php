<?php 
error_reporting(0);
session_start();
if(!$_SESSION['login']){
	echo "<script>alert('您还未登录，请先登录或注册！')</script>";
	echo "<script>location='/home/login/login.php'</script>";
}
 ?>