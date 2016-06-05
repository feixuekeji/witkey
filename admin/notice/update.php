<?php
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$id=$_POST['id'];
$noticeDetail=$_POST['noticeDetail'];
$noticeTitle=$_POST['noticeTitle'];


$sql="update notice set noticeTitle='{$noticeTitle}',noticeDetail='{$noticeDetail}' where noticeID={$id}";

	if(mysql_query($sql))
	{
		echo "<script>location='index.php'</script>";
	}
	else
		echo "修改失败！<a href='edit.php?id={$id}'> 返回</a>";



?>