<?php
require("conn/conn.php");
//判断有无id号
if(empty($_GET['id'])) 
    exit('未选择数据！');
$eno=trim($_GET['id']);
$sql="Delete from employees where eno='$eno' ";
echo $sql;
//判断sql语句是否执行成功，并且有记录被删除
if(mysqli_query($conn,$sql) && mysqli_affected_rows($conn)>0){
	echo "删除成功！";
	echo "<a href='index.php'>跳转到首页</a>";
}else {
	echo "删除失败！";
	echo "<a href='index.php'>跳转到首页</a>";
}
?>