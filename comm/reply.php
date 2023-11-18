<h4 class="mb40 text-uppercase font500">Post a comment</h4>
                    <form method="post"  enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Daniel Gatogo">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="boyamg32@gmail.com">
                        </div>
                        <div class="form-group">
                            <label>Comment </label>
                            <textarea class="form-control" name="content" rows="5" placeholder="Comment"></textarea>
                        </div>
                        <input type="hidden" class="form-control" id="title" value=" <?php echo $data; ?>" name="id">
                        <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y") ; ?>" name="date">
                        <input class="w-100" name="post_id" type="hidden" value=" <?php echo $data; ?>" >
                        <div class="clearfix float-right">
                            <button  type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </form>
                    <?php 
include('conn.php');
if(isset($_POST['submit'])){

    $username=$_POST['name'];
    $email=$_POST['email'];
    $post_id=$_POST['post_id'];
    $content=$_POST['content'];
    $date=$_POST['date'];
    $id2=$_POST['id'];




		// Image db insert sql
		$sql = "INSERT INTO `comments`( `username`,`id2`, `email`,`ids`, `content`, `date`) VALUES ('$username','$id2','$email','$post_id','$content','$date')";
		if(mysqli_query($conn,$sql)){
      
		}
		else{
		  echo 'Error: '.mysqli_error($conn);
		};

    }
?>