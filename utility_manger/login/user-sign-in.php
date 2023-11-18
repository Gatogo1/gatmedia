<?php 


include('../conns/conn.php');

$tv='0';
$fan='0';
$ac='0';
$iron='0';
$blender='0';
$ligths='0';
$microwave='0';
$fridge='0';
$music_system='0';
$Hot_plate='0';
$water_heater='0';
$rice_cooker='0';


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST['id'];
    $username=ucwords($_POST['username']);
    $email=$_POST['email'];
	$filename = $_FILES['image']['name'];
    $contact=$_POST['contact'];
    $apartment_name=strtoupper($_POST['apartment_name']);
    $usertype=$_POST['usertype'];
    $password=$_POST['password'];
    $pass1=$_POST['pass1'];
    $tv=$_POST['tv'];
    $fan=$_POST['fan'];
    $ac=$_POST['ac'];
    $iron=$_POST['iron'];
    $blender=$_POST['blender'];
    $ligths=$_POST['ligths'];
    $microwave=$_POST['microwave'];
    $fridge=$_POST['fridge'];
    $music_systems=$_POST['music_system'];
    $Hot_plate=$_POST['Hot_plate'];
    $water_heater=$_POST['water_heater'];
    $rice_cooker=$_POST['rice_cooker'];
   

 


   
    $sql="SELECT * FROM equipment  ";
    $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
    while ($row=mysqli_fetch_array($result)) {
       $tv_w=$row['television'];
       $fan_w=$row['celine_fan'];
       $ac_w=$row['air_conditioning'];
       $iron_w=$row['iron'];
       $blender_w=$row['blender'];
       $ligths_w=$row['lights'];
       $microwave_w=$row['microwave'];
       $fridge_w=$row['fridge'];
       $music_systems_w=$row['music_systems'];
       $hot_plate_w=$row['hot_plate'];
       $water_heater_w=$row['water_heater'];
       $rice_cooker_w=$row['hot_plate'];

    }


$total_unit=$tv+$fan+$ac+$iron+$blender+$ligths+$microwave+$fridge+$music_system+$Hot_plate+$water_heater+$rice_cooker;

$tv_r=$tv_w*$tv;
$fan_r=$fan_w*$fan;
$ac_r=$ac_w*$ac;
$iron_r=$iron_w*$iron;
$blender_r=$blender_w*$blender;
$ligths_r=$ligths_w*$ligths;
$microwave_r=$microwave_w*$microwave;
$fridge_r=$fridge_w*$fridge;
$music_systems_r=$music_systems_w*$music_systems;
$hot_plate_r=$hot_plate_w*$Hot_plate;
$water_heater_r=$water_heater_w*$water_heater;
$rice_cooker_r=$rice_cooker_w*$rice_cooker;

$total_w=$tv_r+$fan_r+$ac_r+$iron_r+$blender_r+$ligths_r+$microwave_r+$fridge_r+$music_systems_r+$hot_plate_r+$water_heater_r+$rice_cooker_r;



  
     if($_POST['password'] != $_POST['pass1'])
    {
    echo"<script>alert('Passwords do not march re enter password and try again!'); window.location='../login.php'</script>";
    }

    else{


	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename)){

        $sql = "SELECT * FROM `users` WHERE apartment_name='$apartment_name' ";

        $result=mysqli_query($conn,$sql);
    
        $row=mysqli_fetch_array($result);
        if ($row['apartment_name']==$apartment_name) {
            $usertype='user';
            $status='0';
        }
        else {
            $usertype='Admin';
            $status='1';
        }
		// Image db insert sql
		$sql = "INSERT INTO `users`( `id`,`username`, `email`, `contact`, `image`, `apartment_name`, `password`, `tv`, `fan`, `ac`, `iron`, `blender`, `ligths`, `microwave`, `fridge`, `music_system`, `Hot_plate`, `water_heater`, `rice_cooker`, `total_equip`, `tota_power`,`status`,`usertype`) VALUES ('$id','$username','$email','$contact','$filename','$apartment_name','$password','$tv','$fan','$ac','$iron','$blender','$ligths','$microwave','$fridge','$music_system','$Hot_plate','$water_heater','$rice_cooker','$total_unit','$total_w','$status','$usertype')";
		if(mysqli_query($conn,$sql)){
            echo"<script>alert(' WELCOME TO UTILITY KING. YOU CAN NOW LOGIN AND WAIT FOR CONFIRMATION FROM YOUR ADMIN'); window.location='../login.php'</script>";
		}
		else{
		  echo 'Error: '.mysqli_error($conn);
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['image']['name'].'<br/>';
	}
	}
}
} 

?>