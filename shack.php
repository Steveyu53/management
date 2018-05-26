<?php 
session_start();
require("connection/conn.php"); ?>
<html>
<head>
<title>房屋出租信息登记---房屋销售及租赁系统</title>
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
  <tr align="left" valign="top">

	<td width="1" bgcolor="#CCCCCC"></td>
    <td>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" class="table" >
      <?php
         $strSql="select * from house_hack where id=$id";
         $res=mysql_query($strSql);
          $rs=mysql_fetch_array($res);
          //更新点击次数
          $sql="update house_hack set click=click+1 where id=$id";
           $res=mysql_query($sql);

      ?>
        <form enctype="multipart/form-data" name="form2" method="post" action="admin/save_hack.php" onsubmit="return checkdata()">
          <tr>
            <td align="center" valign="top" class="downkuan" >
              <span class="font"> <p>点击次数：<font color=red><?php echo $rs["click"]?></font></p></span>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan" height="30">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="50" colspan="2" class="font"> <div align="center" style="font-size: 20px"><strong><font color="#003D79"><?php echo $rs["head"]?>信息详情</font></strong></div></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="300" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr >
                        <td width="76" height="300" align="left" valign="top" class="font"><font color="#003D79"><strong>房屋展示：</strong></font></td>
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
                <tr align="left" valign="middle" class="odd" height="40">
                  <td width="277">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>小区名称：</strong>
                    </font><font style="font-size: 15px;"><?php echo $rs["house_name"]?></font></td>
                  <td width="266" height="30" ><span class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>交易价格：</strong></font></span>
                    <font color="red" style="font-size: 20px;"><strong><?php echo $rs["pay"]?></strong>
                    元/月</font>
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>地　　址：</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["address"]?></font></td>
                  <td height="30" class="font"><span class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>是否中介：</strong></span>
                    <?php echo $rs["zj"]?></td>
                </tr>
                <tr align="left" valign="middle" class="odd" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>户　　型：</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["hx"]?></font> </td>
                  <td height="30" class="font" >&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>房屋类型：</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["wylx"]?></font> </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>建筑面积：</strong></font>
                    <font style="font-size: 15px;color: red;"><strong><?php echo $rs["jz_area"]?>
                    ㎡　</strong></font></td>
                  <td height="30" class="font" >&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>杂 物 间：</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["sy_area"]?>
                    ㎡ </font></td>
                </tr>
                <tr align="left" valign="middle" class="odd" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>房屋类型：</strong></font>
                    <font style="font-size: 15px;">全新房屋</font></td>
                  <td height="30" class="font" >&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>竣工时间：</strong></font>
                   <font style="font-size: 15px;"><?php echo $rs["jg_time"]?></font>
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>装修程度：</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["zxcd"]?></font></td>
                  <td height="30" class="font" >&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>楼层总数：</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["sum_floor"]?></font></td>
                </tr>
                <tr align="left" valign="middle" class="odd" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>所在区域：</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["qy"]?></font></td>
                  <td height="30" class="font" ><span class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>所在楼层：</strong></font></span>
                  <font style="font-size: 15px;"><?php echo $rs["do_floor"]?></font> </td>
                </tr>
                <tr align="left" valign="middle"  height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>房屋朝向：</strong></font>
                    <font style="font-size: 15px;">暂无信息</font></td>
                  <td height="30" class="font" ><span class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>租赁方式：</strong></font></span>
                  <font style="font-size: 15px;">整租</font></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>配套设施：</strong></font></td>
                        <td width="495"><p style="font-size: 15px;line-height: 200%;"><?php echo $rs["pb"]?></p</td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>联 系 人：</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["man"]?></font></td>
                  <td height="30" class="font" ><span class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>联系电话：</strong></font></span>
                    <font style="font-size: 15px;"><?php echo $rs["tel"]?></font></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="30" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>E-mail：</strong></font>&nbsp;
                    <font style="font-size: 15px;"><?php echo $rs["email"]?></font> </td>
                  <td height="30" class="font" >&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>公车路线：</strong></font>
                    <font style="font-size: 15px;"><?php echo $rs["bus"]?></font>
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="131" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr class="odd" >
                        <td width="76" height="131" align="left" valign="top" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>房式描述：</strong></font></td>
                        <td width="495"> <p style="font-size: 15px;line-height: 200%;"><?php echo $rs["house_ms"]?></p></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr >
                        <td width="76" height="30" align="left" valign="top" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><strong>发布时间：</strong></font></td>
                        <td width="495"><?php echo $rs["date"]?></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td colspan="2" align="center"><input type="reset" name="Submit4" value="收藏" class="btn btn-danger"></td>
                </tr>     
                <tr align="left" valign="middle" bgcolor="#FFFFFF" height="40">
                  <td height="131" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="90" height="131" align="left" valign="top" class="font">&nbsp;<font color="#003D79" style="font-size: 15px;font-family: 微软雅黑"><img src="./picture/ti.jpg" height="131" width="100%"></td>
                        <td width="495"><p style="font-size: 15px;">实地查看过啦，相当不错的房子！</p>
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
