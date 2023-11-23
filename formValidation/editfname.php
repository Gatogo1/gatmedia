<?php session_start(); ?>
<?php include('../comm/head.php') ?>


<?php

include('../comm/conn.php');
        if (isset($_SESSION["email"])) {
	$image=$_SESSION["image"];
    $uid=$_SESSION['id'];
    $useridCODE=md5($uid);      
} else {
  header("location:login");
$uid=0;
}  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
<form method="post" name="sentMessage"  id="contactForm" class="form border-dark  mt-3 w-100 p-3">


<div class="form-group">
<input type="hidden" class="form-control" id="title" value=" <?php echo $useridCODE  ?>" name="userID">
 
  <label class="tittle" for="title">First name</label>
  <input type="text" class="form-control" id="title" placeholder="Enter First name" name="fname" required>
  <div class="valid-feedback">Valid.</div>
  <div class="invalid-feedback">Please fill out this field.</div>
</div>


<div class="form-group">
      <label for="title">Last name</label>
      <input type="text" class="form-control" id="title" placeholder="Enter last name" name="sname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <button class="btn btn-success  mt-2  btn-block" name="submit" type="submit">Submit</button>



    
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$id=md5($_POST['userID']);

$sql = "UPDATE `users` SET `fname`='$fname',`sname`='$sname' WHERE id='$uid'";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('You Have Successfully updated your profile'); window.location='../profile.php'</script>";
		}
		else{
		  echo 'Error: '.mysqli_error($conn);
		}
    }

?>