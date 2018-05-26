<FORM METHOD=POST NAME="form1">
<center>
    查询用户名
    <input type="text" name="username">
    <input type="submit" name="Submit" value="查询">
    <br>
  </center>
  <br>
  <table class="table" cellspacing="0" cellpadding="0" style="border:solid 1px ;background-color: white;">
    <?php

    if ($username=="")
	$strSql="select * from house_user order by id desc";
	else
	$strSql="select * from house_user where username='$username' order by id desc";

?>
    <tr>
    <th>ID</th>
      <th>用户名</th>
	        <th>真实姓名</th>
	        <th>联系电话</th>
      <th>删除</th>
    </tr>
   <?php
$res=mysql_query($strSql);
while($rs=mysql_fetch_array($res))
{
   ?>
    <tr>
      <td><?php echo $rs["id"]?></td>
      <td><?php echo $rs["username"]?></td>
	        <td><?php echo $rs["name"]?></td>
<td><?php echo $rs["tel"]?></td>
      <td><a href="del_user.php?id=<?php echo $rs["id"]?>" class="linkfont">删除</a></td>
    </tr>
    <?php
	}
	?>

  </table>
</FORM>
</body>
</html>
