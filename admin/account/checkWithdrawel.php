<?php
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$id=$_GET['id'];
$accID=$_GET['accID'];
$amount=$_GET['amount'];
$sql1="update withdrawel set withdrawelStatus='1' wherewithdrawelID={$id}";
$sql2="update account set accBalance=accBalance-{$amount} where accID={$id}";

	if(mysql_query($sql1)&&mysql_query($sql2))
	{
		echo "<script>alert('修改成功！')</script>";
		echo "<script>location='checkWithdrawel.php'</script>";
	}
	else
		echo "修改失败！";



?>