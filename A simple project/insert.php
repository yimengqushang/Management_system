<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="header">
</div>
<div class="nav">
    <ul>
        <li><?php echo date("Y-m-d");?></li> 
        <li><a href="index.php" class="a">浏览全部</a></li>
        <li><a href="insert.php">添加记录</a></li>
        <li><a href="search.php">精确查询(编号)</a></li>
        <li><a href="search_m.php">模糊查询</a></li>
        <li><a href="#">记录修改</a></li>
        <li><a href="delete.php">记录删除</a></li>
        <li><a href="#">统计</a></li>
        <li><a href="#">退出系统</a></li>
    </ul>
</div>
	
<h2 align="center">请您填写信息</h2>
<form action="insert_ok.php" method="post" style="width:260px;margin:30px auto;">
	<p>工号：<input type="text" name="eno" />*</p>
	<p>姓名：<input type="text" name="ename" /><br/></p>
	<p>性别：<input type="radio" name="esex" value="男"/>男
		 <input type="radio" name="esex" value="女"/>女</p>
	<p>部门：<input type="text" name="edept" /></p>
	<p>职务：<input type="text" name="ejob" /></p>
	<p style="text-align:center"><input type="submit" value="提 交"/>
	<input type="reset" value="取 消"/></p>				
</form>
<div class="footer">
</div>
</body>
</html>
