
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="margin-top: 30px;" >
  <tr align="left" valign="top">

  <td width="1" bgcolor="#CCCCCC"></td>
    <td>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" class="tables" >
        <form enctype="multipart/form-data" name="form2" method="post" action="changemyhire.php" onsubmit="return checkdata()">
          <tr>
            <td align="center" valign="top" class="downkuan" >
              <span class="font"><font color="#666666"><br>
              <font color="#999999">尊 敬 的 客 户，为 了 能 让 信 息 正 常 流 通，请 如 实 填 好 打
              &quot;<font color="#FF6600">*</font>&quot; 号 的 部 分</font></font></span><br>
              <br>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan" height="30">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <div align="center"><strong><font color="#003D79">房屋求租信息修改</font></strong></div></td>
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
                      <option value="复式">复式</option>
                      <option value="其他">其他</option>
                    </select></td>
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
                    <input value="<?php echo $rs["max_area"]?>" name="max_area" type="text" class="textinput" id="max_area" size="5" maxlength="20">
                    ㎡</td>
                  <td width="272" height="30" class="font" >&nbsp;建筑结构：
                    <select name="jg" class="textinput" >
                      <option value="<?php echo $rs["jg"]?>" selected><?php echo $rs["jg"]?></option>
                      <option value="板楼">板楼</option>
                      <option value="塔楼">塔楼</option>
                      <option value="板塔结合">板塔结合</option>
                      <option value="别墅">别墅</option>
                    </select></td>
                </tr>
                <tr align="left" valign="middle" >
                  <td width="305" height="30" class="font">&nbsp;装修程度：
                    <select name="zxcd" class="textinput">
                      <option value="不限" selected>不限</option>
                      <option value="一般">一般</option>
                      <option value="中档">中档</option>
                      <option value="高档">高档</option>
                      <option value="豪华">豪华</option>
                      <option value="无装修">无装修</option>
                    </select></td>
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
          ?> </select>楼&nbsp;</td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;交易价格：
                    <input value="<?php echo $rs["min_pay"]?>" name="min_pay" type="text" class="textinput" id="min_pay" size="5" maxlength="20" onchange="my()">
                    元 ~
                    <input value="<?php echo $rs["max_pay"]?>" name="max_pay" type="text" class="textinput" id="max_pay3" size="5" maxlength="20" >
                    元　<font color="#FF6600">**</font> </td>
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
                <tr align="left" valign="middle" class="odd">
                  <td width="305" height="30" class="font">&nbsp;联 系 人：
                    <input value="<?php echo $rs["man"]?>" name="man" type="text" class="textinput" size="20" maxlength="50" >
                    　</td>
                  <td width="272" height="30" class="font" ><span class="font">&nbsp;联系电话：</span>
                    <input value="<?php echo $rs["tel"]?>" name="tel" type="text" class="textinput" size="20" maxlength="50">
                    　</td>
                </tr>
                <tr align="left" valign="middle">
                  <td width="305" height="30" class="font">&nbsp;<strong>E -mail</strong>：
                    <input value="<?php echo $rs["email"]?>" name="email" type="text" class="textinput" size="20" maxlength="50" >
                    　<font color="#FF6600">**</font> </td>
                  <td width="272" height="30" class="font" >&nbsp;公车路线：
                    <input value="<?php echo $rs["bus"]?>" name="bus" type="text" class="textinput" size="30" maxlength="50">
                  </td>
                </tr>
                <tr align="left" valign="middle" class="odd">
                  <td height="111" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;其它说明：</td>
                        <td width="495"><textarea name="house_ms" cols="70" rows="6" wrap="VIRTUAL" class="textinput" >暂无说明</textarea></td>
                      </tr>
                      <input name="id" type="hidden" class="textinput2" id="accp_id" value="<?php echo $rs["id"]?>" size="5" readonly>

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
