<?php
error_reporting(0);
//屏蔽报错
header("Content-type:text/html;charset=utf-8"); 
//获取表单数据
$host=$_POST['host'];
$user=$_POST['user'];
$password=$_POST['password'];
$database=$_POST['database'];

$admin=$_POST['admin'];
$adminpassword=md5($_POST['adminpassword']);
$regtime=time();
mysql_connect($host,$user,$password);
mysql_query("create database if not exists {$database}");
mysql_select_db($database);
mysql_query('set names utf8');



//sql语句
$sql1="create table if not exists user(
ID int unsigned not null auto_increment,
Username varchar(50) not null,
Password varchar(50)not null,
Realname varchar(50) ,
Regtime int not null,
Email varchar(40),
Mobilephone varchar(20) ,
QQ varchar(20),
admin tinyint not null,
repasstime int,
primary key(ID)
)";
$sql2="create table if not exists task(
ID int unsigned not null auto_increment,
Name varchar(50) not null,
TypeID int not null,
UserID int not null,
Price float not null,
Descript text not null,
PubTime int not null,
DeadTime int,
Status int not null,
primary key(ID)
)";
$sql3="create table if not exists tasktype(
ID int unsigned not null auto_increment,
Name varchar(50),
primary key(ID)
)";
$sql4="create table if not exists work(
ID int unsigned not null auto_increment,
TaskID int not null,
UserID int not null,
Descript text not null,
PubTime int not null,
Status int not null,
primary key(ID)
)";
$sql5="create table if not exists message(
ID int unsigned not null auto_increment,
SendID int not null,
AcceptID int not null,
Message text not null,
PubTime int not null,
primary key(ID)
)";
$sql6="create table if not exists account(
accID int unsigned not null auto_increment,
accName varchar(50),
accCardID varchar(50) not null,
accBalance float not null,
UID int not null,
primary key(accID)
)";
$sql7="create table if not exists topUp(
topUpID int unsigned not null auto_increment,
accID int not null,
topUpAmount float not null,
topUpSubtime int not null,
topUpStatus tinyint not null,
primary key(topUpID)
)";
$sql8="create table if not exists withdrawel(
withdrawelID int unsigned not null auto_increment,
accID int not null,
withdrawelAmount float not null,
withdrawelSubtime int not null,
withdrawelStatus tinyint not null,
primary key(withdrawelID)
)";
$sql9="create table if not exists notice(
noticeID int unsigned not null auto_increment,
noticeUname varchar(50) not null,
noticeTitle varchar(50) not null,
noticeDetail text not null,
noticeTime int not null,
primary key(noticeID)
)";
//管理员
$adminsql="insert into user(Username,Password,Regtime,admin) values('{$admin}','{$adminpassword}','{$regtime}','1')";
$adminacc="insert into account(accName,accCardID,accBalance,UID)values('{$admin}','$email','0','1')";
//创建表  写入数据库
if(mysql_query($sql1)&&mysql_query($sql2)&&mysql_query($sql3)&&mysql_query($sql4)&&mysql_query($sql5)&&mysql_query($sql6)&&mysql_query($sql7)&&mysql_query($sql8)&&mysql_query($sql9))
  {
	echo "<h1>数据库安装成功</h1>";
	echo "<a href ='http://127.0.0.1/phpmyadmin/index.php' target='_blank'>查看数据库</a>";
	//数据库信息写入配置文件
	$file="../public/common/config.inc.php";
    $fr=fopen($file,'w');
    fwrite($fr,"<?php
    mysql_connect('{$host}','{$user}','{$password}');
    mysql_select_db('{$database}');
    mysql_query('set names utf8');
    ?>");
  }
else
	echo "<h1>数据库安装失败</h1>";

if(mysql_query($adminsql)&&mysql_query($adminacc))
echo "<h1><a href ='testsql.php' target='_blank'>导入测试数据</a></h1><h1><a href ='../index.php' target='_blank'>前台首页</a></h1><h1><a href ='../admin.php' target='_blank'>管理中心</a></h1>";


?>