<?php 
include('../common/head.php');
/* Local Database*/


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
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=$id;
}




if(isset($_POST['submit'])){

	$filename = $_FILES['image']['name'];
   




	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif","mp3","mp4","avi","mpeg");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'../cover_image/'.$filename)){
		// Image db insert sql
        $sql = "UPDATE blog SET cover_image='$filename' WHERE slug='$id2' ";
        $query_run = mysqli_query($conn, $sql);
        if(mysqli_query($conn,$sql)){
            echo"<script>alert('You Have Successfully added a new blog'); window.location='../manage_blogs.php'</script>";
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add cover image</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h4>Please Select a cover Image for the video</h4>
    <form  method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3 ">
    <label class="form-label" for="form6Example2">Select Image </label>
   <input type="file" class="form-control-file border" name="image">
   <button class="btn btn-success   btn-block" name="submit" type="submit">Submit</button>
    </form>

</body>
</html>
