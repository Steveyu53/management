<?php require("../connection/conn.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>�������</title>
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
            <h1 class="logo">��������.<span>Admin</span></h1>
            <span class="slogan">��̨����ϵͳ</span>
            
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
                <span>����Ա</span>
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
                    <h4>����Ա</h4>
                    <span class="email">admin</span>
                    <ul>
                        <li><a href="editprofile.html">�༭����</a></li>
                        <li><a href="accountsettings.html">�˺�����</a></li>
                        <li><a href="help.html">����</a></li>
                        <li><a href="index.html">�˳�</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
        <ul class="headermenu">
            <li class="current"><a href="elements.php"><span class="icon icon-flatscreen"></span>������Ϣ����</a></li>
            <li><a href="manageblog.php"><span class="icon icon-pencil"></span>�û�����</a></li>
            <li><a href="messages.php"><span class="icon icon-message"></span>���Ź���</a></li>
            <li><a href="reports.php"><span class="icon icon-chart"></span>��������</a></li>
        </ul>        
    </div><!--header-->
    
    <div class="vernav iconmenu">
        <ul>
            <li><a href="messages.php" class="sent">���Ź���</a></li>
            <li><a href="newsadd.php" class="trash">�������</a></li>
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->
    
    <div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">�������</h1>
        </div><!--pageheader-->
        <div style="width: 80%;margin:auto auto;">
        <div style="margin-top: 30px;"></div>
            <FORM action="article.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <DIV class="control-group" style="text-align: center;">
        <p><strong>������Ŀ</strong><p>
            <DIV  class="controls" style="margin-top: 10px;"><input type="text" name="title"></input></DIV>
        </DIV>

        <DIV class="control-group" style="text-align: center;margin-top: 10px;">
           <strong>��������</strong>
            <DIV  class="controls" style="margin-top: 10px;">
            <textarea  cols="90" rows="8" name="content" ></textarea>
            <P class=help-block></P>
            </DIV>
        </DIV>
        <DIV class="control-group" style="text-align: center;margin-top:10px;">
        <p><strong>������Դ</strong><p>
            <DIV  class="controls" style="margin-top: 10px;"><input type="text" name="from"></input></DIV>
        </DIV>
                <DIV class="control-group" style="margin-left: 80px;margin-top: 10px;" >
           <strong>ѡ��������������</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <select name="subject">
               <option value="" selected>��ѡ�����</option>
                   <?php

  $Sql="select * from house_item order by id";

   $res=mysql_query($Sql);
   while($rs0=mysql_fetch_array($res))
   {
  ?>
                      <option value="<?php echo $rs0["name"]?>"><?php echo $rs0["name"]?></option>
                      <?php
    }
    ?>
           </select>
        </DIV>
        <DIV class="control-group" style="margin-left: 80px;margin-top: 20px;">
           <strong>ѡ��ͼƬ</strong><input type="file" name="file" />
        </DIV>
        <DIV class="control-group" style="margin-left: 300px;margin-top: 50px;">
            <LABEL class="laber_from" ></LABEL>
            <DIV class="controls" style="float:left;margin-left: 100px;"><input class="btn btn-info" type="submit" style="width:80px;" value="��������" name="submit"></input>&nbsp;&nbsp;
            <div class="controls" style="float: left;margin-left: 30px;"><input type="reset" class="btn btn-success" style="width:80px;margin-left: 30px;"></input></div>

            </DIV>
        </DIV>
  </FORM>
        </div>
    
    </div><!--centercontent-->
    
    
</div><!--bodywrapper-->

</body>
</html>
