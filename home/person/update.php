<?php
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$id=$_POST['id'];
$username=$_POST['username'];
$realname=$_POST['realname'];
$email=$_POST['email'];
$mobilephone=$_POST['mobilephone'];
$QQ=$_POST['QQ'];

$sql="update user set Username='{$username}',Realname='{$realname}',Email='{$email}',Mobilephone='{$mobilephone}',QQ='{$QQ}' where ID={$id}";

	if(mysql_query($sql))
	{
		echo "<script>location='index.php'</script>";
	}
	else
		echo "修改失败！<a href='edit.php?id={$id}'> 返回</a>";



?>