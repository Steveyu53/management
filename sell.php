<?php
session_start();
error_reporting(0);

require("connection/conn.php"); ?>
<html>
<head>
<title>房屋出售信息</title>
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
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="css.css" type="text/css">
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
<script language="JavaScript">
<!--
	function checksearch()
	{
	if(!CheckIsNumeric(search.search_mj_min,"请在输入框中输入数值！")) return false;
	if(!CheckIsNumeric(search.search_mj_max,"请在输入框中输入数值！")) return false;
	if(!CheckIsNumeric(search.search_jg_min,"请在输入框中输入数值！")) return false;
	if(!CheckIsNumeric(search.search_jg_max,"请在输入框中输入数值！")) return false;
	}
//-->
</script>
<body bgcolor="#CCCCCC" text="#000000" leftmargin="0" topmargin="0">

<?php  require("headtop.php"); ?>

<table width="978" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
	<td width="1" bgcolor="#CCCCCC"></td>
      <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" style="margin-top: 35px;">
            <table border="0" cellpadding="0" cellspacing="0">
              <form action="sell.php" method=post name="search" onSubmit="return checksearch()">
                  <td width="163" height="25" class="font"><font color="#003D79" style="margin-left: 30px;"><strong>区域：</strong></font>
                    <select name="search_qy" id="search_qy" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: 宋体; HEIGHT: 22px" >
                      <option value="" selected>-请选择-</option>
                         <?php

	$Sql="select * from house_area order by id";
	$res=mysql_query($Sql);
while($rs0=mysql_fetch_array($res))
echo " <option value=$rs0[area_name]>$rs0[area_name]</option>";
	?>
                    </select> </td>
                  <td width="163" class="font"><font color="#003D79"><strong>房屋类型：</strong></font>
                    <select name=search_lx class="textinput" style="width: 90px;">
                      <option value="" selected>-请选择-</option>
                      <option value="商品房">商品房</option>
                      <option value="集资房">集资房</option>
                      <option value="拆迁房">拆迁房</option>
                      <option value="写字楼">写字楼</option>
                      <option value="公房">公房</option>
                      <option value="店面">店面</option>
                      <option value="民房">民房</option>
                      <option value="别墅">别墅</option>
                    </select></td>
                    <td height="25" class="font"><font color="#003D79"><strong>户型：</strong></font>
                    <select
        name=search_hx style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: 宋体; HEIGHT: 22px" >
                      <option value="" selected>-请选择-</option>
                      <option value="4室2厅2卫">4室2厅2卫</option>
                      <option value="4室2厅1卫">4室2厅1卫</option>
                      <option value="4室1厅1卫">4室1厅1卫</option>
                      <option value="3室2厅2卫">3室2厅2卫</option>
                      <option value="3室2厅1卫">3室2厅1卫</option>
                      <option value="3室1厅1卫">3室1厅1卫</option>
                      <option value="2室2厅1卫">2室2厅1卫</option>
                      <option value="2室1厅1卫">2室1厅1卫</option>
                      <option value="2室半1厅1卫">2室半1厅1卫</option>
                      <option value="1室1厅1卫">1室1厅1卫</option>
                      <option value="单间">单间</option>
                      <option value="复式">复式</option>
                      <option value="其他">其他</option>
                    </select> </td>
                  <td height="25" class="font"><font color="#003D79"><strong>是否中介：</strong></font>
                    <select name="search_zj" class="textinput" style="width: 90px;">
                      <option value="" selected>-请选择-</option>
                      <option value="非中介">非中介</option>
                      <option value="中介">中介</option>
                    </select></td>
                    <td height="25" class="font"><font color="#003D79"><strong>面积：</strong></font>
                    <input name="search_mj_min" type="text" class="textinput" id="min" size="2">
                    ~
                    <input name="search_mj_max" type="text" class="textinput" id="max" size="2">
                    ㎡</td>
                  <td height="25" class="font"><font color="#003D79"><strong>价格：</strong></font>
                    <input name="search_jg_min" type="text" class="textinput" id="min23" size="2">
                    ~
                    <input name="search_jg_max" type="text" class="textinput" id="max23" size="2">
                    万元</td>
                    <td  colspan="2" class="font"><input name="imageField" type="image" src="images/search.jpg" width="60" border="0">
                  </td>
                </tr>
              </form>
            </table> </td>
        </tr>
      </table>

      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <form name="form4" method="post">


          <tr align="center" valign="middle" bgcolor="#003D79" style="color: white;">
            <td height="21" class="font"><strong>是否中介</strong></td>
            <td height="25" class="font"><strong>小区名称</strong></td>
            <td height="21" class="font"><strong>所属区域</strong></td>
            <td height="21"><strong><font class="font">房型</font></strong></td>
            <td height="21"><strong><font class="font">面积(㎡)</font></strong></td>
            <td height="21"><strong><font class="font">售价(万)</font></strong></td>
            <td><strong><font class="font">登记时间</font></strong></td>
          </tr>
      <?php
		  //构造查询条件
	$where="";
	if($search_qy!="")
$where.="and qy='$search_qy'";
if($search_lx!="")
$where.="and wylx='$search_lx'";
if($search_zj!="")
$where.="and zj='$search_zj'";
if($search_hx!="")
$where.="and hx='$search_hx'";


    $strSql="select * from house_sell where pass='是'
	$where order by id desc";
			$res=mysql_query($strSql);
while($rs=mysql_fetch_array($res))
{

	?>
          <tr align="center" valign="middle" bgcolor="#FFFFFF">

            <td height="21" class="font" ><?php echo $rs["zj"]?></td>
            <td height="21" ><a href="ssell.php?id=<?php echo $rs["id"]?>" target="_blank" class="linkfont"><font color="#EA0000"><?php echo $rs["house_name"]?></font></a></td>
            <td height="21" class="font" ><?php echo $rs["qy"]?></td>
            <td height="21" class="font" ><?php echo $rs["hx"]?></td>
            <td height="21" class="font" ><?php echo $rs["jz_area"]?></td>
            <td height="21" class="font" ><?php echo $rs["pay"]?></td>
            <td class="font" >

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
