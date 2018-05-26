<?php
session_start();
require("connection/conn.php");
$sql="select * from house_user where username='$username' and password='$password'";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);
if(!empty($data)&&isset($_REQUEST['authcode']))
{
	if (strtolower($_REQUEST['authcode'])==$_SESSION['authcode']) {
		# code...
		$_SESSION["userlogin"]="ok";
		$_SESSION["loginname"]=$username;
        echo "<script>alert('登录成功');location.href='index.php';</script>";
		exit;
	}else{
		echo "<script>alert('请重新输入验证码');window.location.href='login.php';</script>";
	}
	
}
else
{
echo "<script>alert('用户名密码错误');history.back();</script>";
		exit;
	}
?>


