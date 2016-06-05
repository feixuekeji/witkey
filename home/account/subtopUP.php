<?php
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
session_start();
$accID=$_SESSION['accID'];
$topUpAmount=$_POST['amount'];
$topUpSubtime=time();


$sql="insert into topUp(accID,topUpAmount,topUpSubtime,topUpStatus)values('$accID','$topUpAmount','$topUpSubtime','0')";

if(mysql_query($sql))
{
	echo "<script>location='index.php'</script>";
}
else
	echo "添加失败！<a href='index.php'> 返回</a>";




?>