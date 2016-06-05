<?php
error_reporting(0);
include "../../public/common/config.inc.php";
//获取数据列数，实现翻页
$sqlCnt="select count(*) from notice order by noticeID";
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

$sqlUser="select * from notice order by noticeID limit {$off},{$length}";
$rstUser=mysql_query($sqlUser);
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>通知管理</title>	
</head>
<body>
	<center>
		<h2>查看已发布的通知</h2>
		<table width="900" border="1px" cellspacing="0">
        <tr>
				<th >ID</th>
				<th >发布人</th>
				<th >标题</th>
                <th >内容</th>
                <th >发布时间</th>
				<th >修改</th>
				<th >删除</th>
			</tr>
			<?php
			while ($rowUser=mysql_fetch_assoc($rstUser)){
				echo "<tr>";
				echo "<td>{$rowUser['noticeID']}</td>";
				echo "<td>{$rowUser['noticeUname']}</td>";
				echo "<td>{$rowUser['noticeTitle']}</td>";
				echo "<td>{$rowUser['noticeDetail']}</td>";
				echo "<td>".date('Y年m月d日 H:i:s',$rowUser['noticeTime'])."</td>";
				echo "<td><a href='notice.php?id={$rowUser['noticeID']}'>查看</a></td>";
				echo "<td><a href='edit.php?noticeID={$rowUser['noticeID']}'>修改</a></td>";
				echo "<td><a href='delete.php?noticeID={$rowUser['noticeID']}'>删除</a></td>";
				echo "</tr>";
			}
			?>
        
		</table>
		<?php
		//
		echo "<h3><form action='index.php' method='get'>共{$total}人    每页显示<input name='length' type='text' value=$length size='5'> 条 <input type='submit' value='确认'></form>   </h3> 
		<h3> <a href='index.php?length=$length&page=1'>首页</a>     <a href='index.php?length=$length&page={$prepage}'>上一页</a>     <a href='index.php?length=$length&page={$nextpage}'>下一页</a>     <a href='index.php?length=$length&page={$totpage}'>末页</a></h3>";
		?>
	</center>
</body>
</html>