<?php
error_reporting(0);
session_start();
include "../../public/common/config.inc.php";
$id=$_GET['id'];
$sqlUser="select task.*,user.Username from task,user where task.ID={$id} and task.UserID=user.ID";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>任务详情</title>	
    <script type="text/javascript" charset="utf-8" src="../../public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../../public/ueditor/ueditor.all.min.js"> </script>
	<link type="text/css" rel="stylesheet" href="../../public/ueditor/third-party/video-js/video-js.css"/>
<script language="javascript" type="text/javascript" src="../../public/ueditor/third-party/video-js/video.js"></script>
	
   <link rel="stylesheet" href="../public/css/index.css"> 
</head>
<body>
	<div class="main">
		<?php 
			include "../../public/common/header.php";
		 ?>	
	<div class="nav"></div>
	<div class="title">
	<?php echo $rowUser['Name'] ?>
    </div>
		
		<div class="nav"></div>
		<div class="descriptl">
        <div class="descriptl_left">
        <p>
       	任务编号:<?php echo $rowUser['ID'] ?> </p>
		<p>任务类型：<?php echo $rowUser['TypeID'] ?></p>
            <p>任务金额: <span style="font-size: 24px; color: #FF0004;"><?php echo $rowUser['Price'] ?>元       </span></p>
        </div>

            <div class="descriptl_right">
            <p>
            	发布用户：
            	<?php echo $rowUser['Username'] ?>
            </p>
            <p>
                <a href='../message/message.php?acceptName=<?php echo $rowUser['Username'] ?>'>发站内信</a>
            </p>
            <p>
            	开始时间：
            	<?php echo date('Y-m-d',$rowUser['PubTime']) ?>
            </p>
            <p>
            	截止时间：
            	<?php echo date('Y-m-d',$rowUser['DeadTime']) ?>
            </p>
            <p>
            	任务状态：
            	<?php echo $rowUser['Status'] ?>
            </p>
            </div>
            

		</div>


		<div class="nav"></div>
            
<div class="descript">

	<h2>任务详情:</h2>

<?php echo $rowUser['Descript'] ?>  
</div>
<div class="nav"></div>
<div class="task_submit">
<h1>提交作品</h1>
<center>
<form action="sumbit.php" method="post">
<script type="text/plain" id="editor" name="descript"></script>
      <script type="text/javascript">
        var ue = UE.getEditor('editor',{
        initialFrameWidth: 1000,
        initialFrameHeight: 300
        });
    </script>
    <input type="hidden" name='taskid' value='<?php echo $id ?>'>   
        <td align='center'><input type="submit" value="确认交稿"></td>

 
</form>
</center>
</div>
<div class="nav"></div>
<h1>稿件列表</h1>

<?php
//稿件列表
$sqlCnt="select count(*) from work where TaskID={$id}";
$rstCnt=mysql_query($sqlCnt);
$rowCnt=mysql_fetch_row($rstCnt);
$total=$rowCnt[0];

$length=20;
$page=$_GET['page']?$_GET['page']:1;
$off=($page-1)*$length;
$totpage=ceil($total/$length);
$prepage=$page-1;
if($total>=$page)
    $nextpage=$page+1;
else
    $nextpage=$totpage;


$sqlWork="select work.*,user.Username from work,user where work.TaskID={$id} and work.UserID=user.ID order by ID limit {$off},{$length}";
$rstWork=mysql_query($sqlWork);
?>
<center>
        <table width="800" cellspacing="0" id='table'> 
            <?php
            while ($rowWork=mysql_fetch_assoc($rstWork)){
                echo "<div class='worklist'>";
                echo "<div class='worklist_left'>";
                echo "<p>作品编号:{$rowWork['ID']}</p>";
                echo "<p>用户名：{$rowWork['Username']}</p>";
                echo "<p><a href='../message/message.php?acceptName={$rowWork['Username']}'>发站内信</a></p>";
                echo "<p>交稿时间:".date('Y/m/d H:i:s',$rowWork['PubTime'])."</p>";
                echo "<p>作品状态：{$rowWork['Status']}</p>";
                echo "</div>";
                echo "<div class='nav'></div>";
                echo "<div class='worklist_right'>";
                echo $rowWork['Descript'];
                echo "</div>";
                echo "</div>";
            }
            ?>
        
        </table>
        <div class="nav"></div>
   <?php
    echo "<h3><form action='task.php' method='get'>共{$total}个 </h3> 
        <h3> <a href='task.php?id=$id&page=1'>首页</a>     <a href='task.php?id=$id&page={$prepage}'>上一页</a>     <a href='task.php?id=$id&page={$nextpage}'>下一页</a>     <a href='task.php?id=$id&page={$totpage}'>末页</a></h3>";
   ?>
</center>
<div class="nav"></div>

<?php
include"../../public/common/footer.php";
?>

</div>
     
</body>
</html>