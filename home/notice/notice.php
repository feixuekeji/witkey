<?php
error_reporting(0);
include "../../public/common/config.inc.php";
$id=$_GET['id'];
$sqlUser="select * from notice where noticeID={$id}";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>系统通知</title>	
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
	<?php echo $rowUser['noticeTitle'] ?>
    </div>
		
		<div class="nav"></div>
		<div class="descriptl">
        <div class="descriptl_left">
        <p>
       	任务编号:<?php echo $rowUser['ID'] ?> </p>
		<p>任务类型：<?php echo $rowUser['noticeID'] ?></p>
            
        </div>

            <div class="descriptl_right">
            <p>
            	发布用户：
            	<?php echo $rowUser['noticeUname'] ?>
            </p>
            
            <p>
            	发布时间：
            	<?php echo date('Y-m-d H:i',$rowUser['noticeTime']) ?>
            </p>
            
            </div>
            

		</div>


		<div class="nav"></div>
            
<div class="descript">

	<h2>正文:</h2>

<?php echo $rowUser['noticeDetail'] ?>  
</div>
<div class="nav"></div>

</center>
<div class="nav"></div>

<?php
include"../../public/common/footer.php";
?>

</div>
     
</body>
</html>