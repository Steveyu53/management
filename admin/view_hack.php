
<FORM METHOD=POST NAME="form1">
<center>
   
    <input type="text" name="bh">
    <input type="submit" name="Submit" value="查询">
    <br>
    <br>
     <a href="elements.php?pass=否" class="linkfont">浏览<font color="#FF0000">未通过</font>的记录</a>　　<a href="elements.php?pass=是" class="linkfont">浏览<font color="#FF0000">已通过</font>的记录</a>
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
      <th>通过</th>
      <th>编号</th>
      <th>发布日期</th>
      <th>小区名称</th>
      <th>面积(㎡)</th>
      <th>租金(元)</th>
      <th>删除</th>
      <th>详细资料</th>
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
      <td><a href="del_hack.php?id=<?php echo $rs["id"]?>" class="linkfont">删除</a></td>
      <td><a href="changehack.php?id=<?php echo $rs["id"]?>" class="linkfont" >查看或修改</a></td>
    </tr>
    <?php
   }
	   ?>

  </table>
</FORM>
</body>
</html>
