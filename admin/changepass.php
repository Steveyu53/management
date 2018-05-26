<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>用户管理</title>
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
<style>
.huikuan {  border: #cccccc; border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px}

</style>

<SCRIPT LANGUAGE="JavaScript" src="datacheck.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">
<!--
	function checkdata()
	{
		if(!CheckIsNull(form1.oldpass,"请输入旧密码！")) return false;
		if(!CheckIsNull(form1.newpass,"请输入新密码！")) return false;
		if(!CheckIsNull(form1.confirm,"请输入确认密码！")) return false;
		if(form1.newpass.value!=form1.confirm.value)
		{
			alert("新密码和确认密码不一样！");
			form1.newpass.focus()
			return false;
		}
	}
//-->
</SCRIPT>
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
            <li><a href="" class="calendar">管理员添加</a></li>
        </ul>
        <a class="togglemenu"></a>
    </div><!--leftmenu-->
    
    <div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">管理员管理</h1>
        </div><!--pageheader-->
        <div style="width: 80%;margin:auto auto;">
        <div style="margin-top: 30px;"></div>
<table width="458" border="0" cellpadding="0" cellspacing="0" align="center" class="kuan">
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">
      <table width="100%" border="0" cellpadding="0" cellspacing="2">
        <tr>
          <td background="images/system1.gif" height="25" align="center"><font color="#FF6633" class="font"><b><font color="#FF9B59">请输入
            &quot;<font color="#FFFFFF">旧的密码</font>&quot; 和 &quot;<font color="#FFFFFF">新的密码</font>&quot;
            来修改密码</font></b></font></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" class="linkfont" align="center" valign="middle">
            <form name="form1" method="post" action="savepass.php" onsubmit="return checkdata()">
              <br>
              <table width="257" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="33%" class="font" align="right" valign="middle" height="18">旧的密码：</td>
                  <td width="67%" align="left" valign="middle" height="18">
                    <input type="password" name="oldpass" size="18" class="textinput">
                  </td>
                </tr>
                <tr>
                  <td width="33%" class="font" align="right" valign="middle" height="19">新的密码：</td>
                  <td width="67%" align="left" valign="middle" height="19">
                    <input type="password" name="newpass" size="18" class="textinput">
                  </td>
                </tr>
                <tr>
                  <td width="33%" class="font" align="right" valign="middle">确认密码：</td>
                  <td width="67%" align="left" valign="middle">
                    <input type="password" name="confirm" size="18" class="textinput">
                  </td>
                </tr>
                <tr align="center" valign="middle">
                  <td colspan="2" height="36"> <br>
                    <input type="submit" name="Submit" value="修改" class="textbotton">
                    <input type="reset" name="Submit2" value="重置" class="textbotton">
                  </td>
                </tr>
              </table>
            </form>

          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</div>
    
    </div><!--centercontent-->
    
    
</div><!--bodywrapper-->

</body>
</html>
