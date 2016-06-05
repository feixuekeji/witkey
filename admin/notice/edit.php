<?php
include "../../public/common/config.inc.php";
$id=$_GET['noticeID'];
$sqlUser="select * from notice where noticeID={$id}";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);
?>
<!doctype html>
<html>
<head>
      <meta charset="UTF-8">
      <title>通知修改</title>     
</head>
<body>
      <center>
            <h2>修改</h2>
            <form action="update.php" method='post'>
                  <table width="400" border="1px" cellspacing="0">
            <tr>
                        <td>ID</td>
                        <td><?php echo $rowUser['noticeID'] ?></td>

                  </tr>
            <tr>
                  <td>通知标题：:</td>
                  <td><input type="text" name='noticeTitle' value='<?php echo $rowUser['noticeTitle'] ?>'></td>
            </tr>
            <tr>
            
                  <td>正文：</td>
                  <td><textarea name='noticeDetail' cols="50" rows="8"><?php echo $rowUser['noticeDetail'] ?></textarea></td>
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