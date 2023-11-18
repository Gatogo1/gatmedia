
<?php include("common/head.php");?>
<body>
<!-- Preloader -->
<?php include("common/pre.php")?>
  <!--Nav bar-->
  <?php include("common/nav.php")?>
   <!--Carousel
            end carousel-->
  <?php include('bill_details.php')?>
<!----tenant bill details--->
     

      <div class="details mt-1  col-sm-12">
        <div class="bill-head text-center rounded shadow p-3  text-white">
             <h3>Your bill details </h3>
        </div>
      </div>


      <?php 
/* Local Database*/

include("conns/conn.php");



$em=$_SESSION['email'];

$sql = "SELECT * FROM `users` where status='1' and apartment_name='$apart' and email='$em'";
$result = $conn->query($sql);
$i=1;
while($row = $result->fetch_assoc()) { 
$sql2 = "SELECT * FROM `users_new_bill` WHERE userid='".$row['id']."'";
$result2=$conn->query($sql2);
$row2=$result2->fetch_assoc();

$img=$row['image'];
$name=$row['username'];

$sql6="SELECT  sum(amount_payable) FROM users_new_bill  WHERE userid='".$row['id']."'";
$result6 = mysqli_query($conn,$sql6)or die( mysqli_error($conn));
$row6=mysqli_fetch_array($result6) ;

	$total_to_be_payed_user= $row6[0];

  
  $sql7="SELECT  sum(amount_paid) FROM users_new_bill  WHERE userid='".$row['id']."'";
  $result7 = mysqli_query($conn,$sql7)or die( mysqli_error($conn));
  $row7=mysqli_fetch_array($result7) ;
  
      $total_payed_user= $row7[0];

$remaining_to_be_paid=$total_to_be_payed_user-$total_payed_user;
}
        ?>
      <div class="tenant-details mt-1  col-sm-12">
        <div class="user-bill text-center rounded shadow p-3  text-white">
          <img class="rounded-circle" style="width: 100px; height:50px ;" src="login/upload/<?php echo $img ?>" alt="User image">
             <h4><?php echo $name ?></h4>
             <p>Current Bill: <b class="bg-danger p-1 rounded">₵<?php echo $amount ?> (<?php echo $month_name ?>)</b> </p>
             <p>Amount to pay: <b class="bg-danger p-1 rounded">₵<?php echo $row2['amount_payable'] ?></b> </p>
             <p>Amount paid (<?php echo $month_name ?>): <b class="bg-success p-1 rounded">₵<?php echo $row2['amount_paid']?></b> </p>
             <p>Total amount to pay: <b class="bg-warning p-1 rounded">₵<?php echo $total_to_be_payed_user ?></b> </p>
             <p>Amount paid: <b class="bg-success p-1 rounded">₵<?php echo $total_payed_user ?></b> </p>
             <p>Remaining to be paid: <b class="bg-danger p-1 rounded">₵<?php echo $remaining_to_be_paid ?></b> </p>
             <button class="btn btn-bill-detail m-1 bg-success" style="width:60%"><i class="fa fa-money"></i> Make payment</button>
             <button class="btn btn-bill-detail" style="width:60%"><i class="fa fa-download"></i> Download Report</button>
             <button class="btn btn-bill-detail m-1" style="width:60%"><i class="fa fa-bar-chart"></i> History</button>

            
            <a href="#" class="notification">
              <span>Inbox</span>
              <span class="badge">0</span>
            </a>
           
        </div>
      </div>


    </div>
  </div>
 <!-- Copyrights -->
 <div class="bg-light py-4">
  <div class="container text-center">
    <p class="text-muted mb-0 py-2">© 2023 Developed by Gat softwares.</p>
  </div>
</div>
<!---end copy write -->
</body>
</html>
<script src="js/script.js"></script>