
<?php session_start(); ?>
<?php include('comm/head.php') ?>


<?php

include('comm/conn.php');
        if (isset($_SESSION["email"])) {
	$image=$_SESSION["image"];
    $uid=$_SESSION['id'];
    $useridCODE=$uid*1540948579;      
} else {
  header("location:login");
$uid=0;
}  


?>
<!----- create post ---->
<style>
    .form{
       
    }
</style>
<div class="form text-center m-4 ">

<h5>Create a Post</h5>

<form action="formValidation/postValidation.php" method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm">
      <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
      <input type="hidden" name="userID"  class="form-control" id="formGroupExampleInput2" value=" <?php echo $uid?>">
  <div class="form-group">
    <label for="formGroupExampleInput">Tittle</label>
    <input  type="text" class="form-control" name="tittle" id="formGroupExampleInput" placeholder=" Input blog tittle hear">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Content</label>
    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group ">
      <label for="inputState">Category</label>
      <select id="inputState" name="cat" class="form-control">
        <option selected>Choose...</option>
        <option value="education">Education</option>
        <option value="news">News</option>
        <option value="entertainment">Entertainment</option>
        <option value="art">Art</option>
        <option value="fun">Fun</option>
        <option value="lifestyle">Lifestyle</option>
        <option value="stories">Stories</option>
      </select>
    </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Insect file</label>
    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
    <div class="invalid-feedback">File can be Image or video</div>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Paste media link if any </label>
    <textarea class="form-control" name="link" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Submit post</button>
      </div>

      </form>
</div>
<!----- end create post ---->