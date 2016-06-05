<?php
include "../../public/common/config.inc.php";
$id=$_GET['id'];
$sqlUser="select * from user where ID={$id}";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);
?>
<!doctype html>
<html>
<head>
      <meta charset="UTF-8">
      <title>用户修改</title>     
</head>
<body>
      <center>
            <h2>修改用户</h2>
            <form action="update.php" method='post'>
                  <table width="400" border="1px" cellspacing="0">
            <tr>
                        <td>ID</td>
                        <td><?php echo $rowUser['ID'] ?></td>

                  </tr>
            <tr>
                  <td>用户名:</td>
                  <td><input type="text" name='username' value='<?php echo $rowUser['Username'] ?>'></td>
            </tr>
            <tr>
                  <td>密码：</td>
                  <td><input type="password" name='password' value='<?php echo $rowUser['Password'] ?>'></td>
            </tr>
            <tr>
                  <td>姓名：</td>
                  <td><input type="text" name='realname' value='<?php echo $rowUser['Realname'] ?>'></td>
            </tr>
            <tr>
                  <td>E-mail：</td>
                  <td><input type="email" name='email' value='<?php echo $rowUser['Email'] ?>'></td>
            </tr>
            <tr>
                  <td>手机号码：</td>
                  <td><input type="text" name='mobilephone' value='<?php echo $rowUser['Mobilephone'] ?>'></td>
            </tr>
            <tr>
                  <td>QQ：</td>
                  <td><input type="text" name='QQ' value='<?php echo $rowUser['QQ'] ?>'></td>
            </tr>
            <tr>
                  <td>管理员：</td>
                  <td><input type="text" name='admin' value='<?php echo $rowUser['admin'] ?>'></td>
            </tr>
            <tr>