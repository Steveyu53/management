<?php require("../connection/conn.php");
if($_POST['username']){
        $user = $_POST['username'];
        $pass = $_POST['passwd'];
        $result =mysql_query("select * from admin where username='$user';");
        if($result->num_rows > 0){
            echo "<script>onload = function(){document.getElementById('errortext').innerHTML='管理员已存在';}</script>";
        }else{
            $result = mysql_query("insert into admin (username, userpassword) values ('$user', '$pass')");
            if($result){
                echo "<script>onload = function(){document.getElementById('errortext').innerHTML='管理员添加成功';}</script>";
            }
        }
    }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>管理员添加</title>
<link rel="stylesheet" href="../css/table.css">
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="js/plugins/jquery.alerts.js"></script>
<script type="text/javascript" src="js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/custom/general.js"></script>
<script type="text/javascript" src="js/custom/blog.js"></script>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
    <script src="js/plugins/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<body class="withvernav">
<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
           <h1 class="logo">房屋租赁.<span>Admin</span></h1>
            <span class="slogan">后台管理系统</span>
            
            <div class="search">
            </div><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
            <!--<div class="notification">
                <a class="count" href="notifications.html"><span>9</span></a>
            </div>
            -->
            <div class="userinfo">
                <img src="images/thumbs/avatar.png" alt="" />
                <span>管理员</span>
            </div><!--userinfo-->
            
            <div class="userinfodrop">
                <div class="avatar">
                    <a href=""><img src="images/thumbs/avatarbig.png" alt="" /></a>
                    <div class="changetheme">
                        Change theme: <br />
                        <a class="default"></a>
                        <a class="blueline"></a>
                        <a class="greenline"></a>
                        <a class="contrast"></a>
                        <a class="custombg"></a>
                    </div>
                </div><!--avatar-->
                <div class="userdata">
                    <h4>管理员</h4>
                    <span class="email">admin</span>
                    <ul>
                        <li><a href="editprofile.html">编辑资料</a></li>
                        <li><a href="accountsettings.html">账号设置</a></li>
                        <li><a href="help.html">帮助</a></li>
                        <li><a href="index.html">退出</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
        <ul class="headermenu">
            <li class="current"><a href="elements.php"><span class="icon icon-flatscreen"></span>房屋信息管理</a></li>
            <li><a href="manageblog.php"><span class="icon icon-pencil"></span>用户管理</a></li>
            <li><a href="messages.php"><span class="icon icon-message"></span>新闻管理</a></li>
            <li><a href="reports.php"><span class="icon icon-chart"></span>其他管理</a></li>
        </ul>
    </div><!--header-->
    
    <div class="vernav2 iconmenu">
        <ul>
            <li class="current"><a href="manageblog.php" class="editor">用户管理</a></li>
            <li><a href="newpost.php" class="elements">管理员管理</a></li>
            <li><a href="adminadd.php" class="calendar">管理员添加</a></li>
        </ul>
        <a class="togglemenu"></a>
    </div><!--leftmenu-->
    
    <div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">添加管理员</h1>
        </div><!--pageheader-->
        <div style="width: 80%;margin:auto auto;">
        <div style="margin-top: 30px;"></div>
        <center>
            <FORM action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <div>
            管理员名称：<input type="text" name="username">
        </div>
        <div style="margin-top:30px; ">
            管理员密码：<input type="text" name="passwd">
        </div>
        <DIV>
            <LABEL class="laber_from" ></LABEL>
            <DIV class="controls" ><button class="btn btn-success" style="width:120px;" >添加管理员</button></DIV>
        </DIV>
  </FORM>
  </center>
        </div>
    
    </div><!--centercontent-->
    
    
</div><!--bodywrapper-->

</body>
</html>
