<?php
session_start();
require("../connection/conn.php");
date_default_timezone_set('Asia/Shanghai');
if($_SESSION["loginname"]=="")
{
echo "<SCRIPT language=JavaScript>alert('���ȵ�¼��');location.href='login.php';</SCRIPT>";
}
$user_id=$_SESSION["loginname"];
$bh="cz".date("ymdhis");
$date=date("Y-m-d H:i:s");
$filename=$_FILES['file']['name'];
$path='../picture/'.$filename;
if (move_uploaded_file($_FILES['file']['tmp_name'],$path)) {
	# code...
	$sql="INSERT INTO house_sell (bh ,qy ,house_name ,address ,hx ,wylx ,jz_area ,sy_area ,jg ,jg_time ,zxcd ,do_floor ,sum_floor ,pay ,pb ,
tel ,man ,email ,house_ms ,date ,bus ,pass ,zj ,user_id ,click,path,head) VALUES ('$bh','$qy','$house_name','$address','$hx','$wylx','$jz_area','$sy_area','$jg','$jg_time','$zxcd','$do_floor','$sum_floor','$pay','$pb','$tel','$man','$email','$house_ms','$date','$bus','��','$zj','$user_id',1,'$path','$head')";
$res=mysql_query($sql);
if($res)
{
	echo "<SCRIPT language=JavaScript>alert('�����ɹ���');location.href='../dj_hack.php';</SCRIPT>";
}
else
echo "����ʧ����";
}else{
	echo "<script>alert('�ϴ�ͼƬʧ�ܣ�');window.location.href='../login.php';</script>" ;
}

?>