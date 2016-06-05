<?php
error_reporting(0);
session_start();
$id=$_SESSION['id'];
include "../../public/common/config.inc.php";
//获取数据列数，实现翻页
$sqlCnt="select count(*) from message where AcceptID={$id}";
$rstCnt=mysql_query($sqlCnt);
$rowCnt=mysql_fetch_row($rstCnt);
$total=$rowCnt[0];
$length=$_GET['length']?$_GET['length']:20;
$page=$_GET['page']?$_GET['page']:1;
$off=($page-1)*$length;
$totpage=ceil($total/$length);
$prepage=$page-1;
if($total>=$page)
	$nextpage=$page+1;
else
	$nextpage=$totpage;

$sqlUser="select message.*,user.Username from message,user where message.AcceptID={$id} and message.SendID=User.ID order by ID limit {$off},{$length}";
$rstUser=mysql_query($sqlUser);
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>任务管理</title>
	<link rel="stylesheet" href="../public/css/index.css">	
</head>
<body>
	<div class="main">
    <?php 
      include "../../public/common/header.php";
     ?> 
  <div class="nav"></div>
	<center>
		<h2>我收到的的私信</h2>
		<table width="900"  cellspacing="0">
        <tr>
				<td>编号</td>
				<td>发信人</td>
                <td>发送时间</td>
                <td>内容</td>
                
		</tr>
            
            
			<?php
			while ($rowUser=mysql_fetch_assoc($rstUser)){
				echo "<tr>";
				echo "<td>{$rowUser['ID']}</td>";
				echo "<td>{$rowUser['Username']}</td>";
				echo "<td>".date('Y/m/d H:i',$rowUser['PubTime'])."</td>";
				echo "<td>{$rowUser['Message']}</td>";
				echo "</tr>";

			}
			?>
        
		</table>
		<?php
		//
		echo "<h3><form action='accept.php' method='get'>共{$total}个    每页显示<input name='length' type='text' value=$length size='5'> 条 <input type='submit' value='确认'></form>   </h3> 
		<h3> <a href='accept.php?length=$length&page=1'>首页</a>     <a href='accept.php?length=$length&page={$prepage}'>上一页</a>     <a href='accept.php?length=$length&page={$nextpage}'>下一页</a>     <a href='accept.php?length=$length&page={$totpage}'>末页</a></h3>";
		?>
	</center>
	<div class="nav"></div>

<?php
include"../../public/common/footer.php";
?>
</div>
</body>
</html>