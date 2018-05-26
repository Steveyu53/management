<?php
error_reporting(E_ALL ^ E_NOTICE);//报错级别设置
function mysql_Condb()
{
$mysql_server_name='localhost'; //数据库服务器
$mysql_username='root'; //数据库用户名
$mysql_password='root'; //数据库密码
$mysql_database='house'; //数据库名
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("数据库连接失败");
mysql_query("set names gbk");
mysql_select_db($mysql_database,$conn);
return $conn;
}
mysql_Condb();//调用函数打开数据库
//定义文件上传路径
define("IMG_ROOT","D:/AppServ/www/jdjp/uploads/");
@extract($_POST);
@extract($_GET);

?>