<?php include("common/head.php");?>
<body class="">
<!-- Preloader -->
<?php include("common/pre.php")?>
  <!--Nav bar-->
  <?php include("common/nav.php");?>
   <!--Carousel-->
   <?php include("common/carosel.php");?>

   <?php

$aprt=''
   ?>

<?php
                    include("conns/conn.php");

                    $sql="select * from register where apartment='$apart'";
                    $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
                   
                    while ($row=mysqli_fetch_array($result)) {
                     $data=$row['id'];
                     $aprt= $row['apartment'];
                   
                     $link="new_datails.php?id=".urlencode(base64_encode($data));
                   
                   


                 
                    }
                   $display='none';
$displays='none';

if ( $apart==$aprt ) {
$display='block';
$displays='none';
}
else {
  $display='none';
  $displays='block';
}   
                    ?>

   <style>
    .bill-details,.tenant-details,.buttons{
      display:<?php echo $display ?>;
    }
    .welcome-details{
      display:<?php echo $displays ?>;
    }
 
   </style>
    <!---add bill-->
    <div class="container-fluid">
    <div class="row">
      <!--start modal-->
  <div class="container text-center">
            <div class="buttons">
                  <div class="margin-lg">
                    <button type="button" class="btn-first-modal btn btn-primary " data-toggle="modal"               data-target="#first-modal">
                     Add Bill
                    </button>
                  </div>
                  <div class="margin-lg">
                    <button type="button" class="btn-second-modal btn btn-primary "               data-toggle="modal" data-target="#second-modal">
                     Add Payment
                    </button>
                  </div>
                  <div class="margin-lg">
                    <?php
                    include("conns/conn.php");
                    $sql="select * from users where  status='0' AND apartment_name='$apart'";
              $res=mysqli_query($conn,$sql);
                   $num= mysqli_num_rows($res); 
                    ?>
                  <a href="edit-pro.php" class="notification">
                            <span>New User</span>
                            <span class="badge"><?php echo $num ?></span>
                          </a>
                  </div>
            </div>
   
    </div>
    <div class="modal" id="first-modal" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <form class="login  p-4"method="post" enctype="multipart/form-data" action="add/add_bill.php">
            <h4 class="text-center">Utility manager add bill</h4>
            <div class="form-group">
              <label for="adm">Bill Date :</label>
              <input type="month" name="date" max="2022-12-31"required>
              <small id="emailHelp" class="form-text text-warning">Please enter the date on the bill</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Input amount on bill</label>
              <input type="number"  name="amount" class="form-control" id="exampleInputPassword1" placeholder="Enter amount" required>
            </div>
            <div class="form-group">
              <label for="adm">capture bill:</label>
              <input type="file" name="image" accept="image/*" capture="camera" required>
              <small id="emailHelp" class="form-text text-warning">Please make sure image is clear and matches your bill input</small>
            </div>        
           
            <div class="form-group">
              <label for="exampleInputPassword1">Confirm-Input amount on bill</label>
              <input type="number"  name="amount_con" class="form-control" id="exampleInputPassword1" placeholder="Confirm amount" required>
              <input type="hidden"  name="apart"  value="<?php echo $apart ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Comment</label>
              <input type="text" name="comment" class="form-control" id="exampleInputPassword1" placeholder="Input your comment if any">
            </div>
      
          
            
            <button type="submit" name="submit" class="btn  btn-primary">Submit</button>
          
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </form>
        </div>
        
          </div>
        </div>
      </div>
    </div>

    <!--second modal-->
    <div class="modal" id="second-modal" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog">
        <div class="modal-content">
          <form class="login  p-4 ">
            <h4 class="text-center">Utility manager add bill</h4>
            <div class="form-group">
              <label for="adm">Bill Date :</label>
      <input type="month" name="doa" max="2022-12-31">
            </div>

            <div class="form-group">
              <label for="adm">Payment Date :</label>
      <input type="month" name="doa" max="2022-12-31">
            </div>
            <div class="form-group">
              <label for="adm">capture recipt:</label>
              <input type="file" >
            </div>        
            <div class="form-group">
              <label for="exampleInputPassword1">Input amount payed</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter amount">
            </div>
          
            <div class="form-group">
              <label for="exampleInputPassword1">Comment</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Input your comment if any">
            </div>
      
          
            
            <button type="submit" class="btn  btn-primary">Submit</button>
          
          </form>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!--end second modal-->
      <!--end start modal-->
     <?php include('bill_details.php')?>
<!----tenant bill details--->
      <div class="tenant-details mt-1 col-sm-12">
        <div class="bill-head text-center rounded shadow p-3  text-white">
             <h4>Tenants bill details </h4>
        </div>
      </div>
      <?php 
