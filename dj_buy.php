<!--#include file="checkuser.php"-->
<?php require("connection/conn.php"); ?>
<html>
<head>
<title>��������Ϣ�Ǽ�---�������ۼ�����ϵͳ</title>
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
<script language="JavaScript">
<!--
  function checkdata()
  {
    if(!CheckIsNull(form2.address,"������'Ҫ��ض�'��")) return false;
    if(!CheckIsNull(form2.hx,"��ѡ���ͣ�")) return false;
    if(!CheckIsNull(form2.min_area,"������Ҫ�������")) return false;
    if(!CheckIsNull(form2.max_area,"������Ҫ�������")) return false;
    if(!CheckIsNull(form2.min_pay,"�����뽻�׼۸�Ҳ������'����'!")) return false;
    if(!CheckIsNull(form2.max_pay,"�����뽻�׼۸�Ҳ������'����'!")) return false;

    if(!CheckIsNull(form2.man,"��������ϵ�ˣ�")) return false;
    if(!CheckIsNull(form2.tel,"��������ϵ�绰��")) return false;
    if(!CheckIsNull(form2.email,"������e-mail��")) return false;
    if(!CheckIsNumeric(form2.min_area,"����'���'��������ֵ��")) return false;
        if(!CheckIsNumeric(form2.max_area,"����'���'��������ֵ��")) return false;
  }

//-->
</script>
<SCRIPT LANGUAGE=vbscript>
<!--
Sub my()
if document.form2.min_pay.value="����" then
   document.form2.max_pay.value="����"
end if
End Sub
-->
</SCRIPT>
<body bgcolor="#cccccc" text="#000000" leftmargin="0" topmargin="0" >

