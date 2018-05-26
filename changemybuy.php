<?php
session_start();
error_reporting(0);
require("connection/conn.php");
$username=$_SESSION["loginname"];
$id = $_GET['id'];
$sql="select * from house_buy where id='$id'";
$res=mysql_query($sql);
$rs=mysql_fetch_array($res);
$date=date("Y-m-d");

if($_POST['submit']){
    $id = $_POST['id'];
    $result =mysql_query("update house_buy set head='$head',qy='$qy',address='$address',hx='$hx',wylx='$wylx',min_area='$min_area',max_area='$max_area',jg='$jg',zxcd='$zxcd',do_floor='$do_floor',min_pay='$min_pay',max_pay='$max_pay',pb='$pb',tel='$tel',man='$man',email='$email',house_ms='$house_ms',date='$date',bus='$bus',pass='否',zj='$zj' where id=$id");
    if($result){
      echo "<script>alert('修改成功！');window.location.href='my_buy.php';</script>";
    }else{
      echo "<script>alert('修改失败！');window.location.href='changemybuy.php';</script>";
    }

  }

if ($_SESSION["userlogin"]!="ok") {
    # code...
    echo "<script>alert('你还没有登录！');window.location.href='login.php';</script>";
}else{


?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <title>个人主页</title>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <link rel="stylesheet" href="css.css" type="text/css">
    <style type="text/css">


.tables{border-collapse: collapse; width: 100%; font-size: 14px;}
.odd{
  background-color: #DDDDFF;
}
.tables td{border: solid 1px #ccc; padding: 8px;}
#details{
  
  font-family: "微软雅黑";
  text-align: center;
  left: auto;
}


</style>
</head>
<script language="JavaScript">
<!--
    function checkdata()
    {
        if(!CheckIsNull(form2.house_name,"请输入小区名称！")) return false;
        if(!CheckIsNull(form2.qy,"请选择区域！")) return false;
        if(!CheckIsNull(form2.hx,"请选择户型！")) return false;
        if(!CheckIsNull(form2.jz_area,"请输入建筑面积！")) return false;
        if(!CheckIsNull(form2.jg,"请选择建筑结构！")) return false;
        if(!CheckIsNull(form2.pay,"请输入交易价格！")) return false;
        if(!CheckIsNull(form2.do_floor,"请选择所在楼层！")) return false;

        if(!CheckIsNull(form2.man,"请输入联系人！")) return false;
        if(!CheckIsNull(form2.tel,"请输入联系电话！")) return false;
        if(!CheckIsNull(form2.email,"请输入EMAIL！")) return false;

    }

//-->
</script>
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
                <a class="navbar-brand waves-effect waves-dark" href="myindex.php"><i class="large material-icons">insert_chart</i> <strong><?php echo $username;?>的主页</strong></a>
        
    
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
          <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b><?php echo $username;?></b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
    <!-- Dropdown Structure -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark" href="myindex.php"><i class="fa fa-dashboard"></i> 我的出租信息</a>
                    </li>
                    <li>
                        <a href="my_hire.php" class="waves-effect waves-dark"><i class="fa fa-desktop"></i> 我的求租信息</a>
                    </li>
          <li>
                        <a href="my_sell.php" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> 我的出售信息</a>
                    </li>
                    <li>
                        <a href="my_buy.php" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> 我的求售信息</a>
                    </li>
                    
                    <li>
                        <a href="table.html" class="waves-effect waves-dark"><i class="fa fa-table"></i> 我的资料</a>
                    </li>
                    <li>
                        <a href="form.html" class="waves-effect waves-dark"><i class="fa fa-edit"></i> 个人资料修改 </a>
                    </li>


                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i>我的消息<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">我的评论</a>
                            </li>
                            <li>
                                <a href="#">我的留言</a>
                            </li>
                            <li>
                                <a href="#">我的回复<span class="fa arrow"></span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> 网站首页</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
    <div id="page-wrapper">
      <div class="header"> 
                        <h3 class="page-header">
                            修改我的求购信息
                        </h3>
                  
    </div>
            <div id="page-inner" style="text-align: center;">
                <div>
                   <?php
                    require("djbuy.php")
                   ?>

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