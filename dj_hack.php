<?php require("connection/conn.php"); ?>
<html>
<head>
<title>���ݳ�����Ϣ�Ǽ�---�������ۼ�����ϵͳ</title>
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
		if(!CheckIsNull(form2.house_name,"������С�����ƣ�")) return false;
		if(!CheckIsNull(form2.qy,"��ѡ������")) return false;
		if(!CheckIsNull(form2.hx,"��ѡ���ͣ�")) return false;
		if(!CheckIsNull(form2.jz_area,"�����뽨�������")) return false;
		if(!CheckIsNull(form2.jg,"��ѡ�����ṹ��")) return false;
		if(!CheckIsNull(form2.pay,"�����뽻�׼۸�")) return false;
		if(!CheckIsNull(form2.do_floor,"��ѡ������¥�㣡")) return false;

		if(!CheckIsNull(form2.man,"��������ϵ�ˣ�")) return false;
		if(!CheckIsNull(form2.tel,"��������ϵ�绰��")) return false;
		if(!CheckIsNull(form2.email,"������EMAIL��")) return false;

	}

//-->
</script>
<body bgcolor="#CCCCCC" leftmargin="0" topmargin="0" >
<?php require("headtop.php"); ?>

<table width="978" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="margin-top: 30px;" >
  <tr align="left" valign="top">

	<td width="1" bgcolor="#CCCCCC"></td>
    <td>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" class="table" >
        <form enctype="multipart/form-data" name="form2" method="post" action="admin/save_hack.php" onsubmit="return checkdata()">
          <tr>
            <td align="center" valign="top" class="downkuan" >
              <span class="font"><font color="#666666"><br>
              <font color="#999999">�� �� �� �� ����Ϊ �� �� �� �� Ϣ �� �� �� ͨ���� �� ʵ �� �� ��
              &quot;<font color="#FF6600">*</font>&quot; �� �� �� ��</font></font></span><br>
              <br>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan" height="30">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <div align="center"><strong><font color="#003D79">���ݳ�����Ϣ�Ǽ�</font></strong></div></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top">&nbsp;���⣺</td>
                        <td width="495" ><input type="text" name="head"></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td width="277" class="font">&nbsp;С�����ƣ�
                    <input name="house_name" type="text" class="textinput" size="20" maxlength="50">
                    <font color="#FF6600">**</font> </td>
                  <td width="266" height="30" ><span class="font">&nbsp;��������</span>
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
                    </select> <span class="font"><font color="#FF6600">**</font></span>
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;�ء���ַ��
                    <input name="address" type="text" class="textinput"  size="30" maxlength="50">
                    <span class="font">&nbsp;</span> </td>
                  <td height="30" class="font"><span class="font">&nbsp;�Ƿ��н飺</span>
                    <select name="zj" class="textinput" >
                      <option value="���н�" selected>���н�</option>
					  <option value="�н�">�н�</option>
                    </select></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;�������ͣ�
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
                  <td height="30" class="font" >&nbsp;�������ͣ�
                    <select name=wylx class="textinput" >
                      <option value="" selected>��ѡ��������</option>
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
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;���������
                    <input name="jz_area" type="text" class="textinput" size="10" maxlength="20">
                    �O����<font color="#FF6600">**</font> </td>
                  <td height="30" class="font" >&nbsp;�� �� �䣺
                    <input name="sy_area" type="text" class="textinput" size="10" maxlength="20">
                    �O </td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;�����ṹ��
                    <select name="jg" class="textinput" >
                      <option value="" selected>��ѡ�����ṹ</option>
                      <option value="��¥">��¥</option>
                      <option value="��¥">��¥</option>
                      <option value="�������">�������</option>
                      <option value="����">����</option>
                    </select>
                    ��<font color="#FF6600">**</font> </td>
                  <td height="30" class="font" >&nbsp;����ʱ�䣺
                    <input name="jg_time" type="text" class="textinput" size="20" maxlength="20">
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;װ�޳̶ȣ�
                    <select name="zxcd" class="textinput">
                      <option value="" selected>��ѡ��װ�޳̶�</option>
                      <option value="һ��">һ��</option>
                      <option value="�е�">�е�</option>
                      <option value="�ߵ�">�ߵ�</option>
                      <option value="����">����</option>
                      <option value="��װ��">��װ��</option>
                    </select></td>
                  <td height="30" class="font" >&nbsp;¥��������
                    <select name="sum_floor" class="textinput">
                <?php
				for($i=0;$i<60;$i++)
				{
				if ($i==$rs["sum_floor"])
					{
				?>
				<option value=<?php echo $rs["sum_floor"]?> selected><?php echo $rs["sum_floor"]?></option>
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

              </select> <font color="#FF6600">**</font> </td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;���׼۸�
                    <input name="pay" type="text" class="textinput" size="10" maxlength="30">
                    Ԫ/�¡�<font color="#FF6600">**</font> </td>
                  <td height="30" class="font" ><span class="font">&nbsp;����¥�㣺</span>
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
					?> </select><font color="#FF6600">**</font> </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;������ʩ��</td>
                        <td width="495"> <textarea name="pb" cols="70" rows="6" class="textinput">��������ʩ</textarea></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;�� ϵ �ˣ�
                    <input name="man" type="text" class="textinput" size="20" maxlength="50" >
                    ��<font color="#FF6600">**</font> </td>
                  <td height="30" class="font" ><span class="font">&nbsp;��ϵ�绰��</span>
                    <input name="tel" type="text" class="textinput" size="20" maxlength="50" >
                    ��<font color="#FF6600">**</font> </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;<strong>E-mail</strong>��&nbsp;
                    <input name="email" type="text" class="textinput" size="20" maxlength="50" >
                    ��<font color="#FF6600">**</font> </td>
                  <td height="30" class="font" >&nbsp;����·�ߣ�
                    <input name="bus" type="text" class="textinput" size="20" maxlength="50">
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="111" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr class="odd" >
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;��ʽ������</td>
                        <td width="495"> <textarea name="house_ms" cols="70" rows="6" wrap="VIRTUAL" class="textinput" >��������</textarea></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;�ϴ�ͼƬ��</td>
                        <td width="495"><input type="file" name="file" /></td>
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
