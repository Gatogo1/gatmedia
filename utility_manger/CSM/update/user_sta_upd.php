<?php 

include('../conns/conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);
$status='1';


    $sql = "UPDATE register SET status='$status' WHERE id='$id2' ";
    $query_run = mysqli_query($conn, $sql);
        
        
    if($query_run){
    echo"<script>alert('Ads deactivated '); window.location='../user_mang.php'</script>";
    }
    }

      ?>