<?php
error_reporting(0);
header('content-type:text/html;charset=utf-8');
session_start();
$id=$_SESSION['id'];
include "../../public/common/config.inc.php";
//获取数据列数，实现翻页
$total=$rowCnt[0];
$sqlCnt="select count(*) from work,task where task.UserID={$id} and work.TaskID=task.ID";
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

$sqlUser="select work.*,task.UserID from work,task where task.UserID={$id} and work.TaskID=task.ID order by ID limit {$off},{$length}";
$rstUser=mysql_query($sqlUser);
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>作品查看</title>	
	<link rel="stylesheet" href="../public/css/index.css">
</head>
<body>
	<div class="main">
    <?php 
      include "../../public/common/header.php";
     ?> 
  <div class="nav"></div>
	<center>
		<h2>我收到作品</h2>
		<table width="980" cellspacing="0">
        <tr>
				<td>编号</td>
				<td>作品详情</td>
				<td>任务编号</td>
                <td>交稿时间</td>
                <td>作品状态</td>
                <td>审核</td>
			
			</tr>
            
            
			<?php
			while ($rowUser=mysql_fetch_assoc($rstUser)){
				echo "<tr>";
				echo "<td>{$rowUser['ID']}</td>";
				echo "<td><textarea cols='30' rows='3'>{$rowUser['Descript']}</textarea></td>";
				echo "<td>{$rowUser['TaskID']}</td>";
				echo "<td>".date('Y年m月d日 H:i:s',$rowUser['PubTime'])."</td>";
				switch($rowUser['Status'])
				{
				case 0:
				echo "<td>待审核</td>";
				break;
				case 1:
				echo "<td>合格</td>";
				break;
				case 2:
				echo "<td>不合格</td>";
				break;
				}

           
                echo "
                <form action='worksel.php' method='post'>
                <td><select name='status'> 
                <option value='0'></option>
                <option value='1'>合格</option>
                <option value='2'>不合格</option>
                </select>
                </td>
                <input type='hidden' name='workid' value='{$rowUser['ID']}'>
                <td>
                <input type='submit' value='确认'>
                </td>
                </form>
                ";

              
            
    
				echo "</tr>";
			}
			?>
        
		</table>
		<?php
		//
		echo "<h3><form action='workrec.php' method='get'>共{$total}个    每页显示<input name='length' type='text' value=$length size='5'> 条 <input type='submit' value='确认'></form>   </h3> 
		<h3> <a href='workrec.php?length=$length&page=1'>首页</a>     <a href='workrec.php?length=$length&page={$prepage}'>上一页</a>     <a href='workrec.php?length=$length&page={$nextpage}'>下一页</a>     <a href='workrec.php?length=$length&page={$totpage}'>末页</a></h3>";
		?>
	</center>
	<div class="nav"></div>

<?php
include"../../public/common/footer.php";
?>
</div>
</body>
</html>