<?php
require("conn/conn.php");
//接受表单数据
if(!empty($_POST)){
	//防sql注入，转义特殊字符
	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	//$crptpw=crypt(md5($password),md5($admin)); //对密码进行加密
	
	//执行sql查询
	$sql="select * from users where username='$username' and password='$password'";
	$result=mysqli_query($conn,$sql);
	
	//分支判断
	if($result && mysqli_num_rows($result)>0 ){
		//创建会话变量
		session_start();
		$_SESSION['user']=$username;
		echo "登录成功，即将跳转到主页...";
		header("refresh:3;url=index.php");
	}else {
		//如果记录不存在，登录失败
		unset($_SESSION['user']);
		echo "用户名或密码不正确！";
	}
}



?>
