<?php
error_reporting(E_ALL ^ E_NOTICE);//����������
function mysql_Condb()
{
$mysql_server_name='localhost'; //���ݿ������
$mysql_username='root'; //���ݿ��û���
$mysql_password='root'; //���ݿ�����
$mysql_database='house'; //���ݿ���
$conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password) or die("���ݿ�����ʧ��");
mysql_query("set names gbk");
mysql_select_db($mysql_database,$conn);
return $conn;
}
mysql_Condb();//���ú��������ݿ�
//�����ļ��ϴ�·��
define("IMG_ROOT","D:/AppServ/www/jdjp/uploads/");
@extract($_POST);
@extract($_GET);

?>