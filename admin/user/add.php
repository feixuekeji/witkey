<!doctype html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>用户添加</title>
</head>
<body>
<center>
<form action="insert.php" method="post">
<table width="600" border="1" cellpadding="1">
  <caption style="font-size: 36px; color: #FF0000;">
    添加用户
  </caption>
 
    <tr>
      <td>用户名：</td>
      <td><input name="username" type="text"</td>
    </tr>

  <tr>
    <td>密码：</td>
    <td><input name="password" type="password" ></td>
  </tr>
  <tr>
    <td>确认密码 ：</td>
    <td><input name="repassword" type="password" ></td>
  </tr> 
  <tr>
	<td>真实姓名:</td>
	<td><input type="text" name='realname'></td>
  </tr>
  <tr>
	<td>E-mail:</td>
	<td><input type="email" name='email'></td>
  </tr>
  <tr>
	<td>手机号码:</td>
	<td><input type="text" name='mobilephone'></td>
  </tr>
  <tr>
	<td>QQ:</td>
	<td><input type="text" name='QQ'></td>
  </tr>
  
</table>
<tr>
    <td><input type="submit"></td>
    <td><input type="reset"></td>
  </tr>
</form>
</center>
</body>

</html>