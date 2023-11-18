<?php 
include("conn.php") ;

if (isset($_POST['submit'])) {
$dep=$_POST['dep'];
$hod=$_POST['hod'];
$loc=$_POST['location'];
$code1mh=$_POST['code1mh'];
$code1eh=$_POST['code1eh'];
$code1mb=$_POST['code1mb'];
$code1eb=$_POST['code1eb'];
$code2mh=$_POST['code2mh'];
$code2eh=$_POST['code2eh'];
$code2mb=$_POST['code2mb'];
$code2eb=$_POST['code2eb'];
$code3mh=$_POST['code3mh'];
$code3eh=$_POST['code3eh'];
$code3mb=$_POST['code3mb'];
$code3eb=$_POST['code3eb'];
$code4mb=$_POST['code4mb'];
$code4eb=$_POST['code4eb'];

$dep_code=substr($dep,0,3);


$lev1="1";
$lev2="2";
$lev3="3";
$morning="M";
$evening="E";
$cert1="H";
$cert="B";
$code1mh=$dep_code."".$lev1."".$cert1."".$morning;
$code1eh=$dep_code."".$lev1."".$cert1."".$evening;
$code1mb=$dep_code."".$lev1."".$cert1."".$morning;
$code1eb=$dep_code."".$lev1."".$cert1."".$evening;
$code2mh=$dep_code."".$lev1."".$cert1."".$morning;
$code2eh=$dep_code."".$lev1."".$cert1."".$evening;
$code2mb=$dep_code."".$lev1."".$cert1."".$morning;
$code2eb=$dep_code."".$lev1."".$cert1."".$evening;
$code3mh=$dep_code."".$lev1."".$cert1."".$morning;
$code3eh=$dep_code."".$lev1."".$cert1."".$evening;
$code3mb=$dep_code."".$lev1."".$cert1."".$morning;
$code3eb=$dep_code."".$lev1."".$cert1."".$evening;
$code4mb=$dep_code."".$lev1."".$cert1."".$morning;
$code4eb=$dep_code."".$lev1."".$cert1."".$evening;

$sql = "select * from department ";

$result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);


   



$sql =" INSERT INTO `department`( `department`, `HOD`, `location`, `code1mh`, `code1eh`, `code1mb`, `code1eb`, `code2mh`, `code2eh`, `code2mb`, `code2eb`, `code3mh`, `code3eh`, `code3mb`, `code3eb`, `code4mb`, `code4eb`) VALUES ('$dep','$hod','$loc','$code1mh','$code1eh','$code1mb','$code1eb','$code2mh','$code2eh','$code2mb','$code2eb','$code3mh','$code3eh','$code3mb','$code3eb','$code4mb','$code4eb')";
    
    
if(mysqli_query($conn,$sql)){
  
if ($dep==$row['department']) {
  echo"<script>alert('Department Already Exist  '); window.location='departmentManagment.php'</script>";
}
else{ echo"<script>alert('Department added successful '); window.location='departmentManagment.php'</script>";}
}
else{
  echo"<script>alert('Department not added  '); window.location='departmentManagment.php'</script>";
}

}




?>