<?php
//判断cookie是否存在
if(isset($_COOKIE['username'])){
	$username=$_COOKIE['username'];
	$password=$_COOKIE['password'];
	$sql="select * from users where username='$username' and password='$password'";
	var_dump($sql);
	require("conn/conn.php");
	$result=mysqli_query($conn,$sql);
	
	//分支判断
	if($result && mysqli_num_rows($result)>0 ){
		//创建会话变量
		session_start();
		$_SESSION['user']=$username;
		echo "自动登录成功，即将跳转到主页...";
		header("refresh:3;url=index.php");
		exit;
	}
}
?>

<html>
<head>
    <meta charset="utf-8"/>
	<title>登录</title>
    <link rel="stylesheet" href="mystyle.css">
	<link rel="stylesheet" href="login.css">
</head>
<body>
<div class="header">
</div>

<div class="cont">
  <form method="post" action="login_c_ok.php">
    <h1>欢迎登陆</h1>
	<label>
		<img src="images/user.png">
		<input type="text" name="username" required>
	</label>
	<label>
		<img src="images/pass.png">
		<input type="password" name="password" required>
	</label>
    <div class="code">
        <label>
            <img src="images/code.png">
            <input type="text" name="code" required>
        </label>
        <img src="code.php" alt="" onclick="this.src='code.php?'+'Math.random()'">
    </div>
	<div>
		<input type="checkbox" name="alogin"> 下次自动登录
	</div>
	<div class="login">
		<input type="submit" name="submit" value="登录">
		<a href="register.html">注册</a>
	</div>
	<p>注意:本系统最终解释权归我公司所有</p>
  </form>
</div>
	
<div class="footer">
</div>
	
</body>
</html>
