<?php require("../connection/conn.php"); ?>

<html>
<head>
<title><%=title%></title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="../../style.css" type="text/css">
</head>
<style> body{ scrollbar-face-color:fd9035; scrollbar-shadow-color:ffffff;  scrollbar-highlight-color:ffffff; scrollbar-3dlight-color:ffffff;  scrollbar-darkshadow-color:ffffff; scrollbar-track-color:ffefd7;  scrollbar-arrow-color:ffffff;}
.rightkuan {  border-color: black #FFFFFF black black; border-style: solid; border-top-width: 0px; border-right-width: 2px; border-bottom-width: 0px; border-left-width: 0px}
.leftkuan {  border-color: black black black #FFFFFF; border-style: solid; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 2px}
.textinput2 {  border: 1px #9c9a9c solid;BACKGROUND: #ffffff;FONT-SIZE: 9pt; FONT-FAMILY: arial}
</style>
 <script language="JavaScript" src="share/nei_fc.js"></script>
 <script language="JavaScript">
<!--
	function checkdata()
	{
		if(!CheckIsNull(form1.oldpass,"����������룡")) return false;
		if(!CheckIsNull(form1.newpass,"�����������룡")) return false;
		if(!CheckIsNull(form1.confirm,"������ȷ�����룡")) return false;

	}

//-->
</script>
<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0">
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0">
  <%
  if request("id")="" or isnumeric(request("id"))=false then
  outerr("���������ˣ�")
  response.end
  end if
	dim strSql,rs,i,PageNo
	strSql="select * from [house_user] where id=" & request("id")

%>
  <tr align="left" valign="top">
    <td height="439"> <br>
      <center>
      </center>
      <br>
      <center>
        <table width="534" height="158" border="0" cellpadding="0" cellspacing="0" >
          <tr>
            <td align="left" valign="top" bgcolor="#FFFFFF">
              <table width="100%" border="0" cellpadding="0" cellspacing="2" class="xu_kuan">
                <form name="form1" method="post" action="admin_save_user.php" onSubmit="return checkdata()">
                  <tr>
                    <td height="25" align="center" bgcolor="#FFDE88"><font class="font">ע��ʱ�䣺</font><font color="#FF6633" class="font"><font color="#FF6600"></font><?php echo $rs["date"]?></font><font class="font">��������������������½ʱ�䣺</font><font color="#FF6633" class="font"><font color="#FF6600"><?php echo $rs["last_date"]?></font></font></td>
                  </tr>
                  <tr>
                    <td bgcolor="#FFF8E6" class="linkfont" align="center" valign="middle" height="203">
                      <br>
                      <table width="517" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251"><span class="font">��
                            �� ����</span>
                           <input name="id" type="hidden" value="<%=request("id"]?>"> <input name="username" type="text" class="textinput" size="30" maxlength="50" disabled value="<?php echo $rs["username"]?>">
                          </td>
                          <td align="left" valign="middle" class="font" width="266"><span class="font">�ܡ����룺</span>
                            <input name="password" type="text" class="textinput" size="30" maxlength="50">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">�ա�������
                            <input name="name" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["name"]?>">
                          </td>
                          <td width="278" class="font" bgcolor="#fff9e1">
                            <div align="center">�������������޸����룡</div>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">�ԡ�����
                            <%if rs("sex")="��" then %>
                            <input type="radio" name="sex" value="��" checked>
                            <img src="../../images/ic_male.gif" width="14" height="15">��
                            <input type="radio" name="sex" value="Ů">
                            <img src="../../images/ic_female.gif" width="14" height="15">Ů
                            <%end if%>
                            <%if rs("sex")="Ů" then %>
                            <input type="radio" name="sex" value="��" >
                            <img src="../../images/ic_male.gif" width="14" height="15">��
                            <input type="radio" name="sex" value="Ů" checked>
                            <img src="../../images/ic_female.gif" width="14" height="15">Ů
                            <%end if%>
                          </td>
                          <td align="left" valign="middle" class="font" width="266">�������£�
                            <input name="birthday" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["birthday"]?>">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">���֤�ţ�
                            <input name="sfz" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["sfz"]?>">
                          </td>
                          <td align="left" valign="middle" class="font" width="266">ְ����ҵ��
                            <select name=job>
                              <%if rs("job")="δ��" then %>
                              <option value="δ��" selected>δ��</option>
                              <%else%>
                              <option value="δ��">δ��</option>
                              <%end if%>
                              <%if rs("job")="�ƻ�/����" then %>
                              <option value="�ƻ�/����" selected>�ƻ�/����</option>
                              <%else%>
                              <option value="�ƻ�/����">�ƻ�/����</option>
                              <%end if%>
                              <%if rs("job")="����ʦ" then %>
                              <option value="����ʦ" selected>����ʦ</option>
                              <%else%>
                              <option value="����ʦ">����ʦ</option>
                              <%end if%>
                              <%if rs("job")="����" then %>
                              <option value="����" selected>����</option>
                              <%else%>
                              <option value="����">����</option>
                              <%end if%>
                              <%if rs("job")="����������ҵ" then %>
                              <option value="����������ҵ" selected>����������ҵ</option>
                              <%else%>
                              <option value="����������ҵ">����������ҵ</option>
                              <%end if%>
                              <%if rs("job")="��ͥ����" then %>
                              <option value="��ͥ����" selected>��ͥ����</option>
                              <%else%>
                              <option value="��ͥ����">��ͥ����</option>
                              <%end if%>
                              <%if rs("job")="����/��ѵ" then %>
                              <option value="����/��ѵ" selected>����/��ѵ</option>
                              <%else%>
                              <option value="����/��ѵ">����/��ѵ</option>
                              <%end if%>
                              <%if rs("job")="�ͻ�����/֧" then %>
                              <option value="�ͻ�����/֧��" selected>�ͻ�����/֧��</option>
                              <%else%>
                              <option value="�ͻ�����/֧��">�ͻ�����/֧��</option>
                              <%end if%>
                              <%if rs("job")="������/�ֹ�����" then %>
                              <option value="������/�ֹ�����" selected>������/�ֹ�����</option>
                              <%else%>
                              <option value="������/�ֹ�����">������/�ֹ�����</option>
                              <%end if%>
                              <%if rs("job")="����" then %>
                              <option value="����" selected>����</option>
                              <%else%>
                              <option value="����">����</option>
                              <%end if%>
                              <%if rs("job")="��ְҵ" then %>
                              <option value="��ְҵ" selected>��ְҵ</option>
                              <%else%>
                              <option value="��ְҵ">��ְҵ</option>
                              <%end if%>
                              <%if rs("job")="����/�г�/���" then %>
                              <option value="����/�г�/���" selected>����/�г�/���</option>
                              <%else%>
                              <option value="����/�г�/���">����/�г�/���</option>
                              <%end if%>
                              <%if rs("job")="ѧ��" then %>
                              <option value="ѧ��" selected>ѧ��</option>
                              <%else%>
                              <option value="ѧ��">ѧ��</option>
                              <%end if%>
                              <%if rs("job")="�о��Ϳ���" then %>
                              <option value="�о��Ϳ���" selected>�о��Ϳ���</option>
                              <%else%>
                              <option value="�о��Ϳ���">�о��Ϳ���</option>
                              <%end if%>
                              <%if rs("job")="һ�����/�ල" then %>
                              <option value="һ�����/�ල" selected>һ�����/�ල</option>
                              <%else%>
                              <option value="һ�����/�ල">һ�����/�ල</option>
                              <%end if%>
                              <%if rs("job")="����/����" then %>
                              <option value="����/����" selected>����/����</option>
                              <%else%>
                              <option value="����/����">����/����</option>
                              <%end if%>
                              <%if rs("job")="ִ�й�/�߼�����" then %>
                              <option value="ִ�й�/�߼�����" selected>ִ�й�/�߼�����</option>
                              <%else%>
                              <option value="ִ�й�/�߼�����">ִ�й�/�߼�����</option>
                              <%end if%>
                              <%if rs("job")="����/����/����" then %>
                              <option value="����/����/����" selected>����/����/����</option>
                              <%else%>
                              <option value="����/����/����">����/����/����</option>
                              <%end if%>
                              <%if rs("job")="רҵ��Ա" then %>
                              <option value="רҵ��Ա" selected>רҵ��Ա</option>
                              <%else%>
                              <option value="רҵ��Ա">רҵ��Ա</option>
                              <%end if%>
                              <%if rs("job")="�Թ�/ҵ��" then %>
                              <option value="�Թ�/ҵ��" selected>�Թ�/ҵ��</option>
                              <%else%>
                              <option value="�Թ�/ҵ��">�Թ�/ҵ��</option>
                              <%end if%>
                              <%if rs("job")="����" then %>
                              <option value="����" selected>����</option>
                              <%else%>
                              <option value="����">����</option>
                              <%end if%>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">���Ժδ���
                            <input name="from" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["from"]?>">
                          </td>
                          <td align="left" valign="middle" class="font" width="266">���ı�վ��
                            <select name=thissite>
                              <%if rs("thissite")="δ��" then %>
                              <option value="δ��" selected>δ��</option>
                              <%else%>
                              <option value="δ��">δ��</option>
                              <%end if%>
                              <%if rs("thissite")="������Ϣ" then %>
                              <option value="������Ϣ" selected>������Ϣ</option>
                              <%else%>
                              <option value="������Ϣ">������Ϣ</option>
                              <%end if%>
                              <%if rs("thissite")="������Ϣ" then %>
                              <option value="������Ϣ" selected>������Ϣ</option>
                              <%else%>
                              <option value="������Ϣ">������Ϣ</option>
                              <%end if%>
                              <%if rs("thissite")="������Ϣ" then %>
                              <option value="������Ϣ" selected>������Ϣ</option>
                              <%else%>
                              <option value="������Ϣ">������Ϣ</option>
                              <%end if%>
                              <%if rs("thissite")="����Ϣ" then %>
                              <option value="����Ϣ" selected>����Ϣ</option>
                              <%else%>
                              <option value="����Ϣ">����Ϣ</option>
                              <%end if%>
                              <%if rs("thissite")="��վ����" then %>
                              <option value="��վ����" selected>��վ����</option>
                              <%else%>
                              <option value="��վ����">��վ����</option>
                              <%end if%>
                              <%if rs("thissite")="ƽ�������" then %>
                              <option value="ƽ�������" selected>ƽ�������</option>
                              <%else%>
                              <option value="ƽ�������">ƽ�������</option>
                              <%end if%>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">�硡������
                            <input name="tel" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["tel"]?>">
                          </td>
                          <td align="left" valign="middle" class="font" width="266">�������棺
                            <input name="fax" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["fax"]?>">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">�ֻ����룺
                            <input name="sj" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["sj"]?>">
                          </td>
                          <td align="left" valign="middle" class="font" width="266">�ѡ����ѣ�
                            <input name="qq" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["qq"]?>">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" width="251">�ţ�mail��
                            <input name="email" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["email"]?>">
                          </td>
                          <td align="left" valign="middle" class="font" width="266">�ʡ����ࣺ
                            <input name="yb" type="text" class="textinput" size="30" maxlength="50" value="<?php echo $rs["yb"]?>">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" colspan="2">�ء���ַ��
                            <input name="address" type="text" class="textinput" size="50" maxlength="50" value="<?php echo $rs["address"]?>">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" colspan="2">������ҳ��
                            <input name="http" type="text" class="textinput" size="50" maxlength="50" value="<?php echo $rs["http"]?>">
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle" height="30" class="font" colspan="2">
                            <table width="508" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="66" align="left" valign="top" class="font">���ҽ��ܣ�</td>
                                <td width="442" align="left" valign="middle">
                                  <textarea name="bz" class="textinput" cols="80" rows="6"><?php echo $rs["bz"]?></textarea>
                                </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                        <tr align="center">
                          <td valign="middle" height="30" class="font" colspan="2">
                            <input type="submit" name="Submit42" value="��  ��" class="textbotton">
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </form>
              </table>
            </td>
          </tr>
        </table>
      </center>
      <br>
      <br>
    </td>
  </tr>
</table>
</body>
</html>
