<?php
session_start();
 require("connection/conn.php"); ?>

<html>
<head>
<title>����ϸ��Ϣ---�������ۼ�����ϵͳ</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="css.css" type="text/css">
</head>
<script language="JavaScript" src="share/nei_fc.js"></script>
<script language="JavaScript">
<!--
	function checksearch()
	{
	if(!CheckIsNumeric(search.search_mj_min,"�����������������ֵ��")) return false;
	if(!CheckIsNumeric(search.search_mj_max,"�����������������ֵ��")) return false;
	if(!CheckIsNumeric(search.search_jg_min,"�����������������ֵ��")) return false;
	if(!CheckIsNumeric(search.search_jg_max,"�����������������ֵ��")) return false;
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
//���µ������
$sql="update house_buy set click=click+1 where id=$id";
	$res=mysql_query($sql);

?>
        <tr align="center" valign="middle">
          <td height="26" colspan="6" bgcolor="#F0F0F0" class="font"> <p>��Դ��ţ�<font color=red><?php echo $rs["bh"]?></font>(������Դ˸���Ϣ���������ס�˱��)�����������������������������<font color=red><?php echo $rs["click"]?></font></p>
            <p align="left"><font color=red><b>�������û���</b><font color="#000000">��վ���н鷢����Ϣ��ȡ�շ��ƶȡ��⽫��һ���̶��ϱ���һЩ��������н鹫˾������Ϣ��<br>
              �����ĳ�����ڱ�վ�����������Ϣ���ڡ��Ƿ��н顱һ������Ȼ��ʾ�����н顱�����Ҿ���С�ġ�</font></font></p></td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">Ҫ��ض�</td>
          <td colspan="3" height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["address"]?>&nbsp;</td>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">�Ƿ��н�</td>
          <td height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["zj"]?></td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="24" align="center" valign="middle" class="font">�����ṹ</td>
          <td height="24" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["jg"]?></td>
          <td height="24" class="font" align="center" valign="middle" bgcolor="#f4f4f4">Ҫ������</td>
          <td height="24" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["qy"]?></td>
          <td bgcolor="#f4f4f4" height="24" align="center" valign="middle" class="font">��
            �� ��</td>
          <td height="24" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<font color=red><?php echo $rs["hx"]?></font></td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">��������</td>
          <td height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["wylx"]?></td>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">Ҫ�����</td>
          <td height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<font color=red><?php echo $rs["min_area"]?></font>
            �O ~ <font color=red><?php echo $rs["max_area"]?></font> �O</td>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">װ�޳̶�</td>
          <td height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["zxcd"]?>&nbsp;</td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">¥������</td>
          <td height="25" colspan="3" align="left" valign="middle" bgcolor="#FFFFFF" class="font">&nbsp;<?php echo $rs["do_floor"]?></td>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">���׼۸�</td>
          <td height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<font color=red><?php echo $rs["min_pay"]?></font>
            �� ~ <font color=red><?php echo $rs["max_pay"]?></font> ��</td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">������ʩ</td>
          <td colspan="5" height="25" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["pb"]?></td>
        </tr>
        <tr>
          <td height="25" colspan="6" align="center" valign="middle" bgcolor="#F0F0F0" class="font">�������ڣ�<font color=red><?php echo $rs["date"]?></font>&nbsp;&nbsp;

          </td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="12" align="center" valign="middle" class="font">��
            ϵ ��</td>
          <td height="12" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["man"]?></td>
          <td bgcolor="#f4f4f4" height="0" align="center" valign="middle" class="font">�绰����</td>
          <td height="12" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["tel"]?></td>
          <td bgcolor="#f4f4f4" height="12" align="center" valign="middle" class="font">E-mail</td>
          <td height="12" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["email"]?></td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">����·��</td>
          <td colspan="5" height="12" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["bus"]?></td>
        </tr>
        <tr>
          <td bgcolor="#f4f4f4" height="25" align="center" valign="middle" class="font">����˵��</td>
          <td colspan="5" height="5" class="font" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<?php echo $rs["house_ms"]?></td>
        </tr>


      </table>

    </td>
  </tr>
</table>
<?php require ("foot.htm"); ?>
</body>
</html>
