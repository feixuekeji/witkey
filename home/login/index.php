<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<style>
		table{
			border-collapse:collapse;
		}
		td{
			border:2px solid #272822;
		}
		input{
			width:200px;
			height:50px;
		}
		.inpcls{
			width:300px;
		}
		*{
			font-family:微软雅黑;
			font-size:30px;
		}
		.subret{
			text-align:center;
		}
		img{
			cursor:pointer;
		}
	</style>
</head>
<body>
	<h3>用户注册:</h3>
	<form action="check.php" method="post">
		<table>
			<tr>
				<td>
					<span>用户:</span>		
				</td>	
				<td>
					<input class="inpcls" type="text" name="username" id="">	
				</td>
			</tr>
			<tr>
				<td>
					<span>密码:</span>		
				</td>	
				<td>
					<input class="inpcls" type="text" name="password" id="">	
			</tr>
			<tr>
				<td>
					<span>确认密码:</span>	
				</td>
				<td>
					<input class="inpcls" type="text" name="repassword">	
				</td>
			</tr>
			<tr>
				<td>
					<span>验证码:</span>	
				</td>
				<td>
					<input type="text" name="formcode">	
					<img src="authcode.php" align="right" class="imgcls" onclick="this.src='authcode.php?rand='+Math.random()">
				</td>
			</tr>
			<tr class="subret">
				<td>
					<input type="submit" value="注册">
				</td>
				<td>
					<input type="reset" value="重来">					
				</td>
			</tr>
		</table>
	</form>
</body>
</html>