<?php
session_start();
include "../../public/common/config.inc.php";
$id=$_SESSION['id'];
$sqlUser="select * from user where ID={$id}";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>用户修改</title>
      <link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
      <div class="main">
    <?php 
      include "../../public/common/header.php";
     ?> 
  <div class="nav"></div>
	<center>
		<h2>修改用户</h2>
		<form action="update.php" method='post'>
			<table width="400"  cellspacing="0">
            <tr>
				<td>ID</td>
				<td><?php echo $rowUser['ID'] ?></td>

			</tr>
            <tr>
            	<td>用户名:</td>
            	<td><input type="text" name='username' value='<?php echo $rowUser['Username'] ?>'></td>
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
            	<input type="hidden" name='id' value='<?php echo $id ?>'>
            	<td align='center'><input type="submit" value="修改"></td>
            	<td align='center'><input type="reset" value="重置"></td>
            </tr>      
		</table>
	</form>
		
	</center>
      <div class="nav"></div>

<?php
include"../../public/common/footer.php";
?>
</div>
</body>
</html>