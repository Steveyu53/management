<?php
session_start();
require("connection/conn.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>用户注册</title>
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
  function checkdata()
  {
    if(!CheckIsNull(user.username,"请输入用户名！")) return false;
    if(!CheckIsNull(user.name,"请输入姓名！")) return false;
    if(!CheckIsNull(user.password,"请输入密码！")) return false;
    if(!CheckIsNull(user.qr_password,"请输入确认密码！")) return false;
    if(!CheckIsNull(user.tel,"请输入您的联系电话！")) return false;
    if(!CheckIsNull(user.sex,"请输入您的性别！")) return false;


  }

//-->
</script>
</head>
<body  text="#000000" leftmargin="0" topmargin="0">

 <!--主体2 开始-->
        <div class="main">
            
        <!--头部 开始-->
            <div class="header">
               
                <div class="contact">
           <span>   

<a href="login.php">登录</a>
            <a href="reg2.php" >注册</a>
      <a href="admin/">我是管理员</a>

                    
                </div>
            </div>
            <!--导航 开始-->
            <div class="nav">
                <div class="navLeft"></div>
                <div class="navRight"></div>

                <div class="search">
                    <div class="searchbg">
     <form name="dataForm" target="_blank" method="post" action="dosearch.php" name="form" >
       <input name="jdcz" value="jdcz"size="4" value="1" type = "hidden">
                       <input type="text" value="输入关键字"  id="query" name="name" 
        />
                   </div>
                   <input type="submit" value="" class="searchSub"/>
                 
      
                     
               </form> 
<!-- <form name="dataForm" target="_blank" method="post" action="dosearch.php" name="form" >
    <input name="jdbc" size="4" value="1" type = "hidden">
                    <input type="text" value="站内搜索"  id="query" name="name" />
                </div>
                <input type="submit" value="" class="searchSub"/>
            </form> -->

        </div>


                <ul class="mainNav clearfix" id="mainNav">
        <li><a title="首页" href="index.php">首页</a></li>
        <li><a title="出租房屋" href="hack.php">出租房屋</a>
        <li><a title="求租房屋" href="hire.php">求租房屋</a>
        <li><a title="出售房屋" href="sell.php">出售房屋</a>
        <li><a title="求购房屋" href="buy.php">求购房屋</a>
        <li><a title="留言板" href="guest.php">留言板</a>  
                </ul>
            </div>


<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td>

<div align="center">
  <div class="login">
      <div class="inset">
        <!--start-main-->
            <form name="user" method="post" action="regist.php" onSubmit="return checkdata()">
               <div>
                <h3 style="font-family:Microsoft YaHei;color: #003D79;">用户注册</h3>
                <span class="font" style="margin-top: 5px;"><font color="#666666"><font color="#999999">尊 敬 的 客
        户，为 了 能 您 的 信 息 能 正 常 提 交，请 如 实 填 好 打 &quot;<font color="#FF6600">*</font>&quot;
        号 的 部 分</font></font></span><br>
        <table>
            <tr>
            <font color="#FF6600">*</font>
               <lable style="color: #ABABAB;"><strong>用户名</strong></lable>
           <input type="text" style="border-radius:10px;margin-left:5px;"  name="username">
            </tr>
            <br>
            <tr>
            <font color="#FF6600">*</font>
                <lable style="color: #ABABAB;"><strong>密   码</strong></lable>
              <input name="password" type="password"  style="border-radius:10px;margin-left: 5px;">
            </tr>
            <br>
            <tr>
            <font color="#FF6600">*</font>
               <lable style="color: #ABABAB;"><strong>确认密码</strong></lable>
              <input name="qr_password" type="password"  style="border-radius:10px;">
            </tr>
            <br>
             <tr>
             <font color="#FF6600">*</font>
              <lable style="color: #ABABAB;"><strong>电    话</strong></lable>
              <input type="text" style="border-radius:10px;margin-left: 5px;"  name="tel">
            </tr>
            <br>
            <tr>
              <font color="#FF6600">*</font>
              <lable style="color: #ABABAB;"><strong>性   别</strong></lable>
              <input type="radio" name="sex" value="男" checked style="margin-left: 30px;">
              <img src="images/ic_male.gif" width="14" height="15">男
              <input type="radio" name="sex" value="女" style="margin-left: 30px;">
              <img src="images/ic_female.gif" width="14" height="15">女 </td>
            </tr>
           <br>
            <tr>
               <lable style="color: #ABABAB;"><strong>验证码</strong></lable>
              <input name="authcode" type="text"  style="border-radius:10px;margin-top: 5px;">
               <li><image id="captcha_img" border="1" src="captcha.php?r=<php? echo rand();?>"width="100"/><a href="javascript:void(0)"onclick="document.getElementById('captcha_img').src='captcha.php?r='+Math.random()" style="margin-left: 20px">换一个？</a></li><br\>
            </tr>
        </table>
          <div class="sign" style="margin-top: 10px;">
            <input type="submit" name="submit" value="提  交" class="btn btn-success">
          </div>
          </form>
        </div>

</td>
  </tr>
</table>

</body>
<?php require ("foot.htm"); ?>
</html>



