<?php
session_start();
include "../../public/common/config.inc.php";
$id=$_SESSION['accID'];
$sqlUser="select * from account where accID={$id}";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);
?>
<!doctype html>
<html>
<head>
      <meta charset="UTF-8">
      <title>账户修改</title>     
</head>
<body>
      <center>
            <h2>修改账户</h2>
            <form action="update.php" method='post'>
                  <table width="600" border="1px" cellspacing="0">
      
            <tr>
                  <td>姓名:</td>
                  <td><input type="text" name='taskname' value='<?php echo $rowUser['accName'] ?>'></td>
            </tr>
            
            <tr>
                  <td>账户：</td>
                  <td><input type="text" name="typeid" value='<?php echo $rowUser['accCardID'] ?>'></td>
            </tr>
            <tr>
                  <input type="hidden" name='id' value='<?php echo $id ?>'>
                  <td align='center'><input type="submit" value="修改"></td>
                  <td align='center'><input type="reset" value="重置"></td>
            </tr>      
            </table>
      </form>
            
      </center>
</body>
</html>