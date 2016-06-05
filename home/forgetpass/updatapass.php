<?php
header("Content-type:text/html;charset=utf-8");
session_start();
include'../../public/common/config.inc.php';
$password=md5($_POST['password']);
$email=$_SESSION['email'];
$sql="update user set Password='{$password}' where Email='{$email}'";
	if(mysql_query($sql))
	{
		echo "修改成功";
	}
	else
		echo "修改失败";



?>