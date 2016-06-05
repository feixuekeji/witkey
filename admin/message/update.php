<?php
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$id=$_POST['id'];
$detail=$_POST['detail'];
$taskid=$_POST['taskid'];
$userid=$_POST['userid'];

$pubtime=strtotime($_POST['pubtime']);

$sql="update message set UserID='{$userid}',TaskID='{$taskid}',Detail='{$descript}',PubTime='{$pubtime}' where ID={$id}";

	if(mysql_query($sql))
	{
		echo "<script>alert('修改成功！')</script>";
		echo "<script>location='index.php'</script>";
	}
	else
		echo "修改失败！<a href='edit.php?id={$id}'> 返回</a>";



?>