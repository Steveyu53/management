<?php
session_start();
require("connection/conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
 <title>多个文件上传表单</title>
 <style type="text/css">
 input
 {
 background-color: yellow;
 border: 1px inset #CCCCCC;
 }
 </style>
</head>
<body>
 <form action="1.php" method="post" enctype="multipart/form-data">
 上传文件：<br><br>
 <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
 第一张图：<input type="file" name='myfile[]'><br><br>
 第二张图：<input type="file" name='myfile[]'><br><br>
 <input style="margin-left: 8%;" type="submit" value="上传">
 </form>
</body>
</html>

<?php
echo "<pre>";
echo "<hr/>";
//1.获取上传文件信息
$upfile = $_FILES["myfile"];
$typelist = array("image/jpeg","image/jpg","image/png","image/gif"); //定义允许的类型
$path="./uploads/"; //定义一个上传过后的目录
//重新组装上传文件的数据,以便依次上传
$uploadFiles = array();
foreach($upfile as $key =>$value) {
 foreach($value as $k => $v){
 $uploadFiles[$k][$key]=$v;
 }
}
//遍历上传
foreach($uploadFiles as $k => $v) {
 //2. 过滤上传文件的错误号
 if ($v['error'] > 0) {
 //获取错误信息
 switch ($v['error']) {
 case 1:
 $info = "上传的文件超过了 php.ini 中 upload_max_filesize 选项限制的值。";
 break;
 case 2:
 $info = "上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。";
 break;
 case 3:
 $info = "文件只有部分被上传。";
 break;
 case 4:
 $info = "没有文件被上传。 ";
 case 6:
 $info = "找不到临时文件夹。";
 break;
 case 7:
 $info = "文件写入失败";
 break;
 }
 die("上传文件{$k}错误，原因：" . $info);
 }
 //4. 类型过滤
 if (!in_array($v["type"], $typelist)) {
 die("上传文件{$k}类型非法！" . $v["type"]);
 }
 //5. 上传后的文件名定义(随机获取一个文件名（保持后缀名不变）)
 $fileinfo = pathinfo($v["name"]);//解析上传文件名字
 do{
 $newfile = date("Y-m-d,H-i-s") . rand(1000, 9999) . "." . $fileinfo["extension"];
 } while (file_exists($path . $newfile));
 //6. 执行文件上传
 //判断是否是一个上传的文件
 if (is_uploaded_file($v["tmp_name"])) {
 //执行文件上传（移动上传文件）
 if (move_uploaded_file($v["tmp_name"], $path . $newfile)) {
 //echo "文件{$K}上传成功！";
 //执行写入数据库操作
 $filepath = $path.$newfile;
 $name = $v['name'];
 $size = $v['size'];
 $sql = "insert into img(id,name,size,pic) values(null,'$name','$size','$filepath')";
 $res=mysql_query($sql);
if($res)
{
	echo "<SCRIPT language=JavaScript>alert('发布成功！');</SCRIPT>";
}
 } else {
 die("上传文件{$k}失败");
 }
 } else {
 die("不是一个上传文件！");
 }
}
?>