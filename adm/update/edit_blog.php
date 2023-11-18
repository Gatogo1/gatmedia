<?php 
include('../common/head.php');
include('../conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);
}
?>

 
           


<!DOCTYPE html>
<html lang="en">
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <title>Edit blog 
</title>
</head>
<body>
            <!-- The Modal -->
            <div class="" >
    <div class="">
      <div class="">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Blog</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
           
          <!-- Default form subscription -->
          <center>

          <?php 
$sql = "SELECT * FROM blog WHERE id='$id2' ";
$result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
?>
            <form method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm" class="form border-dark  mt-3 w-100 p-3">
                <div class="form-group">
                <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y") . "<br>"; ?>" name="date">
                 
                  <label for="title">Blog Title</label>
                  <input type="text" class="form-control" id="title" value="<?php echo $row['tittle'] ?>" name="title" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                <label class="form-label" for="form6Example2">Select Image 1</label>
                 <input type="file" class="form-control-file border" name="image">
                </div>

                <div class="form-group">
                    <label for="pwd">category</label>
                   <select class=" form-control w-50"name="cat" id="cat">
                    <option value="<?php echo $row['cat'] ?>"><?php echo $row['category'] ?></option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Business">Business</option>
                    <option value="Education">Education</option>
                    <option value="Politics">Politics</option>
                    <option value="Sports">Sports</option>
                   </select>
                  </div>
                  <div class="form-group">
                  <label for="title">Special link</label>
                  <input type="text" class="form-control" id="title" placeholder="" name="link" >
            
                </div>
                  <div class="form-group">
                    <label for="comment">Blogs Details</label>
                    <textarea   class="form-control" rows="1"  id="summernote"  value="<?php echo $row['content'] ?>"  name="content" ></textarea>
                  </div>
                  <input type="hidden" class="form-control" id="title" value=" <?php echo $_SESSION['usertype'] ?>" name="by">

   

    <!-- Sign in button -->
    <button class="btn btn-success   btn-block" name="submit" type="submit">Submit</button>


</form>

<!-- Modal footer -->
<div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
<?php 


include('../conn.php');


if(isset($_POST['submit'])){

	$filename = $_FILES['image']['name'];
    $tittle=$_POST['title'];
    $cat=$_POST['cat'];
    $content=$_POST['content'];
    $link=$_POST['link'];
    $date=$_POST['date'];
    $by=$_POST['by'];


	// Select file type
	$imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
	
	// valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");
 
	// Check extension
	if( in_array($imageFileType,$extensions_arr) ){
 
	// Upload files and store in database
	if(move_uploaded_file($_FILES["image"]["tmp_name"],'../upload/'.$filename)){
		// Image db insert sql
		$sql = "UPDATE `blog` SET `tittle`='[$tittle]',`category`='[$cat]',`content`='[$content]',`image`='[$filename]',`special link`='[$link]',`by`='[$by]',`date`='[$date]' WHERE id='$id2'";
		if(mysqli_query($conn,$sql)){
      echo"<script>alert('You Have Successfully edited this blogs blog'); window.location='../manage_blogs.php'</script>";
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
        height: 400,
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