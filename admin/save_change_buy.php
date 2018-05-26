<?php require("../connection/conn.php");
$date=date("Y-m-d");
$sql="update house_buy set head='$head',qy='$qy',address='$address',hx='$hx',wylx='$wylx',min_area='$min_area',max_area='$max_area',jg='$jg',zxcd='$zxcd',do_floor='$do_floor',min_pay='$min_pay',max_pay='$max_pay',pb='$pb',tel='$tel',man='$man',email='$email',house_ms='$house_ms',date='$date',bus='$bus',pass='$pass',zj='$zj' where id=$id";
 $res=mysql_query($sql);
?>


<SCRIPT language=JavaScript>alert("ÐÞ¸Ä³É¹¦£¡");location.href='support.php';</SCRIPT>


