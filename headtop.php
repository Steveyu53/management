<?php
session_start();
?>



<!--����2 ��ʼ-->
        <div class="main">
            
        <!--ͷ�� ��ʼ-->
            <div class="header">
               
                <div class="contact">
           <span>   
<?php
   if(@$_SESSION[loginname]!=""){
     

     echo "��ӭ<b>$_SESSION[loginname]</b>";

    
    
    
  ?>&nbsp;</span>
  <span class="header-signup" ><a href="myindex.php" >�ҵ���ҳ</a></span> 
   <span class="header-signup"> <a href="logout.php" id="js-signup-btn" onclick="return confirm('�Ƿ��˳���¼')">�˳�</a> </span>
            <?php
            }else{
          ?>
<a href="login.php">��¼</a>
            <a href="reg2.php" >ע��</a>
            <a href="admin/">���ǹ���Ա</a>
          <?php }?>
      

                    
                </div>
            </div>
            <!--���� ��ʼ-->
            <div class="nav">
                <div class="navLeft"></div>
                <div class="navRight"></div>

                <div class="search">
                    <div class="searchbg">
     <form name="dataForm" target="_blank" method="post" action="dosearch.php" name="form" >
       <input name="jdcz" value="jdcz"size="4" value="1" type = "hidden">
                       <input type="text" value="����ؼ���"  id="query" name="name" 
        />
                   </div>
                   <input type="submit" value="" class="searchSub"/>
                 
      
                     
               </form> 
<!-- <form name="dataForm" target="_blank" method="post" action="dosearch.php" name="form" >
    <input name="jdbc" size="4" value="1" type = "hidden">
                    <input type="text" value="վ������"  id="query" name="name" />
                </div>
                <input type="submit" value="" class="searchSub"/>
            </form> -->

        </div>


                <ul class="mainNav clearfix" id="mainNav">
        <li><a title="��ҳ" href="index.php">��ҳ</a></li>
        <li><a title="���ⷿ��" href="hack.php">���ⷿ��</a>
        <li><a title="���ⷿ��" href="hire.php">���ⷿ��</a>
        <li><a title="���۷���" href="sell.php">���۷���</a>
        <li><a title="�󹺷���" href="buy.php">�󹺷���</a>
        <li><a title="���԰�" href="guest.php">���԰�</a>  
                </ul>
            </div>
