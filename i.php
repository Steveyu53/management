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
                  <td width="163" height="25" class="font"><font color="#0066CC">����</font>
                    <select name="search_qy" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: ����; HEIGHT: 22px" >
                      <option value="" selected>-��ѡ��-</option>
                      <?php

  $Sql="select * from house_area order by id";
  $res=mysql_query($Sql);
while($rs0=mysql_fetch_array($res))
echo " <option value=$rs0[area_name]>$rs0[area_name]</option>";
  ?>


                    </select> </td>
                  <td width="163" class="font"><font color="#0066CC">�������ͣ�</font>
                    <select name=search_lx class="textinput">
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
                </tr>
                <tr align="left" valign="middle">
                  <td height="25" class="font"><font color="#0066CC">���ͣ�</font>
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
                  <td height="25" class="font"><font color="#0066CC">�Ƿ��н飺</font>
                    <select name="search_zj" class="textinput">
                      <option value="" selected>-��ѡ��-</option>
                      <option value="���н�">���н�</option>
                      <option value="�н�">�н�</option>
                    </select></td>
                </tr>
                <tr align="left" valign="middle">
                  <td height="25" class="font"><font color="#0066CC">�����</font>
                    <input name="search_mj_min" type="text" class="textinput" id="min" size="1">
                    ~
                    <input name="search_mj_max" type="text" class="textinput" id="max" size="1">
                    �O</td>
                  <td height="25" class="font"><font color="#0066CC">�۸�</font>
                    <input name="search_jg_min" type="text" class="textinput" id="min23" size="5">
                    ~
                    <input name="search_jg_max" type="text" class="textinput" id="max23" size="5">
                    Ԫ</td>
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