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
<title>求售信息修改</title>
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
  
  font-family: "微软雅黑";
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
            <h1 class="logo">房屋租赁.<span>Admin</span></h1>
            <span class="slogan">后台管理系统</span>
            
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
                <span>管理员</span>
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
                  <h4>管理员</h4>
                    <span class="email">admin</span>
                    <ul>
                        <li><a href="editprofile.html">编辑资料</a></li>
                        <li><a href="accountsettings.html">账号设置</a></li>
                        <li><a href="help.html">帮助</a></li>
                        <li><a href="logout.php">退出</a></li>
                    </ul>
                </div><!--userdata-->
            </div><!--userinfodrop-->
        </div><!--right-->
    </div><!--topheader-->
    
    
    <div class="header">
      <ul class="headermenu">
            <li class="current"><a href="elements.php"><span class="icon icon-flatscreen"></span>房屋信息管理</a></li>
            <li><a href="manageblog.php"><span class="icon icon-pencil"></span>用户管理</a></li>
            <li><a href="messages.php"><span class="icon icon-message"></span>新闻管理</a></li>
            <li><a href="reports.php"><span class="icon icon-chart"></span>其他管理</a></li>
        </ul>
    </div><!--header-->
    
    <div class="vernav2 iconmenu">
        <ul>
            <li><a href="elements.php" class="elements">出租信息管理</a></li>
            <li><a href="widgets.php" class="widgets">求租信息管理</a></li>
            <li><a href="calendar.php" class="calendar">出售信息管理</a></li>
            <li><a href="support.php" class="support">求售信息管理</a></li>
        </ul>
        <a class="togglemenu"></a>
        <br /><br />
    </div><!--leftmenu-->
        
<div class="centercontent">
    
        <div class="pageheader notab">
            <h1 class="pagetitle">求售信息修改</h1>
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
              <font color="#999999">尊 敬 的 客 户，为 了 能 让 信 息 正 常 流 通，请 如 实 填 好 打
              &quot;<font color="#FF6600">*</font>&quot; 号 的 部 分</font></font></span><br>
              <br>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan" height="30">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <div align="center"><strong><font color="#003D79">房屋求售信息修改</font></strong></div></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top" class="odd">&nbsp;标题：</td>
                        <td width="495"  class="odd"><input value="<?php echo $rs["head"]?>" type="text" name="head"></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" cl>
                  <td width="305" class="font"><span class="font">&nbsp;是否中介：</span>
                    <select name="zj" class="textinput" >
                      <option value=<?php echo $rs["zj"]?> selected><?php echo $rs["zj"]?></option>
                      <option value="非中介" selected>非中介</option>
            <option value="中介">中介</option>
                    </select></td>
                  <td width="272" height="30" ><span class="font">&nbsp;所在区域：</span>
                    <select name="qy" id="qy" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: 宋体; HEIGHT: 22px" >
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
                  <td height="30" colspan="2" class="font">&nbsp;要求地段：
                    <input value="<?php echo $rs["address"]?>" name="address" type="text" class="textinput"  size="50" maxlength="50">
                    　</td>
                </tr>
                <tr align="left" valign="middle">
                  <td width="305" height="30" class="font">&nbsp;户　　型：
                    <select
        name=hx style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: 宋体; HEIGHT: 22px" >
                <option value=<?php echo $rs["hx"]?> selected><?php echo $rs["hx"]?></option>
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
                <option value="其他">其他</option>
              </select> </td>
                  <td width="272" height="30" class="font" >&nbsp;房屋类型：
                    <select name=wylx class="textinput" >
                <option value=<?php echo $rs["wylx"]?> selected><?php echo $rs["wylx"]?></option>
                <option value="商品房">商品房</option>
                <option value="集资房">集资房</option>
                <option value="拆迁房">拆迁房</option>
                <option value="写字楼">写字楼</option>
                <option value="公房">公房</option>
                <option value="店面">店面</option>
                <option value="民房">民房</option>
                <option value="别墅">别墅</option>
              </select> </td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;要求面积：
                    <input value="<?php echo $rs["min_area"]?>" name="min_area" type="text" class="textinput" id="min_area" size="5" maxlength="20">
                    ㎡ ~
                    <input  value="<?php echo $rs["max_area"]?>" name="max_area" type="text" class="textinput" id="max_area" size="5" maxlength="20">
                    ㎡</td>
                  <td width="272" height="30" class="font" >&nbsp;建筑结构：
                    <select name="jg" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: 宋体; HEIGHT: 22px" class="textinput" >
                <option value="<?php echo $rs["jg"]?>" selected><?php echo $rs["jg"]?></option>
                <option value="板楼">板楼</option>
