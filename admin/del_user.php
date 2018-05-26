<?php require("../connection/conn.php");

$sql="delete from  house_user where id=$id";
 $res=mysql_query($sql);
if($res)
{
	echo "<SCRIPT language=JavaScript>alert('É¾³ý³É¹¦£¡');location.href='manageblog.php';</SCRIPT>";
}
?>



