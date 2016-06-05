<div class='header'>
	<img src="/public/images/logo.jpg" >	
	<span class='header-left'>飞雪威客系统[<a href='/home/task/index.php' target='_blank'>首页</a>]</span>
	<span class='header-right'>
		<?php 
			if($_SESSION['login']){
				echo "欢迎 <a href='/home/person/index.php' target='view_window'>".$_SESSION['username']."</a> 登录 <a href='/home/login/logout.php'>退出</a> | ";
			}else{
				echo "<a href='/home/login/login.php'>登录</a> | ";
				echo "<a href='/home/login/register.php'>注册</a> | ";
			}
		 ?>
		<a href='/home/task/add.php' target='_blank'>发布任务</a>
		<a href='/home/person/index.php' target='view_window'>个人中心</a>
	</span>
</div>