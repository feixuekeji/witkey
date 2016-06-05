<?php
error_reporting(0);
session_start();
$t=time();
include '../login/acl.inc.php';
include'../../public/common/config.inc.php';
$sqltype='select * from tasktype order by ID';
$rsttype=mysql_query($sqltype);
?>
<!doctype html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>任务添加</title>
  <script type="text/javascript" charset="utf-8" src="../../public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../../public/ueditor/ueditor.all.min.js"> </script>
    <link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
<div class='main'>
<?php 
      include "../../public/common/header.php";
     ?> 
<center>
<h1 style="font-size: 36px; color: #FF0000;">
    添加任务
  </h1>
<form action="insert.php" method="post">

<table width="700" cellpadding="1">
  
     <tr>
     <td>任务标题：</td>
      <td><input name="taskname" type="text"> </td>
    </tr>
    <tr>
    <td>类型：</td>
    <td>
    <select name="typeid" id="">
            <?php 
              while($rowtype=mysql_fetch_assoc($rsttype)){
                echo "<option value='{$rowtype[ID]}'>{$rowtype[Name]}</option>";
              }
             ?>
    </select></td>
  </tr>
  <tr>
      <td>佣金：</td>
      <td><input name="price" type="text"></td>
  </tr>
  <tr>
	<td>截止时间:</td>
    
	<td><input name="deadtime" type="date" value='<?php echo date('Y-m-d',$t) ?>'></td>
  </tr>
  <tr>
</table>

      <p>任务描述：</p>
      
      <script type="text/plain" id="editor" name="descript">请输入详情</script>
      <script type="text/javascript">
        var ue = UE.getEditor('editor');
    </script>
    
  <tr>
        <td><input type="submit" value="添加"></td>
        <td><input type="reset" value="重置"></td>
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