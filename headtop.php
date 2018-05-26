<?php
session_start();
?>



<!--主体2 开始-->
        <div class="main">
            
        <!--头部 开始-->
            <div class="header">
               
                <div class="contact">
           <span>   
<?php
   if(@$_SESSION[loginname]!=""){
     

     echo "欢迎<b>$_SESSION[loginname]</b>";

    
    
    
  ?>&nbsp;</span>
  <span class="header-signup" ><a href="myindex.php" >我的主页</a></span> 
   <span class="header-signup"> <a href="logout.php" id="js-signup-btn" onclick="return confirm('是否退出登录')">退出</a> </span>
            <?php
            }else{
          ?>
<a href="login.php">登录</a>
            <a href="reg2.php" >注册</a>
            <a href="admin/">我是管理员</a>
          <?php }?>
      

                    
                </div>
            </div>
            <!--导航 开始-->
            <div class="nav">
                <div class="navLeft"></div>
                <div class="navRight"></div>

                <div class="search">
                    <div class="searchbg">
     <form name="dataForm" target="_blank" method="post" action="dosearch.php" name="form" >
       <input name="jdcz" value="jdcz"size="4" value="1" type = "hidden">
                       <input type="text" value="输入关键字"  id="query" name="name" 
        />
                   </div>
                   <input type="submit" value="" class="searchSub"/>
                 
      
                     
               </form> 
<!-- <form name="dataForm" target="_blank" method="post" action="dosearch.php" name="form" >
    <input name="jdbc" size="4" value="1" type = "hidden">
                    <input type="text" value="站内搜索"  id="query" name="name" />
                </div>
                <input type="submit" value="" class="searchSub"/>
            </form> -->

        </div>


                <ul class="mainNav clearfix" id="mainNav">
        <li><a title="首页" href="index.php">首页</a></li>
        <li><a title="出租房屋" href="hack.php">出租房屋</a>
        <li><a title="求租房屋" href="hire.php">求租房屋</a>
        <li><a title="出售房屋" href="sell.php">出售房屋</a>
        <li><a title="求购房屋" href="buy.php">求购房屋</a>
        <li><a title="留言板" href="guest.php">留言板</a>  
                </ul>
            </div>
