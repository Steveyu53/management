
<table width="978" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="margin-top: 30px;" >
  <tr align="left" valign="top">

  <td width="1" bgcolor="#CCCCCC"></td>
    <td>
      <table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" class="tables" >
        <form enctype="multipart/form-data" name="form2" method="post" action="changemysell.php" onsubmit="return checkdata()">
          <tr>
            <td align="center" valign="top" class="downkuan" >
              <span class="font"><font color="#666666"><br>
              <font color="#999999">�� �� �� �� ����Ϊ �� �� �� �� Ϣ �� �� �� ͨ���� �� ʵ �� �� ��
              &quot;<font color="#FF6600">*</font>&quot; �� �� �� ��</font></font></span><br>
              <br>
              <table width="99%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC" class="xu_kuan" height="30">
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <div align="center"><strong><font color="#003D79">���ݳ�����Ϣ�޸�</font></strong></div></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="30" align="left" valign="top">&nbsp;���⣺</td>
                        <td width="495" ><input value="<?php echo $rs["head"]?>" type="text" name="head"></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td width="277" class="font">&nbsp;С�����ƣ�
                    <input value="<?php echo $rs["house_name"]?>" name="house_name" type="text" class="textinput" size="20" maxlength="50">
                    </td>
                  <td width="266" height="30" ><span class="font">&nbsp;��������</span>
                    <select name="qy" id="qy" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: ����; HEIGHT: 22px" >
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
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;�ء���ַ��
                    <input value="<?php echo $rs["address"]?>" name="address" type="text" class="textinput"  size="30" maxlength="50">
                    <span class="font">&nbsp;</span> </td>
                  <td height="30" class="font"><span class="font">&nbsp;�Ƿ��н飺</span>
                    <select name="zj" class="textinput" >
    <option value="<?php echo $rs["zj"]?>" selected><?php echo $rs["zj"]?></option>
                <option value="���н�">���н�</option>
                <option value="�н�">�н�</option>
              </select> </td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;�������ͣ�
                    <select
        name=hx style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: ����; HEIGHT: 22px" >
                <option value=<?php echo $rs["hx"]?> selected><?php echo $rs["hx"]?></option>
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
                <option value="����">����</option>
              </select> </td>
                  <td height="30" class="font" >&nbsp;�������ͣ�
                    <select name=wylx class="textinput" >
                <option value=<?php echo $rs["wylx"]?> selected><?php echo $rs["wylx"]?></option>
                <option value="��Ʒ��">��Ʒ��</option>
                <option value="���ʷ�">���ʷ�</option>
                <option value="��Ǩ��">��Ǩ��</option>
                <option value="д��¥">д��¥</option>
                <option value="����">����</option>
                <option value="����">����</option>
                <option value="��">��</option>
                <option value="����">����</option>
              </select> </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;���������
                    <input value="<?php echo $rs["jz_area"]?>" name="jz_area" type="text" class="textinput" size="10" maxlength="20">
                    �O</td>
                  <td height="30" class="font" >&nbsp;�� �� �䣺
                    <input value="<?php echo $rs["sy_area"]?>" name="sy_area" type="text" class="textinput" size="10" maxlength="20">
                    �O </td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;�����ṹ��
                    <select name="jg" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: ����; HEIGHT: 22px" class="textinput" >
                <option value="<?php echo $rs["jg"]?>" selected><?php echo $rs["jg"]?></option>
                <option value="��¥">��¥</option>
<option value="��¥">��¥</option>
<option value="�������">�������</option><option value="����">����</option>
                <option value="����">����</option>
              </select> </td>
                  <td height="30" class="font" >&nbsp;����ʱ�䣺
                    <input value="<?php echo $rs["jg_time"]?>" name="jg_time" type="text" class="textinput" size="20" maxlength="20">
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;װ�޳̶ȣ�
                    <select name="zxcd" style="FONT-SIZE: 9pt; WIDTH: 90px; FONT-FAMILY: ����; HEIGHT: 22px" class="textinput">
                <option value=<?php echo $rs["zxcd"]?> selected><?php echo $rs["zxcd"]?></option>
                <option value="һ��">һ��</option>
                <option value="�е�">�е�</option>
                <option value="�ߵ�">�ߵ�</option>
                <option value="����">����</option>
                <option value="��װ��">��װ��</option>
                <option value="����">����</option>
              </select> </td>
                  <td height="30" class="font" >&nbsp;¥��������
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

              </select></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;���׼۸�
                    <input value="<?php echo $rs["pay"]?>" name="pay" type="text" class="textinput" size="10" maxlength="30">
                    ��Ԫ��<font color="#FF6600">**</font> </td>
                  <td height="30" class="font" ><span class="font">&nbsp;����¥�㣺</span>
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
              </select></td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="101" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;������ʩ��</td>
                        <td width="495"> <textarea name="pb" cols="70" rows="6" class="textinput"><?php echo $rs["pb"]?></textarea></td>
                      </tr>
                    </table></td>
                </tr>
                <tr align="left" valign="middle" class="odd" >
                  <td height="30" class="font">&nbsp;�� ϵ �ˣ�
                    <input value="<?php echo $rs["man"]?>" name="man" type="text" class="textinput" size="20" maxlength="50" >
                    ��</td>
                  <td height="30" class="font" ><span class="font">&nbsp;��ϵ�绰��</span>
                    <input value="<?php echo $rs["tel"]?>" name="tel" type="text" class="textinput" size="20" maxlength="50" >
                    ��</td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="30" class="font">&nbsp;<strong>E-mail</strong>��&nbsp;
                    <input value="<?php echo $rs["email"]?>" name="email" type="text" class="textinput" size="20" maxlength="50" >
                    ��<font color="#FF6600">**</font> </td>
                  <td height="30" class="font" >&nbsp;����·�ߣ�
                    <input value="<?php echo $rs["bus"]?>" name="bus" type="text" class="textinput" size="20" maxlength="50">
                  </td>
                </tr>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="111" colspan="2" class="font"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr class="odd" >
                        <td width="76" height="95" align="left" valign="top" class="font">&nbsp;��ʽ������</td>
                        <td width="495"> <textarea name="house_ms" cols="70" rows="6" wrap="VIRTUAL" class="textinput" ><?php echo $rs["house_ms"]?></textarea></td>
                      </tr>
                    </table></td>
                </tr>
                <input  name="id" type="hidden" class="textinput2" id="accp_id" value="<?php echo $rs["id"]?>" size="5" readonly>
                <tr align="left" valign="middle" bgcolor="#FFFFFF">
                  <td height="28" colspan="2" class="font">
                    <div align="center">
                      <input type="submit" name="submit" value="��  ��" class="btn btn-success">

                      <input type="reset" name="Submit4" value="��  ��" class="btn btn-info">
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
