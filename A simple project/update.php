<?php 	
require('conn/conn.php'); 
$id=trim($_GET['id']);		//将获取的id强制转换为整型
$sql="Select * from employees where eno='$id'";		//获取待更新的记录
$result=mysqli_query($conn,$sql);	
$row=mysqli_fetch_array($result); 		//将待更新记录各字段的值存入数组中
var_dump($sql);   //调试语句
?>

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
<form action="update_ok.php" method="post" style="width:260px;margin:30px auto;">
	<p>工号：<input type="text" name="eno" value="<?=$row['eno']?>" readonly />*</p>
	<p>姓名：<input type="text" name="ename" value="<?=$row['ename']?>" /><br/></p>
	<p>性别：<input type="radio" name="esex" value="男" <?=$row['esex']=='男'?'checked':''?>/>男
		 <input type="radio" name="esex" value="女" <?=$row['esex']=='女'?'checked':''?>/>女</p>
	<p>部门：<input type="text" name="edept" value="<?=$row['edept']?>" /></p>
	<p>职务：<input type="text" name="ejob" value="<?=$row['ejob']?>" /></p>
	<p style="text-align:center"><input type="submit" value="提 交"/>
	<input type="reset" value="取 消"/></p>				
</form>
<div class="footer">
</div>
</body>
</html>
