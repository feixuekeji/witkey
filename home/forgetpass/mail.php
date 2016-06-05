<?php
//error_reporting(0);
include_once("../../public/common/config.inc.php");//连接数据库
$email = stripslashes(trim($_POST['mail']));//删除反斜杠&  去掉左右空格
$email = injectChk($email);
	
$sql = "select ID,Username,Password from user where Email='$email'";
//echo $sql;
//exit(0);
$query = mysql_query($sql);
$num = mysql_num_rows($query);
if($num==0){//该邮箱尚未注册！
	echo '该邮箱尚未注册';
	exit;	
}else{
	$row = mysql_fetch_array($query);
	$repasstime = time();
	$uid = $row['ID'];
	$token = md5($uid.$row['Username'].$row['Password']);//组合验证码
	$url = "http://www.weike.tk/home/forgetpass/reset.php?email=".$email."
&token=".$token;//构造URL
	$time = date('Y-m-d H:i');
	$result = sendmail($time,$email,$url);
	if($result==1){//邮件发送成功
		$msg = '系统已向您的邮箱发送了一封邮件<br/>请登录到您的邮箱及时重置您的密码！';
		//更新数据发送时间
		mysql_query("update `user` set `repasstime`='$repasstime' where id='$uid '");
	}else{
		$msg = $result;
	}
	echo $msg;
}
function sendmail($time,$email,$url){
	include_once("smtp.class.php");
	$smtpserver = "smtp.d1zy.com"; //SMTP服务器
    $smtpserverport = 25; //SMTP服务器端口
    $smtpusermail = "notice@d1zy.com"; //SMTP服务器的用户邮箱
    $smtpuser = "notice@d1zy.com"; //SMTP服务器的用户帐号
    $smtppass = "feiXUE2016"; //SMTP服务器的用户密码
    $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
    $emailtype = "HTML"; //信件类型，文本:text；网页：HTML
    $smtpemailto = $email;
    $smtpemailfrom = $smtpusermail;
    $emailsubject = "威客任务系统 - 找回密码";
    $emailbody = "亲爱的".$email."：<br/>您在".$time."提交了找回密码请求。请点击下面的链接重置密码（连接24小时内有效）。<br/><a href='".$url."' target='_blank'>".$url."</a><br/>如果以上链接无法点击，请将它复制到你的浏览器地址栏中进行访问。<br/>如果您没有提交找回密码请求，请忽略此邮件。";
    $rs = $smtp->sendmail($smtpemailto, $smtpemailfrom, $emailsubject, $emailbody, $emailtype);
	return $rs;
}

function injectChk($sql_str) { //防止注入
		$check = preg_match('/select|insert|update|delete|\'|\/\*|\*|\.\.\/|\.\/|union|into|load_file|outfile/i', $sql_str);
		if ($check) {
			echo('非法字符串');
			exit ();
		} else {
			return $sql_str;
		}
}


?>