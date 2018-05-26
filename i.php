<?php
session_start();
require("connection/conn.php"); ?>
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr align="left" valign="top">
    <td>
    <div style="border: 1px solid #8E8E8E;">
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
          <td><br>
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <form action="hack.php" method=post name="search" onSubmit="return checksearch()">
                <tr align="left" valign="middle">
                  <td width="163" height="25" class="font"><font color="#0066CC">区域：</font>
                    <select name="search_qy" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: 宋体; HEIGHT: 22px" >
                      <option value="" selected>-请选择-</option>
                      <?php

  $Sql="select * from house_area order by id";
  $res=mysql_query($Sql);
while($rs0=mysql_fetch_array($res))
echo " <option value=$rs0[area_name]>$rs0[area_name]</option>";
  ?>


                    </select> </td>
                  <td width="163" class="font"><font color="#0066CC">房屋类型：</font>
                    <select name=search_lx class="textinput">
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
                </tr>
                <tr align="left" valign="middle">
                  <td height="25" class="font"><font color="#0066CC">户型：</font>
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
                  <td height="25" class="font"><font color="#0066CC">是否中介：</font>
                    <select name="search_zj" class="textinput">
                      <option value="" selected>-请选择-</option>
                      <option value="非中介">非中介</option>
                      <option value="中介">中介</option>
                    </select></td>
                </tr>
                <tr align="left" valign="middle">
                  <td height="25" class="font"><font color="#0066CC">面积：</font>
                    <input name="search_mj_min" type="text" class="textinput" id="min" size="1">
                    ~
                    <input name="search_mj_max" type="text" class="textinput" id="max" size="1">
                    ㎡</td>
                  <td height="25" class="font"><font color="#0066CC">价格：</font>
                    <input name="search_jg_min" type="text" class="textinput" id="min23" size="5">
                    ~
                    <input name="search_jg_max" type="text" class="textinput" id="max23" size="5">
                    元</td>
                </tr>
                <tr align="center" valign="bottom" >
                  <td height="34" colspan="2" class="font"><input name="imageField" type="image" src="images/search.gif" width="60" height="23" border="0">
                  </td>
                </tr>
              </form>
            </table> </td>
          <td width="25" align="right"></td>
        </tr>
      </table>
      </div>