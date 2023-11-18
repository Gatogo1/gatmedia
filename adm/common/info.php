<?php
/*
 $servername = "localhost";
$username = "gatmedia_Gatogo";
$password = "Ga@1540948579";
$dbname = "gatmedia_gat-blog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thekambh_gat-blog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}


?>  
 <?php 
  /* Total page code */
 $today = date("Y-m-d");   
 $rest = substr("$today",-2); 
 /* post page code */
 $my=date('jS \ F Y');

                          $sql1 = "select * from pagehits  ";
                          $result1 = mysqli_query($conn,$sql1)or die( mysqli_error($conn));
                          $rowcount1 = mysqli_num_rows($result1) ;
                          
                           $sql1 = "select * from pagehits where date='$today' ";
                          $result1 = mysqli_query($conn,$sql1)or die( mysqli_error($conn));
                          $rowcount2 = mysqli_num_rows($result1) ;
                          
                          
                             $sql2 = "select * from blog where date=".strtotime($my) ;
                          $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
                          $blog_total = mysqli_num_rows($result2) ;
                          
                          $sql3="select * from  blog  ";
          $result3 = mysqli_query($conn,$sql3)or die( mysqli_error($conn));
             while ($row3=mysqli_fetch_array($result3)){
                 
                 
                 
          $server_date=$row3['date']; 
                 
              $rest3 = substr("$server_date", 1, 3);   
             }
          
               if ($today==$my) {
         $re='1';
          }
          else{
            $re='0';
          }
                     
                     ?>
                  
<div class="content col-sm-10 bg-light">
                <!--info-->
                <div class="container">
                    
                    <div class="row">
                        <div style="background-color:orange ;" class="info  col-sm-4">
                                 <div class="log"><i class="f-info fa fa-envelope" aria-hidden="true"></i></div>
                                 <div class="mass">Massage <span>0</span></div>
                        </div>

                        <div style="background-color:rgb(137, 87, 16) ;" class="info  col-sm-4">
                            <div class="log"><i class="f-info fa fa-group" aria-hidden="true"></i></div>

                            <div class="mass">Today page visitors <?php echo   $rowcount2 ?></div>
                   </div>

                   <div style="background-color:rgb(35, 91, 211) ;" class="info  col-sm-4">
                    <div class="log"><i class="f-info fa  fa-newspaper-o" aria-hidden="true"></i></div>
                    <div class="mass"> Post today <span  ><?php echo  $blog_total ?></span></div>
           </div>

           <div style="background-color:rgb(58, 10, 99) ;" class="info  col-sm-4">
            <div class="log"><i class="f-info fa  fa-user-circle" aria-hidden="true"></i></div>
                    <div class="mass">Total Managers <span  >0</span></div>
            </div>



            <div style="background-color:rgb(10, 99, 75) ;" class="info  col-sm-4">
                <div class="log"><i class="f-info fa  fa-user-circle" aria-hidden="true"></i></div>
                        <div class="mass">Page Visitors <span  ><?php echo  $rowcount1 ?></span></div>
                </div>
                    </div>

                    
                </div>
                <!-- end info-->