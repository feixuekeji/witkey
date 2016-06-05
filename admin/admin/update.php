<?php 
include "../../public/common/config.inc.php";
$password=md5($_POST['password']);

$sqlAdmin="update user set password='{$password}' where Username='admin'";

if(mysql_query($sqlAdmin)){
	echo "<script>alert('修改管理员密码成功！')</script>";
	echo "<script>top.location='../index.php'</script>";
}
 ?>