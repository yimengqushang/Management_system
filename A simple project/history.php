<?php
//如果cookie不存在，表示第一次访问网站
if(empty($_COOKIE['num'])){
	//创建Cookie
	setcookie("num",1,time()+3600*24);	
	setcookie("date",date("Y-m-d h:i:s"),time()+3600*24);
	echo"欢迎您:";
	echo "<br/>这是您第". 1 ."次访问本网站";

}else{
	//表示再次访问网站
	$num=intval($_COOKIE["num"]);   //获取上次访问次数
	$date=$_COOKIE["date"];        //获取上次访问时间
	
	echo"欢迎您:";
	echo "<br/>这是您第".($num+1)."次访问本网站";
	echo "<br/>您上次访问时间是：".$date;
	
	//将本次访问信息写入Cookie
	setcookie("num",$num+1,time()+3600*24);	
	setcookie("date",date("Y-m-d h:i:s"),time()+3600*24);	
	
}
	

?>

