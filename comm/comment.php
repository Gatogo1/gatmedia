
<style>

body{background: #eee}.date{font-size: 11px}.comment-text{font-size: 30px}.fs-12{font-size: 12px}.shadow-none{box-shadow: none}.name{color: #007bff}.cursor:hover{color: blue}.cursor{cursor: pointer}.textarea{resize: none}
</style>






<div class="comment-section ">
    <div class="row justify-content-center ">
        <div class="col-lg-12">
            <div class="d-flex flex-column comment-section">
<!--comment section start--->
<?php
include('conn.php');
if (isset($_SESSION["email"])) {
	$image=$_SESSION["image"];
    $uid=$_SESSION['id'];
   
} else {
$image='';
}
$useridCODE=$uid*1540948579;

    # code...

$sql="select * from comments where postID='$data'";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

          while ($row=mysqli_fetch_array($result)) {
           $comentID=$row['id'];
           $postID=$row['postID'];
           $userID=$row['userID'];
           $content=$row['content'];
           $date=$row['date'];
           $status=$row['status'];
            $code=$data*1540948579;

            $sql2 = "SELECT * FROM `users` WHERE id='".$row['userID']."' ";
            $result2=$conn->query($sql2);
            $row2=$result2->fetch_assoc();      
                 ?>
                 <div class="coment-sec bg-white mb-2">
                <div class=" p-2">
                    <div class="d-flex flex-row user-info"><img class="" src="adm/user_pic/<?php echo $row2['image']?>" width="40">
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name"><?php echo $row2['fname'] ?> <?php echo $row2['sname'] ?></span><span class="date text-black-50">Shared publicly - <?php echo $date ?></span></div>
                    </div>
                    <div class="mt-2">
                    <?php echo $content ?>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="d-flex flex-row fs-12">
                        <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                        <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
                        <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
                    </div>
                </div>
                </div> 
                <?php } ?>
<!--- comment section end -->
                
                <div class="bg-light p-2">
                <iframe name="votar" style="display:none;"></iframe> 
                    <form action="comm/comment_submi.php"  method="POST" target="votar">
                        <input type="hidden" name="userID" value="<?php echo $useridCODE ?>">
                        <input type="hidden" name="postID" value="<?php echo $code ?>">
                    <div class="d-flex flex-row align-items-start"><img class="" src="adm/user_pic/<?php echo $image ?>" width="40"><textarea name="comment" class="form-control ml-1 shadow-none textarea"></textarea></div>
                    <div class="mt-2 text-center"><button  class="btn btn-primary w-100 " type="submit" name="submit">Post comment</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

