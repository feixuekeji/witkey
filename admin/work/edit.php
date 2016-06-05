<?php
error_reporting(0);
include "../../public/common/config.inc.php";
$id=$_GET['id'];
$sqlUser="select * from work where ID={$id}";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>作品修改</title>	
</head>
<body>
	<center>
		<h2>修改作品</h2>
		<form action="update.php" method='post'>
			<table width="600" border="1px" cellspacing="0">
            <tr>
				<td>编号</td>
				<td><?php echo $rowUser['ID'] ?></td>

		</tr>
            
            <tr>
            	<td>作品详情：</td>
            	<td><textarea name='descript' cols="50" rows="8"><?php echo $rowUser['Descript'] ?></textarea></td>
            </tr>
            <tr>
            	<td>任务编号：</td>
            	<td><input type="text" name="taskid" value='<?php echo $rowUser['TaskID'] ?>'></td>
            </tr>
            <tr>
            	<td>用户ID：</td>
            	<td><input type="text" name="userid" value='<?php echo $rowUser['UserID'] ?>'></td>
            </tr>
            <tr>
            	<td>交稿时间：</td>
            	<td><input name="pubtime" type="date" value='<?php echo date('Y-m-d',$rowUser['PubTime']) ?>'></td>
            </tr>
            <tr>
            	<td>作品状态：</td>
            	<td><input type="text" name='status' value='<?php echo $rowUser['Status'] ?>'></td>
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