<?php
session_start();
error_reporting(0);
require("connection/conn.php");
$username=$_SESSION["loginname"];
if($_GET['do'] == "delete"){
    $id = $_GET['id'];
    $result = mysql_query("delete from house_hack where id in ($id);");
    if($result){
      echo "<script>onload = function(){document.getElementById('errortext').innerHTML='ɾ���ɹ�';}</script>";
    }else{
      echo "<script>onload = function(){document.getElementById('errortext').innerHTML='ɾ��ʧ��';}</script>";
    }
  }
if ($_SESSION["userlogin"]!="ok") {
    # code...
    echo "<script>alert('�㻹û�е�¼��');window.location.href='login.php';</script>";
}else{


?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <title>������ҳ</title>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css">
    <link rel="stylesheet" href="css/table.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="myindex.php"><i class="large material-icons">insert_chart</i> <strong><?php echo $username;?>����ҳ</strong></a>
        
    <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
          <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b><?php echo $username;?></b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
    <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="#"><i class="fa fa-user fa-fw"></i> ��������</a>
</li>
<li><a href="#"><i class="fa fa-gear fa-fw"></i> �޸�����</a>
</li> 
<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> �˳���¼</a>
</li>
</ul>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark" href="myindex.php"><i class="fa fa-dashboard"></i> �ҵĳ�����Ϣ</a>
                    </li>
                    <li>
                        <a href="my_hire.php" class="waves-effect waves-dark"><i class="fa fa-desktop"></i> �ҵ�������Ϣ</a>
                    </li>
          <li>
                        <a href="my_sell.php" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> �ҵĳ�����Ϣ</a>
                    </li>
                    <li>
                        <a href="my_buy.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> �ҵ�������Ϣ</a>
                    </li>
                    
                    <li>
                        <a href="table.html" class="waves-effect waves-dark"><i class="fa fa-table"></i> �ҵ��ղ�</a>
                    </li>
                    <li>
                        <a href="form.html" class="waves-effect waves-dark"><i class="fa fa-edit"></i> ���������޸� </a>
                    </li>


                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i>��Ҫ����<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="dj_hire.php">���ⷢ��</a>
                            </li>
                            <li>
                                <a href="dj_hack.php">���ⷢ��</a>
                            </li>
                            <li>
                                <a href="dj_sell.php">���۷���<span class="fa arrow"></span></a>
                            </li>
                            <li>
                                <a href="dj_buy.php">���۷���</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> ��վ��ҳ</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
    <div id="page-wrapper">
      <div class="header"> 
                        <h1 class="page-header">
                            �ҵĳ�����Ϣ
                        </h1>
                  
    </div>
            <div id="page-inner" style="text-align: center;">
                <div>
                    <form name="form1" method="post" action="">
                        <table class="table" cellspacing="0" cellpadding="0" style="border:solid 1px ;background-color: white;">
                            <tr>
                                <th>����ID</th>
                                <th>������Ŀ</th>
                                <th>����ʱ��</th>
                                <th>�޸�</th>
                                <th>ɾ��</th>
                            </tr>
                            <?php
                                $strSql="select  * from house_hack where  man='$username' order by id desc";
                                $res=mysql_query($strSql);
                                while($rs=mysql_fetch_array($res))
                                {

                            ?>
                            <tr>
                                <td><?php echo $rs["id"]; ?></td>
                                <td><?php echo $rs["head"]?></td>
                                <td><?php echo $rs['date']; ?></td>
                                <td><input class="btn btn-success"  value="�޸�" type="button" onClick="location.href='changemyhack.php?id=<?php echo $rs['id']; ?>'"></td>
                                <td><input class="btn btn-info"  value="ɾ��" type="button" onClick="location.href='?do=delete&id=<?php echo $rs['id']; ?>'"></td>
                            </tr>
                        <?php } ?>
                        </table>
  </form>
    <br/>

</div>
                </div>
    
        <footer><p>Copyright &copy; yjq All rights reserved</a></p>
        
        
        </footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
  
  <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
  
  <script src="assets/materialize/js/materialize.min.js"></script>
  
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
  
  
  <script src="assets/js/easypiechart.js"></script>
  <script src="assets/js/easypiechart-data.js"></script>
  
   <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
  
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
 

</body>

</html>

<?php
}
?>