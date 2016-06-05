<?php
session_start();
session_unset();
session_destroy();
setcookie(session_name(),'',time()-600,'/');
echo "<script>location='login.php'</script>";
?>