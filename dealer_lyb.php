<?php require("connection/conn.php"); ?>

<html>
<head>
<title>���Է���</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="css.css" rel="stylesheet" type="text/css">
</head>
<style> body{ scrollbar-face-color:fd9035; scrollbar-shadow-color:ffffff;  scrollbar-highlight-color:ffffff; scrollbar-3dlight-color:ffffff;  scrollbar-darkshadow-color:ffffff; scrollbar-track-color:ffefd7;  scrollbar-arrow-color:ffffff;}
</style>
<SCRIPT language=javascript>
function checklyb()
		{

			if (document.form3.ly_man.value=="")
			{
				alert("������������������");
				form3.ly_man.focus();
				return false;
			}
			if (document.form3.ly_email.value=="")
			{
				alert("������������E-mail��");
				form3.ly_email.focus();
				return false;
			}
           if (document.form3.ly_bz.value=="")
			{
				alert("�������������ݣ�");
				form3.ly_bz.focus();
				return false;
			}
			return true;
		}
function cleinput()
           {
             document.form3.ly_man.value="";
             document.form3.ly_email.value="";
             document.form3.ly_bz.value="";
			 document.form3.ly_tel.value="";
           }
 </SCRIPT>
<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" onLoad="cleinput()">
<?php require("top.php"); ?>

<div align="center"></div>
<table width="358" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr align="left" valign="top">
    <td width="50">&nbsp;</td>
    <td width="308">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left" valign="top">&nbsp;</td>
        </tr>
        <tr><form name="form3" method="post" action="admin/save_lyb.php" onSubmit="return checklyb()">
            <td align="left" valign="middle" background="nei/images/lyb_r2_c2.gif" height="309">
<table width="293" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="62" align="right" valign="middle" class="font">������:</td>
                  <td width="231" height="30" align="left" valign="middle"> <input name="ly_man" type="text" class="textinput" id="ly_man" size="32" maxlength="20"></td>
                </tr>
                <tr>
                  <td align="right" valign="middle" class="font">�硡��:</td>
                  <td height="30" align="left" valign="middle"> <input name="ly_tel" type="text" class="textinput" id="ly_tel" size="32" maxlength="20">
                  </td>
                </tr>
                <tr>
                  <td align="right" valign="middle" class="font">E-mail:</td>
                  <td height="30" align="left" valign="middle"> <input name="ly_email" type="text" class="textinput" id="ly_email" size="32" maxlength="20">
                  </td>
                </tr>
                <tr>
                  <td align="right" valign="top" class="font">�ڡ���:</td>
                  <td height="30" align="left" valign="middle"><textarea name="ly_bz" cols="34" rows="11" class="textinput" id="ly_bz"></textarea></td>
                </tr>
                <tr align="center">
                  <td height="45" colspan="2" valign="middle">
<input type="submit" name="Submit" value="�ύ" class="textbotton">

<input type="reset" name="Submit2" value="����" class="textbotton"></td>
                </tr>
              </table>
            </td>
          </form>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<div align="center"></div>
</body>
</html>
