<?php require("../connection/conn.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>������Ϣ����</title>
<link rel="stylesheet" href="../css/table.css">
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/plugins/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.cookie.js"></script>
<script type='text/javascript' src='js/plugins/fullcalendar.min.js'></script>
<script type="text/javascript" src="js/custom/general.js"></script>
<script type="text/javascript" src="js/custom/calendar.js"></script>
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
<SCRIPT LANGUAGE="JavaScript">
<!--
	function GON()
	{
		var pageno;
		var strs;
		if(form1.pp.value=="")
		{
			pageno=1;
		}
		else
		{
			pageno=form1.pp.value;
		}
		strs="view_sell.php?PageNO=" + pageno;
		window.location.href=strs;
	}
//-->
</SCRIPT>

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
            
            <div class="userinfodrop">            	<div class="avatar">
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
                        <li><a href="editprofile.php">�༭����</a></li>
                        <li><a href="accountsettings.php">�˺�����</a></li>
                        <li><a href="help.html">����</a></li>
                        <li><a href="myindex.php">�˳�</a></li>
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
    
    <div class="vernav2 iconmenu">
        <ul>
            <li><a href="elements.php" class="elements">������Ϣ����</a></li>
            <li><a href="widgets.php" class="widgets">������Ϣ����</a></li>
            <li><a href="calendar.php" class="calendar">������Ϣ����</a></li>
            <li><a href="support.php" class="support">������Ϣ����</a></li>
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->
        
    <div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">������Ϣ����</h1>
        </div><!--pageheader-->
        <div style="width: 80%;margin:auto auto;">
        <div style="margin-top: 30px;"></div>
			<?php
			require("view_sell.php");
			?>
        </div>
    </div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>
</html>
