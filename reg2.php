<?php
session_start();
require("connection/conn.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>�û�ע��</title>
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
    if(!CheckIsNull(user.username,"�������û�����")) return false;
    if(!CheckIsNull(user.name,"������������")) return false;
    if(!CheckIsNull(user.password,"���������룡")) return false;
    if(!CheckIsNull(user.qr_password,"������ȷ�����룡")) return false;
    if(!CheckIsNull(user.tel,"������������ϵ�绰��")) return false;
    if(!CheckIsNull(user.sex,"�����������Ա�")) return false;


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

<div align="center">
  <div class="login">
      <div class="inset">
        <!--start-main-->
            <form name="user" method="post" action="regist.php" onSubmit="return checkdata()">
               <div>
                <h3 style="font-family:Microsoft YaHei;color: #003D79;">�û�ע��</h3>
                <span class="font" style="margin-top: 5px;"><font color="#666666"><font color="#999999">�� �� �� ��
        ����Ϊ �� �� �� �� �� Ϣ �� �� �� �� ������ �� ʵ �� �� �� &quot;<font color="#FF6600">*</font>&quot;
        �� �� �� ��</font></font></span><br>
        <table>
            <tr>
            <font color="#FF6600">*</font>
               <lable style="color: #ABABAB;"><strong>�û���</strong></lable>
           <input type="text" style="border-radius:10px;margin-left:5px;"  name="username">
            </tr>
            <br>
            <tr>
            <font color="#FF6600">*</font>
                <lable style="color: #ABABAB;"><strong>��   ��</strong></lable>
              <input name="password" type="password"  style="border-radius:10px;margin-left: 5px;">
            </tr>
            <br>
            <tr>
            <font color="#FF6600">*</font>
               <lable style="color: #ABABAB;"><strong>ȷ������</strong></lable>
              <input name="qr_password" type="password"  style="border-radius:10px;">
            </tr>
            <br>
             <tr>
             <font color="#FF6600">*</font>
              <lable style="color: #ABABAB;"><strong>��    ��</strong></lable>
              <input type="text" style="border-radius:10px;margin-left: 5px;"  name="tel">
            </tr>
            <br>
            <tr>
              <font color="#FF6600">*</font>
              <lable style="color: #ABABAB;"><strong>��   ��</strong></lable>
              <input type="radio" name="sex" value="��" checked style="margin-left: 30px;">
              <img src="images/ic_male.gif" width="14" height="15">��
              <input type="radio" name="sex" value="Ů" style="margin-left: 30px;">
              <img src="images/ic_female.gif" width="14" height="15">Ů </td>
            </tr>
           <br>
            <tr>
               <lable style="color: #ABABAB;"><strong>��֤��</strong></lable>
              <input name="authcode" type="text"  style="border-radius:10px;margin-top: 5px;">
               <li><image id="captcha_img" border="1" src="captcha.php?r=<php? echo rand();?>"width="100"/><a href="javascript:void(0)"onclick="document.getElementById('captcha_img').src='captcha.php?r='+Math.random()" style="margin-left: 20px">��һ����</a></li><br\>
            </tr>
        </table>
          <div class="sign" style="margin-top: 10px;">
            <input type="submit" name="submit" value="��  ��" class="btn btn-success">
          </div>
          </form>
        </div>

</td>
  </tr>
</table>

</body>
<?php require ("foot.htm"); ?>
</html>



