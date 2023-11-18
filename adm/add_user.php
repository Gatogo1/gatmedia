
<!DOCTYPE html>
<html lang="en">
<?php include("common/head.php") ;?>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <title>Add User
</title>

<style>
    .blog-bt{
        margin-top:50px;
    }
</style>
</head>
<body>
    
    
    
    
    
 <!-- Large modal -->
 


    

<div class="">
  <div class="">
    <div class="modal-content">
    <center>
    <h4>News User</h4>
             
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
     
      <label for="title">First name</label>
      <input type="text" class="form-control" id="title" placeholder="Enter First name" name="fname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Last name</label>
      <input type="text" class="form-control" id="title" placeholder="Enter last name" name="sname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">email</label>
      <input type="email" class="form-control" id="title" placeholder="Enter email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     
    <div class="form-group">
      <label for="title">Phone-number</label>
      <input type="text" class="form-control" id="title" placeholder="Enter number" name="number" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>

    <div class="form-group">
      <label for="title">Password</label>
      <input type="text" class="form-control" id="title" placeholder="Enter password" name="pass" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
    <label for="pwd">Usertype</label>
                   <select class=" form-control w-50"name="usertype" id="cat">
                   <option value="">Select usertype</option>
                    <option value="creator">Creator</option>
                    <option value="manager">female</option>
       </select>
      </div>
    <div class="form-group">
      <label for="title">Location</label>
      <input type="text" class="form-control" id="title" placeholder="Enter last name" name="location" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>



      
    <label class="form-label" for="form6Example2">User Image</label>
<input type="file" class="form-control-file border" name="image">

<label for="title">Blog category </label>
      <input type="text" class="form-control" id="title" placeholder="Enter blog category" name="cat" required>
      
    <div class="form-group">
    <label for="pwd">Gender</label>
                   <select class=" form-control w-50"name="gender" id="cat">
                   <option value="">Select  gender</option>
                    <option value="male">Male</option>
                    <option value="female">female</option>
       </select>
      </div>



      <input type="hidden" class="form-control" id="title" value=" <?php echo $_SESSION['name'] ?>" name="by">



<!-- Sign in button -->
<button class="btn btn-success   btn-block" name="submit" type="submit">Submit</button>
 <button type="button" class="btn btn-secondary mt-2" data-dismiss="modal">Close</button>

    </div>
    </div>
    
</form>
</center>
    </div>
  </div>
</div>


<?php 


include('conn.php');


if(isset($_POST['submit'])){

	$filename = $_FILES['image']['name'];
    $fname=$_POST['fname'];
    $sname=$_POST['sname'];
     $email=$_POST['email'];
    $number=$_POST['number'];
     $pass=$_POST['pass'];
    $lacation=$_POST['location'];
    $gender=$_POST['gender'];
    $date=$_POST['date'];
    $usertype=$_POST['usertype'];






//returns 'does-this-thing-work-or-not'


	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif","mp3","mp4","avi","mpeg");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename)){
		// Image db insert sql
		$sql = "INSERT INTO `users`( `fname`, `sname`, `email`, `number`, `image`, `password`, `location`, `gender`, `usertype`, `date`) VALUES ( '$fname','$sname','$email','$number','$filename','$pass','$lacation','$gender','$usertype','$date')";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('You Have Successfully added a new User'); window.location='users.php'</script>";
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


</center>
<!-- Default form subscription --> 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>    
        $('#summernote').summernote({
       
        tabsize: 4,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
            </script>

<script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
</script>
    
        





</body>
</html>