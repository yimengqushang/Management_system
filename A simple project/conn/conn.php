<?php
header("content-type:text/html;charset=utf-8");
//连接数据库
$conn = mysqli_connect("localhost", "root", "root", "company"); 
if($conn){
    //echo '连接数据库成功！';
}else{
    exit("连接数据库服务器失败！".mysqli_connect_error());
}

mysqli_query($conn,"set names utf8");//设置数据库编码格式utf8
?>