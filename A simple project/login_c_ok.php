<?php
session_start();
//接受表单数据
if(!empty($_POST)){
    //判断验证码
	if($_POST['code']==strtolower($_SESSION['code'])){
		echo "<script>alert('验证码正确！')</script>";
	}else{
		header("refresh:3;url=index.php");
		exit('验证码错误！');
	}
	
	
	require("conn/conn.php");
	//防sql注入，转义特殊字符
	$username=mysqli_real_escape_string($conn,$_POST['username']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$sql="select * from users where username='$username' and password='$password'";
	$result=mysqli_query($conn,$sql);
	
	//判断登录
	if($result && mysqli_num_rows($result)>0 ){
		//创建会话变量
		$_SESSION['user']=$username;		
		//判断是否创建cookie
		//var_dump($_POST['alogin']);
		if(!empty($_POST['alogin'])){
			setcookie("username",$username,time()+3600*24*7);
			setcookie("password",$password,time()+3600*24*7);
		}	
		echo "登录成功，即将跳转到主页...";
		header("refresh:3;url=index.php");
	}else {
		//如果记录不存在，登录失败
		unset($_SESSION['user']);
		echo "用户名或密码不正确！";
	}
}
?>
