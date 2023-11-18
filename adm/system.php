<?php



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


 
/*
 $servername = "localhost";
$username = "gatmedia_Gatogo";
$password = "Ga@1540948579";
$dbname = "gatmedia_gat-blog";
*/
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$today = date("Y-m-d");   
$rest = substr("$today", 0); 

$my=date('jS F  Y', strtotime($today));
$rest1 = substr("$today", 0);


                         $sql1 = "select * from pagehits  ";
                         $result1 = mysqli_query($conn,$sql1)or die( mysqli_error($conn));
                         $rowcount1 = mysqli_num_rows($result1) ;
                         
                          $sql1 = "select * from pagehits where date='$rest' ";
                         $result1 = mysqli_query($conn,$sql1)or die( mysqli_error($conn));
                         $rowcount2 = mysqli_num_rows($result1) ;
                         
                         
                            $sql2 = "select * from blog where date='$rest' ";
                         $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
                         $blog_total = mysqli_num_rows($result2) ;
                    
          $sql3="select * from  blog  ";
          $result3 = mysqli_query($conn,$sql3)or die( mysqli_error($conn));
          $row3=mysqli_fetch_array($result3);
          $server_date=$row3['date'];

          if ($my==$server_date) {
         $re='1';
          }
          else{
            $re='0';
          }
                    ?>
                                 
<div >
                <!--info-->
                
                <div class="container">
                    <div class="row">
                        <div style="background-color:orange ;" class="info  col-sm-2">
                                 <div class="log"><i class="f-info fa fa-envelope" aria-hidden="true"></i></div>
                                 <div class="mass">Massage <span">0</span></div>
                        </div>

                        <div style="background-color:rgb(137, 87, 16) ;" class="info  col-sm-2">
                            <div class="log"><i class="f-info fa fa-group" aria-hidden="true"></i></div>

                            <div class="mass">Today page visitors <?php echo   $rowcount2 ?></div>
                   </div>

                   <div style="background-color:rgb(35, 91, 211) ;" class="info  col-sm-2">
                    <div class="log"><i class="f-info fa  fa-newspaper-o" aria-hidden="true"></i></div>
                    <div class="mass"> Post today <span  ><?php echo  $blog_total ?></span></div>
           </div>

           <div style="background-color:rgb(58, 10, 99) ;" class="info  col-sm-2">
            <div class="log"><i class="f-info fa  fa-user-circle" aria-hidden="true"></i></div>
                    <div class="mass">Total Managers <span  >0</span></div>
            </div>



            <div style="background-color:rgb(10, 99, 75) ;" class="info  col-sm-2">
                <div class="log"><i class="f-info fa  fa-user-circle" aria-hidden="true"></i></div>
                        <div class="mass">Page Visitors <span  ><?php echo  $rowcount1 ?></span></div>
                </div>
                    </div>

                    
                </div>