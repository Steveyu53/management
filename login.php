<?php
session_start();
require("connection/conn.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>�û���¼</title>
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
        alert("�������û���!");
        form1.username.focus();
        return false;
      }
                        if (document.form1.password.value=="")
      {
        alert("����������!");
        form1.password.focus();
        return false;
      }
      return true;
    }
//-->
</script>
</head>
<body  text="#000000" leftmargin="0" topmargin="0">

 <!--����2 ��ʼ-->
        <div class="main">
            
        <!--ͷ�� ��ʼ-->
            <div class="header">
               
                <div class="contact">
           <span>   

<a href="login.php">��¼</a>
            <a href="reg2.php" >ע��</a>
      <a href="admin/">���ǹ���Ա</a>

                    
                </div>
            </div>
            <!--���� ��ʼ-->
            <div class="nav">
                <div class="navLeft"></div>
                <div class="navRight"></div>

                <div class="search">
                    <div class="searchbg">
     <form name="dataForm" target="_blank" method="post" action="dosearch.php" name="form" >
       <input name="jdcz" value="jdcz"size="4" value="1" type = "hidden">
                       <input type="text" value="����ؼ���"  id="query" name="name" 
        />
                   </div>
                   <input type="submit" value="" class="searchSub"/>
                 
      
                     
               </form> 
<!-- <form name="dataForm" target="_blank" method="post" action="dosearch.php" name="form" >
    <input name="jdbc" size="4" value="1" type = "hidden">
                    <input type="text" value="վ������"  id="query" name="name" />
                </div>
                <input type="submit" value="" class="searchSub"/>
            </form> -->

        </div>


                <ul class="mainNav clearfix" id="mainNav">
        <li><a title="��ҳ" href="index.php">��ҳ</a></li>
        <li><a title="���ⷿ��" href="hack.php">���ⷿ��</a>
        <li><a title="���ⷿ��" href="hire.php">���ⷿ��</a>
        <li><a title="���۷���" href="sell.php">���۷���</a>
        <li><a title="�󹺷���" href="buy.php">�󹺷���</a>
        <li><a title="���԰�" href="guest.php">���԰�</a>  
                </ul>
            </div>


<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td>
<?php
if ($_SESSION["userlogin"]!="ok")
{
?>

<div align="center">
  <div class="login" style="margin-top: 40px;">
      <div class="inset">
        <!--start-main-->
        <form action="checklogin.php" method=post name="form1" onSubmit="return checklogin()">
               <div>
                <h3 style="font-family:Microsoft YaHei;color: #003D79;">�û���¼</h2>
            <span style="margin-top: 30px;"><label>�û���</label></span>
            <span><input type="text" style="border-radius:10px;"  name="username"></span>
           </div>
           <div>
            <span><label>��  ��</label></span>
              <span><input name="password" type="password"  style="border-radius:10px;"></span>
           </div>
           <div>
            <span><label>��֤��</label></span>
              <span><input name="authcode" type="text"  style="border-radius:10px;margin-top: 5px;"></span>
               <li><image id="captcha_img" border="1" src="captcha.php?r=<php? echo rand();?>"width="100"/><a href="javascript:void(0)"onclick="document.getElementById('captcha_img').src='captcha.php?r='+Math.random()" style="margin-left: 20px">��һ����</a></li><br\>
           </div>
          <div class="sign" style="margin-top: 10px;">
            <input type="submit" name="Submit" value="��¼" class="btn btn-success">
              <input type="button" name="Submit2" class="btn btn-info" value="ע��" onClick="window.location='reg2.php'" target="_blank">
          </div>
          </form>
        </div>
      </div>
      </form>
      </div>
<?php
}
else
{
?>
      <table width="154" border="0" align="center" cellpadding="6" cellspacing="0">
        <tr>
          <td align="left" valign="middle" bgcolor="#FFFFFF" class="xu_kuan"><div align="center"><span class="font">���ã�<font color=red><?php echo $_SESSION["user_name"]?></font></span></div></td>
        </tr>
        <tr>
          <td align="left" valign="middle" bgcolor="#FFFFFF" class="xu_kuan"><div align="center"><span class="font">��ӭ��<?php echo $_SESSION["loginname"]?>����...</span></div></td>
        </tr>

        <tr>
          <td align="left" valign="middle" bgcolor="#FFFFFF" class="xu_kuan">
            <div align="center"><a href="logout.php" target="_parent"><img src="images/logout.gif" width="62" height="18" border="0"></a></div></td>
        </tr>
      </table>
    <table width="158" align="center" border="0" cellspacing="0" cellpadding="0" >

        <tr>
          <td height="3" align="center" valign="middle"><img src="images/member_small_line.gif" width="158" height="3"></td>
        </tr>

        <tr>
          <td height="3" align="center" valign="middle"><img src="images/member_small_line.gif" width="158" height="3"></td>
        </tr>

        <tr>
          <td height="3" align="center" valign="middle"><img src="images/member_small_line.gif" width="158" height="3"></td>
        </tr>

        <tr>
          <td height="3" align="center" valign="middle"><img src="images/member_small_line.gif" width="158" height="3"></td>
        </tr>
        <tr>
          <td height="25" align="center" valign="middle" class="menu1"><a href="dj_hack.php" class="menu1">��
            �� �� Ϣ �� ��</a></td>
        </tr>
        <tr>
          <td height="3" align="center" valign="middle"><img src="images/member_small_line.gif" width="158" height="3"></td>
        </tr>
        <tr>
          <td height="25" align="center" valign="middle"><a href="dj_hire.php" class="menu1">��
            �� �� Ϣ �� ��</a></td>
        </tr>
        <tr>
          <td height="3" align="center" valign="middle"><img src="images/member_small_line.gif" width="158" height="3"></td>
        </tr>
        <tr>
          <td height="25" align="center" valign="middle"><a href="dj_sell.php" class="menu1">��
            �� �� Ϣ �� ��</a></td>
        </tr>
        <tr>
          <td height="3" align="center" valign="middle"><img src="images/member_small_line.gif" width="158" height="3"></td>
        </tr>
        <tr>
          <td height="25" align="center" valign="middle"><a href="dj_buy.php" class="menu1">��
            �� �� Ϣ �� ��</a></td>
        </tr>
        <tr>
          <td height="3" align="center" valign="middle"><img src="images/member_small_line.gif" width="158" height="3"></td>
        </tr>
        <tr>
          <td height="25" align="center" valign="middle"><a href="logout.php" class="ffbyfont2">��
            �� �� Ա ר ��</a></td>
        </tr>
      </table>
<?php
      }
  ?>
</td>
  </tr>
</table>

</body>
<?php require ("foot.htm"); ?>
</html>



