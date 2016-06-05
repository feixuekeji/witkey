<?php
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$id=$_POST['id'];
$taskstatus=$_POST['taskstatus'];
$sql="update taskStatus set Name='{$taskstatus}' where ID={$id}";

	if(mysql_query($sql))
	{
		echo "<script>alert('修改成功！')</script>";
		echo "<script>location='index.php'</script>";
	}
	else
		echo "修改失败！<a href='edit.php?id={$id}'> 返回</a>";



?>