<?php
error_reporting(0);
header("Content-type:text/html;charset=utf-8"); 
include "../public/common/config.inc.php";
$sqlfile = "test.sql";
$sql = file_get_contents($sqlfile);
$arr = split(");", join("",file($sqlfile)));
foreach($arr as $v)
    mysql_query($v); 

//exec(“mysql.exe -h localhost --user=root --password=123 -e 'source test.sql' ”);

echo "<script>alert('导入成功！')</script>";
echo "<h1><a href ='../index.php' target='_blank'>前台首页</a>|<a href ='../admin.php' target='_blank'>管理中心</a></h1>";
	   
?>