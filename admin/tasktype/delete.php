<?php
header('content-type:text/html;charset=utf-8');
include "../../public/common/config.inc.php";
$id=$_GET['id'];
$sql="delete from tasktype where ID={$id}";
if(mysql_query($sql)){
	echo "<script>alert('删除成功！')</script>";
	echo "<script>location='index.php'</script>";
}
else{
	echo "<script>alert('删除失败！！！')</script>";
	echo "<script>location='index.php'</script>";
}


?>