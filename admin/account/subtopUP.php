<?php
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$accID=$_POST['accID'];
$amount=$_POST['amount'];
$topUpSubtime=time();


$sql1="insert into topUp(accID,topUpAmount,topUpSubtime,topUpStatus)values('$accID','$topUpAmount','$topUpSubtime','1')";
$sql2="update account set accBalance=accBalance+{$amount} where accID={$id}";
if(mysql_query($sql))
{
	echo "<script>location='index.php'</script>";
}
else
	echo "添加失败！<a href='index.php'> 返回</a>";




?>