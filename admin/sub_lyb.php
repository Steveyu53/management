<?php require("../connection/conn.php"); ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta http-equiv="Content-Language" content="zh-cn">
<title>��ϸ��Ϣ</title>
<link rel="stylesheet" href="../../style.css" type="text/css">
<link rel="stylesheet" href="../style.css" type="text/css">
</head>




<table border="0" width="580" cellspacing="0" class="kuan" bgcolor="#FFFFFF" height="278">
  <tr>
    <td width="100%" height="153" align="left" valign="top">
      <table border="0" width="100%" cellspacing="1">
        <tr>
          <td width="100%" bgcolor="#FF9933" background="../images/system1.gif" height="25" class="font">
            <p align="center" class="font"><font color="#FF9B59"><b class="font">��
              �� �� �� ϸ �� Ϣ</b></font>
          </td>
        </tr>
        <tr>
          <td width="100%" bgcolor="#FFFFFF" align="left" valign="top" height="246">
            <table border="0" width="100%" cellspacing="2" cellpadding="0">
              <tr>
                <td width="50%" class="font" bgcolor="#E1EBF4">�������ڣ�<?php echo $rs["ly_date"]?></td>
                <td width="50%" class="font" bgcolor="#E1EBF4">Email��<font color = "red" ><?php echo $rs["ly_email"]?></font></td>
              </tr>
              <tr>
                <td width="50%" class="font" bgcolor="#E1EBF4">�ա�������<font color = "red" ><?php echo $rs["ly_man"]?></font></td>
                <td width="50%" class="font" bgcolor="#E1EBF4">�� ����<?php echo $rs["ly_tel"]?></td>
              </tr>

              <tr background="../images/system1.gif" align="center" valign="middle">
                <td colspan="2" class="font" height="25"><font color="#FF9B59"><b class="font">�ڡ�����</b></font></td>
              </tr>
              <tr align="left" valign="top">
                <td colspan="2" class="font" height="168" bgcolor="#E1EBF4"><?php echo $rs["ly_bz"]?></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>

