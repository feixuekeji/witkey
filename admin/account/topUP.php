<?php
header("Content-type:text/html;charset=utf-8");
error_reporting(0);

include'../../public/common/config.inc.php';
$id=$_GET['id']?$_GET['id']:1;;
?>
<!doctype html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>账户充值</title>
</head>
<body>
<center>
<form action="subtopUP.php" method="post">
<table width="600" border="1" cellpadding="1">
  <caption style="font-size: 36px; color: #FF0000;">
    账户充值
  </caption>
  <tr>
      <td>账户ID：</td>
      <td><input name="accID" type="text" value="<?php echo $id?>"</td>
    </tr>
 
    <tr>
      <td>金额：</td>
      <td><input name="amount" type="text"</td>
    </tr>

  <tr>
    <td><input type="submit"></td>
    <td><input type="reset"></td>
  </tr>
</form>
</center>
</body>

</html>