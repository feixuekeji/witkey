<?php
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$taskname=$_POST['taskname'];
$descript=$_POST['descript'];
$typeid=$_POST['typeid'];
$userid=$_POST['userid'];
$price=$_POST['price'];
$status=$_POST['status'];
$deadtime=strtotime($_POST['deadtime']);
$pubtime=time();
$sql="insert into task(Name,TypeID,UserID,Price,Descript,PubTime,DeadTime,Status)values('$taskname','$typeid','$userid','$price','$descript','$pubtime','$deadtime','$status')";

	if(mysql_query($sql))
	{
		echo "<script>alert('添加成功！')</script>";
		echo "<script>location='add.php'</script>";
	}
	else
		echo "添加失败！<a href='add.php'> 返回</a>";


?>