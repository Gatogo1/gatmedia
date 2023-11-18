<?php include("common/head.php");?>

<?php


include("conns/conn.php")


?> 

<?php /*
// Get user device details
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Print user device details
echo "User device details: " . $user_agent;
?>

<?php
// Get user IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// Print user IP address
echo "User IP address: " . $user_ip; */
?>

<?php



if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST["email"];
  
    
//to prevent php injection

$id=stripcslashes($id);
$pass=stripcslashes($pass);


$sql = "SELECT * FROM users WHERE email='$id' AND  status='1'";

$result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

    if($row["email"]==$id && $row['status']==1)
    {   
      $email=$row["email"];
      $_SESSION['id']=$row["id"];
      $_SESSION['sname']=$row["username"];
        $_SESSION["dep"]=$row['dep'];
        $_SESSION["code"]=$row['codes'];
        $_SESSION['email']=$email;
        header("location:index.php");
    } 


    else{
      echo"<script>alert(' Your login details are incorrect! please make sure your details are correct and try agian !'); window.location='login.php'</script>";
    }


}


?>


      <div class="modal-dialog">
        <div class="modal-content">
          <form class="login  p-4 " method="post" action="">
          <img style="width:300px;" src="img/logo.png" alt="">
            <h4 class="text-center">Utility manager login</h4>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email"  autocomplete="off" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-primary">forget password</button>
          </form>
