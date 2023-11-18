
<!DOCTYPE html>
<html lang="en">
<?php include("common/head.php") ;?>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <title>Edit News 
</title>

<style>
    .blog-bt{
        margin-top:200px;
    }
</style>
</head>
<body>
    
    
    
    
    
 <!-- Large modal -->
 
 <center>
     <div class="blog-bt">
          <h4 >Select Blog type</h4> <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Engineering</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-md">News</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Lifestyle</button>

    </div>
</center>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content bg-light">
    <center>

    <h4> Engineering blog</h4>    
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
     
      <label for="title">Blog Title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     
      <label for="title">Short Discription</label>
      <input type="text" class="form-control" id="dis" placeholder="Short discription" name="dis" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>



      
    <label class="form-label" for="form6Example2">Select Image 1</label>
<input type="file" class="form-control-file border" name="image">

<label for="title">Blog video link </label>
      <input type="text" class="form-control" id="title" placeholder="Enter blog video link hear if any" name="video" required>
      
        <div class="form-group">
           <input type="hidden" value="engineering"  name="main_cat">
        </div>
    <div class="form-group">
        <label for="pwd">category</label>
       <select class=" form-control w-50"name="cat" id="cat">
       <option value="">Select Category</option>
        <option value="plumbing">Plumbing</option>
        <option value="electrical">Electrical</option>
        <option value="mechanical">Mechanical</option>
       </select>
      </div>


<?php include("textarea.php") ;?>
    
      <input type="hidden" class="form-control" id="title" value=" <?php echo $_SESSION['name'] ?>" name="by">



<!-- Sign in button -->
<button class="btn btn-success   btn-block" name="submit" type="submit">Submit</button>
 <button type="button" class="btn btn-secondary mt-2" data-dismiss="modal">Close</button>

    </div>
    
</form>
</center>
    </div>
  </div>
</div>



<!-- Small modal -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content bg-light">
    <center>
    <h4>Lifestyle blog</h4>
             
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
     
      <label for="title">Blog Title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     
      <label for="title">Short Discription</label>
      <input type="text" class="form-control" id="dis" placeholder="Short discription" name="dis" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>



      
    <label class="form-label" for="form6Example2">Select Image 1</label>
<input type="file" class="form-control-file border" name="image">

<label for="title">Blog video link </label>
      <input type="text" class="form-control" id="title" placeholder="Enter blog video link hear if any" name="video" required>
      
        <div class="form-group">
           <input type="hidden" value="lifestyle"  name="main_cat">
        </div>
    <div class="form-group">
    <label for="pwd">category</label>
                   <select class=" form-control w-50"name="cat" id="cat">
                   <option value="">Select Category</option>
                    <option value="hf">Health and fitness</option>
                    <option value="dr">Datind and Relationship</option>
                    <option value="lifestyle">lifestyle</option>
                   </select>
      </div>



   <?php include("textarea.php") ;?>
      <input type="hidden" class="form-control" id="title" value=" <?php echo $_SESSION['name'] ?>" name="by">



<!-- Sign in button -->
<button class="btn btn-success   btn-block" name="submit" type="submit">Submit</button>
 <button type="button" class="btn btn-secondary mt-2" data-dismiss="modal">Close</button>

    </div>
    
</form>
</center>
    </div>
  </div>
</div>
    
    
    

<div class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    <center>
    <h4>New blog</h4>
             
<form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
    <div class="form-group">
    <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
     
      <label for="title">Blog Title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
     
      <label for="title">Short Discription</label>
      <input type="text" class="form-control" id="dis" placeholder="Short discription" name="dis" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>



      
    <label class="form-label" for="form6Example2">Select Image 1</label>
<input type="file" class="form-control-file border" name="image">

<label for="title">Blog video link </label>
      <input type="text" class="form-control" id="title" placeholder="Enter blog video link hear if any" name="video" required>
      
        <div class="form-group">
           <input type="hidden" value="news"  name="main_cat">
        </div>
    <div class="form-group">
    <label for="pwd">category</label>
                   <select class=" form-control w-50"name="cat" id="cat">
                   <option value="">Select Category</option>
                    <option value="politics">Politics</option>
                    <option value="sports">sports</option>
                    <option value="generalN">General news</option>
                    <option value="entertainmen">Entertainment</option>
       </select>
      </div>


<?php include("textarea.php") ;?>
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
    $tittle=addslashes($_POST['title']);
     $dis=$_POST['dis'];
    $cat=$_POST['cat'];
     $type=$_POST['b-type'];
    $content=addslashes($_POST['content']);
    $main_cat=$_POST['main_cat'];
    $date=$_POST['date'];
    $by=$_POST['by'];
     $video=$_POST['video'];


	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif","mp3","mp4","avi","mpeg");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'upload/'.$filename)){
		// Image db insert sql
		$sql = "INSERT INTO `blog`( `contentType`,`tittle`,`dis`, `category`, `content`, `image`, `main_category`, `by`,`video`, `date`) VALUES ('$type','$tittle','$dis','$cat','$content','$filename','$main_cat','$by','$video','$date')";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('You Have Successfully added a new blog'); window.location='manage_blogs.php'</script>";
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