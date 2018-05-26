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
    echo "<script>alert('两次密码填写不一致，请重新填写');window.location.href='reg2.php';</script>";
  }elseif (!(strtolower($_REQUEST['authcode'])==$_SESSION['authcode'])) {
    # code...
    echo "<script>alert('请重新输入验证码');window.location.href='reg2.php';</script>";
  }elseif (!preg_match("/^1[34578]{1}\d{9}$/",$tel)) {
    # code...
    echo "<script>alert('请重新输入电话号码');window.location.href='reg2.php';</script>";
  }else{
    $res=mysql_query("select id from house_user where username='{$username}'");
    $res=mysql_fetch_array($res);
    if($res['id']){
        echo "<script>alert('用户名已经被注册，请更换用户名');window.location.href='reg2.php';</script>";
        exit;
    }else{
        $sql = "insert into house_user(username,password,tel,sex)values('{$username}','{$password}',
        '{$tel}','{$sex}')";
        $res = mysql_query($sql);
        if ($res) {
            
                echo "<script>alert('注册成功！'); window.location.href='login.php';</script>";
            }
        else {
            echo "<script>alert('注册失败！');window.location.href='reg2.php';</script>";
        }
    }
  }
}else{
  echo "<script>alert('请输入验证码！');window.location.href='reg2.php';</script>";
}
?>





