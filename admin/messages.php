<?php require("../connection/conn.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>新闻管理</title>
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
    
    <div class="vernav iconmenu">
        <ul>
            <li><a href="messages.php" class="sent">新闻管理</a></li>
            <li><a href="newsadd.php" class="trash">新闻添加</a></li>
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->
    
    <div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">新闻管理</h1>
        </div><!--pageheader-->
        <div style="width: 80%;margin:auto auto;">
        <div style="margin-top: 30px;"></div>
  <br>
  <FORM METHOD=POST NAME="form1">
<center>
    查询新闻标题
    <input type="text" name="username">
    <input type="submit" name="Submit" value="查询">
    <br>
  </center>
  <br>
  <table class="table" cellspacing="0" cellpadding="0" style="border:solid 1px ;background-color: white;">
    <tr>
    <th>ID</th>
      <th>新闻标题</th>
      <th>新闻来源</th>
            <th>新闻分类</th>
            <th>发布日期</th>
            <th>查看或修改</th>
      <th>删除</th>
    </tr>
   <?php
    $strSql="select * from house_article order by id desc";
$res=mysql_query($strSql);
while($rs=mysql_fetch_array($res))
{
   ?>
    <tr>
      <td><?php echo $rs["id"]?></td>
      <td><?php echo $rs["title"]?></td>
      <td><?php echo $rs["from"]?></td>
            <td><?php echo $rs["flag"]?></td>
<td><?php echo $rs["date"]?></td>
<td><a href="changenews.php?id=<?php echo $rs["id"]?>" class="linkfont">查看或修改</a></td>
      <td><a href="del_user.php?id=<?php echo $rs["id"]?>" class="linkfont">删除</a></td>
    </tr>
    <?php
    }
    ?>

  </table>
</FORM>
</body>
</html>

        </div>
    
    </div><!--centercontent-->
    
    
</div><!--bodywrapper-->

</body>
</html>
