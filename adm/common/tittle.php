    <!---Tittle bar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="logo">
        <img style="width: 100px; ;" src="image/logo.png" alt="">
    </div>
        <a class="navbar-brand" href="#">  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
          </ul>
          <span class="navbar-text text-white p-2">
          <img width="40" class="rounded-circle" src="user_pic/<?php echo $_SESSION['image'] ?>" alt="<?php echo $_SESSION['id'] ?>" > : <?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['sname'] ?>
          </span>

          <a href="logout" class="navbar-text text-white p-2">
            <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
        </a>
          <a  href="" class="navbar-text text-white p-2">
            <i class="fa fa-cogs" aria-hidden="true"></i> Profile
          </a>
           <a  href="../home" class="navbar-text text-white p-2">
            <i class="fa fa-home" aria-hidden="true"></i>Home
          </a>
         
        </div>
      </nav>
    <!--end tittle bar-->