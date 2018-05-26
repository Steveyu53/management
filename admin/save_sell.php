<?php
session_start();
require("../connection/conn.php");
date_default_timezone_set('Asia/Shanghai');
if($_SESSION["loginname"]=="")
{
echo "<SCRIPT language=JavaScript>alert('请先登录！');location.href='login.php';</SCRIPT>";
}
$user_id=$_SESSION["loginname"];
$bh="cz".date("ymdhis");
$date=date("Y-m-d H:i:s");
$filename=$_FILES['file']['name'];
$path='../picture/'.$filename;
if (move_uploaded_file($_FILES['file']['tmp_name'],$path)) {
	# code...
	$sql="INSERT INTO house_sell (bh ,qy ,house_name ,address ,hx ,wylx ,jz_area ,sy_area ,jg ,jg_time ,zxcd ,do_floor ,sum_floor ,pay ,pb ,
tel ,man ,email ,house_ms ,date ,bus ,pass ,zj ,user_id ,click,path,head) VALUES ('$bh','$qy','$house_name','$address','$hx','$wylx','$jz_area','$sy_area','$jg','$jg_time','$zxcd','$do_floor','$sum_floor','$pay','$pb','$tel','$man','$email','$house_ms','$date','$bus','否','$zj','$user_id',1,'$path','$head')";
$res=mysql_query($sql);
if($res)
{
	echo "<SCRIPT language=JavaScript>alert('发布成功！');location.href='../dj_hack.php';</SCRIPT>";
}
else
echo "发布失败了";
}else{
	echo "<script>alert('上传图片失败！');window.location.href='../login.php';</script>" ;
}

?>