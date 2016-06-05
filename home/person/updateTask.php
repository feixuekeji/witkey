<?php
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$id=$_POST['id'];
$taskname=$_POST['taskname'];
$descript=$_POST['descript'];
$typeid=$_POST['typeid'];
$price=$_POST['price'];
$status=$_POST['status'];
$deadtime=strtotime($_POST['deadtime']);

$sql="update task set Name='{$taskname}',TypeID='{$typeid}',Price='{$price}',Descript='{$descript}',DeadTime='{$deadtime}',Status='{$status}' where ID={$id}";

	if(mysql_query($sql))
	{
		echo "<script>alert('修改成功！')</script>";
		echo "<script>location='indexTask.php'</script>";
	}
	else
		echo "修改失败！<a href='editTask.php?id={$id}'> 返回</a>";



?>