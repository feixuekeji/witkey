<?php
//验证码
//开启session
session_start();
//画布，涂料
$im=imagecreatetruecolor(100, 50);
$white=imagecolorallocate($im, 255, 255, 255);
$gray=imagecolorallocate($im, 0x27, 0x28, 0x22);
imagefill($im, 0, 0, $white);
//点线干扰素
for ($i=0;$i<500;$i++){
	imagesetpixel($im, mt_rand(0,100), mt_rand(0,50), $gray);
}
for ($i=0;$i<30;$i++){
	imageline($im, mt_rand(0,100), mt_rand(0,50), mt_rand(0,100), mt_rand(0,50), $gray);
}
//随机数
$arr=array_merge(range(0, 9),range(a, z),range(A, Z));
shuffle($arr);
$str=join('',array_slice($arr, 0,4));
$_SESSION['vcode']=$str;
$font='msyhbd.ttf';
//画图
imagettftext($im, 20, 0, 15, 35, $gray, $font, $str);
ob_clean();
header("content-type:image/png");
imagepng($im);
?>