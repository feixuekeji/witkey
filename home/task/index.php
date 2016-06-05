<?php
error_reporting(0);
session_start();
include "../../public/common/config.inc.php";
//获取数据列数，实现翻页
$sqlCnt="select count(*) from task order by ID";
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

$sqlUser="select task.*,user.Username from task,user where task.UserID=user.ID order by ID limit {$off},{$length}";
$rstUser=mysql_query($sqlUser);
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>任务列表</title> 
   <link rel="stylesheet" href="../public/css/index.css"> 
</head>
<body>
    <div class="main">
        <?php 
            include "../../public/common/header.php";
         ?> 
    <div class="nav"></div>
    <center>
        <h2>任务列表</h2>
        <table width="800" cellspacing="0" id='table'>
        <tr>
                <td>任务编号</td>
                <td>任务标题</td>
                <td>类型</td>
                <td>佣金</td>
                <td>发布者</td>
                <td>截止时间</td>
                <td>任务状态</td>
            </tr>
            
            
            <?php
            while ($rowUser=mysql_fetch_assoc($rstUser)){
                echo "<tr>";
                echo "<td>{$rowUser['ID']}</td>";
                echo "<td><a href='task.php?id={$rowUser['ID']}'>{$rowUser['Name']}</a></td>";
                echo "<td>{$rowUser['TypeID']}</td>";
                echo "<td style='font-size: 24px; color: #FF0004;'>￥{$rowUser['Price']}</td>";
                echo "<td>{$rowUser['Username']}</td>";
                echo "<td>".date('Y/m/d',$rowUser['DeadTime'])."</td>";
                echo "<td>{$rowUser['Status']}</td>";
                echo "</tr>";
            }
            ?>
        
        </table>
        <div class="nav"></div>
   <?php
    echo "<h3><form action='index.php' method='get'>共{$total}个    每页显示<input name='length' type='text' value=$length size='5'> 条 <input type='submit' value='确认'></form>   </h3> 
        <h3> <a href='index.php?length=$length&page=1'>首页</a>     <a href='index.php?length=$length&page={$prepage}'>上一页</a>     <a href='index.php?length=$length&page={$nextpage}'>下一页</a>     <a href='index.php?length=$length&page={$totpage}'>末页</a></h3>";
   ?>
</center>
<div class="nav"></div>
<?php
include"../../public/common/footer.php";
?>

</div>
     
</body>
</html>