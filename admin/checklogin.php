<?php
session_start();
require("../connection/conn.php");
$strSql = "select * from admin where username='$user' and userpassword='$password'";

$res=mysql_query($strSql);
$login=mysql_fetch_array($res);
if(!empty($login))
{
$_SESSION["user_name"]=$user;
	echo"<script>alert('登录成功了');location.href='elements.php'</script>";

}
else
{echo"<script>alert('用户名或者密码错误');history.back();</script>";
exit;

}
?>

