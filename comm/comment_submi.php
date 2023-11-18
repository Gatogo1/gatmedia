<?php
 session_start();
 include('conn.php'); 

if(isset($_POST['submit'])){

	$userid =($_POST['userID']);
    $postid=($_POST['postID']);
     $comment=addslashes($_POST['comment']);
    
     $useridR=$userid/1540948579;
     $postidR=$postid/1540948579;

if (isset($_SESSION["email"]) ){
    $sql = "INSERT INTO `comments`( `userID`, `postID`,`content`) VALUES ('$useridR','$postidR','$comment')";
    if(mysqli_query($conn,$sql)){
  
    }
    else{
      echo 'Error: '.mysqli_error($conn);
    }   # code...
}
else{
    echo"<script>alert('You must login before you can comment'); window.location='login'</script>";
}

	
	
	}

?>