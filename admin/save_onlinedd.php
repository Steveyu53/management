<?php require("../connection/conn.php"); ?>

<html>
<head>
<title>����д���߶���</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="../../style.css" type="text/css">
</head>
<style>.tm {  border: 1px #FCFFEE solid;BACKGROUND: #FCFFEE;FONT-SIZE: 9pt ;color: #FCFFEE; FONT-FAMILY: arial}</style>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0">
<br>
<br>
<table width="336" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td align="center" valign="middle" height="40" class="font">��ϲ�������ѳɹ����������˶�����<br>
      ���ס���Ķ����ţ��Է����Ժ��ѯ��</td>
  </tr>
</table>
<table width="336" border="0" cellspacing="2" cellpadding="0" class="xu_kuan" align="center">
  <tr valign="middle" bgcolor="#FFF0B5">
    <td height="38" colspan="2" align="center" class="font">�� �� �ţ�<font color=red><?php echo $rs["ddh"]?></font></td>
  </tr>
  <tr valign="middle" bgcolor="#FCFFEE">
    <td class="font" align="center" width="111">Ԥ�����ڣ�</td>
    <td class="font" align="left" width="449" height="30"><?php echo $rs["date"]?></td>
  </tr>
  <tr valign="middle" bgcolor="#FCFFEE">
    <td class="font" align="center" width="111">��Դ��ţ�</td>
    <td class="font" align="left" height="30" width="449"><font color=red><?php echo $rs["house_bh"]?></font></td>
  </tr>
  <tr valign="middle" bgcolor="#FCFFEE">
    <td class="font" align="center" width="111">�ա�������</td>
    <td class="font" align="left" height="30" width="449"><?php echo $rs["name"]?></td>
  </tr>
  <tr valign="middle" bgcolor="#FCFFEE">
    <td class="font" align="center" width="111">�硡������</td>
    <td class="font" align="left" height="30" width="449"><?php echo $rs["tel"]?></td>
  </tr>
  <tr valign="middle" bgcolor="#FCFFEE">
    <td class="font" align="center" width="111">�ţ�mail��</td>
    <td class="font" align="left" height="30" width="449"><?php echo $rs["email"]?></td>
  </tr>
  <tr valign="middle" bgcolor="#FCFFEE">
    <td class="font" align="center" width="111">����˵����</td>
    <td class="font" align="left" height="30" width="449"><?php echo $rs["bz"]?></td>
  </tr>
</table>
<table width="336" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td align="center" valign="middle" height="40"><span class="font">[</span><a href="vbscript:window.history.back" class="linkfont">��������</a><span class="font">]</span></td>
  </tr>
</table>
</body>
</html>