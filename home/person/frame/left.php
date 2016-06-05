<?php 
//include '../public/common/acl.inc.php';
 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(../public/images/left.gif);
}
</style>
<link href="../public/css/css.css" rel="stylesheet" type="text/css" />
<script src="../public/js/jquery.js"></script>
<script>
$(function(){
	$('.menu').toggle(
		function(){
			num=$(this).attr('num');
			$('#sub'+num).show();
		},
		function(){
			num=$(this).attr('num');
			$('#sub'+num).hide();
		}
	);
});
</script>
</head>

<body>
<table width="198" border="0" cellpadding="0" cellspacing="0" class="left-table01">
  <tr>
    <td>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="207" height="55" background="../public/images/nav01.gif">
		
			</td>
		  </tr>
		</table>
		
		
		<!--  个人信息    -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='0'>个人信息</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>
		<table id="sub0" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
		
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../edit.php" target="mainFrame" class="left-font03">修改个人信息</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../password.php" target="mainFrame" class="left-font03">修改密码</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../../forgetpass/forget.php" target="mainFrame" class="left-font03">忘记密码</a></td>
			</tr>
      	</table>
      	<!--任务管理 -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='1'>任务管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub1" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../indexTask.php" target="mainFrame" class="left-font03">我发布的任务</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../tasksub.php" target="mainFrame" class="left-font03">我参加过的任务</a></td>
			</tr>
      	</table>
      	      	 <!--稿件管理开始  -->  
		<table width="100%" border="0" celderlpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='3'>作品管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub3" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../workrec.php" target="mainFrame" class="left-font03">我收到的稿件</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../work.php" target="mainFrame" class="left-font03">我提交的稿件</a></td>
			</tr>
      	</table>
      	<!--  账户管理 -->   
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='4'>账户管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub4" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../../account/index.php" target="mainFrame" class="left-font03">账户信息</a></td>
			</tr>
			
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../../account/edit.php" target="mainFrame" class="left-font03">修改账户</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../../account/topUP.php" target="mainFrame" class="left-font03">充值</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../../account/withdrawel.php" target="mainFrame" class="left-font03">提现</a></td>
			</tr>
			
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../../account/withdrawelList.php" target="mainFrame" class="left-font03">充值记录</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../../account/topUPlist.php" target="mainFrame" class="left-font03">提现记录</a></td>
			</tr>
      	</table>


		 <!--消息  -->  
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='5'>消息中心</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub5" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../../message/send.php" target="mainFrame" class="left-font03">我发送的消息</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../../message/accept.php" target="mainFrame" class="left-font03">我收到的的消息</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../../message/message.php" target="mainFrame" class="left-font03">发送消息</a></td>
			</tr>
      	</table>
      	<!--  通知中心 -->   
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='6'>通知中心</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub6" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../../notice/index.php" target="mainFrame" class="left-font03">通知列表</a></td>
			</tr>
			
      	</table>

      	
 
	  </td>
  </tr>
  
</table>
</body>
</html>