<?php require ("headtop.php"); ?>
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="margin-top: 30px;" >
  <tr align="left" valign="top">

  <td width="1" bgcolor="#CCCCCC"></td>
    <td>
      <table  class="table" width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
        <form name="form2" method="post" action="admin/save_buy.php" onsubmit="return checkdata()">
          <tr>
            <td align="center" valign="top" class="downkuan" >
              <span class="font"><font color="#666666"><br>
              <font color="#999999">�� �� �� �� ����Ϊ �� �� �� �� Ϣ �� �� �� ͨ���� �� ʵ �� �� ��
              &quot;<font color="#FF6600">*</font>&quot; �� �� �� ��</font></font></span><br>
              <br>
              <table width="99%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <div align="center"><font color="#003D79"><strong>��������Ϣ�Ǽ�</strong></font></div></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top" class="odd">&nbsp;���⣺</td>
                        <td width="495"  class="odd"><input type="text" name="head"></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" cl>
                  <td width="305" class="font"><span class="font">&nbsp;�Ƿ��н飺</span>
                    <select name="zj" class="textinput" >
                      <option value="���н�" selected>���н�</option>
            <option value="�н�">�н�</option>
                    </select> </td>
                  <td width="272" height="30" ><span class="font">&nbsp;��������</span>
                    <select name="qy" id="qy" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: ����; HEIGHT: 22px" >
                      <option value="" selected>��ѡ������</option>
                      <?php

  $Sql="select * from house_area order by id";

   $res=mysql_query($Sql);
   while($rs0=mysql_fetch_array($res))
   {
  ?>
                      <option value="<?php echo $rs0["area_name"]?>"><?php echo $rs0["area_name"]?></option>
                      <?php
    }
    ?>
                    </select></td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td height="30" colspan="2" class="font">&nbsp;Ҫ��ضΣ�
                    <input name="address" type="text" class="textinput"  size="50" maxlength="50">
                    ��<font color="#FF6600">**</font></td>
                </tr>
                <tr align="left" valign="middle">
                  <td width="305" height="30" class="font">&nbsp;�������ͣ�
                    <select
        name=hx style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: ����; HEIGHT: 22px" >
                      <option value="" selected>��ѡ����</option>
                      <option value="4��2��2��">4��2��2��</option>
                      <option value="4��2��1��">4��2��1��</option>
                      <option value="4��1��1��">4��1��1��</option>
                      <option value="3��2��2��">3��2��2��</option>
                      <option value="3��2��1��">3��2��1��</option>
                      <option value="3��1��1��">3��1��1��</option>
                      <option value="2��2��1��">2��2��1��</option>
                      <option value="2��1��1��">2��1��1��</option>
                      <option value="2�Ұ�1��1��">2�Ұ�1��1��</option>
                      <option value="1��1��1��">1��1��1��</option>
                      <option value="����">����</option>
                      <option value="��ʽ">��ʽ</option>
                      <option value="����">����</option>
                    </select>
                    ��<font color="#FF6600">**</font> </td>
                  <td width="272" height="30" class="font" >&nbsp;�������ͣ�
                    <select name=wylx class="textinput" >
                      <option value="����" selected>����</option>
                      <option value="��Ʒ��">��Ʒ��</option>
                      <option value="���ʷ�">���ʷ�</option>
                      <option value="��Ǩ��">��Ǩ��</option>
                      <option value="д��¥">д��¥</option>
                      <option value="����">����</option>
                      <option value="����">����</option>
                      <option value="��">��</option>
                      <option value="����">����</option>
                    </select> </td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;Ҫ�������
                    <input name="min_area" type="text" class="textinput" id="min_area" size="5" maxlength="20">
                    �O ~
                    <input name="max_area" type="text" class="textinput" id="max_area" size="5" maxlength="20">
                    �O��<font color="#FF6600">**</font> </td>
                  <td width="272" height="30" class="font" >&nbsp;�����ṹ��
                    <select name="jg" class="textinput" >
                      <option value="����" selected>����</option>
                      <option value="��¥">��¥</option>
                      <option value="��¥">��¥</option>
                      <option value="�������">�������</option>
                      <option value="����">����</option>
                    </select> </td>
                </tr>
                <tr align="left" valign="middle" >
                  <td width="305" height="30" class="font">&nbsp;װ�޳̶ȣ�
                    <select name="zxcd" class="textinput">
                      <option value="����" selected>����</option>
                      <option value="һ��">һ��</option>
                      <option value="�е�">�е�</option>
                      <option value="�ߵ�">�ߵ�</option>
                      <option value="����">����</option>
                      <option value="��װ��">��װ��</option>
                    </select></td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;����¥�㣺</span>
                    <select name="do_floor" class="textinput">
               <?php
        for($i=0;$i<60;$i++)
        {
        if ($i==$rs["do_floor"])
          {
        ?>
        <option value=<?php echo $rs["do_floor"]?> selected><?php echo $rs["do_floor"]?></option>
        <?php
          }
          else
          {
          ?>
        <option value=<?php echo $i?>><?php echo $i?></option>
                <?php
        }
        }
          ?>


                    </select>¥&nbsp;</td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;���׼۸�
                    <input name="min_pay" type="text" class="textinput" id="min_pay" size="5" maxlength="20" onchange="my()">
                    ��Ԫ ~
                    <input name="max_pay" type="text" class="textinput" id="max_pay3" size="5" maxlength="20" >
                    ��Ԫ��<font color="#FF6600">**</font> </td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;</span></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;������ʩ��</td>
                        <td width="495"> <textarea name="pb" cols="70" rows="6" wrap="VIRTUAL" class="textinput">����</textarea></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;�� ϵ �ˣ�
                    <input name="man" type="text" class="textinput" size="20" maxlength="50" >
                    ��<font color="#FF6600">**</font> </td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;��ϵ�绰��</span>
                    <input name="tel" type="text" class="textinput" size="20" maxlength="50">
                    ��<font color="#FF6600">**</font> </td>
                </tr>
                <tr align="left" valign="middle">
                  <td width="305" height="30" class="font">&nbsp;<strong>E -mail</strong>��
                    <input name="email" type="text" class="textinput" size="20" maxlength="50" >
                    ��<font color="#FF6600">**</font> </td>
                  <td width="272" height="30" class="font" >&nbsp;����·�ߣ�
                    <input name="bus" type="text" class="textinput" size="30" maxlength="50">
                  </td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td height="111" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;����˵����</td>
                        <td width="495"><textarea name="house_ms" cols="70" rows="6" wrap="VIRTUAL" class="textinput" >����˵��</textarea></td>
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
        </form>
      </table>
    </td>
  </tr>
</table>
<?php require ("foot.htm"); ?>
</body>
</html>
