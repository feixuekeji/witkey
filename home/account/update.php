<?php
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$id=$_POST['id'];
$accName=$_POST['accName'];
$accCardID=$_POST['accCardID'];


$sql="update account set accName='{$accName}',accCardID='{$accCardID}' where accID={$id}";

	if(mysql_query($sql))
	{
		echo "<script>location='index.php'</script>";
	}
	else
		echo "修改失败！<a href='edit.php?id={$id}'> 返回</a>";



?>