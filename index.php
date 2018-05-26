<?php require("connection/conn.php"); 
error_reporting(0);?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>房屋销售及租赁系统</title>

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
				alert("请输入用户名!");
				form1.username.focus();
				return false;
			}
                        if (document.form1.password.value=="")
			{
				alert("请输入密码!");
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
            <div class="focus" id="focus"> <!--焦点图-->
                <div class="imgwarpper">
                    <ul class="imgbox"> <!--图片-->
     <li style="z-index:1;"><img src="./kunming/22.jpg" alt="20131226-5"/></li>
     <li><img src="./kunming/21.jpg" alt="20131226-4"/></li>
    <li><img src="./kunming/23.jpg" alt="20131226-3"/></li>
      <li><img src="./kunming/24.jpg" alt="20131226-2"/></li>
     <!--图片end-->
                </div>
                <div class="numbox"><!--小图-->
                    <ul class="numboxcont">
    <li class="pptOn"></li>
     <li></li>                                                                    <li></li>
                                                                                                                            <li></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
                </div>
                <!--小图end-->
            </div>
            <!--焦点图-->
        </div>


 <div class="contain clearfix">
            
                <!--新闻资讯 开始-->
                  <dl class="left">

                <dt><a href="" class="more">更多&gt;&gt;</a>
                <h2><b class="xinwen"></b>精品房屋展示</h2></dt>
                <dd>
                <?php 
                $strSql="select  * from house_hack where pass='是' order by click desc limit 0,4";
                $res=mysql_query($strSql);
                while($rs=mysql_fetch_array($res))
                {
?>
          <ul class="mt10" style="margin-left: 10px;">
          <a href="sub_hack.php?id=<?php echo $rs["id"]?>" target="_blank">
                    <tr style="CURSOR: hand">
                    <td><img src="./picture/hot.jpg" height="10" width="10"></td>
                      <td height="24" align="left" class="smallfont"><?php echo $rs["house_name"]?>&nbsp;<?php echo $rs["hx"]?>&nbsp;<font color="#FF6600"><?php echo $rs["pay"]?>(元/月)</font></td>
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
                <!--通知公告 开始-->
                <dl>
                    <dt>
                    <h2>
                        <ul class="tab_list" id="tabList">
                            <li class="active"><b class="tzgg-icon"></b>热点新闻</li>

                            <li style=" width: 60px; padding-top: 3px; height: 26px; "><a href="hack.php"
                                style="font-size:9pt">租赁常识</a></li>
                            <li style=" width: 60px; padding-top: 3px; height: 26px; "><a href="hire.php"
                                style="font-size:9pt">防骗技巧</a></li>
                            <li style=" width: 60px; padding-top: 3px; height: 26px; "><a href="sell.php"
                                style="font-size:9pt">时事评论</a></li>
                            <li style=" width: 60px; padding-top: 3px; height: 26px; "><a href="buy.php"
                                style="font-size:9pt">房屋行情</a></li>
                            <li style=" width: 60px; padding-top: 3px; height: 26px; "><a href="buy.php"
                                style="font-size:9pt">专家支招</a></li>
                            <li style=" width: 60px; padding-top: 3px; height: 26px; "><a href="buy.php"
                                style="font-size:9pt">房屋政策</a></li>
                        </ul>
                    </h2>
                    </dt>
                    <dd>
                <?php 
                $strSql="select  * from house_article where flag='热点新闻' order by id desc limit 0,4";
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
            
        <!--尾部 开始-->

            
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
                      <td width="80" height="20"> <div align="center"><strong><font color="#FFffff">出租房屋</font></strong></div></td>
                      <td><div align="right"><a href="hack.php" target="_blank"><font color="#FFffff">更多&gt;&gt;</font></a>&nbsp;</div></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="2" background="images/index_r13_c7.gif">
                    <?php
	$strSql="select  * from house_hack where pass='是' order by id desc limit 0,6";
$res=mysql_query($strSql);
while($rs=mysql_fetch_array($res))
{

?>

					<a href="sub_hack.php?id=<?php echo $rs["id"]?>" target="_blank">
                    <tr style="CURSOR: hand">
                    <td height="24" align="left" class="smallfont">[<?php echo $rs["qy"]?>]</td>
                      <td height="24" align="left" class="smallfont"><?php echo $rs["house_name"]?>&nbsp;<?php echo $rs["hx"]?>&nbsp;<font color="#FF6600"><?php echo $rs["pay"]?>(元/月)</font></td>
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
                      <td width="80" height="20"> <div align="center"><strong><font color="#FFffff">求租房屋</font></strong></div></td>
                      <td><div align="right"><a href="hire.php" target="_blank"><font color="#FFffff">更多&gt;&gt;</font></a>&nbsp;</div></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="2" background="images/index_r13_c7.gif">
       <?php
$strSql="select  * from house_hire where pass='是' order by id desc limit 0,6";
$res=mysql_query($strSql);
while($rs=mysql_fetch_array($res))
{
	?>

					<a href="sub_hire.php?id=<?php echo $rs["id"]?>" target="_blank">
                    <tr style="CURSOR: hand">
                      <td height="24" align="left" class="smallfont">[<?php echo $rs["qy"]?>]</td>
                      <td><?php echo $rs["address"]?></td>
                      <td><?php echo $rs["hx"]?>&nbsp;<font color="#FF6600"><?php echo $rs["min_pay"]?></font>~<font color="#FF6600"><?php echo $rs["max_pay"]?>(元/月)</font></td>
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
                      <td width="80" height="20"> <div align="center"><strong><font color="#FFffff">出售房屋</font></strong></div></td>
                      <td><div align="right"><a href="sell.php" target="_blank"><font color="#FFffff">更多&gt;&gt;</font></a>&nbsp;</div></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="2" background="images/index_r13_c7.gif">

  <?php
$strSql="select  * from house_sell where pass='是' order by id desc limit 0,6";
$res=mysql_query($strSql);
while($rs=mysql_fetch_array($res))
{
	?>
                    <a href="sub_sell.php?id=<?php echo $rs["id"]?>" target="_blank">
					<tr style="CURSOR: hand">
          <td height="24" align="left" class="smallfont">[<?php echo $rs["qy"]?>]</td>
                      <td height="24" class="smallfont" align="left"><?php echo $rs["house_name"]?>&nbsp;<?php echo $rs["hx"]?>&nbsp;<font color="#FF6600"><?php echo $rs["pay"]?>(万)</font></td>
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
                      <td width="80" height="20"> <div align="center"><strong><font color="#FFFFFF" >求购房屋</font></strong></div></td>
                      <td><div align="right"><a href="buy.php" target="_blank"><font color="#FFFFFF">更多&gt;&gt;</font>&nbsp;</a></div></td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="2" background="images/index_r13_c7.gif">
            <?php
$strSql="select  * from house_buy where pass='是' order by id desc limit 0,6";
$res=mysql_query($strSql);
while($rs=mysql_fetch_array($res))
{
	?>

					<a href="sub_buy.php?id=<?php echo $rs["id"]?>" target="_blank" >
                    <tr style="CURSOR: hand">
                      <td height="24" class="smallfont" align="left">[<?php echo $rs["qy"]?>]</td>
                      <td><?php echo $rs["address"]?></td>
                      <td><?php echo $rs["hx"]?>&nbsp;<font color="#FF6600"><?php echo $rs["min_pay"]?></font>~<font color="#FF6600"><?php echo $rs["max_pay"]?>(万)</font></td>
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
