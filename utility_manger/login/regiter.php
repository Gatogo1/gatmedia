<?php 

include("conns/conn.php") ;

if (isset($_POST['submit'])) {
$fullname=ucwords($_POST['fullname']);
$apartment=strtoupper($_POST['apartment']);
$number=$_POST['number'];
$email=$_POST['email'];
$ref=$_POST['ref'];

$sql="INSERT INTO `register`( `fullname`, `apartment`, `tellphone`, `email`, `referance-code`) VALUES ('$fullname','$apartment','$number','$email','$ref')";
    
if(mysqli_query($conn,$sql)){
    
echo"<script>alert('YOU HAVE SUCCESFULLY REGISTERED FOR UTILITY KING.'); window.location='index.php'</script>";
}
else{
  echo"<script>alert('SORRY YOUR REGISTRATION WAS NOT SUCCESFULL TRY AGAIN'); window.location='index.php'</script>";
}
}
?>