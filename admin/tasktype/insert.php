<?php
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$taskname=$_POST['tasktype'];
$sql="insert into tasktype(Name)values('$taskname')";

	if(mysql_query($sql))
	{
		echo "<script>alert('添加成功！')</script>";
		echo "<script>location='add.php'</script>";
	}
	else
		echo "添加失败！<a href='add.php'> 返回</a>";


?>