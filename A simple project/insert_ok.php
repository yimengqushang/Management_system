<?php
require("conn/conn.php");
$eno=$_POST['eno'];
$ename=$_POST['ename'];
$esex=$_POST['esex']; 
$edept=$_POST['edept'];
$ejob=$_POST['ejob'];

//创建插入sql语句
if(!empty($eno)){
    $sql="INSERT INTO `employees`(`eno`, `ename`, `esex`, `edept`, `ejob`) VALUES ('$eno','$ename','$esex','$edept','$ejob')";
    echo $sql;  //输出sql语句，便于调试
    $result=mysqli_query($conn,$sql);
	if($result){
		echo "插入成功";
		echo "<a href='index.php'>跳转到首页</a>";    //插入成功后页面重定向
	}else{
		echo "执行失败";
	}
}
?>

