<?php
header("Content-type:text/html;charset=utf-8");
session_start();
session_unset();//清空会话变量
session_destroy();

//删除cookie
setcookie("username","",time()-60);
setcookie("password","",time()-60);

echo "<script>alert('您已退出登录！');location.href='login_c.php';</script>";
?>