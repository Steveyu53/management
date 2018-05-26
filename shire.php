<!--#include file="checkuser.php"-->
<?php 
session_start();
require("connection/conn.php"); ?>
<html>
<head>
<title>房屋求租信息登记---房屋销售及租赁系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="css.css" type="text/css">
<link href="css/base2.css" rel="stylesheet" type="text/css" />
    <link href="css/css4.css" rel="stylesheet" type="text/css" />
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
  
  font-family: "微软雅黑";
  text-align: center;
  left: auto;
}


</style>
</head>
<script language="JavaScript" src="share/nei_fc.js"></script>
<body bgcolor="#cccccc" text="#000000" leftmargin="0" topmargin="0" >

<?php require ("headtop.php"); ?>
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="margin-top: 30px;" >
  <tr align="left" valign="top">

	<td width="1" bgcolor="#CCCCCC"></td>
    <td>
      <table  class="table" width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
      <?php
    $strSql="select * from house_hire where id=$id";
  $res=mysql_query($strSql);
$rs=mysql_fetch_array($res);
//更新点击次数
$sql="update house_hire set click=click+1 where id=$id";
  $res=mysql_query($sql);

?>
          <tr>
            <td align="center" valign="top" class="downkuan" >
              <span class="font"><p>房源编号：<font color=red><?php echo $rs["bh"]?></font>(如果您对此该信息有意向，请记住此编号)　　　　　　　　　　点击次数：<font color=red><?php echo $rs["click"]?></font></p></span>
              <table width="99%" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <div align="center"><font color="#003D79"><strong>房屋求租信息详情</strong></font></div></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top" class="odd">&nbsp;标题：</td>
                        <td width="495"  class="odd"><?php echo $rs["head"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" cl>
                  <td width="305" class="font"><span class="font">&nbsp;是否中介：</span>
                    <?php echo $rs["zj"]?></td>
                  <td width="272" height="30" ><span class="font">&nbsp;要求区域：</span>
                    <?php echo $rs["qy"]?></td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td height="30" colspan="2" class="font">&nbsp;要求地段：
                    <?php echo $rs["address"]?></td>
                </tr>
                <tr align="left" valign="middle">
                  <td width="305" height="30" class="font">&nbsp;户　　型：
                    <?php echo $rs["hx"]?></td>
                  <td width="272" height="30" class="font" >&nbsp;房屋类型：
                    <?php echo $rs["wylx"]?></td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;要求面积：
                    <?php echo $rs["min_area"]?></font>
            ㎡ ~ <font color=red><?php echo $rs["max_area"]?></font> ㎡</td>
                  <td width="272" height="30" class="font" >&nbsp;建筑结构：
                    <?php echo $rs["jg"]?></td>
                </tr>
                <tr align="left" valign="middle" >
                  <td width="305" height="30" class="font">&nbsp;装修程度：
                    <?php echo $rs["zxcd"]?></td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;所在楼层：<?php echo $rs["do_floor"]?></td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;交易价格：
                    <?php echo $rs["min_pay"]?></font>
            元 ~ <font color=red><?php echo $rs["max_pay"]?></font> 元</td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;</span></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;配套设施：</td>
                        <td width="495"><?php echo $rs["pb"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top" class="font">&nbsp;发布日期：</td>
                        <td width="495"><?php echo $rs["date"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;联 系 人：
                    <?php echo $rs["man"]?></td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;联系电话：</span>
                    <?php echo $rs["tel"]?></td>
                </tr>
                <tr align="left" valign="middle">
                  <td width="305" height="30" class="font">&nbsp;<strong>E -mail</strong>：
                    <?php echo $rs["email"]?></td>
                  <td width="272" height="30" class="font" >&nbsp;公车路线：
                    <?php echo $rs["bus"]?>
                  </td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td height="111" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;其它说明：</td>
                        <td width="495"><?php echo $rs["house_ms"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="28" colspan="2" class="font">
<div align="center">
                      <input type="submit" name="Submit42" value="提  交" class="btn btn-success">

                      <input type="reset" name="Submit4" value="重  置" class="btn btn-info">
                    </div></td>
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
