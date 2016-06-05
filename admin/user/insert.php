<?php
header("Content-type:text/html;charset=utf-8");
include'../../public/common/config.inc.php';
$username=$_POST['username'];
$password=md5($_POST['password']);
$repassword=md5($_POST['repassword']);
$realname=$_POST['realname'];
$email=$_POST['email'];
$mobilephone=$_POST['mobilephone'];
$QQ=$_POST['QQ'];
$regtime=time();

$sql="insert into user(Username,Password,Realname,Regtime,Email,Mobilephone,QQ)values('$username','$password','$realname','$regtime','$email','$mobilephone','$QQ')";


if($password===$repassword)
{
	if(mysql_query($sql))
	{
		echo "<script>location='add.php'</script>";
	}
	else
		echo "添加失败！<a href='add.php'> 返回</a>";

}
else
echo "两次密码不一致，请重新输入！<a href='add.php'> 返回</a>"


?>