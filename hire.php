<?php
session_start();
error_reporting(0);
require("connection/conn.php"); ?>
<html>
<head>
<title>����������Ϣ---�������ۼ�����ϵͳ</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="css.css" type="text/css">
<link  type="text/css" rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
         <script src="./bootstrap/js/jquery-1.11.1.min.js"></script>
       <script src="./bootstrap/js/bootstrap.min.js"></script>
    <link href="css/base2.css" rel="stylesheet" type="text/css" />
    <link href="css/css4.css" rel="stylesheet" type="text/css" />
    <link href="css/footer.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="./bootstrap/js/jquery-1.4.1.js"></script>
<script type="text/javascript" src="./bootstrap/js/public2.js"></script>
 <script type="text/javascript" src="http://cdn.ynu.edu.cn/other/ynujs/fcous.js"></script>
 <style type="text/css">
 input[type="text"],  select {
border: 1px solid #DADADA;
color: #888;
height: 25px;
margin-bottom: 16px;
outline: 0 none;
font-size: 12px;
line-height:15px;
box-shadow: inset 0px 1px 4px #ECECEC;
-moz-box-shadow: inset 0px 1px 4px #ECECEC;
-webkit-box-shadow: inset 0px 1px 4px #ECECEC;
}

 select {
background: #FFF url('down-arrow.png') no-repeat right;
background: #FFF url('down-arrow.png') no-repeat right);
appearance:none;
-webkit-appearance:none;
-moz-appearance: none;
text-indent: 0.01px;
text-overflow: '';
height: 30px;
line-height: 15px;

}
 </style>
</head>
<script language="JavaScript" src="share/nei_fc.js"></script>
<body bgcolor="#cccccc" leftmargin="0" topmargin="0">


<?php require("headtop.php"); ?>


<table width="978" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr align="left" valign="top">
    <td>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top: 35px;">
        <tr align="left" valign="top">
            <table border="0" cellpadding="0" cellspacing="0">
              <form action="hire.php" method=post name="search" onSubmit="return checksearch()">
                <tr align="left" valign="middle" >
                <td width="100"></td>
                  <td width="163" height="25" class="font" style="text-align: center;"><font color="#003D79"><strong>����</strong></font>
                    <select name="search_qy" id="search_qy" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: ����; HEIGHT: 22px" >
                      <option value="" selected>-��ѡ��-</option>
                            <?php

	$Sql="select * from house_area order by id";
	$res=mysql_query($Sql);
while($rs0=mysql_fetch_array($res))
echo " <option value=$rs0[area_name]>$rs0[area_name]</option>";
	?>
                    </select> </td>
                  <td width="163" class="font"><font color="#003D79"><strong>�������ͣ�</strong></font>
                    <select name=search_lx class="textinput" style="width: 90px;">
                      <option value="" selected>-��ѡ��-</option>
                      <option value="��Ʒ��">��Ʒ��</option>
                      <option value="���ʷ�">���ʷ�</option>
                      <option value="��Ǩ��">��Ǩ��</option>
                      <option value="д��¥">д��¥</option>
                      <option value="����">����</option>
                      <option value="����">����</option>
                      <option value="��">��</option>
                      <option value="����">����</option>
                    </select></td>
                    <td height="25" class="font" ><font color="#003D79" style="margin-left: 30px;"><strong>���ͣ�</strong></font>
                    <select
        name=search_hx style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: ����; HEIGHT: 22px" >
                      <option value="" selected>-��ѡ��-</option>
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
                    </select> </td>
                  <td height="25" class="font"><font color="#003D79" style="margin-left: 30px;"><strong>�Ƿ��н飺</strong></font>
                    <select name="search_zj" class="textinput" style="width: 90px;">
                      <option value="" selected>-��ѡ��-</option>
                      <option value="���н�">���н�</option>
                      <option value="�н�">�н�</option>
                    </select></td>
                    <td  colspan="2" class="font"><input name="imageField" type="image" src="images/search.jpg" width="60" border="0" style="margin-left: 60px;">
                  </td>
                </tr>
              </form>
            </table>
          </td>
        </tr>
      </table>

      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <form name="form4" method="post">



          <tr align="center" valign="middle" bgcolor="#003D79" style="color: white;">
            <td height="21" class="font"><strong>�Ƿ��н�</strong></td>
            <td height="25" class="font"><strong>Ҫ��ض�</strong></td>
            <td height="21" class="font"><strong><font class="font">����</font></strong></td>
            <td height="21"><strong><font class="font">���(�O)</font></strong></td>
            <td height="21"><strong><font class="font">���(Ԫ)</font></strong></td>
            <td><strong><font class="font">�Ǽ�ʱ��</font></strong></td>
          </tr>
		  <?php
		  //�����ѯ����
	$where="";
	if($search_qy!="")
$where.="and qy='$search_qy'";
if($search_lx!="")
$where.="and wylx='$search_lx'";
if($search_zj!="")
$where.="and zj='$search_zj'";
if($search_hx!="")
$where.="and hx='$search_hx'";


    $strSql="select * from house_hire where pass='��'
	$where order by id desc";
			$res=mysql_query($strSql);
while($rs=mysql_fetch_array($res))
{

	?>

          <tr align="center" valign="middle" bgcolor="#FFFFFF">

            <td width="55" height="21" class="font" ><?php echo $rs["zj"]?></td>
            <td width="206" height="21" ><a href="shire.php?id=<?php echo $rs["id"]?>" target="_blank" class="linkfont"><font color="#EA0000"><?php echo $rs["address"]?></font></a></td>
            <td width="92" height="21" class="font" ><?php echo $rs["hx"]?></td>
            <td width="94" height="21" class="font" ><?php echo $rs["min_area"]?> ~ <?php echo $rs["max_area"]?></td>
            <td width="87" height="21" class="font" ><?php echo $rs["min_pay"]?> ~ <?php echo $rs["max_pay"]?></td>
            <td width="83" class="font" >

              <font color="#003D79"><?php echo $rs["date"]?></font>

            </td>
          </tr>
     <?php
				}
				?>

        </form>
      </table>

    </td>
  </tr>
</table>
<?php require ("foot.htm"); ?>
</body>
</html>
