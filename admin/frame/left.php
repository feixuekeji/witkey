<?php 
include '../public/common/acl.inc.php';
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
				<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
					<td width="25%" rowspan="2"><img src="../public/images/ico02.gif" width="35" height="35" /></td>
					<td width="75%" height="22" class="left-font03">您好，<span class="left-font02"><?php echo $_SESSION['adminname'] ?></span></td> 
				  </tr>
				  <tr>
					<td height="22" class="left-font01">
						[&nbsp;<a href="../login/exit.php" target="_top" class="left-font01">退出</a>&nbsp;]</td>
				  </tr>
				</table>
			</td>
		  </tr>
		</table>
		
				<!--  管理员开始    -->
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
		          <tr>
		            <td height="29">
						<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
							<tr>
								<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
								<td width="92%">
										<a href="javascript:" target="mainFrame" class="left-font03 menu" num='0'>管理员中心</a></td>
							</tr>
						</table>
					</td>
		          </tr>		  
		        </table>

				<table id="sub0" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
						cellspacing="0" class="left-table02">
					<tr>
						  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
						  <td width="91%">
						  	<a href="../admin/edit.php" target="mainFrame" class="left-font03">修改密码</a>
						  </td>
					</tr>
				
		      	</table>


		<!--  用户管理开始    -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='1'>用户管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub1" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../user/index.php" target="mainFrame" class="left-font03">查看用户</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../user/add.php" target="mainFrame" class="left-font03">添加用户</a></td>
			</tr>
      	</table>

		

		 
		<!--  任务管理开始    -->
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='2'>任务管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub2" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../task/index.php" target="mainFrame" class="left-font03">查看任务</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../task/add.php" target="mainFrame" class="left-font03">添加任务</a></td>
			</tr>
      	</table>
      	
		 <!--任务类型管理开始  -->  
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='4'>任务类型管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub4" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../tasktype/index.php" target="mainFrame" class="left-font03">查看类型</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../tasktype/add.php" target="mainFrame" class="left-font03">添加类型</a></td>
			</tr>
      	</table>
      	<!--  作品管理开始 -->   
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='5'>作品管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub5" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../work/index.php" target="mainFrame" class="left-font03">查看作品</a></td>
			</tr>
      	</table>
      	<!--  作品状态管理开始 -->   
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='6'>作品状态管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub6" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../workstatus/index.php" target="mainFrame" class="left-font03">查看作品状态</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../workstatus/add.php" target="mainFrame" class="left-font03">添加状态</a></td>
			</tr>
      	</table>
      	<!--留言管理开始  -->  
		<table width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03" class='menuparent'>
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='7'>留言管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub7" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../message/index.php" target="mainFrame" class="left-font03">查看留言</a></td>
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
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='8'>账户管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub8" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../account/index.php" target="mainFrame" class="left-font03">账户列表</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../account/topUPlist.php" target="mainFrame" class="left-font03">充值审核</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../account/withdrawelList.php" target="mainFrame" class="left-font03">提现审核</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../account/topUP.php" target="mainFrame" class="left-font03">账户充值</a></td>
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
								<a href="javascript:" target="mainFrame" class="left-font03 menu" num='9'>通知中心</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </table>

		<table id="sub9" style="display:none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
			<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../notice/index.php" target="mainFrame" class="left-font03">通知列表</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../notice/add.php" target="mainFrame" class="left-font03">发布通知</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../notice/edit.php" target="mainFrame" class="left-font03">通知修改</a></td>
			</tr>
			<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../notice/delete.php" target="mainFrame" class="left-font03">通知删除</a></td>
			</tr>
      	</table>

 
	  </td>
  </tr>
  
</table>
</body>
</html>
