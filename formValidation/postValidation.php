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
    $tittle=addslashes($_POST['tittle']);
    $cat=$_POST['cat'];
     $id_user=$_POST['userID'];
    $content=addslashes($_POST['content']);
     $link=$_POST['link'];
     $date=$_POST['date'];




function create_slug($string){
   $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
   return $slug;
}
$slug= create_slug($tittle);
//returns 'does-this-thing-work-or-not'


	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif","mp3","mp4","avi","mpeg");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename )){
		// Image db insert sql
		$sql = "INSERT INTO `blog`(  `id2`,`tittle`,`slug`, `category`, `content`, `image`,`video`,`date`) VALUES ('$id_user','$tittle','$slug','$cat','$content','$filename','$link','$date')";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('You Have Successfully added a new blog'); window.location='../profile.php'</script>";
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
