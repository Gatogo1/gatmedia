<?php 


include('conns/conn.php');

$sql = "SELECT * FROM `newbill`WHERE apartment_name='$apart' ORDER BY id  DESC ";

$result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);
    if(empty($row['apartment_name'])){
      $data='1';
      $date='1';
      $amount='0';
    }
   else{
    $date=$row['date'];  
    $amount=$row['amount'];
   }
   $sql3="SELECT  sum(amount_paid) FROM users_new_bill  WHERE apartment_name='$apart' AND date='$date'";
$result3 = mysqli_query($conn,$sql3)or die( mysqli_error($conn));
$row3=mysqli_fetch_array($result3) ;

	$pay_date= $row3[0];




    $sql5="SELECT  sum(amount_paid) FROM users_new_bill  WHERE apartment_name='$apart'";
    $result5 = mysqli_query($conn,$sql5)or die( mysqli_error($conn));
    $row5=mysqli_fetch_array($result5) ;
    
        $total_payed= $row5[0];

      ?>
      
<?php
// PHP program to convert number to month name
$month=substr($date, -2); 
// Declare month number and initialize it
$month_num =$month;
  
// Use mktime() and date() function to
// convert number to month name
$month_name = date("F", mktime(0, 0, 0, $month_num, 10));
  
// Display month name

$sql4="SELECT  sum(new_bill) FROM users_new_bill  WHERE userid='$ids'";
$result4 = mysqli_query($conn,$sql4)or die( mysqli_error($conn));
$row4=mysqli_fetch_array($result4) ;

	$total_to_be_payed= $row4[0];


?>
      <div class="bill-details mt-2  col-sm-12">
        <div class="bill text-center rounded shadow p-3  text-white bg-secondary">
             <h4>Current bill details </h4>
             <p>Current bill: <b class="bg-danger p-1 rounded">₵<?php echo $amount ?> (<?php echo $month_name ?>)</b> </p>
             <p>Amount paid (for <?php echo $month_name ?>): <b class="bg-success p-1 rounded">₵<?php echo $pay_date ?></b> </p>
             <p>Total amount to be paid: <b class="bg-warning p-1 rounded">₵<?php echo $total_to_be_payed?></b> </p>
             <p>Amount paid: <b class="bg-success p-1 rounded">₵<?php echo $total_payed?></b> </p>
             <p>Remaining to be paid to ECG: <b class="bg-danger p-1 rounded">-100 cedis</b> </p>
        </div>
      </div>