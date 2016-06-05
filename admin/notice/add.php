<!doctype html>
<html>
<head>
  <meta charset='UTF-8'>
  <title>系统通知</title>
  <script type="text/javascript" charset="utf-8" src="../../public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../../public/ueditor/ueditor.all.min.js"> </script>
</head>
<body>
<center>
<form action="insert.php" method="post">
<table width="600" border="1" cellpadding="1">
  <caption style="font-size: 36px; color: #FF0000;">
    发布通知
  </caption>
 
    <tr>
      <td>通知标题：</td>
      <td><input name="noticeTitle" type="text"></td>
    </tr>
  
</table>
<tr>
      <td>通知内容：</td>
      
      <td><script type="text/plain" id="editor" name="noticeDetail">请输入详情</script></td>
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