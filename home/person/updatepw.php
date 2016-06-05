<?php
error_reporting(0);
session_start();
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$id=$_SESSION['id'];
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);
$fcode=strtolower($_POST['fcode']);
$vcode=strtolower($_SESSION['vcode']);

if($fcode===$vcode){
if($password===$repassword)
{
	$sql="update user set Password='{$password}' where ID={$id}";

	if(mysql_query($sql))
	{
		echo "<script>alert('修改成功！')</script>";
		echo "<script>location='{$_SESSION[url]}'</script>";
	}	
}
else{
echo "<script>alert('两次密码不一致，请重新输入！')</script>";
    $_SESSION['httpref']=$_SESSION['url'];
	
	echo "<script>location='password.php'</script>";
}
	
}
else{
echo "<script>alert('验证码错误！')</script>";
    $_SESSION['httpref']=$_SESSION['url'];
	
	echo "<script>location='password.php'</script>";
	
}





?>