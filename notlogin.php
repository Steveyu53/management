<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td>
	<script language="JavaScript">
<!--
	function checklogin()
		{
			if (document.form1.username.value=="")
			{
				alert("�������û���!");
				form1.username.focus();
				return false;
			}
             if (document.form1.password.value=="")
			{
				alert("����������!");
				form1.password.focus();
				return false;
			}
			if (document.form1.user_class.value=="")
			{
				alert("��ѡ���û�����!");
				form1.user_class.focus();
				return false;
			}
			return true;
		}
//-->
</script>
<?php
if ($_SESSION["userlogin"]!="ok")
{
?>
<div align="center" style="border: 1px solid #8E8E8E;height: 150px;margin-top: 35px;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="26" bgcolor="#003D79"> <div align="center"><strong><font color="#FFFFFF">��Ա��½</font></strong></div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" height="3"></td>
          </tr>
        </table>

      
      <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0" style="margin-top: 10px;">
        <form action="checklogin.php" method=post name="form1" onSubmit="return checklogin()">
          <tr valign="middle">
            <td align="right" class="font">�û�����</td>
            <td>
              <input type="text" name="username" size="10"> </td>
          </tr>
            <tr valign="middle">
            <td align="right" class="font">�ܡ��룺</td>
            <td>
              <input type="password" name="password" size="10">
            </td>
          </tr>
          <tr align="center" valign="middle">
            <td colspan="2">
              <input type="submit" name="Submit" value="��½" style="margin-top: 15px;background-color:#003D79;color: white ">
              <input type="button" name="Submit2" value="ע��" onClick="window.location='reg2.php'" target="_blank" style="color: white;background-color:#003D79"> </td>
          </tr>
          &nbsp;
        </form>
      </table>
    </div>
<?php
}
else
{
?>

<div align="center" style="border: 1px solid #8E8E8E;height: 150px;margin-top: 35px;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="26" bgcolor="#003D79"> <div align="center"><strong><font color="#FFFFFF">��Ա��</font></strong></div></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" height="3"></td>
          </tr>
        </table>

      
      <table width="100%" border="0" align="center" cellpadding="4" cellspacing="0" style="margin-top: 10px;">
        <form action="checklogin.php" method=post name="form1" onSubmit="return checklogin()">
          <tr valign="middle">
          <img src="images/smile.jpg" height="50" width="50" style="margin-top: 15px;">
          </tr>
          <br>
          <tr valign="middle">
            <span class="font">���ã�<font color=red><?php echo $_SESSION["user_name"]?></font></span>
          </tr>
          <br>
            <tr valign="middle">
            <span class="font">��ӭ��<?php echo $_SESSION["loginname"]?></span>
          </tr>
          <tr align="center" valign="middle">
            <div align="center"><a href="myindex.php" target="_blank" class="ffbyfont">[�����ҵ���ҳ]</a></div>
          </tr>
          &nbsp;
        </form>
      </table>
    </div>
<?php
	}
	?>
</td>
  </tr>
</table>
