<FORM METHOD=POST NAME="form1">
<center>
<input type="text" name="bh">
    <input type="submit" name="Submit" value="��ѯ">
    <br>
    <br>
    <a href="view_buy.php?pass=��" class="linkfont">���<font color="#FF0000">δͨ��</font>�ļ�¼</a>����<a href="view_buy.php?pass=��" class="linkfont">���<font color="#FF0000">��ͨ��</font>�ļ�¼</a>
    
  </center>
  <br>
  <table class="table" cellspacing="0" cellpadding="0" style="border:solid 1px ;background-color: white;">
   <?php

if($pass!="") $where=" and pass='$pass'";
if($bh!="") $where=" and bh='$bh'";
    if ($pass=="" and $bh=="")
	$strSql="select * from house_buy order by id desc";
	else
	$strSql="select * from house_buy where 1=1 $where order by id desc";



?>

    <tr>
      <th>ͨ��</th>
      <th>��������</th>
      <th>���</th>
      <th>��ַ</th>
      <th>���(�O)</th>
      <th>�۸�(��)</th>
      <th>ɾ��</th>
      <th>��ϸ����</th>
    </tr>
    <?php
   $res=mysql_query($strSql);
   while($rs=mysql_fetch_array($res))
   {
   ?>
    <tr>
      <td><?php echo $rs["pass"]?></td>
      <td><?php echo $rs["date"]?></td>
      <td><?php echo $rs["bh"]?></td>
      <td><?php echo $rs["address"]?></td>
      <td><?php echo $rs["min_area"]?>~<?php echo $rs["max_area"]?></td>
      <td><?php echo $rs["min_pay"]?>~<?php echo $rs["max_pay"]?></td>
      <td><a href="del_buy.php?id=<?php echo $rs["id"]?>" class="linkfont">ɾ��</a></td>
      <td><a href="changebuy.php?id=<?php echo $rs["id"]?>" class="linkfont" >�鿴���޸�</a></td>
    </tr>
  <?php
  }
  ?>

  </table>
</FORM>
</body>
</html>
