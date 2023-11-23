<?php session_start(); ?>
<?php include('../comm/head.php') ?>


<?php
$code=1540948579*2020;

include('../comm/conn.php');
        if (isset($_SESSION["email"])) {
	$image=$_SESSION["image"];
    $uid=$_SESSION['id'];
    $uidmath=$uid*$code;
    $useridCODE=base64_encode($uidmath);      
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

 
  <label class="tittle" for="title">Education </label>
  <input type="text" class="form-control" id="title" placeholder="Enter School " name="edu" required>
  <div class="valid-feedback">Valid.</div>
  <div class="invalid-feedback">Please fill out this field.</div>
</div>

<label class="tittle" for="title">Course Offered </label>
  <input type="text" class="form-control" id="title" placeholder="Enter course offered <?php echo $useridCODE?> <?php echo $uid?>  " name="course"  required>
  <div class="valid-feedback">Valid.</div>
  <div class="invalid-feedback">Please fill out this field.</div>
</div>


<div class="form-group">
<label class="tittle" for="title">Started Date </label>
          <div class="datepicker date input-group">
            <input type="date" id="start" placeholder="Choose Date" class="form-control" name="start">
           
          </div>
        </div>


        <div class="form-group">
        <label class="tittle" for="title">Ended Date </label>
          <div class="datepicker date input-group">
            <input type="date" id="end" placeholder="Choose Date" class="form-control"  name="end">
           
          </div>
        </div>


    <button class="btn btn-success  mt-2  btn-block" name="submit" type="submit">Submit</button>



    
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){

$edu = $_POST['edu'];
$start = $_POST['start'];
$end = $_POST['end'];
$course = $_POST['course'];
$id=base64_decode($useridCODE);
$truid=$id/$code;


//Checking and submitting views into database
$sql = "SELECT `userID` FROM `userdetails` WHERE `userID`='".$truid."'";
$result = $conn->query($sql);

if($result->num_rows >= 1) {

    $sql2 = "UPDATE `userdetails` SET `education`='$edu',`edustart`='$start',`eduend`='$end',`course`='$course' WHERE userID='$truid'";
    if(mysqli_query($conn,$sql2)){
  echo"<script>alert('You Have Successfully updated your profile'); window.location='../profile.php'</script>";
    }
    else{
      echo 'Error: '.mysqli_error($conn);
    }

 
} 

else {
    $sql1 = "INSERT INTO `userdetails`(`userID`, `education`, `edustart`, `eduend`, `course`) VALUES ('$truid','$edu','$start','$end','$course')";
    if(mysqli_query($conn,$sql1)){
        echo"<script>alert('Your Profile was added succesfully'); window.location='../profile'</script>";
          }
          else{
            echo 'Error: '.mysqli_error($conn);
          }
   
}

    }

?>



<script>


    var start = document.getElementById('start');
var end = document.getElementById('end');

start.addEventListener('change', function() {
    if (start.value)
        end.min = start.value;
}, false);
end.addEventLiseter('change', function() {
    if (end.value)
        start.max = end.value;
}, false);

</script>