
<FORM METHOD=POST NAME="form1">
<center>
   
    <input type="text" name="bh">
    <input type="submit" name="Submit" value="��ѯ">
    <br>
    <br>
     <a href="elements.php?pass=��" class="linkfont">���<font color="#FF0000">δͨ��</font>�ļ�¼</a>����<a href="elements.php?pass=��" class="linkfont">���<font color="#FF0000">��ͨ��</font>�ļ�¼</a>
  </center>
  <br>
  <table class="table" cellspacing="0" cellpadding="0" style="border:solid 1px ;background-color: white;">
    <?php
if($pass!="") $where=" and pass='$pass'";
if($bh!="") $where=" and bh='$bh'";
    if ($pass=="" and $bh=="")
	$strSql="select * from house_hack order by id desc";
	else
	$strSql="select * from house_hack where 1=1 $where order by id desc";



?>
    <tr>
      <th>ͨ��</th>
      <th>���</th>
      <th>��������</th>
      <th>С������</th>
      <th>���(�O)</th>
      <th>���(Ԫ)</th>
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
   <td><?php echo $rs["id"]?></td>
      <td><?php echo $rs["date"]?></td>
      <td><?php echo $rs["house_name"]?></td>
      <td><?php echo $rs["jz_area"]?></td>
      <td><?php echo $rs["pay"]?></td>
      <td><a href="del_hack.php?id=<?php echo $rs["id"]?>" class="linkfont">ɾ��</a></td>
      <td><a href="changehack.php?id=<?php echo $rs["id"]?>" class="linkfont" >�鿴���޸�</a></td>
    </tr>
    <?php
   }
	   ?>

  </table>
</FORM>
</body>
</html>
