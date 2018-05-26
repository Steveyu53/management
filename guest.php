<?php
session_start();
require("connection/conn.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>房屋论坛</title>
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
                <h3 style="font-family:Microsoft YaHei;color: #003D79;">房屋论坛</h3></br>
                <span class="font" style="margin-top: 5px;"><font color="#999999">亲爱的朋友，此处论坛仅限房屋信息探讨哦！</font></span><br>
                <hr style="height:1px;border:none;border-top:1px dashed #0066CC;" />

                <?php 
                $strSql="select  * from house_leaveword  order by id desc";
                $res=mysql_query($strSql);
                while($rs=mysql_fetch_array($res))
                {
?>
          <div>
                <div class="left" style="text-align: left;margin-left: 100px;float: left;">
                    <a style="color: red;" href="guestinfo.php?id=<?php echo $rs["id"]?>" target="_blank"><?php echo $rs["title"]?></a>
                </div>
                <div class="left" style="float: left;margin-left: 200px;"><p><?php echo $rs["date"]?></p></div>
                </div></br>
                <hr style="height:0.5px;border:none;border-top:1px solid  #E0E0E0;" />
             <?php
}
?>

          </form>
        </div>

</td>
  </tr>
</table>

</body>
<?php require ("foot.htm"); ?>
</html>



