<!--#include file="checkuser.php"-->
<?php 
session_start();
require("connection/conn.php"); ?>
<html>
<head>
<title>����������Ϣ�Ǽ�---�������ۼ�����ϵͳ</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="css.css" type="text/css">
<link href="css/base2.css" rel="stylesheet" type="text/css" />
    <link href="css/css4.css" rel="stylesheet" type="text/css" />
    <link  type="text/css" rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/jquery-1.11.1.min.js"></script>
       <script src="./bootstrap/js/bootstrap.min.js"></script>
<style type="text/css">


.table{border-collapse: collapse; width: 100%; font-size: 14px;}
.odd{
  background-color: #DDDDFF;
}
.table td{border: solid 1px #ccc; padding: 8px;}
#details{
  
  font-family: "΢���ź�";
  text-align: center;
  left: auto;
}


</style>
</head>
<script language="JavaScript" src="share/nei_fc.js"></script>
<body bgcolor="#cccccc" text="#000000" leftmargin="0" topmargin="0" >

<?php require ("headtop.php"); ?>
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="margin-top: 30px;" >
  <tr align="left" valign="top">

	<td width="1" bgcolor="#CCCCCC"></td>
    <td>
      <table  class="table" width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
      <?php
    $strSql="select * from house_hire where id=$id";
  $res=mysql_query($strSql);
$rs=mysql_fetch_array($res);
//���µ������
$sql="update house_hire set click=click+1 where id=$id";
  $res=mysql_query($sql);

?>
          <tr>
            <td align="center" valign="top" class="downkuan" >
              <span class="font"><p>��Դ��ţ�<font color=red><?php echo $rs["bh"]?></font>(������Դ˸���Ϣ���������ס�˱��)�����������������������������<font color=red><?php echo $rs["click"]?></font></p></span>
              <table width="99%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <div align="center"><font color="#003D79"><strong>����������Ϣ����</strong></font></div></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top" class="odd">&nbsp;���⣺</td>
                        <td width="495"  class="odd"><?php echo $rs["head"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" cl>
                  <td width="305" class="font"><span class="font">&nbsp;�Ƿ��н飺</span>
                    <?php echo $rs["zj"]?></td>
                  <td width="272" height="30" ><span class="font">&nbsp;Ҫ������</span>
                    <?php echo $rs["qy"]?></td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td height="30" colspan="2" class="font">&nbsp;Ҫ��ضΣ�
                    <?php echo $rs["address"]?></td>
                </tr>
                <tr align="left" valign="middle">
                  <td width="305" height="30" class="font">&nbsp;�������ͣ�
                    <?php echo $rs["hx"]?></td>
                  <td width="272" height="30" class="font" >&nbsp;�������ͣ�
                    <?php echo $rs["wylx"]?></td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;Ҫ�������
                    <?php echo $rs["min_area"]?></font>
            �O ~ <font color=red><?php echo $rs["max_area"]?></font> �O</td>
                  <td width="272" height="30" class="font" >&nbsp;�����ṹ��
                    <?php echo $rs["jg"]?></td>
                </tr>
                <tr align="left" valign="middle" >
                  <td width="305" height="30" class="font">&nbsp;װ�޳̶ȣ�
                    <?php echo $rs["zxcd"]?></td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;����¥�㣺<?php echo $rs["do_floor"]?></td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;���׼۸�
                    <?php echo $rs["min_pay"]?></font>
            Ԫ ~ <font color=red><?php echo $rs["max_pay"]?></font> Ԫ</td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;</span></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;������ʩ��</td>
                        <td width="495"><?php echo $rs["pb"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top" class="font">&nbsp;�������ڣ�</td>
                        <td width="495"><?php echo $rs["date"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;�� ϵ �ˣ�
                    <?php echo $rs["man"]?></td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;��ϵ�绰��</span>
                    <?php echo $rs["tel"]?></td>
                </tr>
                <tr align="left" valign="middle">
                  <td width="305" height="30" class="font">&nbsp;<strong>E -mail</strong>��
                    <?php echo $rs["email"]?></td>
                  <td width="272" height="30" class="font" >&nbsp;����·�ߣ�
                    <?php echo $rs["bus"]?>
                  </td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td height="111" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;����˵����</td>
                        <td width="495"><?php echo $rs["house_ms"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="28" colspan="2" class="font">
<div align="center">
                      <input type="submit" name="Submit42" value="��  ��" class="btn btn-success">

                      <input type="reset" name="Submit4" value="��  ��" class="btn btn-info">
                    </div></td>
                </tr>
              </table>

            </td>
          </tr>
      </table>
    </td>
  </tr>
</table>
<?php require ("foot.htm"); ?>
</body>
</html>
