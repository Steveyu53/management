<?php require("../connection/conn.php"); ?>

<html>
<head>
<title>�����н�</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="../style.css" type="text/css">
</head>
<script language="JavaScript" src="../share/nei_fc.js"></script>
<script language="JavaScript">
<!--
	function checkdata()
	{
		if(!CheckIsNull(form1.username,"�������û�����")) return false;
		if(!CheckIsNull(form1.zj_name,"�����빫˾���ƣ�")) return false;
		if(!CheckIsNull(form1.password,"���������룡")) return false;
		if(!CheckIsNull(form1.qr_password,"������ȷ�����룡")) return false;
		if(!CheckIsNull(form1.zj_man,"�����뷿�������ˣ�")) return false;
		if(!CheckIsNull(form1.faren,"�����뷨�˴���")) return false;
		if(!CheckIsNull(form1.tel,"��������ϵ�绰��")) return false;
		if(!CheckIsNull(form1.email,"������EMAIL��")) return false;
	}
//-->
</script>
<body bgcolor="#FFFFFF" text="#000000">
<div align="center"><br>
  <span class="font"><font color="blue">Ϊ���ܹ��ٽ���ҹ�ͬ��չ������ʵ��ô�<font color="#FF6600">��</font>�ŵĲ���<br><b>�����粻�޸����������</b></font></span><br>
  <br>
</div>
<table width="525" height="158" border="0" cellpadding="0" cellspacing="0" align="center" >
  <%
  if request("id")="" or isnumeric(request("id"))=false then
  outerr("���������ˣ�")
  response.end
  end if
	dim strSql,rs,i,PageNo
	strSql="select * from [house_user_zj] where id=" & request("id")

%>
  <tr>
    <td align="left" valign="top" bgcolor="#FFFFFF">
      <table width="529" border="0" cellpadding="0" cellspacing="2" class="xu_kuan">

        <tr>
          <td height="25" align="center" bgcolor="#FFDE88" width="525"><font class="font">ע��ʱ�䣺</font><font color="#FF6633" class="font"><font color="#FF6600"></font><?php echo $rs["date"]?></font><font class="font">��������������������½ʱ�䣺</font><font color="#FF6633" class="font"><font color="#FF6600"><?php echo $rs["last_date"]?></font></font></td>
        </tr>
        <tr>
          <td bgcolor="#FFF8E6" class="linkfont" align="center" valign="top" height="203" width="525">
            <br>
            <table width="502" border="0" cellpadding="0" cellspacing="0">
              <form name="form1" method="post" action="save_change_zjuser.php" onSubmit="return checkdata()">
                <tr>
                  <td width="247" class="font" align="left" valign="middle" height="35">��
                    �� ����
                    <input type="text" name="username" size="26" class="textinput" maxlength="50" value="<?php echo $rs["username"]?>">
                    <span class="font"><font color="#999999"><font color="#FF6600">��</font></font></span>
                  </td>
                  <td width="255" align="left" valign="middle" height="35" class="font">�ܡ����룺
                    <input type="text" name="password" size="26" class="textinput" maxlength="50" >
                    <span class="font"><font color="#999999"><font color="#FF6600">��</font></font></span>
                  </td>
                </tr>
                <tr>
                  <td width="247" class="font" align="left" valign="middle" height="35">��˾���ƣ�
                    <input type="text" name="zj_name" size="26" class="textinput" maxlength="50" value="<?php echo $rs["zj_name"]?>">
                    <span class="font"><font color="#999999"><font color="#FF6600">��</font></font></span>
                  </td>
                  <td width="255" align="left" valign="middle" height="35" class="font">
                    <input type="text" name="id" size="1" class="textinput" maxlength="50" value="<?php echo $rs["id"]?>" readonly>
                  </td>
                </tr>
                <tr>
                  <td width="247" class="font" align="left" valign="middle" height="35">��
                    �� �ˣ�
                    <input type="text" name="zj_man" size="26" class="textinput" maxlength="30" value="<?php echo $rs["zj_man"]?>">
                    <span class="font"><font color="#999999"><font color="#FF6600">��</font></font></span>
                  </td>
                  <td width="255" align="left" valign="middle" height="35"><span class="font">���˴���
                    </span>
                    <input type="text" name="faren" size="26" class="textinput" maxlength="30" value="<?php echo $rs["faren"]?>">
                    <span class="font"><font color="#999999"><font color="#FF6600">��</font></font></span>
                  </td>
                </tr>
                <tr>
                  <td width="247" class="font" align="left" valign="middle" height="35">��ϵ�绰��
                    <input type="text" name="tel" size="26" class="textinput" maxlength="50" value="<?php echo $rs["tel"]?>">
                    <span class="font"><font color="#999999"><font color="#FF6600">��</font></font></span>
                  </td>
                  <td width="255" align="left" valign="middle"><span class="font">�������棺
                    </span>
                    <input type="text" name="fax" size="26" class="textinput" maxlength="50" value="<?php echo $rs["fax"]?>">
                  </td>
                </tr>
                <tr>
                  <td width="247" class="font" align="left" valign="middle" height="35">�ţ�mail��
                    <input type="text" name="email" size="26" class="textinput" maxlength="50" value="<?php echo $rs["email"]?>">
                    <span class="font"><font color="#999999"><font color="#FF6600">��</font></font></span>
                  </td>
                  <td width="255" align="left" valign="middle"><span class="font">��˾��վ��
                    </span>
                    <input type="text" name="http" size="26" class="textinput" maxlength="50" value="<?php echo $rs["http"]?>">
                  </td>
                </tr>
                <tr>
                  <td colspan="2" class="font" align="left" valign="middle" height="35">�ء���ַ��
                    <input type="text" name="address" size="75" class="textinput" maxlength="50" value="<?php echo $rs["address"]?>">
                  </td>
                </tr>
                <tr>
                  <td colspan="2" class="font" align="left" valign="middle" height="15">
                    <table width="489" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="65" class="font" align="left" valign="top">��˾��飺
                        </td>
                        <td width="424" align="left" valign="top">
                          <textarea name="bz" cols="77" class="textinput" rows="8"><?php echo $rs["bz"]?></textarea>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr align="center" valign="middle">
                  <td colspan="2" height="36"> <br>
                    <font color="#FF0000" class="font">�Ƿ�ͨ��</font>
                    <select name="pass" class="textinput" >
                      <%if rs("pass")="��" then%>
                      <option value="��" selected>��</option>
                      <%else%>
                      <option value="��" >��</option>
                      <%end if%>
                      <%if rs("pass")="��" then%>
                      <option value="��" selected>��</option>
                      <%else%>
                      <option value="��">��</option>
                      <%end if%>
                    </select>
                    <br>
                    <br>
                    <input type="submit" name="Submit" value="�޸�" class="textbotton">
                    <input type="reset" name="Submit2" value="����" class="textbotton">
                  </td>
                </tr>
              </form>
            </table>
            <br>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
