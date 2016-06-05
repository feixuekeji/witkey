<?php
error_reporting(0);

include "../../public/common/config.inc.php";
session_start();
$id=$_SESSION['id'];
$sqlUser="select * from account where UID={$id}";
$rstUser=mysql_query($sqlUser);
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>账户列表</title>	
</head>
<body>
	<center>
		<h2>查看账户信息</h2>
		<table width="900" border="1px" cellspacing="0">
        <tr>
				<th >ID</th>
				<th >账户名</th>
				<th >账号</th>
                <th >余额</th>
				<th >修改</th>
			</tr>
            
            
			<?php
			while ($rowUser=mysql_fetch_assoc($rstUser)){
				echo "<tr>";
				echo "<td>{$rowUser['accID']}</td>";
				echo "<td>{$rowUser['accName']}</td>";
				echo "<td>{$rowUser['accCardID']}</td>";
				echo "<td>{$rowUser['accBalance']}</td>";
				echo "<td><a href='edit.php'>修改</a></td>";
				echo "</tr>";
			}
			?>
        
		</table>
		<?php
		//
		echo "<h3><form action='index.php' method='get'>共{$total}人    每页显示<input name='length' type='text' value=$length> 条 <input type='submit' value='确认'></form>   </h3> 
		<h3> <a href='index.php?length=$length&page=1'>首页</a>     <a href='index.php?length=$length&page={$prepage}'>上一页</a>     <a href='index.php?length=$length&page={$nextpage}'>下一页</a>     <a href='index.php?length=$length&page={$totpage}'>末页</a></h3>";
		?>
	</center>
</body>
</html>