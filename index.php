<?php require("connection/conn.php"); 
error_reporting(0);?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�������ۼ�����ϵͳ</title>

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



<script type="text/javascript">
    var _speedMark = new Date();
</script>
</head>
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

<body bgcolor="#CCCCCC" text="#000000" leftmargin="0" topmargin="0">

<?php require("headtop.php"); ?>

        <div class="banner mt10">
            <div class="focus" id="focus"> <!--����ͼ-->
                <div class="imgwarpper">
                    <ul class="imgbox"> <!--ͼƬ-->
     <li style="z-index:1;"><img src="./kunming/22.jpg" alt="20131226-5"/></li>
     <li><img src="./kunming/21.jpg" alt="20131226-4"/></li>
    <li><img src="./kunming/23.jpg" alt="20131226-3"/></li>
      <li><img src="./kunming/24.jpg" alt="20131226-2"/></li>
     <!--ͼƬend-->
                </div>
                <div class="numbox"><!--Сͼ-->
                    <ul class="numboxcont">
    <li class="pptOn"></li>
     <li></li>                                                                    <li></li>
                                                                                                                            <li></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
                </div>
                <!--Сͼend-->
            </div>
            <!--����ͼ-->
        </div>


 <div class="contain clearfix">
            
                <!--������Ѷ ��ʼ-->
                  <dl class="left">

                <dt><a href="" class="more">����&gt;&gt;</a>
                <h2><b class="xinwen"></b>��Ʒ����չʾ</h2></dt>
                <dd>
                <?php 
                $strSql="select  * from house_hack where pass='��' order by click desc limit 0,4";
                $res=mysql_query($strSql);
                while($rs=mysql_fetch_array($res))
                {
?>
          <ul class="mt10" style="margin-left: 10px;">
          <a href="sub_hack.php?id=<?php echo $rs["id"]?>" target="_blank">
                    <tr style="CURSOR: hand">
                    <td><img src="./picture/hot.jpg" height="10" width="10"></td>
                      <td height="24" align="left" class="smallfont"><?php echo $rs["house_name"]?>&nbsp;<?php echo $rs["hx"]?>&nbsp;<font color="#FF6600"><?php echo $rs["pay"]?>(Ԫ/��)</font></td>
            <td><font color="#666666"><?php echo $rs["date"]?></font></td>
                      </tr></a>
                    <tr>
                      
                    </tr>
                    </ul>
             <?php
}
?>

        
                                      
                                           
                                           
                                        
                </dd>
               
            </dl>
            <div class="right">
                <!--֪ͨ���� ��ʼ-->
                <dl>
                    <dt>
                    <h2>
                        <ul class="tab_list" id="tabList">
                            <li class="active"><b class="tzgg-icon"></b>�ȵ�����</li>

                            <li style=" width: 60px; padding-top: 3px; height: 26px; "><a href="hack.php"
                                style="font-size:9pt">���޳�ʶ</a></li>
                            <li style=" width: 60px; padding-top: 3px; height: 26px; "><a href="hire.php"
                                style="font-size:9pt">��ƭ����</a></li>
                            <li style=" width: 60px; padding-top: 3px; height: 26px; "><a href="sell.php"
                                style="font-size:9pt">ʱ������</a></li>
                            <li style=" width: 60px; padding-top: 3px; height: 26px; "><a href="buy.php"
                                style="font-size:9pt">��������</a></li>
                            <li style=" width: 60px; padding-top: 3px; height: 26px; "><a href="buy.php"
                                style="font-size:9pt">ר��֧��</a></li>
                            <li style=" width: 60px; padding-top: 3px; height: 26px; "><a href="buy.php"
                                style="font-size:9pt">��������</a></li>
                        </ul>
                    </h2>
                    </dt>
                    <dd>
                <?php 
                $strSql="select  * from house_article where flag='�ȵ�����' order by id desc limit 0,4";
                $res=mysql_query($strSql);
                while($rs=mysql_fetch_array($res))
                {
?>
          <ul class="mt10" style="margin-left: 10px;">
          <a href="sub_hack.php?id=<?php echo $rs["id"]?>" target="_blank">
                    <tr style="CURSOR: hand">
                    <td><img src="./picture/hot.jpg" height="10" width="10"></td>
                      <td height="24" align="left" class="smallfont"><font color="red"><?php echo $rs["title"]?></font>&nbsp;&nbsp;&nbsp;<?php echo $rs["from"]?>&nbsp;</td>
            <td><font color="#666666"><?php echo $rs["date"]?></font></td>
                      </tr></a>
                    <tr>
                      
                    </tr>
                    </ul>
             <?php
}
?>
                    </dd>
                   
                </dl>
                    
                   

            <!-- -->
            
        <!--β�� ��ʼ-->

            
    </div>

    </div>



<table width="978" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="4" bgcolor="#000000"></td>
  </tr>
</table>

<table width="978" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="topkuan">
  <tr align="left" valign="top">

	<td width="1" bgcolor="#CCCCCC"></td>
    <td align="left" valign="top"> <table width="99%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
        <tr align="left" valign="top" bgcolor="#FFFFFF">
          <td width="50%" height="174">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="30" bgcolor="#003D79"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="80" height="20"> <div align="center"><strong><font color="#FFffff">���ⷿ��</font></strong></div></td>
                      <td><div align="right"><a href="hack.php" target="_blank"><font color="#FFffff">����&gt;&gt;</font></a>&nbsp;</div></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="2" background="images/index_r13_c7.gif">
                    <?php
	$strSql="select  * from house_hack where pass='��' order by id desc limit 0,6";
