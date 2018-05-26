<?php 
session_start();
require("connection/conn.php"); ?>
<html>
<head>
<title>房屋出售信息登记---房屋销售及租赁系统</title>
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
  
  font-family: "微软雅黑";
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
    if(!CheckIsNull(form2.house_name,"请输入小区名称！")) return false;
    if(!CheckIsNull(form2.qy,"请选择区域！")) return false;
    if(!CheckIsNull(form2.hx,"请选择户型！")) return false;
    if(!CheckIsNull(form2.jz_area,"请输入建筑面积！")) return false;
    if(!CheckIsNull(form2.jg,"请选择建筑结构！")) return false;
    if(!CheckIsNull(form2.pay,"请输入交易价格！")) return false;
    if(!CheckIsNull(form2.do_floor,"请选择所在楼层！")) return false;

    if(!CheckIsNull(form2.man,"请输入联系人！")) return false;
    if(!CheckIsNull(form2.tel,"请输入联系电话！")) return false;
    if(!CheckIsNull(form2.email,"请输入EMAIL！")) return false;

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
//更新点击次数
$sql="update house_hire set click=click+1 where id=$id";
  $res=mysql_query($sql);

?>
  <tr align="left" valign="top">

  <td width="1" bgcolor="#CCCCCC"></td>
    <td>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" class="table" >
          <tr>
            <td align="center" valign="top" class="downkuan" >
              <span class="font"> <p>房源编号：<font color=red><?php echo $rs["bh"]?></font>(如果您对此该信息有意向，请记住此编号)　　　　　　　　　　点击次数：<font color=red><?php echo $rs["click"]?></font></p></span>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <div align="center"><strong><font color="#003D79">房屋出售信息详情</font></strong></div></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="300" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr class="odd" >
                        <td width="76" height="300" align="left" valign="top" class="font">&nbsp;房屋展示：</td>
                        <td width="495">
                            <div class="banner mt10" style="margin-left: 50px;">
            <div class="focus" id="focus"> <!--焦点图-->
                <div class="imgwarpper">
                    <ul class="imgbox"> <!--图片-->
     <li style="z-index:1;"><img src="./picture/w2.jpg" alt="20131226-5"/></li>
     <li><img src="./picture/w1.jpg" alt="20131226-4"/></li>
    <li><img src="./picture/w3.jpg" alt="20131226-3"/></li>
      <li><img src="./picture/w4.jpg" alt="20131226-2"/></li>
     <!--图片end-->
                </div>
                <div class="numbox"><!--小图-->
                    <ul class="numboxcont">
    <li class="pptOn"></li>
     <li></li>                                                                    <li></li>
                                                                                                                            <li></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
                </div>
                <!--小图end-->
            </div>
            <!--焦点图-->
        </div>
                        </td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top">&nbsp;标题：</td>
                        <td width="495" ><?php echo $rs["head"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td width="277" class="font">&nbsp;小区名称：
                    <?php echo $rs["house_name"]?></td>
                  <td width="266" height="30" ><span class="font">&nbsp;所在区域：</span>
                    <?php echo $rs["qy"]?></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;地　　址：
                    <?php echo $rs["address"]?></td>
                  <td height="30" class="font"><span class="font">&nbsp;是否中介：</span>
                    <?php echo $rs["zj"]?></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;户　　型：
                    <?php echo $rs["hx"]?></td>
                  <td height="30" class="font" >&nbsp;房屋类型：
                    <?php echo $rs["wylx"]?></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;建筑面积：
                    <?php echo $rs["jz_area"]?>
                    ㎡</td>
                  <td height="30" class="font" >&nbsp;杂 物 间：
                    <?php echo $rs["sy_area"]?><span class="font">
            ㎡</span></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;建筑结构：
                    <?php echo $rs["jg"]?></td>
                  <td height="30" class="font" >&nbsp;竣工时间：
                    <?php echo $rs["jg_time"]?>
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                <td height="30" class="font">&nbsp;装修程度：
                  <?php echo $rs["zxcd"]?></td>
                  <td height="30" class="font" >&nbsp;楼层总数：
                    <?php echo $rs["sum_floor"]?></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;交易价格：
                    <?php echo $rs["pay"]?>
                    万元</td>
                  <td height="30" class="font" ><span class="font">&nbsp;所在楼层：</span>
                  <?php echo $rs["do_floor"]?></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;配套设施：</td>
                        <td width="495"><?php echo $rs["pb"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;联 系 人：
                    <?php echo $rs["man"]?></td>
                  <td height="30" class="font" ><span class="font">&nbsp;联系电话：</span>
                    <?php echo $rs["tel"]?></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;<strong>E-mail</strong>：&nbsp;
                    <?php echo $rs["email"]?></td>
                  <td height="30" class="font" >&nbsp;公车路线：
                    <?php echo $rs["bus"]?>
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="111" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr class="odd" >
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;房式描述：</td>
                        <td width="495"><?php echo $rs["house_ms"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr >
                        <td width="76" height="30" align="left" valign="top" class="font">&nbsp;发布日期：</td>
                        <td width="495"><?php echo $rs["date"]?></td>
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
        </form>
      </table>


    </td>
  </tr>
</table>
<?php require ("foot.htm"); ?>
</body>
</html>
