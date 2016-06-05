<?php
error_reporting(0);
session_start();
$id=$_SESSION['id'];
include "../../public/common/config.inc.php";

//获取数据列数，实现翻页
$total=$rowCnt[0];
$sqlCnt="select count(*) from work where UserID={$id}";
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

$sqlUser="select work.TaskID,task.* from work,task where work.UserID={$id} and work.TaskID=task.ID order by ID limit {$off},{$length}";
$rstUser=mysql_query($sqlUser);
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>我参与的任务</title>	
	<link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
	<div class="main">
    <?php 
      include "../../public/common/header.php";
     ?> 
  <div class="nav"></div>
	<center>
		<h2>我参与的任务</h2>
		<table width="980" cellspacing="0">
        <tr>
				<td>任务编号</td>
				<td>任务标题</td>
                <td>发布时间</td>
                <td>任务状态</td>
			
			</tr>
            
            
			<?php
			while ($rowUser=mysql_fetch_assoc($rstUser)){
				echo "<tr>";
				echo "<td>{$rowUser['ID']}</td>";
				echo "<td><a href='../task/task.php?id={$rowUser['ID']}'>{$rowUser['Name']}</a></td>";
				echo "<td>".date('Y年m月d日 H:i:s',$rowUser['PubTime'])."</td>";
				echo "<td>{$rowUser['Status']}</td>";
				echo "</tr>";
			}
			?>
        
		</table>
		<?php
		//
		echo "<h3><form action='tasksub.php' method='get'>共{$total}个    每页显示<input name='length' type='text' value=$length size='5'> 条 <input type='submit' value='确认'></form>   </h3> 
		<h3> <a href='tasksub.php?length=$length&page=1'>首页</a>     <a href='tasksub.php?length=$length&page={$prepage}'>上一页</a>     <a href='tasksub.php?length=$length&page={$nextpage}'>下一页</a>     <a href='tasksub.php?length=$length&page={$totpage}'>末页</a></h3>";
		?>
	</center>
	<div class="nav"></div>

<?php
include"../../public/common/footer.php";
?>
</div>
</body>
</html>