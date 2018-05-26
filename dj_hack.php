<?php require("connection/conn.php"); ?>
<html>
<head>
<title>房屋出租信息登记---房屋销售及租赁系统</title>
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
        <form enctype="multipart/form-data" name="form2" method="post" action="admin/save_hack.php" onsubmit="return checkdata()">
          <tr>
            <td align="center" valign="top" class="downkuan" >
              <span class="font"><font color="#666666"><br>
              <font color="#999999">尊 敬 的 客 户，为 了 能 让 信 息 正 常 流 通，请 如 实 填 好 打
              &quot;<font color="#FF6600">*</font>&quot; 号 的 部 分</font></font></span><br>
              <br>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan" height="30">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <div align="center"><strong><font color="#003D79">房屋出租信息登记</font></strong></div></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top">&nbsp;标题：</td>
                        <td width="495" ><input type="text" name="head"></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td width="277" class="font">&nbsp;小区名称：
                    <input name="house_name" type="text" class="textinput" size="20" maxlength="50">
                    <font color="#FF6600">**</font> </td>
                  <td width="266" height="30" ><span class="font">&nbsp;所在区域：</span>
                    <select name="qy" id="qy" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: 宋体; HEIGHT: 22px" >
                      <option value="" selected>请选择区域</option>
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
                    </select> <span class="font"><font color="#FF6600">**</font></span>
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;地　　址：
                    <input name="address" type="text" class="textinput"  size="30" maxlength="50">
                    <span class="font">&nbsp;</span> </td>
                  <td height="30" class="font"><span class="font">&nbsp;是否中介：</span>
                    <select name="zj" class="textinput" >
                      <option value="非中介" selected>非中介</option>
					  <option value="中介">中介</option>
                    </select></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;户　　型：
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
                  <td height="30" class="font" >&nbsp;房屋类型：
                    <select name=wylx class="textinput" >
                      <option value="" selected>请选择房屋类型</option>
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
                  <td height="30" class="font">&nbsp;建筑面积：
                    <input name="jz_area" type="text" class="textinput" size="10" maxlength="20">
                    ㎡　　<font color="#FF6600">**</font> </td>
                  <td height="30" class="font" >&nbsp;杂 物 间：
                    <input name="sy_area" type="text" class="textinput" size="10" maxlength="20">
                    ㎡ </td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;建筑结构：
                    <select name="jg" class="textinput" >
                      <option value="" selected>请选择建筑结构</option>
                      <option value="板楼">板楼</option>
                      <option value="塔楼">塔楼</option>
                      <option value="板塔结合">板塔结合</option>
                      <option value="别墅">别墅</option>
                    </select>
                    　<font color="#FF6600">**</font> </td>
                  <td height="30" class="font" >&nbsp;竣工时间：
                    <input name="jg_time" type="text" class="textinput" size="20" maxlength="20">
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;装修程度：
                    <select name="zxcd" class="textinput">
                      <option value="" selected>请选择装修程度</option>
                      <option value="一般">一般</option>
                      <option value="中档">中档</option>
                      <option value="高档">高档</option>
                      <option value="豪华">豪华</option>
                      <option value="无装修">无装修</option>
                    </select></td>
                  <td height="30" class="font" >&nbsp;楼层总数：
                    <select name="sum_floor" class="textinput">
                <?php
				for($i=0;$i<60;$i++)
				{
				if ($i==$rs["sum_floor"])
					{
				?>
				<option value=<?php echo $rs["sum_floor"]?> selected><?php echo $rs["sum_floor"]?></option>
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

              </select> <font color="#FF6600">**</font> </td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;交易价格：
                    <input name="pay" type="text" class="textinput" size="10" maxlength="30">
                    元/月　<font color="#FF6600">**</font> </td>
                  <td height="30" class="font" ><span class="font">&nbsp;所在楼层：</span>
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
					?> </select><font color="#FF6600">**</font> </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;配套设施：</td>
                        <td width="495"> <textarea name="pb" cols="70" rows="6" class="textinput">无配套设施</textarea></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;联 系 人：
                    <input name="man" type="text" class="textinput" size="20" maxlength="50" >
                    　<font color="#FF6600">**</font> </td>
                  <td height="30" class="font" ><span class="font">&nbsp;联系电话：</span>
                    <input name="tel" type="text" class="textinput" size="20" maxlength="50" >
                    　<font color="#FF6600">**</font> </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;<strong>E-mail</strong>：&nbsp;
                    <input name="email" type="text" class="textinput" size="20" maxlength="50" >
                    　<font color="#FF6600">**</font> </td>
                  <td height="30" class="font" >&nbsp;公车路线：
                    <input name="bus" type="text" class="textinput" size="20" maxlength="50">
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="111" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr class="odd" >
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;房式描述：</td>
                        <td width="495"> <textarea name="house_ms" cols="70" rows="6" wrap="VIRTUAL" class="textinput" >暂无描述</textarea></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;上传图片：</td>
                        <td width="495"><input type="file" name="file" /></td>
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
