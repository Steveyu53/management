<?php require("../connection/conn.php");

$sql="delete from  admin where user_id=$id";
 $res=mysql_query($sql);
if($res)
{
	echo "<SCRIPT language=JavaScript>alert('É¾³ý³É¹¦£¡');location.href='newpost.php';</SCRIPT>";
}
?>



