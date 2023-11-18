
    if(trim($_POST['password'])=='' || trim($_POST['pass1'])=='')
    {
        echo"<script>alert('All fields are required!'); window.location='../login.php'</script>";
   
    }
    else if($_POST['password'] != $_POST['pass1'])
    {
    echo"<script>alert('Passwords do not march re enter password and try again!'); window.location='../login.php'</script>";
    }

    
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
		$sql = "INSERT INTO `users`( `username`, `email`, `contact`, `image`, `apartment_name`, `password`, `tv`, `fan`, `ac`, `iron`, `blender`, `ligths`, `microwave`, `fridge`, `music_system`, `Hot_plate`, `water_heater`, `rice_cooker`,`status`,`usertype`) VALUES ('$username','$email','$contact','$filename','$apartment_name','$password','$tv','$fan','$ac','$iron','$blender','$ligths','$microwave','$fridge','$music_system','$Hot_plate','$water_heater','$rice_cooker','$status','$usertype')";
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