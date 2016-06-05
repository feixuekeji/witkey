<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,inital-scale=1.0">
    <title>忘记密码</title>
    <link rel="stylesheet" href="../public/css/index.css"> 
    <link type="text/css" rel="stylesheet" href="forget.css">
    <script src="../../public/common/jquery.min.js"></script>
    <script src="forget.js"></script>

</head>
<body>

<div class="main">
		<?php 
			include "../../public/common/header.php";
		 ?>	
		 <div id="main">
   <div class="demo">
        	<p>用户可以通过邮箱找回密码</p>
        	<p><strong>输入您注册使使用的电子邮箱，找回密码：</strong></p>
        	<p><input type="text" class="input" name="email" id="email"><span id="chkmsg"></span></p>
            <p><input type="button" class="btn" id="sub_btn" value="提 交"></p>
	</div>
</div>
	<div class="nav"></div>


</body>
</html>
