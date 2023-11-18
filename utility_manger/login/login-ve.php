
<?php session_start();?>
<?php

include("../conns/conn.php") ;

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    $pass=$_POST["password"];
    
//to prevent php injection

$email=stripcslashes($email);
$pass=stripcslashes($pass);


$sql = "SELECT * FROM `users` WHERE email='$email' AND password='$pass' AND status='1'";

$result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

 

if($row["email"]==$email || $row['password'] == $pass && $row['status']==1)
    {   
      $email=$row["email"];
      $pass1=$row["password"];
      $_SESSION['id']=$row["id"];
      $_SESSION["username"]=$row['username'];
        $_SESSION['apartment-name']=$row['apartment_name'];
        $_SESSION["username"]=$row['username'];
        $_SESSION['email']=$row["email"];

if ($row['usertype']=='Admin') {
  header("location:../index.php");
}
elseif ($row['usertype']=='user') {
  header("location:../user.php");
}

   
     
    } 


    else{
      echo" <script>alert(' Your login details are incorrect! please make sure your details are correct and try agian !'); window.location='../login.php'</script>";
    }


}
