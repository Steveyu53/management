<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
header("Content-type:text/html;charset=utf-8");
session_start();
require("connection/conn.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Ethos Login Form Flat Responsive widget Template :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Ethos Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<link rel="stylesheet" href="css.css" type="text/css">
<link  type="text/css" rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
         <script src="./bootstrap/js/jquery-1.11.1.min.js"></script>
       <script src="./bootstrap/js/bootstrap.min.js"></script>
    <link href="css/base2.css" rel="stylesheet" type="text/css" />
    <link href="css/css4.css" rel="stylesheet" type="text/css" />
    <link href="css/footer.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="./bootstrap/js/jquery-1.4.1.js"></script>
<script type="text/javascript" src="./bootstrap/js/public2.js"></script>
 <script type="text/javascript" src="http://cdn.ynu.edu.cn/other/ynujs/fcous.js"></script>
 <script language="JavaScript" src="share/nei_fc.js"></script>
<script language="JavaScript">
<!--
	function checklogin()
		{
			if (document.form1.username.value=="")
			{
				alert("请输入用户名!");
				form1.username.focus();
				return false;
			}
                        if (document.form1.password.value=="")
			{
				alert("请输入密码!");
				form1.password.focus();
				return false;
			}
			return true;
		}
//-->
</script>
</head>
<body bgcolor="#CCCCCC" text="#000000" leftmargin="0" topmargin="0">
	<div class="main">
		<div class="login">
			<h1>欢迎登陆</h1>
			<div class="inset">
				<!--start-main-->
				<form>
			         <div>
			         	<h2>用户登录</h2>
						<span><label>用户名</label></span>
						<span><input type="text" class="textbox" id="active"></span>
					 </div>
					 <div>
						<span><label>密码</label></span>
					    <span><input type="password" class="password"></span>
					 </div>
					<div class="sign">
						<div class="submit">
							<img src="images/arrow.png" />
						</div>
					</div>
					</form>
				</div>
			</div>
		<!--//end-main-->
		</div>

</body>
</html>