<option value="塔楼">塔楼</option>
<option value="板塔结合">板塔结合</option><option value="别墅">别墅</option>
                <option value="其他">其他</option>
              </select> </td>
                </tr>
                <tr align="left" valign="middle" >
                  <td width="305" height="30" class="font">&nbsp;装修程度：
                    <select name="zxcd" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: 宋体; HEIGHT: 22px" class="textinput">
                <option value=<?php echo $rs["zxcd"]?> selected><?php echo $rs["zxcd"]?></option>
                <option value="一般">一般</option>
                <option value="中档">中档</option>
                <option value="高档">高档</option>
                <option value="豪华">豪华</option>
                <option value="无装修">无装修</option>
                <option value="其他">其他</option>
              </select> </td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;所在楼层：</span>
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


                    </select>楼&nbsp;</td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;交易价格：
                    <input  value="<?php echo $rs["min_pay"]?>" name="min_pay" type="text" class="textinput" id="min_pay" size="5" maxlength="20" onchange="my()">
                    万元 ~
                    <input  value="<?php echo $rs["max_pay"]?>" name="max_pay" type="text" class="textinput" id="max_pay3" size="5" maxlength="20" >
                    万元　<font color="#FF6600">**</font> </td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;</span></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;配套设施：</td>
                        <td width="495"> <textarea name="pb" cols="70" rows="6" wrap="VIRTUAL" class="textinput"><?php echo $rs["pb"]?></textarea></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;联 系 人：
                    <input  value="<?php echo $rs["man"]?>" name="man" type="text" class="textinput" size="20" maxlength="50" >
                    　</td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;联系电话：</span>
                    <input  value="<?php echo $rs["tel"]?>" name="tel" type="text" class="textinput" size="20" maxlength="50">
                    　</td>
                </tr>
                <tr align="left" valign="middle">
                  <td width="305" height="30" class="font">&nbsp;<strong>E -mail</strong>：
                    <input  value="<?php echo $rs["email"]?>" name="email" type="text" class="textinput" size="20" maxlength="50" >
                    　</td>
                  <td width="272" height="30" class="font" >&nbsp;公车路线：
                    <input  value="<?php echo $rs["bus"]?>" name="bus" type="text" class="textinput" size="30" maxlength="50">
                  </td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td height="111" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;其它说明：</td>
                        <td width="495"><textarea name="house_ms" cols="70" rows="6" wrap="VIRTUAL" class="textinput" ><?php echo $rs["house_ms"]?></textarea></td>
                      </tr>
                      <input name="id" type="hidden" class="textinput2" id="accp_id" value="<?php echo $rs["id"]?>" size="5" readonly>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top" class="font">&nbsp;是否通过：</td>
                        <td width="495"><select name="pass" class="textinput" >
          <option value="否">否</option>
          <option value="是" selected>是</option>
        </select></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="28" colspan="2" class="font">
<div align="center">
                      <input type="submit" name="submit" value="提  交" class="btn btn-success">

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

        </div>
    </div><!-- centercontent -->
    
    
</div><!--bodywrapper-->

</body>
</html>

