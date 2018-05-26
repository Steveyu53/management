<?php
session_start();
require("../connection/conn.php");
$strSql = "select * from admin where username='$_SESSION[user_name]' and userpassword='$oldpass'";

$res=mysql_query($strSql);
$login=mysql_fetch_array($res);
if(!empty($login))
{
$sql="update admin set userpassword='$newpass' where username='$_SESSION[user_name]'";
$res=mysql_query($sql);

	echo"<script>alert('成功了');history.back();</script>";
	exit;

}
else
{echo"<script>alert('原密码错误');history.back();</script>";
exit;

}
