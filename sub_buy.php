<?php
session_start();
 require("connection/conn.php"); ?>

<html>
<head>
<title>求购详细信息---房屋销售及租赁系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="css.css" type="text/css">
</head>
<script language="JavaScript" src="share/nei_fc.js"></script>
<script language="JavaScript">
<!--
	function checksearch()
	{
	if(!CheckIsNumeric(search.search_mj_min,"请在输入框中输入数值！")) return false;
	if(!CheckIsNumeric(search.search_mj_max,"请在输入框中输入数值！")) return false;
	if(!CheckIsNumeric(search.search_jg_min,"请在输入框中输入数值！")) return false;
	if(!CheckIsNumeric(search.search_jg_max,"请在输入框中输入数值！")) return false;
	}
//-->
</script>
<body bgcolor="#cccccc" text="#000000" leftmargin="0" topmargin="0">

<?php require ("top.php"); ?>
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr align="left" valign="top">
    <td width="168" bgcolor="#fff9e2" class="rightkuan">
<?php require ("notlogin.php"); ?>


    </td>
	<td width="1" bgcolor="#CCCCCC"></td>
    <td>
      <table width="99%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
       <?php
	$strSql="select * from house_buy where id=$id";
	$res=mysql_query($strSql);
$rs=mysql_fetch_array($res);
//更新点击次数
$sql="update house_buy set click=click+1 where id=$id";
	$res=mysql_query($sql);

?>
        <tr align="center" valign="middle">
          <td height="26" colspan="6" bgcolor="#F0F0F0" class="font"> <p>房源编号：<font color=red><?php echo $rs["bh"]?></font>(如果您对此该信息有意向，请记住此编号)　　　　　　　　　　点击次数：<font color=red><?php echo $rs["click"]?></font></p>
            <p align="left"><font color=red><b>　敬告用户：</b><font color="#000000">本站对中介发布信息采取收费制度。这将在一定程度上避免一些非正规的中介公司发布信息。<br>
              　如果某个人在本站发布过多的信息而在“是否中介”一栏中依然显示“非中介”，请大家警惕小心。</font></font></p></td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">要求地段</td>
          <td colspan="3" height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["address"]?>&nbsp;</td>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">是否中介</td>
          <td height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["zj"]?></td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="24" align="center" valign="middle" class="font">建筑结构</td>
          <td height="24" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["jg"]?></td>
          <td height="24" class="font" align="center" valign="middle" bgcolor="#f4f4f4">要求区域</td>
          <td height="24" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["qy"]?></td>
          <td bgcolor="#f4f4f4" height="24" align="center" valign="middle" class="font">户
            　 型</td>
          <td height="24" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<font color=red><?php echo $rs["hx"]?></font></td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">房屋类型</td>
          <td height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["wylx"]?></td>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">要求面积</td>
          <td height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<font color=red><?php echo $rs["min_area"]?></font>
            ㎡ ~ <font color=red><?php echo $rs["max_area"]?></font> ㎡</td>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">装修程度</td>
          <td height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["zxcd"]?>&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">楼　　层</td>
          <td height="25" colspan="3" align="left" valign="middle" bgcolor="#FFFFFF" class="font">&nbsp;<?php echo $rs["do_floor"]?></td>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">交易价格</td>
          <td height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<font color=red><?php echo $rs["min_pay"]?></font>
            万 ~ <font color=red><?php echo $rs["max_pay"]?></font> 万</td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">配套设施</td>
          <td colspan="5" height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["pb"]?></td>
        </tr>
        <tr>
          <td height="25" colspan="6" align="center" valign="middle" bgcolor="#F0F0F0" class="font">发布日期：<font color=red><?php echo $rs["date"]?></font>&nbsp;&nbsp;

          </td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="12" align="center" valign="middle" class="font">联
            系 人</td>
          <td height="12" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["man"]?></td>
          <td bgcolor="#f4f4f4" height="0" align="center" valign="middle" class="font">电话号码</td>
          <td height="12" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["tel"]?></td>
          <td bgcolor="#f4f4f4" height="12" align="center" valign="middle" class="font">E-mail</td>
          <td height="12" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["email"]?></td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">公车路线</td>
          <td colspan="5" height="12" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["bus"]?></td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">其它说明</td>
          <td colspan="5" height="5" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["house_ms"]?></td>
        </tr>


      </table>

    </td>
  </tr>
</table>
<?php require ("foot.htm"); ?>
</body>
</html>
