<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>����Ա</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="js/plugins/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/custom/general.js"></script>
<script type="text/javascript" src="js/custom/index.js"></script>
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

<body class="loginpage">
<script language="JavaScript">
<!--
  function checkdata()
  {
    if(!CheckIsNull(form1.user,"�������û�����")) return false;
    if(!CheckIsNull(form1.password,"�������û����룡")) return false;
  }
//-->
</script>
  <div class="loginbox">
      <div class="loginboxinner">
          
            <div class="logo">
              <h1 class="logo">��������.<span>Admin</span></h1>
        <span class="slogan">��̨����ϵͳ</span>
            </div><!--logo-->
            
            <br clear="all" /><br />
            
            <div class="nousername">
        <div class="loginmsg">���벻��ȷ.</div>
            </div><!--nousername-->
            
            <div class="nopassword">
        <div class="loginmsg">���벻��ȷ.</div>
                <div class="loginf">
                    <div class="thumb"><img alt="" src="images/thumbs/avatar1.png" /></div>
                    <div class="userlogged">
                        <h4></h4>
                        <a href="index.html">Not <span></span>?</a> 
                    </div>
                </div><!--loginf-->
            </div><!--nopassword-->
            
            <form name="form1" method="post" action="checklogin.php" onsubmit="return checkdata()">
              
                <div class="username">
                  <div class="usernameinner">
                      <input type="text" name="user" id="username" />
                    </div>
                </div>
                
                <div class="password">
                  <div class="passwordinner">
                      <input type="password" name="password" id="password" />
                    </div>
                </div>
                
                <button>��¼</button>
                
                <div class="keep"><input type="checkbox" /> ��ס����</div>
            
            </form>
            
        </div><!--loginboxinner-->
    </div><!--loginbox-->


</body>
</html>