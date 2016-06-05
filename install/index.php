<?php
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>系统安装</title>
</head>
<body>
	<center>
	<h1>数据库安装</h1>
	<form action='install.php' method='post'>
		<table width=500px border='1px' cellspacing='1'>
			<h3>填写数据库信息</h3>

			<tr>
				<td>数据库服务器：</td>
				<td><input type="text" name='host' value='localhost'></td>
			</tr>
			<tr>
				<td>数据库名：</td>
				<td><input type="text" name='database' value='weike'></td>
			</tr>
			<tr>
				<td>数据库用户名：</td>
				<td><input type="text" name='user' value='root'></td>
			</tr>
			<tr>
				<td>数据库密码：</td>
				<td><input type="password" name='password'></td>
			</tr>
			
		</table>
		<table width=500px border='1px' cellspacing='1'>
			
			<tr><h3>填写管理员信息</h3></tr>
			<tr>
				<td>管理员账号：</td>
				<td><input type="text" name='admin' value='admin'></td>
			</tr>
			<tr>
				<td>管理员密码：</td>
				<td><input type="password" name='adminpassword' value='123'></td>
			</tr>
		</table>
		        <tr>
					<td><input type="submit" value='提交'></td>
				
					<td><input type="reset" value='重置'></td>
				</tr>

</center>
</body>
</html>
