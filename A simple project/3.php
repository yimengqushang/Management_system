<?php
	$width = 100;
	$height = 35;
	$img = imagecreatetruecolor($width,$height);
	$back = imagecolorallocate($img,250,250,250);//背景颜色
	imagefill($img,0,0,$back);
	
	for($i=0;$i<150;$i++){
		//绘制点的位置及颜色
		$color = imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
		imagesetpixel($img,mt_rand(0,$width),mt_rand(0,$height),$color);	
	}
	
	//生成4个随机字符
	$arr = array_merge(range('A','Z'),range('a','z'),range('0','9'));
	$keys = array_rand($arr,4);
	$code = '';
	foreach($keys as $v){
		$code.=$arr[$v];
	}
	
	// var_dump($code);//在图片模式下，需要注释掉
	
	//验证字符的颜色
	$color=imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
	//验证字符
	imagettftext($img,20,0,23,30,$color,realpath("images/simkai.ttf"),$code);
	
	header('content-type:image/jpeg');
	imagejpeg($img);
?>