<?php 	
require('conn/conn.php'); 
$eno=$_POST["eno"];				//获取表单中数据
$ename=$_POST["ename"];
$esex=$_POST["esex"];
$edept=$_POST["edept"];
$ejob=$_POST["ejob"];
$sql="Update employees Set ename='$ename',esex='$esex',edept='$edept' Where eno='$eno'";
var_dump($sql);
mysqli_query($conn,$sql) or die('执行失败');
echo "<a href='index.php'>修改成功，返回主页</a>";
 ?>
