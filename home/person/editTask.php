<?php
error_reporting(0);
include "../../public/common/config.inc.php";
$id=$_GET['id'];
$sqlUser="select * from task where ID={$id}";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>任务修改</title>	
      <script type="text/javascript" charset="utf-8" src="../../public/ueditor/ueditor.config.js"></script>
     <script type="text/javascript" charset="utf-8" src="../../public/ueditor/ueditor.all.min.js"> </script>
     <link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
      <div class="main">
    <?php 
      include "../../public/common/header.php";
     ?> 
  <div class="nav"></div>
	<center>
		<h2>修改任务</h2>
		<form action="updateTask.php" method='post'>
			<table width="700" cellspacing="0">
            <tr>
				<td>ID</td>
				<td><?php echo $rowUser['ID'] ?></td>

			</tr>
            <tr>
            	<td>任务名:</td>
            	<td><input type="text" name='taskname' value='<?php echo $rowUser['Name'] ?>'></td>
            </tr>
            
            <tr>
            	<td>任务类型：</td>
            	<td><input type="text" name="typeid" value='<?php echo $rowUser['TypeID'] ?>'></td>
            </tr>
            <tr>
            	<td>任务金额：</td>
            	<td><input type="text" name='price' value='<?php echo $rowUser['Price'] ?>'></td>
            </tr>
            <tr>
            	<td>截止时间：</td>
            	<td><input name="deadtime" type="date" value='<?php echo date('Y-m-d',$rowUser['DeadTime']) ?>'></td>
            </tr>
            <tr>
            	<td>任务状态：</td>
            	<td><input type="text" name='status' value='<?php echo $rowUser['Status'] ?>'></td>
            </tr>
                
		</table>
            <p>任务详情：</p>
            <script type="text/plain" id="editor" name="descript"><?php echo $rowUser['Descript'] ?></script>
            <script type="text/javascript">
            var ue = UE.getEditor('editor');
            </script>
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