<?php 
session_start();
$apart=$_SESSION['apartment-name'];

include('../conns/conn.php');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $date=$_POST['date'];
    $amount=$_POST['amount'];
	$filename = $_FILES['image']['name'];
    $apart=$_POST['apart'];


}

$sql="SELECT  sum(tota_power) FROM users  WHERE apartment_name='$apart'";
$result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
$row=mysqli_fetch_array($result) ;

	$total_w = $row[0];



    $sql="SELECT * FROM users WHERE apartment_name='$apart'";
    $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
    while ($row=mysqli_fetch_array($result)) {
		$id=$row['id'];
$am=$row['tota_power'];
    $re= round($amount/$am,2);

$amount_payable=round($am/$total_w*$amount,2);


     if($_POST['amount'] != $_POST['amount_con'])
    {
    echo"<script>alert('Your input amount miss match!'); window.location='../index.php'</script>";
    }

	$sql1 = "INSERT INTO `users_new_bill`(`userid`, `new_bill`, `amount_payable`,`apartment_name`,`date`) VALUES ('$id','$amount','$amount_payable','$apart','$date')";


	
		
	if(mysqli_multi_query($conn,$sql1)){
		echo"<script>alert(' NEW BILL ADDED SUCCESFULLY'); window.location='../index.php'</script>";
	}

	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename)){
//  insert sql users_new_bill
	
		// Image db insert sql
		$sql = "INSERT INTO `newbill`( `date`, `amount`, `image`, `apartment_name`) VALUES ('$date','$amount','$filename','$apart')";
		if(mysqli_query($conn,$sql)){
            echo"<script>alert(' NEW BILL ADDED SUCCESFULLY'); window.location='../index.php'</script>";
		}
		else{
		  echo 'Error: '.mysqli_error($conn);
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
	}
	}
	}

?>
