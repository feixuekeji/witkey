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
	<title>修改</title>
      <link rel="stylesheet" href="../public/css/index.css">	
</head>
<body>
      <div class="main">
    <?php 
      include "../../public/common/header.php";
     ?> 
  <div class="nav"></div>
	<center>
		<h2>修改用户密码</h2>
		<form action="updatepw.php" method='post'>
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
            	<td>旧密码：</td>
            	<td><input type="password" name='oldpassword' ></td>
            </tr>
            <tr>
                  <td>新密码：</td>
                  <td><input type="password" name='password' ></td>
            </tr>
            <tr>
                  <td>重复密码：</td>
                  <td><input type="password" name='repassword' ></td>
            </tr>
            <tr>
            <td>验证码</td>
            <td><input type="text" id="fcode"  class="span3" placeholder="请输入验证码" nullmsg="请填写验证码" name="fcode"></td>
            
              
           </tr>
                
		</table>
             <p>
           <img src="../login/verify.php" alt="" style='cursor:pointer' onclick="this.src='../login/verify.php?rand='+Math.random()"/><a href="">&nbsp;&nbsp;&nbsp;&nbsp;看不清?再换一张</a></td>
           </p>
            <tr>
                  <input type="hidden" name='id' value='<?php echo $id ?>'>
                  <td align='center'><input type="submit" value="修改"></td>
                  <td align='center'><input type="reset" value="重置"></td>
            </tr>
	</form>
		
	</center>
      <div class="nav"></div>

<?php
include"../../public/common/footer.php";
?>
</div>
</body>
</html>