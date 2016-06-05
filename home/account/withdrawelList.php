<?php
error_reporting(0);
include "../../public/common/config.inc.php";
session_start();
$accID=$_SESSION['accID'];

//获取数据列数，实现翻页
$sqlCnt="select count(*) from withdrawel where accID={$accID}";
$rstCnt=mysql_query($sqlCnt);
$rowCnt=mysql_fetch_row($rstCnt);
$total=$rowCnt[0];

$length=$_GET['length']?$_GET['length']:5;
$page=$_GET['page']?$_GET['page']:1;
$off=($page-1)*$length;
$totpage=ceil($total/$length);
$prepage=$page-1;
if($total>=$page)
	$nextpage=$page+1;
else
	$nextpage=$totpage;

$sqlUser="select * from withdrawel order by withdrawelID limit {$off},{$length}";
$rstUser=mysql_query($sqlUser);
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>提现审核</title>	
</head>
<body>
	<center>
		<h2>查看提现列表</h2>
		<table width="900" border="1px" cellspacing="0">
        <tr>
				<th >ID</th>
				<th >账户ID</th>
				<th >提现金额</th>
                <th >申请时间</th>
                <th >状态</th>
				<th >审核</th>
				
			</tr>
            
            
			<?php
			while ($rowUser=mysql_fetch_assoc($rstUser)){
				echo "<tr>";
				echo "<td>{$rowUser['withdraweID']}</td>";
				echo "<td>{$rowUser['accID']}</td>";
				echo "<td>{$rowUser['withdraweAmount']}</td>";
				echo "<td>".date('Y年m月d日 H:i:s',$rowUser['withdraweSubtime'])."</td>";
				echo "<td>{$rowUser['withdraweStatus']}</td>";
				echo "<td><a href='edit.php?id={$rowUser['withdraweID']}&accID={$rowUser['accID']}&amount={$rowUser['withdraweAmount']}'>审核</a></td>";
				echo "</tr>";
			}
			?>
        
		</table>
		<?php
		//
		echo "<h3><form action='witfdrawelList.php' method='get'>共{$total}    每页显示<input name='length' type='text' value=$length size='5'> 条 <input type='submit' value='确认'></form>   </h3> 
		<h3> <a href='witfdrawelList.php?length=$length&page=1'>首页</a>     <a href='witfdrawelList.php?length=$length&page={$prepage}'>上一页</a>     <a href='witfdrawelList.php?length=$length&page={$nextpage}'>下一页</a>     <a href='witfdrawelList.php?length=$length&page={$totpage}'>末页</a></h3>";
		?>
	</center>
</body>
</html>