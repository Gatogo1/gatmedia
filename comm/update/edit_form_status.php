<?php 
include('../common/head.php');
/* Local Database*/

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
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);



if (isset($_POST['submit'])) {
    $status=$_POST['status'];

    
    $sql = "UPDATE users SET status='$status' WHERE id='$id2' ";
    $query_run = mysqli_query($conn, $sql);
        
        
    if($query_run){
    echo"<script>alert('User approved '); window.location='../onboard_user.php'</script>";
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
      <h1>Activate User</h1>
      <p>Are you sure you want to Activate this user</p>
    
      <div class="clearfix">
      <?php 
/* Local Database*/

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


 $sql="select * from users where id='$id2'";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));


 while ($row=mysqli_fetch_array($result)) {
  $act=$row['status'];

if ($act==0) {
    $data='1';
}
else {
    $data='0';
}

        ?>
      <input name="status" value="<?php echo $data ?>" type="hidden">
      <?php } ?>
        <a href="../onboard_user.php"   class=" w-25 btn btn-primary ">Cancel </a>
        <button class="btn w-25 btn-warning" name="submit" type="submit">confirm  </button>
      </div>
    </div>
  </form>
      </center>