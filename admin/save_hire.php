<?php
session_start();
require("../connection/conn.php");
if($_SESSION["loginname"]=="")
{
echo "<SCRIPT language=JavaScript>alert('请先登录！');location.href='login.php';</SCRIPT>";
}
$user_id=$_SESSION["loginname"];
$bh="qz".date("ymdhis");
$date=date("Y-m-d");
$sql="INSERT INTO house_hire (bh ,qy ,address ,hx ,wylx ,min_area ,max_area ,jg ,zxcd ,do_floor ,min_pay ,max_pay ,pb ,tel ,man ,email ,house_ms ,date ,bus ,pass ,zj ,user_id ,click,head  ) VALUES ('$bh','$qy','$address','$hx','$wylx','$min_area','$max_area','$jg','$zxcd','$do_floor','$min_pay','$max_pay','$pb','$tel','$man','$email','$house_ms','$date','$bus','否','$zj','$user_id',1,'$head')";
$res=mysql_query($sql);
if($res)
{
	echo "<SCRIPT language=JavaScript>alert('发布成功！');location.href='../dj_hire.php';</SCRIPT>";
}
else
echo "发布失败了";
?>