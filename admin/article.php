<?php
require("../connection/conn.php"); 
date_default_timezone_set('Asia/Shanghai');



if (isset($_POST["submit"]) && ($_POST["submit"] == "发布文章")) {
	session_start();
  $title=$_POST["title"];
  $content=$_POST["content"];
  $date=date("Y-m-d H:i:s");
  $subject=$_POST["subject"];
  $from=$_POST["from"];
  $filename=$_FILES['file']['name'];

  $path='../newspic/'.$filename;
  if ($title=="" || $content=="") {
  	# code...
  	echo "<script>alert('请填写完整信息！');window.location.href='Addbroadcast.php';</script>" ;
  }else{
    if(move_uploaded_file($_FILES['file']['tmp_name'],$path)){
      $sql="insert into house_article(title,content,date,photopath,flag,from) values('$title','$content','$date','$path','$subject','$from')";
    $result=mysql_query($sql);
    if ($result) {
      # code...
      echo "<script>alert('发布新闻成功！');window.location.href='addarticle.php';</script>" ;
    }else{
      echo "<script>alert('发布新闻失败！');window.location.href='addarticle.php';</script>" ;
    }

    }else{
      echo "<script>alert('上传图片失败！');window.location.href='Addbroadcast.php';</script>" ;
    }

  }
}

?>
    