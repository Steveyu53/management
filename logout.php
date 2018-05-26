<?php
session_start();
session_destroy();
echo "<SCRIPT language=JavaScript>location.href='login.php';</SCRIPT>";
?>