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
           <script type="text/javascript" src="./bootstrap/js/jquery-1.4.1.js"></script>
<script type="text/javascript" src="./bootstrap/js/public2.js"></script>
 <script type="text/javascript" src="http://cdn.ynu.edu.cn/other/ynujs/fcous.js"></script>
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
      <?php
         $strSql="select * from house_hack where id=$id";
         $res=mysql_query($strSql);
          $rs=mysql_fetch_array($res);
          //���µ������
          $sql="update house_hack set click=click+1 where id=$id";
           $res=mysql_query($sql);

      ?>
        <form enctype="multipart/form-data" name="form2" method="post" action="admin/save_hack.php" onsubmit="return checkdata()">
          <tr>
            <td align="center" valign="top" class="downkuan" >
              <span class="font"> <p>���������<font color=red><?php echo $rs["click"]?></font></p></span>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan" height="30">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="50" colspan="2" class="font"> <div align="center" style="font-size: 20px"><strong><font color="#003D79"><?php echo $rs["head"]?>��Ϣ����</font></strong></div></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="300" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr >
                        <td width="76" height="300" align="left" valign="top" class="font"><font color="#003D79"><strong>����չʾ��</strong></font></td>
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
                <tr align="left" valign="middle" class="odd" height="40">
                  <td width="277">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>С�����ƣ�</strong>
                    </font><font style="font-size: 15px;"><?php echo $rs["house_name"]?></font></td>
                  <td width="266" height="30" ><span class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>���׼۸�</strong></font></span>
                    <font color="red" style="font-size: 20px;"><strong><?php echo $rs["pay"]?></strong>
                    Ԫ/��</font>
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>�ء���ַ��</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["address"]?></font></td>
                  <td height="30" class="font"><span class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>�Ƿ��н飺</strong></span>
                    <?php echo $rs["zj"]?></td>
                </tr>
                <tr align="left" valign="middle" class="odd" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>�������ͣ�</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["hx"]?></font> </td>
                  <td height="30" class="font" >&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>�������ͣ�</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["wylx"]?></font> </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>���������</strong></font>
                    <font style="font-size: 15px;color: red;"><strong><?php echo $rs["jz_area"]?>
                    �O��</strong></font></td>
                  <td height="30" class="font" >&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>�� �� �䣺</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["sy_area"]?>
                    �O </font></td>
                </tr>
                <tr align="left" valign="middle" class="odd" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>�������ͣ�</strong></font>
                    <font style="font-size: 15px;">ȫ�·���</font></td>
                  <td height="30" class="font" >&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>����ʱ�䣺</strong></font>
                   <font style="font-size: 15px;"><?php echo $rs["jg_time"]?></font>
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>װ�޳̶ȣ�</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["zxcd"]?></font></td>
                  <td height="30" class="font" >&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>¥��������</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["sum_floor"]?></font></td>
                </tr>
                <tr align="left" valign="middle" class="odd" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>��������</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["qy"]?></font></td>
                  <td height="30" class="font" ><span class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>����¥�㣺</strong></font></span>
                  <font style="font-size: 15px;"><?php echo $rs["do_floor"]?></font> </td>
                </tr>
                <tr align="left" valign="middle"  height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>���ݳ���</strong></font>
                    <font style="font-size: 15px;">������Ϣ</font></td>
                  <td height="30" class="font" ><span class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>���޷�ʽ��</strong></font></span>
                  <font style="font-size: 15px;">����</font></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>������ʩ��</strong></font></td>
                        <td width="495"><p style="font-size: 15px;line-height: 200%;"><?php echo $rs["pb"]?></p</td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>�� ϵ �ˣ�</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["man"]?></font></td>
                  <td height="30" class="font" ><span class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>��ϵ�绰��</strong></font></span>
                    <font style="font-size: 15px;"><?php echo $rs["tel"]?></font></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>E-mail��</strong></font>&nbsp;
                    <font style="font-size: 15px;"><?php echo $rs["email"]?></font> </td>
                  <td height="30" class="font" >&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>����·�ߣ�</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["bus"]?></font>
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="131" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr class="odd" >
                        <td width="76" height="131" align="left" valign="top" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>��ʽ������</strong></font></td>
                        <td width="495"> <p style="font-size: 15px;line-height: 200%;"><?php echo $rs["house_ms"]?></p></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr >
                        <td width="76" height="30" align="left" valign="top" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><strong>����ʱ�䣺</strong></font></td>
                        <td width="495"><?php echo $rs["date"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td colspan="2" align="center"><input type="reset" name="Submit4" value="�ղ�" class="btn btn-danger"></td>
                </tr>     
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="131" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="90" height="131" align="left" valign="top" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: ΢���ź�"><img src="./picture/ti.jpg" height="131" width="100%"></td>
                        <td width="495"><p style="font-size: 15px;">ʵ�ز鿴�������൱����ķ��ӣ�</p>
                        </b>&nbsp;&nbsp;<p style="margin-top: 60px;"><font  color=" #6C6C6C">2017-04-17</font></p></div>
                        </td>
                      </tr>
                    </table></td>
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
