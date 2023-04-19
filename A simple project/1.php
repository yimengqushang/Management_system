<?php
	$img=imagecreate(300,300);
	$background_color=imagecolorallocate($img,255,255,255);
	$text_color = imagecolorallocate($img,240,0,0);
	// imagestring($img,1,5,5,"My name is Zhangsan",$text_color);
	//需要将相对路径转为绝对路径'realpath()'
	imagettftext($img,15,0,20,20,$text_color,realpath("images/arial.ttf"),"My name is Zhangsan");
	imagettftext($img,15,0,20,60,$text_color,realpath("images/simkai.ttf"),"你好，张三");
	imagettftext($img,15,0,20,100,$text_color,realpath("images/simsun.ttc"),"你好，张三");
	header('content-type:image/jpeg');
	imagejpeg($img);
?>