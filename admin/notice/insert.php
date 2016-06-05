<?php
header("Content-type:text/html;charset=utf-8");
session_start();
include'../../public/common/config.inc.php';
$noticeDetail=$_POST['noticeDetail'];
$noticeTitle=$_POST['noticeTitle'];
$noticeUname=$_SESSION['adminname'];
$noticeTime=time();

$sql="insert into notice(noticeUname,noticeTitle,noticeDetail,noticeTime)values('$noticeUname','$noticeTitle','$noticeDetail','$noticeTime')";

	if(mysql_query($sql))
	{
		echo "<script>location='index.php'</script>";
	}
	else
		echo "添加失败！<a href='add.php'> 返回</a>";

?>