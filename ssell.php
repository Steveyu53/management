<?php 
session_start();
require("connection/conn.php"); ?>
<html>
<head>
<title>���ݳ�����Ϣ�Ǽ�---�������ۼ�����ϵͳ</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="css.css" type="text/css">
<link href="css/base2.css" rel="stylesheet" type="text/css" />
    <link href="css/csss4.css" rel="stylesheet" type="text/css" />
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
<?php
    $strSql="select * from house_sell where id=$id";
  $res=mysql_query($strSql);
$rs=mysql_fetch_array($res);
//���µ������
$sql="update house_hire set click=click+1 where id=$id";
  $res=mysql_query($sql);

?>
  <tr align="left" valign="top">

  <td width="1" bgcolor="#CCCCCC"></td>
    <td>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" class="table" >
          <tr>
            <td align="center" valign="top" class="downkuan" >
              <span class="font"> <p>��Դ��ţ�<font color=red><?php echo $rs["bh"]?></font>(������Դ˸���Ϣ���������ס�˱��)�����������������������������<font color=red><?php echo $rs["click"]?></font></p></span>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <div align="center"><strong><font color="#003D79">���ݳ�����Ϣ����</font></strong></div></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="300" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr class="odd" >
                        <td width="76" height="300" align="left" valign="top" class="font">&nbsp;����չʾ��</td>
                        <td width="495">
                            <div class="banner mt10" style="margin-left: 50px;">
            <div class="focus" id="focus"> <!--����ͼ-->
                <div class="imgwarpper">
                    <ul class="imgbox"> <!--ͼƬ-->
     <li style="z-index:1;"><img src="./picture/w2.jpg" alt="20131226-5"/></li>
     <li><img src="./picture/w1.jpg" alt="20131226-4"/></li>
    <li><img src="./picture/w3.jpg" alt="20131226-3"/></li>
      <li><img src="./picture/w4.jpg" alt="20131226-2"/></li>
     <!--ͼƬend-->
                </div>
                <div class="numbox"><!--Сͼ-->
                    <ul class="numboxcont">
    <li class="pptOn"></li>
     <li></li>                                                                    <li></li>
                                                                                                                            <li></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
                </div>
                <!--Сͼend-->
            </div>
            <!--����ͼ-->
        </div>
                        </td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top">&nbsp;���⣺</td>
                        <td width="495" ><?php echo $rs["head"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td width="277" class="font">&nbsp;С�����ƣ�
                    <?php echo $rs["house_name"]?></td>
                  <td width="266" height="30" ><span class="font">&nbsp;��������</span>
                    <?php echo $rs["qy"]?></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;�ء���ַ��
                    <?php echo $rs["address"]?></td>
                  <td height="30" class="font"><span class="font">&nbsp;�Ƿ��н飺</span>
                    <?php echo $rs["zj"]?></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;�������ͣ�
                    <?php echo $rs["hx"]?></td>
                  <td height="30" class="font" >&nbsp;�������ͣ�
                    <?php echo $rs["wylx"]?></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;���������
                    <?php echo $rs["jz_area"]?>
                    �O</td>
                  <td height="30" class="font" >&nbsp;�� �� �䣺
                    <?php echo $rs["sy_area"]?><span class="font">
            �O</span></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;�����ṹ��
                    <?php echo $rs["jg"]?></td>
                  <td height="30" class="font" >&nbsp;����ʱ�䣺
                    <?php echo $rs["jg_time"]?>
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                <td height="30" class="font">&nbsp;װ�޳̶ȣ�
                  <?php echo $rs["zxcd"]?></td>
                  <td height="30" class="font" >&nbsp;¥��������
                    <?php echo $rs["sum_floor"]?></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;���׼۸�
                    <?php echo $rs["pay"]?>
                    ��Ԫ</td>
                  <td height="30" class="font" ><span class="font">&nbsp;����¥�㣺</span>
                  <?php echo $rs["do_floor"]?></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;������ʩ��</td>
                        <td width="495"><?php echo $rs["pb"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;�� ϵ �ˣ�
                    <?php echo $rs["man"]?></td>
                  <td height="30" class="font" ><span class="font">&nbsp;��ϵ�绰��</span>
                    <?php echo $rs["tel"]?></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;<strong>E-mail</strong>��&nbsp;
                    <?php echo $rs["email"]?></td>
                  <td height="30" class="font" >&nbsp;����·�ߣ�
                    <?php echo $rs["bus"]?>
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="111" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr class="odd" >
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;��ʽ������</td>
                        <td width="495"><?php echo $rs["house_ms"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr >
                        <td width="76" height="30" align="left" valign="top" class="font">&nbsp;�������ڣ�</td>
                        <td width="495"><?php echo $rs["date"]?></td>
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
