<?php
header("Content-type:text/html;charset=utf-8");
session_start();
if(!isset($_SESSION['user'])){
	echo "<script>alert('请先登录！');location='login_c.php';</script>";
	exit;
}
?>
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
        <li><a href="" class="a">浏览全部</a></li>
        <li><a href="insert.php">添加记录</a></li>
        <li><a href="search.php">精确查询(编号)</a></li>
        <li><a href="search_m.php">模糊查询</a></li>
        <li><a href="#">记录修改</a></li>
        <li><a href="delete.php">记录删除</a></li>
        <li><a href="#">个人中心</a></li>
        <li>欢迎,<?=$_SESSION['user']?>&nbsp;<a href="logout.php">注销</a></li>
    </ul>
</div>
<h1>浏览全部信息</h1>


<table class="table">
	<tr>
		<th>工号</th><th>姓名</th><th>性别</th><th>电话</th>
        <th>出生日期</th><th>地址</th><th>部门</th><th>职务</th>
		<th>操作</th>
	</tr>
	<?php 
    //获取页码并检查是否非法
    if(isset($_GET['page']) && (int)$_GET['page']>0) 
      $page=$_GET['page'];
    else	
      $page=1; //如果获取不到页码则显示第1页
	$pageSize=10;
	  
	//连接数据库
    require("conn/conn.php");
    //创建结果集
    $result=mysqli_query($conn,"select * from employees");
	//记录总数
	$recordCount=mysqli_num_rows($result);
	//页数
	$pageCount=ceil($recordCount/$pageSize);
	
	//分页查询
	$result=mysqli_query($conn,"select * from employees limit ".($page-1)*$pageSize.','.$pageSize);
    //var_dump("select * from employees limit ".($page-1)*$pageSize.','.$pageSize);
	//循环遍历数据集，读取每一行数据
	while($row=mysqli_fetch_array($result))  {
	?>
	<tr>
		<td><?=$row['eno']?></td>
		<td><?=$row['ename']?></td>
		<td><?=$row['esex']?></td>
		<td><?=$row['ephone']?></td>
        <td><?=$row['ebirthday']?></td>
        <td><?=$row['eaddress']?></td>
        <td><?=$row['edept']?></td>
        <td><?=$row['ejob']?></td>
		<td><a href="update.php?id=<?=$row['eno'] ?>">编辑 </a>|
        <a href="delete.php?id=<?=$row['eno'] ?>">删除</a></td>
	</tr>
	<?php }
    //释放资源
    mysqli_free_result($result);
    mysqli_close($conn);
    ?>	
	<tr><td colspan="9">
	    共有<?=$recordCount?>条记录 
		第<?=$page?>/<?=$pageCount?>页
		<?php
		// 显示分页链接的代码
		if($page == 1)	 			//如果是第1页，则不显示第1页的链接
			echo  "首页  上一页 ";	
		else 
		    echo "<a href='?page=1'>首页</a> 
			      <a href='?page=".($page-1)."'>上一页</a>";
				  
		if($page == $pageCount)   		 // 设置“下一页”链接
			echo  " 下一页  末页 ";
		else 
		    echo "<a href='?page=".($page+1)."'> 下一页</a> 
			      <a href='?page=$pageCount'>末页</a>";
		?>
		</td>
	</tr>
</table>
<div class="footer">
</div>
</body>
</html>

