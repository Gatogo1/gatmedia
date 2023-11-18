<?php 
include('../common/head.php');
include('../conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);


if (isset($_POST['submit'])) {
    $status=$_POST['status'];

    
    $sql = "UPDATE ads SET status='$status' WHERE id='$id2' ";
    $query_run = mysqli_query($conn, $sql);
        
        
    if($query_run){
    echo"<script>alert('Ads deactivated '); window.location='../navAds.php'</script>";
    }
    }
}
      ?>
      <style>
        
/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.btn{
    font-size:20px;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}
a{
    text-decoration:none;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
      </style>
     
      <center>
      <form class="modal-content" method="post">
    <div class="container">
      <h1>Deactivate ads</h1>
      <p>Are you sure you want to deactivate this ads</p>
    
      <div class="clearfix">
      <input name="status" value="0" type="hidden">
        <a href="../navAds.php"   class=" w-25 btn btn-primary ">Cancel</a>
        <button class="btn w-25 btn-warning" name="submit" type="submit">confirm</button>
      </div>
    </div>
  </form>
      </center>
      