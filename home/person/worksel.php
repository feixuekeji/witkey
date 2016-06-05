<?php
//error_reporting(0);
header('content-type:text/html;charset=utf-8');
include "../../public/common/config.inc.php";
$id=$_POST['workid'];
$status=$_POST['status'];

$sql="update work set Status='{$status}' where ID={$id}";

	if(mysql_query($sql))
	{
		echo "<script>alert('修改成功！')</script>";
		echo "<script>location='workrec.php'</script>";
	}
	else
		echo "修改失败！<a href='workrec.php'> 返回</a>";



?>