<?php
require("../connection/conn.php");
$sql="select * from house_buy where id=$id";
 $res=mysql_query($sql);
$rs=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>������Ϣ�޸�</title>
<link rel="stylesheet" href="../css/table.css">
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="js/plugins/jquery.bxSlider.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.slimscroll.js"></script>
<script type="text/javascript" src="js/custom/general.js"></script>
<script type="text/javascript" src="js/custom/widgets.js"></script>
<link rel="stylesheet" href="css.css" type="text/css">
    <style type="text/css">


.tables{border-collapse: collapse; width: 100%; font-size: 14px;}
.odd{
  background-color: #DDDDFF;
}
.tables td{border: solid 1px #ccc; padding: 8px;}
#details{
  
  font-family: "΢���ź�";
  text-align: center;
  left: auto;
}


</style>
<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/style.ie9.css"/>
<![endif]-->
<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/style.ie8.css"/>
<![endif]-->
<!--[if lt IE 9]>
  <script src="js/plugins/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body class="withvernav">
<div class="bodywrapper">
    <div class="topheader">
        <div class="left">
            <h1 class="logo">��������.<span>Admin</span></h1>
            <span class="slogan">��̨����ϵͳ</span>
            
            <div class="search">
            </div><!--search-->
            
            <br clear="all" />
            
        </div><!--left-->
        
        <div class="right">
          <!--<div class="notification">
                <a class="count" href="notifications.html"><span>9</span></a>
          </div>
      -->
            <div class="userinfo">
              <img src="images/thumbs/avatar.png" alt="" />
                <span>����Ա</span>
            </div><!--userinfo-->
            
            <div class="userinfodrop">              <div class="avatar">
                  <a href=""><img src="images/thumbs/avatarbig.png" alt="" /></a>
                    <div class="changetheme">
                      Change theme: <br />
                      <a class="default"></a>
                        <a class="blueline"></a>
                        <a class="greenline"></a>
                        <a class="contrast"></a>
                        <a class="custombg"></a>
                    </div>
                </div><!--avatar-->
<div class="userdata">
                  <h4>����Ա</h4>
                    <span class="email">admin</span>
                    <ul>
                        <li><a href="editprofile.html">�༭����</a></li>
                        <li><a href="accountsettings.html">�˺�����</a></li>
                        <li><a href="help.html">����</a></li>
                        <li><a href="logout.php">�˳�</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
      <ul class="headermenu">
            <li class="current"><a href="elements.php"><span class="icon icon-flatscreen"></span>������Ϣ����</a></li>
            <li><a href="manageblog.php"><span class="icon icon-pencil"></span>�û�����</a></li>
            <li><a href="messages.php"><span class="icon icon-message"></span>���Ź���</a></li>
            <li><a href="reports.php"><span class="icon icon-chart"></span>��������</a></li>
        </ul>
    </div><!--header-->
    
    <div class="vernav2 iconmenu">
        <ul>
            <li><a href="elements.php" class="elements">������Ϣ����</a></li>
            <li><a href="widgets.php" class="widgets">������Ϣ����</a></li>
            <li><a href="calendar.php" class="calendar">������Ϣ����</a></li>
            <li><a href="support.php" class="support">������Ϣ����</a></li>
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->
        
