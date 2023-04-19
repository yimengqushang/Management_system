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
        <li><a href="search2.php">模糊查询</a></li>
        <li><a href="#">记录修改</a></li>
        <li><a href="delete.php">记录删除</a></li>
        <li><a href="#">统计</a></li>
        <li><a href="#">退出系统</a></li>
    </ul>
</div>
<h1>浏览全部信息</h1>
<form action="" method="get" style="text-align:center">
请输入员工工号: <input type="text" name="keyword">
<input type="submit" name="submit" value="查询">
</form>

<table class="table">
	<tr>
		<th>工号</th><th>姓名</th><th>性别</th><th>电话</th>
        <th>出生日期</th><th>地址</th><th>部门</th><th>职务</th>
	</tr>
	<?php 
	require("conn/conn.php");
    //获得查询关键字
	$keyword=trim($_GET['keyword']);
    //首次加载，退出查询
	if(empty($keyword)) exit();
	$sql="select * from employees where eno=$keyword ";
	//var_dump($sql);
	$result=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($result))  {
	?>
	<tr>
		<td><?= $row['eno']?></td>
		<td><?= $row['ename']?></td>
		<td><?= $row['esex']?></td>
		<td><?= $row['ephone']?></td>
        <td><?= $row['ebirthday']?></td>
        <td><?= $row['eaddress']?></td>
        <td><?= $row['edept']?></td>
        <td><?= $row['ejob']?></td>
	</tr>
	<?php }
    //释放资源
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>	
	
</table>
<div class="footer">
</div>
</body>
</html>

