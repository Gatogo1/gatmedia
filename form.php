
<!DOCTYPE html>
<html lang="en">
<?php include("comm/head.php") ;?>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <title>User Registration
</title>

<style>
    .blog-bt{
        margin-top:50px;
    }

    lable{
        font-size: 60px;
    }
</style>
</head>
<body>
    
    
    
    
    
 <!-- Large modal -->
 


    

<div class="">
  <div class="">
    <div class="modal-content">
    <center>

    <div class="logo">
       <img style="width: 200px; ;" src="adm/image/log2.jpg" alt="">
   </div>
    <h4>User Registration</h4>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Read our term and conditions
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Gat media GH is a media platform which aims at providing users with the latest news, blogs, entertainment, sports, reviews, and current affairs. It also offers a range of features including videos, articles, podcasts and newsletters. Gat media GH also provides a comprehensive directory of local and international news sources.

<b>Your duties:</b> <br>

As a content creator on Gat media gh, you would create your content and share it across various social media platforms. You can also access a range of tools and resources to help you create and market your content. Gat Media GH also offers you the opportunity to monetize your content. You would be using various AI auto-generated content creation tools which would make your work easier and faster. You must read your articles well before posting them. Any article that makes no sense will be rejected.
<br>

<b>Earnings:</b> <br>

Your earnings would be influenced by many factors including, <br>

Number of posts per day: your earnings per post range from $0.17-$2. <br>

Assuming you posted 10 articles on Monday. Your EPP (earnings per post) would be $0.17x10= $1.7. <br>

Page Views per post: Your earnings per 1000 post views range from $0.01-$1. <br>

Assuming you had 1000 views on Monday. Your PVPP (page view per post) would be $0.01x1000= $10. <br>

3. Monthly bundle bonus: You will be given a monthly bonus of $10 per 130 posts. <br>

Summary: <br>

Let's calculate your basic earnings per month. <br>

Assuming <br>

Total posts in June = 200. <br>

Tolat  post views = 10000 <br>

Your monthly EPP = 200x0.17. <br>

EPP = $34. <br>

Your monthly PVPP = 10000 x 0.01 <br>

PVPP = $100. <br>

This means your total earnings for June are = $34 + $100 + $10 <br>

June earnings = $144. <br>

Please be sure to read and understand the terms and conditions before submitting the form. <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<br>



             
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">


<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="policy" id="inlineRadio1" value="accept">
  <label class="form-check-label" for="inlineRadio1">Accept</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="policy" id="inlineRadio2" value="Decline">
  <label class="form-check-label" for="inlineRadio2">Decline</label>
</div>

    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
    <input type="hidden" class="form-control" id="title" value=" creator" name="usertype">
     
      <label class="tittle" for="title">First name</label>
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
      <label for="title">Country and Location</label>
      <input type="text" class="form-control" id="title" placeholder="eg. London, Barnsbury" name="location" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>



      
    <label class="form-label" for="form6Example2">User Image</label>
<input type="file" class="form-control-file border" name="image">

<label for="title">Blog category </label>
      <input type="text" class="form-control" id="title" placeholder="Enter blog category" name="cat" required>
      
    <div class="form-group mb-2">
    <label for="pwd">Gender</label>
                   <select class=" form-control w-50"name="gender" id="cat">
                   <option value="">Select  gender</option>
                    <option value="male">Male</option>
                    <option value="female">female</option>
       </select>
      </div>


    



<!-- Sign in button -->
<button class="btn btn-success  mt-2  btn-block" name="submit" type="submit">Submit</button>


    </div>
    </div>
    
</form>
</center>
    </div>
  </div>
</div>


<?php 


include('comm/conn.php');


if(isset($_POST['submit'])){

	$filename = $_FILES['image']['name'];
    $fname=$_POST['fname'];
    $sname=$_POST['sname'];
     $email=$_POST['email'];
     $usertype=$_POST['usertype'];
    $number=$_POST['number'];
     $pass=$_POST['pass'];
    $lacation=$_POST['location'];
    $cat=$_POST['cat'];
    $gender=$_POST['gender'];
    $date=$_POST['date'];
    $policy=$_POST['policy'];



    $sql = "SELECT `email`, `fname` FROM `users` WHERE `fname`='".$fname."' AND `email`='".$email."'";
$result = $conn->query($sql);

if($result->num_rows >= 1) {
  echo"<script>alert('Email already exits please use another email'); window.location='register'</script>";
} else {
 



//returns 'does-this-thing-work-or-not'


	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif","mp3","mp4","avi","mpeg");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'adm/user_pic/'.$filename)){
		// Image db insert sql
		$sql = "INSERT INTO `users`( `fname`, `sname`, `email`, `number`, `image`, `password`, `location`,`cat`, `gender`, `usertype`, `date`)VALUES ( '$fname','$sname','$email','$number','$filename','$pass','$lacation','$cat','$gender','$usertype','$date')";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('Your application was successfully submitted. Review usually takes up to two days. Reviews would be sent to you by email '); window.location='lifestyle.php'</script>";
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