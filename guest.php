<?php
session_start();
require("connection/conn.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>������̳</title>
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
                <h3 style="font-family:Microsoft YaHei;color: #003D79;">������̳</h3></br>
                <span class="font" style="margin-top: 5px;"><font color="#999999">�װ������ѣ��˴���̳���޷�����Ϣ̽��Ŷ��</font></span><br>
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



