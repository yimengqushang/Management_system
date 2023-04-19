<?php
	$img = imagecreatefromjpeg('images/class.jpg');
	$color = imagecolorallocate($img,250,0,0);
	imagettftext($img,15,0,20,30,$color,realpath("images/simsun.ttc"),"2021113425陈沛文");
	$dst = "images/new.jpeg";
	if(imagejpeg($img,$dst)){
		echo "<h1>水印图片</h1>";
		echo "<p>原始图片：<img src='images/class.jpg'></p>";
		echo "<p>新图片：<img src='images/new.jpeg'></p>";
	}
?>