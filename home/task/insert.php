<?php
header("Content-type:text/html;charset=utf-8");
session_start();
include'../../public/common/config.inc.php';
$taskname=$_POST['taskname'];
$descript=$_POST['descript'];
$typeid=$_POST['typeid'];
$userid=$_SESSION['id'];
$price=$_POST['price'];
$deadtime=strtotime($_POST['deadtime']);
$pubtime=time();

$sql="insert into task(Name,TypeID,UserID,Price,Descript,PubTime,DeadTime,Status)values('$taskname','$typeid','$userid','$price','$descript','$pubtime','$deadtime','0')";

	if(mysql_query($sql))
	{
	    $id=mysql_insert_id();
		echo "<script>alert('添加成功！')</script>";
	    echo "<script>location='task.php?id={$id}'</script>";
	}
	else
		echo "添加失败！<a href='add.php'> 返回</a>";


?>