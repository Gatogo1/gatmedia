<?php 
include('conn.php');


 $sql="select * from blog";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));


 while ($row=mysqli_fetch_array($result)) {
 
  }

         
          
           $sql2 = "select * from pagehits where ide='$data' ";
           $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
           $page_view = mysqli_num_rows($result2) ;
    ?>
           