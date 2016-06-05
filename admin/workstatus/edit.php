<?php
error_reporting(0);
include "../../public/common/config.inc.php";
$id=$_GET['id'];
$sqlUser="select * from workStatus where ID={$id}";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>作品状态修改</title>	
</head>
<body>
	<center>
		<h2>修改作品状态</h2>
		<form action="update.php" method='post'>
			<table width="600" border="1px" cellspacing="0">
            <tr>
				<td>ID</td>
				<td><?php echo $rowUser['ID'] ?></td>

			</tr>
            <tr>
            	<td>作品状态:</td>
            	<td><input type="text" name='workstatus' value='<?php echo $rowUser['Name'] ?>'></td>
            </tr>
           
            <tr>
            	<input type="hidden" name='id' value='<?php echo $id ?>'>
            	<td align='center'><input type="submit" value="修改"></td>
            	<td align='center'><input type="reset" value="重置"></td>
            </tr>      
		</table>
	</form>
		
	</center>
</body>
</html>