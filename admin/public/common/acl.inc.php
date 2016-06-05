<?php 
error_reporting(0);
session_start();
if(!$_SESSION[adminlogin]){
	echo "<script>location='/admin/login/login.php'</script>";
}
 ?>