$res=mysql_query($strSql);
while($rs=mysql_fetch_array($res))
{

?>

					<a href="sub_hack.php?id=<?php echo $rs["id"]?>" target="_blank">
                    <tr style="CURSOR: hand">
                    <td height="24" align="left" class="smallfont">[<?php echo $rs["qy"]?>]</td>
                      <td height="24" align="left" class="smallfont"><?php echo $rs["house_name"]?>&nbsp;<?php echo $rs["hx"]?>&nbsp;<font color="#FF6600"><?php echo $rs["pay"]?>(Ԫ/��)</font></td>
						<td><font color="#666666"><?php echo $rs["date"]?></font></td>
                      </tr></a>
                    <tr>
                      <td height="1" background="../images/line.jpg" colspan="2"></td>
                    </tr>
             <?php
}
?>
                  </table></td>
              </tr>
            </table>
          </td>
          <td height="174" align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
               <td height="30" bgcolor="#003D79"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="80" height="20"> <div align="center"><strong><font color="#FFffff">���ⷿ��</font></strong></div></td>
                      <td><div align="right"><a href="hire.php" target="_blank"><font color="#FFffff">����&gt;&gt;</font></a>&nbsp;</div></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="2" background="images/index_r13_c7.gif">
       <?php
$strSql="select  * from house_hire where pass='��' order by id desc limit 0,6";
$res=mysql_query($strSql);
while($rs=mysql_fetch_array($res))
{
	?>

					<a href="sub_hire.php?id=<?php echo $rs["id"]?>" target="_blank">
                    <tr style="CURSOR: hand">
                      <td height="24" align="left" class="smallfont">[<?php echo $rs["qy"]?>]</td>
                      <td><?php echo $rs["address"]?></td>
                      <td><?php echo $rs["hx"]?>&nbsp;<font color="#FF6600"><?php echo $rs["min_pay"]?></font>~<font color="#FF6600"><?php echo $rs["max_pay"]?>(Ԫ/��)</font></td>
						<td><font color="#666666"><?php echo $rs["date"]?></font></td>
                    </tr></a>
                    <tr>
                      <td height="1" background="../images/line.jpg"></td>
                    </tr>
             <?php
}
?>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="2"></td>
        </tr>
      </table>
      <table width="99%" border="0" align="center" cellpadding="2" cellspacing="1" bgcolor="#CCCCCC">
        <tr align="left" valign="top" bgcolor="#FFFFFF">
          <td width="50%" height="174" bgcolor="#FFFFFF">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
               <td height="30" bgcolor="#003D79"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="80" height="20"> <div align="center"><strong><font color="#FFffff">���۷���</font></strong></div></td>
                      <td><div align="right"><a href="sell.php" target="_blank"><font color="#FFffff">����&gt;&gt;</font></a>&nbsp;</div></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="2" background="images/index_r13_c7.gif">

  <?php
$strSql="select  * from house_sell where pass='��' order by id desc limit 0,6";
$res=mysql_query($strSql);
while($rs=mysql_fetch_array($res))
{
	?>
                    <a href="sub_sell.php?id=<?php echo $rs["id"]?>" target="_blank">
					<tr style="CURSOR: hand">
          <td height="24" align="left" class="smallfont">[<?php echo $rs["qy"]?>]</td>
                      <td height="24" class="smallfont" align="left"><?php echo $rs["house_name"]?>&nbsp;<?php echo $rs["hx"]?>&nbsp;<font color="#FF6600"><?php echo $rs["pay"]?>(��)</font></td>
					  <td><font color="#666666"><?php echo $rs["date"]?></font></td>
					  </tr>
					  </a>
                    <tr>
                      <td height="1" background="../images/line.jpg" colspan="2"></td>
                    </tr>
             <?php
}
?>
                  </table></td>
              </tr>
            </table>
          </td>
          <td height="174" align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
               <td height="30" bgcolor="#003D79"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="80" height="20"> <div align="center"><strong><font color="#FFFFFF" >�󹺷���</font></strong></div></td>
                      <td><div align="right"><a href="buy.php" target="_blank"><font color="#FFFFFF">����&gt;&gt;</font>&nbsp;</a></div></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="2" background="images/index_r13_c7.gif">
            <?php
$strSql="select  * from house_buy where pass='��' order by id desc limit 0,6";
$res=mysql_query($strSql);
while($rs=mysql_fetch_array($res))
{
	?>

					<a href="sub_buy.php?id=<?php echo $rs["id"]?>" target="_blank" >
                    <tr style="CURSOR: hand">
                      <td height="24" class="smallfont" align="left">[<?php echo $rs["qy"]?>]</td>
                      <td><?php echo $rs["address"]?></td>
                      <td><?php echo $rs["hx"]?>&nbsp;<font color="#FF6600"><?php echo $rs["min_pay"]?></font>~<font color="#FF6600"><?php echo $rs["max_pay"]?>(��)</font></td>
						<td><font color="#666666"><?php echo $rs["date"]?></font></td>
                     </tr></a>
                    <tr>
                      <td height="1" background="../images/line.jpg" colspan="2"></td>
                    </tr>
             <?php
}
?>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table> </td>
  </tr>
</table>


<?php require ("foot.htm"); ?>

</body>
</html>
