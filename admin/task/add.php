<?php
error_reporting(0);
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
</head>
<body>
<center>
<form action="insert.php" method="post">
<table width="600" border="1" cellpadding="1">
  <caption style="font-size: 36px; color: #FF0000;">
    添加任务
  </caption>
 
    <tr>
      <td>任务名：</td>
      <td><input name="taskname" type="text"></td>
    </tr>

    <tr>
    <td>类型任务：</td>
    <td>
    <select name="typeid" >
                <?php 
                  while($rowtype=mysql_fetch_assoc($rsttype)){
                    echo "<option value='{$rowtype[ID]}'>{$rowtype[Name]}</option>";
                  }
                 ?>
        </select>
    </td>
  </tr>

  <tr>
    <td>发布者ID：</td>
    <td><input name="userid" type="text" ></td>
  </tr>
  <tr>
      <td>佣金：</td>
      <td><input name="price" type="text"></td>
  </tr>
  <tr>
	<td>截止时间:</td>
    
	<td><input name="deadtime" type="date" value="<?php echo date('Y-m-d',$t) ?>"></td>
  </tr>
  
</table>
<tr>
      <td>任务描述：</td>
      
      <td><script type="text/plain" id="editor" name="descript">请输入详情</script></td>
      <script type="text/javascript">
        var ue = UE.getEditor('editor');
    </script>
    </tr>
  <tr>
        <td><input type="submit" value="添加"></td>
        <td><input type="reset" value="重置"></td>
 </tr>
</form>
</center>
</body>

</html>