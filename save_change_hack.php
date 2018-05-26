<?php require("connection/conn.php");

$sql="update house_hack set qy='$qy',house_name='$house_name',address='$address',hx='$hx',wylx='$wylx',jz_area='$jz_area',sy_area='$sy_area',jg='$jg',jg_time='$jg_time',zxcd='$zxcd',do_floor='$do_floor',sum_floor='$sum_floor',pay='$pay',pb='$pb',tel='$tel',man='$man',email='$email',house_ms='$house_ms',date='$date',bus='$bus',pass='$pass',zj='$zj' where id=$id";
 $res=mysql_query($sql);
?>


<SCRIPT language=JavaScript>alert("ÐÞ¸Ä³É¹¦£¡");location.href='view_sell.php';</SCRIPT>
