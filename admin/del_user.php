<?php require("../connection/conn.php");

$sql="delete from  house_user where id=$id";
 $res=mysql_query($sql);
if($res)
{
	echo "<SCRIPT language=JavaScript>alert('ɾ���ɹ���');location.href='manageblog.php';</SCRIPT>";
}
?>



