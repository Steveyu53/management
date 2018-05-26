<?php
session_start();
require("./connection/conn.php"); ?>
<html>
<head>
<title>房屋求购信息登记---房屋销售及租赁系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link rel="stylesheet" href="css.css" type="text/css">
</head>
<script language="JavaScript" src="share/nei_fc.js"></script>
<script language="JavaScript">
<!--
  function checkdata()
  {
    if(!CheckIsNull(form2.address,"请输入'要求地段'！")) return false;
    if(!CheckIsNull(form2.hx,"请选择户型！")) return false;
    if(!CheckIsNull(form2.min_area,"请输入要求面积！")) return false;
    if(!CheckIsNull(form2.max_area,"请输入要求面积！")) return false;
    if(!CheckIsNull(form2.min_pay,"请输入交易价格！也可输入'面议'!")) return false;
    if(!CheckIsNull(form2.max_pay,"请输入交易价格！也可输入'面议'!")) return false;

    if(!CheckIsNull(form2.man,"请输入联系人！")) return false;
    if(!CheckIsNull(form2.tel,"请输入联系电话！")) return false;
    if(!CheckIsNull(form2.email,"请输入EMAIL！")) return false;
    if(!CheckIsNumeric(form2.min_area,"请在'面积'中输入数值！")) return false;
        if(!CheckIsNumeric(form2.max_area,"请在'面积'中输入数值！")) return false;
  }

//-->
</script>
<SCRIPT LANGUAGE=vbscript>
<!--
Sub my()
if document.form2.min_pay.value="面议" then
   document.form2.max_pay.value="面议"
end if
End Sub
-->
</SCRIPT>
<body bgcolor="#CCCCCC" leftmargin="0" topmargin="0" >

<?php require ("top.php"); ?>
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr align="left" valign="top">

  <td width="1" bgcolor="#CCCCCC"></td>
    <td>
      <table border="0" cellspacing="0" cellpadding="0">
        <form name="form2" method="post" action="admin/save_buy.php" onsubmit="return checkdata()">
          <tr>
            <td align="center" valign="top" class="downkuan" >
              <span class="font"><font color="#666666"><br>
              <font color="#999999">尊 敬 的 客 户，为 了 能 让 信 息 正 常 流 通，请 如 实 填 好 打
              &quot;<font color="#FF6600">*</font>&quot; 号 的 部 分</font></font></span><br>
              <br>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <div align="center"><strong><font color="#FF6600">房屋求购信息登记</font></strong></div></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td width="305" class="font"><span class="font">&nbsp;是否中介：</span>
                    <select name="zj" class="textinput" >
                      <option value="非中介" selected>非中介</option>
                    </select> </td>
                  <td width="272" height="30" ><span class="font">&nbsp;所在区域：</span>
                    <select name="qy" id="qy" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: 宋体; HEIGHT: 22px" >
                      <option value="" selected>请选择区域</option>
                     <?php

  $Sql="select * from house_area order by id";
  $res=mysql_query($Sql);
while($rs0=mysql_fetch_array($res))
echo " <option value=$rs0[area_name]>$rs0[area_name]</option>";
  ?>
                    </select> </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font">&nbsp;要求地段：
                    <input name="address" type="text" class="textinput"  size="50" maxlength="50">
                    　<font color="#FF6600">**</font></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td width="305" height="30" class="font">&nbsp;户　　型：
                    <select
        name=hx style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: 宋体; HEIGHT: 22px" >
                      <option value="" selected>请选择户型</option>
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
                    </select>
                    　<font color="#FF6600">**</font> </td>
                  <td width="272" height="30" class="font" >&nbsp;房屋类型：
                    <select name=wylx class="textinput" >
                      <option value="不限" selected>不限</option>
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
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td width="305" height="30" class="font">&nbsp;要求面积：
                    <input name="min_area" type="text" class="textinput" id="min_area" size="5" maxlength="20">
                    ㎡ ~
                    <input name="max_area" type="text" class="textinput" id="max_area" size="5" maxlength="20">
                    ㎡　<font color="#FF6600">**</font> </td>
                  <td width="272" height="30" class="font" >&nbsp;建筑结构：
                    <select name="jg" class="textinput" >
                      <option value="不限" selected>不限</option>
                      <option value="板楼">板楼</option>
                      <option value="塔楼">塔楼</option>
                      <option value="板塔结合">板塔结合</option>
                      <option value="别墅">别墅</option>
                    </select> </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td width="305" height="30" class="font">&nbsp;装修程度：
                    <select name="zxcd" class="textinput">
                      <option value="不限" selected>不限</option>
                      <option value="一般">一般</option>
                      <option value="中档">中档</option>
                      <option value="高档">高档</option>
                      <option value="豪华">豪华</option>
                      <option value="无装修">无装修</option>
                    </select> </td>
                  <td width="272" height="30" class="font" >&nbsp;楼　　层：
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
                    楼&nbsp;</td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td width="305" height="30" class="font">&nbsp;交易价格：
                    <input name="min_pay" type="text" class="textinput" id="min_pay" size="5" maxlength="20" onchange="my()">
                    万 ~
                    <input name="max_pay" type="text" class="textinput" id="max_pay3" size="5" maxlength="20" >
                    万　<font color="#FF6600">**</font> </td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;</span></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;配套设施：</td>
                        <td width="495"> <textarea name="pb" cols="70" rows="6" wrap="VIRTUAL" class="textinput">不限</textarea></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td width="305" height="30" class="font">&nbsp;联 系 人：
                    <input name="man" type="text" class="textinput" size="20" maxlength="50" >
                    　<font color="#FF6600">**</font> </td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;联系电话：</span>
                    <input name="tel" type="text" class="textinput" size="20" maxlength="50" >
                    　<font color="#FF6600">**</font> </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td width="305" height="30" class="font">&nbsp;<strong>E -mail</strong>：
                    <input name="email" type="text" class="textinput" size="20" maxlength="50" >
                    　<font color="#FF6600">**</font> </td>
                  <td width="272" height="30" class="font" >&nbsp;公车路线：
                    <input name="bus" type="text" class="textinput" size="30" maxlength="50">
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="111" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;其它说明：</td>
                        <td width="495"> <textarea name="house_ms" cols="70" rows="6" wrap="VIRTUAL" class="textinput" >暂无说明</textarea>
                        </td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="28" colspan="2" class="font">
<div align="center">
                      <input type="submit" name="Submit42" value="提  交" class="textbotton">

                      <input type="reset" name="Submit4" value="重  置" class="textbotton">
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