/* Local Database*/

include("conns/conn.php");





$sql = "SELECT * FROM `users` where status='1' and apartment_name='$apart'";
$result = $conn->query($sql);
$i=1;
while($row = $result->fetch_assoc()) { 
$sql2 = "SELECT * FROM `users_new_bill` WHERE userid='".$row['id']."' AND date='$date'";
$result2=$conn->query($sql2);
$row2=$result2->fetch_assoc();
$data=$row['id'];
$link="payment_for_user.php?id=".urlencode(base64_encode($data));


$sql6="SELECT  sum(amount_payable) FROM users_new_bill  WHERE userid='".$row['id']."'";
$result6 = mysqli_query($conn,$sql6)or die( mysqli_error($conn));
$row6=mysqli_fetch_array($result6) ;

	$total_to_be_payed_user= $row6[0];


  $sql7="SELECT  sum(amount_paid) FROM users_new_bill  WHERE userid='".$row['id']."'";
  $result7 = mysqli_query($conn,$sql7)or die( mysqli_error($conn));
  $row7=mysqli_fetch_array($result7) ;
  
      $total_payed_user= $row7[0];

$remaining_to_be_paid=$total_to_be_payed_user-$total_payed_user;

        ?>
      <div class="tenant-details mt-2  col-sm-12">
        <div class="user-bill text-center rounded shadow p-3  text-white">
          <img class="rounded-circle" style="width: 100px; height:50px ;" src="login/upload/<?php echo $row['image'] ?>" alt="User image">
             <h4><?php echo $row['username']?></h4>
             <p>Current Bill: <b class="bg-danger p-1 rounded">₵<?php echo $row2['new_bill']?> (<?php echo $month_name ?>)</b> </p>
             <p>Amount to pay: <b class="bg-danger p-1 rounded">₵<?php echo $row2['amount_payable'] ?></b> </p>
             <p>Amount paid (<?php echo $month_name ?>): <b class="bg-success p-1 rounded">₵<?php echo $row2['amount_paid']?></b> </p>
             <p>Total bills to pay: <b class="bg-warning p-1 rounded">₵<?php echo $total_to_be_payed_user?></b> </p>
             <p>Amount paid: <b class="bg-success p-1 rounded">₵<?php echo $total_payed_user ?></b> </p>
             <p>Remaining to be paid: <b class="bg-danger p-1 rounded">₵<?php echo $remaining_to_be_paid ?></b> </p>
             <a href="<?=$link;?>" class="btn btn-bill-detail m-2 bg-success" style="width:60%"><i class="fa fa-money"></i> Make payment</a>
             <button class="btn btn-bill-detail" style="width:60%"><i class="fa fa-download"></i> Download Report</button>
             <button class="btn btn-bill-detail m-2" style="width:60%"><i class="fa fa-bar-chart"></i> History</button>

            
            <a href="#" class="notification">
              <span>Inbox</span>
              <span class="badge">0</span>
            </a>
           
        </div>
      </div>
      <?php }?>
<!---- end tenant bill details--->

      <div class="welcome-details  mt-2 col-sm-12">
      <div class="bill-head text-center rounded shadow p-3  text-white">
             <h4> Welcome <?php echo $_SESSION['apartment-name'];?> <?php echo $aprt;?> <?php echo $display ?> to Utility Manager. </h4>
             <p>Utility manager is a softeare designed to help keeping track records of consumer household bills, help in uniform distribution of bills and quick payment. As an Administrator You can now register your Home
               </p>
               <button type="button" class="btn-third-modal btn btn-primary btn-lg" data-toggle="modal" data-target="#third-modal">Register</button>
        </div>
      </div>


<!--third modal-->
  <div class="modal" id="third-modal" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
        <div class="modal-content">
          <form method="post" class="login  p-4 ">
            <h4 class="text-center">Utility manager</h4>
            <div class="form-group">
              
              <input type="hidden" name="fullname" value="<?php echo $_SESSION["username"] ?>" class="form-control" id="exampleInputPassword1" placeholder="Please enter your correct name">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Apartment Name</label>
              <input type="text" name="apartment" class="form-control" id="exampleInputPassword1" placeholder="Please enter your apartment name">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tellphone number</label>
              <input type="number" name="number"  class="form-control" id="exampleInputPassword1" placeholder=" format 233540948579">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email"name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Referance code</label>
              <input type="text" name="ref"  class="form-control" id="exampleInputPassword1" placeholder="please enter your referance code">
            </div>
           
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
      <?php include("login/regiter.php");?>
    
    
  </div>
 <!-- Copyrights -->
 <?php include("common/footer.php");?>
<!---end copy write -->
</body>
</html>
<script src="js/script.js"></script>