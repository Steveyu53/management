<?php
session_start();
require("connection/conn.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
 <title>����ļ��ϴ���</title>
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
 �ϴ��ļ���<br><br>
 <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
 ��һ��ͼ��<input type="file" name='myfile[]'><br><br>
 �ڶ���ͼ��<input type="file" name='myfile[]'><br><br>
 <input style="margin-left: 8%;" type="submit" value="�ϴ�">
 </form>
</body>
</html>

<?php
echo "<pre>";
echo "<hr/>";
//1.��ȡ�ϴ��ļ���Ϣ
$upfile = $_FILES["myfile"];
$typelist = array("image/jpeg","image/jpg","image/png","image/gif"); //�������������
$path="./uploads/"; //����һ���ϴ������Ŀ¼
//������װ�ϴ��ļ�������,�Ա������ϴ�
$uploadFiles = array();
foreach($upfile as $key =>$value) {
 foreach($value as $k => $v){
 $uploadFiles[$k][$key]=$v;
 }
}
//�����ϴ�
foreach($uploadFiles as $k => $v) {
 //2. �����ϴ��ļ��Ĵ����
 if ($v['error'] > 0) {
 //��ȡ������Ϣ
 switch ($v['error']) {
 case 1:
 $info = "�ϴ����ļ������� php.ini �� upload_max_filesize ѡ�����Ƶ�ֵ��";
 break;
 case 2:
 $info = "�ϴ��ļ��Ĵ�С������ HTML ���� MAX_FILE_SIZE ѡ��ָ����ֵ��";
 break;
 case 3:
 $info = "�ļ�ֻ�в��ֱ��ϴ���";
 break;
 case 4:
 $info = "û���ļ����ϴ��� ";
 case 6:
 $info = "�Ҳ�����ʱ�ļ��С�";
 break;
 case 7:
 $info = "�ļ�д��ʧ��";
 break;
 }
 die("�ϴ��ļ�{$k}����ԭ��" . $info);
 }
 //4. ���͹���
 if (!in_array($v["type"], $typelist)) {
 die("�ϴ��ļ�{$k}���ͷǷ���" . $v["type"]);
 }
 //5. �ϴ�����ļ�������(�����ȡһ���ļ��������ֺ�׺�����䣩)
 $fileinfo = pathinfo($v["name"]);//�����ϴ��ļ�����
 do{
 $newfile = date("Y-m-d,H-i-s") . rand(1000, 9999) . "." . $fileinfo["extension"];
 } while (file_exists($path . $newfile));
 //6. ִ���ļ��ϴ�
 //�ж��Ƿ���һ���ϴ����ļ�
 if (is_uploaded_file($v["tmp_name"])) {
 //ִ���ļ��ϴ����ƶ��ϴ��ļ���
 if (move_uploaded_file($v["tmp_name"], $path . $newfile)) {
 //echo "�ļ�{$K}�ϴ��ɹ���";
 //ִ��д�����ݿ����
 $filepath = $path.$newfile;
 $name = $v['name'];
 $size = $v['size'];
 $sql = "insert into img(id,name,size,pic) values(null,'$name','$size','$filepath')";
 $res=mysql_query($sql);
if($res)
{
	echo "<SCRIPT language=JavaScript>alert('�����ɹ���');</SCRIPT>";
}
 } else {
 die("�ϴ��ļ�{$k}ʧ��");
 }
 } else {
 die("����һ���ϴ��ļ���");
 }
}
?>