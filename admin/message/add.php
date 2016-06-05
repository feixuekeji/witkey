<!doctype html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>任务添加</title>
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
      <td>任务描述：</td>
      <td><textarea name="descript" cols="50" rows="8">

      </textarea></td>
    </tr>
    <tr>
    <td>类型ID：</td>
    <td><input name="typeid" type="text" ></td>
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
    
	<td><input name="deadtime" type="date" value="2015-11-01"></td>
  </tr>
  <tr>
	<td>任务状态:</td>
	<td><input type="text" name='status'></td>
  </tr> 
</table>
  <tr>
        <td><input type="submit" value="添加"></td>
        <td><input type="reset" value="重置"></td>
 </tr>
</form>
</center>
</body>

</html>