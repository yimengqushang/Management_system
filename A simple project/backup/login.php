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
  <form method="post" action="login_ok.php">
    <h1>欢迎登陆</h1>
	<label>
		<img src="images/user.png">
		<input type="text" name="username">
	</label>
	<label>
		<img src="images/pass.png">
		<input type="password" name="password">
	</label>
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
