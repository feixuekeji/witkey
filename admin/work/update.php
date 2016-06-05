<?php
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$id=$_POST['id'];
$descript=$_POST['descript'];
$taskid=$_POST['taskid'];
$userid=$_POST['userid'];
$status=$_POST['status'];
$pubtime=strtotime($_POST['pubtime']);

$sql="update work set TaskID='{$taskid}',UserID='{$userid}',Descript='{$descript}',PubTime='{$pubtime}',Status='{$status}' where ID={$id}";

	if(mysql_query($sql))
	{
		echo "<script>alert('修改成功！')</script>";
		echo "<script>location='index.php'</script>";
	}
	else
		echo "修改失败！<a href='edit.php?id={$id}'> 返回</a>";



?>