<div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">������Ϣ�޸�</h1>
        </div><!--pageheader-->
        <div style="width: 80%;margin:auto auto;">
        <div style="margin-top: 30px;"></div>
      
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="margin-top: 30px;" >
  <tr align="left" valign="top">

  <td width="1" bgcolor="#CCCCCC"></td>
    <td>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" class="tables" >
        <form enctype="multipart/form-data" name="form2" method="post" action="save_change_buy.php" onsubmit="return checkdata()">
          <tr>
            <td align="center" valign="top" class="downkuan" >
              <span class="font"><font color="#666666"><br>
              <font color="#999999">�� �� �� �� ����Ϊ �� �� �� �� Ϣ �� �� �� ͨ���� �� ʵ �� �� ��
              &quot;<font color="#FF6600">*</font>&quot; �� �� �� ��</font></font></span><br>
              <br>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan" height="30">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <div align="center"><strong><font color="#003D79">����������Ϣ�޸�</font></strong></div></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top" class="odd">&nbsp;���⣺</td>
                        <td width="495"  class="odd"><input value="<?php echo $rs["head"]?>" type="text" name="head"></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" cl>
                  <td width="305" class="font"><span class="font">&nbsp;�Ƿ��н飺</span>
                    <select name="zj" class="textinput" >
                      <option value=<?php echo $rs["zj"]?> selected><?php echo $rs["zj"]?></option>
                      <option value="���н�" selected>���н�</option>
            <option value="�н�">�н�</option>
                    </select></td>
                  <td width="272" height="30" ><span class="font">&nbsp;��������</span>
                    <select name="qy" id="qy" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: ����; HEIGHT: 22px" >
                <option value="<?php echo $rs["qy"]?>" selected><?php echo $rs["qy"]?></option>
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
                    <input value="<?php echo $rs["address"]?>" name="address" type="text" class="textinput"  size="50" maxlength="50">
                    ��</td>
                </tr>
                <tr align="left" valign="middle">
                  <td width="305" height="30" class="font">&nbsp;�������ͣ�
                    <select
        name=hx style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: ����; HEIGHT: 22px" >
                <option value=<?php echo $rs["hx"]?> selected><?php echo $rs["hx"]?></option>
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
                <option value="����">����</option>
              </select> </td>
                  <td width="272" height="30" class="font" >&nbsp;�������ͣ�
                    <select name=wylx class="textinput" >
                <option value=<?php echo $rs["wylx"]?> selected><?php echo $rs["wylx"]?></option>
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
                    <input value="<?php echo $rs["min_area"]?>" name="min_area" type="text" class="textinput" id="min_area" size="5" maxlength="20">
                    �O ~
                    <input  value="<?php echo $rs["max_area"]?>" name="max_area" type="text" class="textinput" id="max_area" size="5" maxlength="20">
                    �O</td>
                  <td width="272" height="30" class="font" >&nbsp;�����ṹ��
                    <select name="jg" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: ����; HEIGHT: 22px" class="textinput" >
                <option value="<?php echo $rs["jg"]?>" selected><?php echo $rs["jg"]?></option>
                <option value="��¥">��¥</option>
<option value="��¥">��¥</option>
<option value="�������">�������</option><option value="����">����</option>
                <option value="����">����</option>
              </select> </td>
                </tr>
                <tr align="left" valign="middle" >
                  <td width="305" height="30" class="font">&nbsp;װ�޳̶ȣ�
                    <select name="zxcd" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: ����; HEIGHT: 22px" class="textinput">
                <option value=<?php echo $rs["zxcd"]?> selected><?php echo $rs["zxcd"]?></option>
                <option value="һ��">һ��</option>
                <option value="�е�">�е�</option>
                <option value="�ߵ�">�ߵ�</option>
                <option value="����">����</option>
                <option value="��װ��">��װ��</option>
                <option value="����">����</option>
              </select> </td>
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
                    <input  value="<?php echo $rs["min_pay"]?>" name="min_pay" type="text" class="textinput" id="min_pay" size="5" maxlength="20" onchange="my()">
                    ��Ԫ ~
                    <input  value="<?php echo $rs["max_pay"]?>" name="max_pay" type="text" class="textinput" id="max_pay3" size="5" maxlength="20" >
                    ��Ԫ��<font color="#FF6600">**</font> </td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;</span></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;������ʩ��</td>
                        <td width="495"> <textarea name="pb" cols="70" rows="6" wrap="VIRTUAL" class="textinput"><?php echo $rs["pb"]?></textarea></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;�� ϵ �ˣ�
                    <input  value="<?php echo $rs["man"]?>" name="man" type="text" class="textinput" size="20" maxlength="50" >
                    ��</td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;��ϵ�绰��</span>
                    <input  value="<?php echo $rs["tel"]?>" name="tel" type="text" class="textinput" size="20" maxlength="50">
                    ��</td>
                </tr>
                <tr align="left" valign="middle">
                  <td width="305" height="30" class="font">&nbsp;<strong>E -mail</strong>��
                    <input  value="<?php echo $rs["email"]?>" name="email" type="text" class="textinput" size="20" maxlength="50" >
                    ��</td>
                  <td width="272" height="30" class="font" >&nbsp;����·�ߣ�
                    <input  value="<?php echo $rs["bus"]?>" name="bus" type="text" class="textinput" size="30" maxlength="50">
                  </td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td height="111" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;����˵����</td>
                        <td width="495"><textarea name="house_ms" cols="70" rows="6" wrap="VIRTUAL" class="textinput" ><?php echo $rs["house_ms"]?></textarea></td>
                      </tr>
                      <input name="id" type="hidden" class="textinput2" id="accp_id" value="<?php echo $rs["id"]?>" size="5" readonly>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top" class="font">&nbsp;�Ƿ�ͨ����</td>
                        <td width="495"><select name="pass" class="textinput" >
          <option value="��">��</option>
          <option value="��" selected>��</option>
        </select></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="28" colspan="2" class="font">
<div align="center">
                      <input type="submit" name="submit" value="��  ��" class="btn btn-success">

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

        </div>
    </div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>
</html>

