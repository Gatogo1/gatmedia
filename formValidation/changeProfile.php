<?php session_start();

if(!isset($_SESSION['email']))
{
    header("location:login");

}


        if (isset($_SESSION["email"])) {
	$image=$_SESSION["image"];
    $uid=$_SESSION['id'];

    $useridCODE=md5('$uid');     
} else {
  header("location:login");
$uid=0;
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=icon href="img/logo.png" sizes="20x20" type="image/png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:400,100|Roboto+Condensed:700" rel="stylesheet" type="text/css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <title>Change Profile image </title>
</head>
<body>
<form class=""  method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm">
      <input type="hidden" class="form-control" id="title" value=" <?php echo $useridCODE?>" name="userID">
      <div class="form-group">
    <label for="exampleFormControlFile1">Insect image <?php echo $uid  ?></label>
    <input type="file" name="image" class="form-control-file w-100" id="exampleFormControlFile1">
    <div class="invalid-feedback">Select Image</div>
  </div>

      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>

      </form>
</body>
</html>
<?php 


/*
 $servername = "localhost";
$username = "gatmedia_Gatogo";
$password = "Ga@1540948579";
$dbname = "gatmedia_gat-blog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
*/

 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thekambh_gat-blog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}





if(isset($_POST['submit'])){

	$filename = $_FILES['image']['name'];
    $id=md5($_POST['userID']);
 
 


	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'user_pic/'.$filename )){
		// Image db insert sql
		$sql = "UPDATE `users` SET `image`='$filename' WHERE id='$uid'";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('You Have Successfully updated your profile'); window.location='../profile.php'</script>";
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
