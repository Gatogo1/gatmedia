<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gatogo Daniel">
    <title>Home page</title>
     <!-- favicon -->
     <link rel=icon href="assets/img/log1.jpg" sizes="20x20" type="image/png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
  <?php include("Common/pre.php");?>
   <!--Carousel-->
   <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/The-Best-Mobile-Ad-Platforms-for-Digital-Marketers.png" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="img/2.jpeg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="img/3.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <!--end carousel-->
   <!--start modal-->
   <div class="container  mt-4 text-center">
  
    <h5 class="text-dark">Welcom to Home Utility bill manager</h5>
    <div class="margin-lg">
      <button type="button" class="btn-first-modal btn btn-primary " data-toggle="modal" data-target="#first-modal">
        Login
      </button>
    </div>
    <div class="margin-lg">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Sign up</button>
    </div>
   
   
    </div>

<!-- Large modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
   <?php include("confirm_users/user_reg.php") ?>
    </div>
  </div>
</div>




    <!---first modal-->
  
    <div class="modal" id="first-modal" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog">
        <div class="modal-content">
          <form class="login  p-4 " method="post" action="login/login-ve.php">
          <img style="width:;" src="img/logo.png" alt="">
            <h4 class="text-center">Utility bill manager login</h4>
            <div class="form-group">
              <label for="exampleInputEmail1">number address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
           
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="submit" class="btn btn-primary">forget password</button>
          </form>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
     <!---end first modal-->

  </div>
  <!--end modal-->
  
  <!--copy write-->
    <!-- Copyrights -->
    <?php include("common/footer.php")?>
  <!---end copy write -->
</body>
</html>
<script src="js/script.js"></script>