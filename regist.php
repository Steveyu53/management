<?php
require("connection/conn.php");

if (isset($_POST["submit"])&&isset($_REQUEST['authcode'])) {
  # code...
  session_start();
  $username=$_POST["username"];
  $password=$_POST["password"];
  $tel=$_POST["tel"];
  $sex=$_POST["sex"];
  $qr_password=$_POST["qr_password"];
  $date=date("Y-m-d H:i:s");

  if ($password!=$qr_password) {
    # code...
    echo "<script>alert('����������д��һ�£���������д');window.location.href='reg2.php';</script>";
  }elseif (!(strtolower($_REQUEST['authcode'])==$_SESSION['authcode'])) {
    # code...
    echo "<script>alert('������������֤��');window.location.href='reg2.php';</script>";
  }elseif (!preg_match("/^1[34578]{1}\d{9}$/",$tel)) {
    # code...
    echo "<script>alert('����������绰����');window.location.href='reg2.php';</script>";
  }else{
    $res=mysql_query("select id from house_user where username='{$username}'");
    $res=mysql_fetch_array($res);
    if($res['id']){
        echo "<script>alert('�û����Ѿ���ע�ᣬ������û���');window.location.href='reg2.php';</script>";
        exit;
    }else{
        $sql = "insert into house_user(username,password,tel,sex)values('{$username}','{$password}',
        '{$tel}','{$sex}')";
        $res = mysql_query($sql);
        if ($res) {
            
                echo "<script>alert('ע��ɹ���'); window.location.href='login.php';</script>";
            }
        else {
            echo "<script>alert('ע��ʧ�ܣ�');window.location.href='reg2.php';</script>";
        }
    }
  }
}else{
  echo "<script>alert('��������֤�룡');window.location.href='reg2.php';</script>";
}
?>





