
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('comm/head.php')?>
  <style>
.profile-head {
    transform: translateY(5rem)
}

.cover {
    background-image: url(https://images.unsplash.com/photo-1530305408560-82d13781b33a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=80);
    background-size: cover;
    background-repeat: no-repeat
}

body {
    
}
.space{
    width: 300px;
    height: 30px;
 
}


  </style>
  <title>User Profile</title>
</head>
<body>
  
</body>
</html>

<?php 

include('comm/conn.php');
        if (isset($_SESSION["email"])) {
	$image=$_SESSION["image"];
    $uid=$_SESSION['id'];
    $uid=$_SESSION['id'];
   
    $useridCODE=$uid*1540948579;      
} else {
  header("location:index.php");
$uid=0;
}  

        
        


               $one='1';
                $sql="select * from users where id='$uid'";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

          while ($row=mysqli_fetch_array($result)) {
         
           



           $data=$row['id'];
         
         
           $image=$row['image'];
          
         
           $byF=$row['fname'];
           $byS=$row['sname'];
          
            $code=$data*1540948579;
          }
         
           
      
 $sql1 = "select * from blog where id2='$data' ";
 $result1 = mysqli_query($conn,$sql1)or die( mysqli_error($conn));
 $total_post = mysqli_num_rows($result1) ;   


 $sql2 = "select * from pagehits where creatorID='$uid' ";
$result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
$page_view = mysqli_num_rows($result2) ;
  
  $page_v=round($page_view/6);
           


  $total_earning=$page_v*0.01;         
              
                   
                 ?>

<?php include('comm/nav.php')?>
<div class="space">


</div>

<div class="row  no-gutters">
   <div class="col-md-8 mx-auto"> 
    <!-- Profile widget -->
     <div class="bg-white shadow rounded overflow-hidden">
       <div class="px-4 pt-0 pb-4 cover">
         <div class="media align-items-end profile-head">
           <div class="profile mr-3"><img src="adm/user_pic/<?php echo $image?>"alt="..." width="130"   class="rounded mb-2 img-thumbnail"><a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a>
          </div> 
          <div class="media-body mb-5 text-white"> <h4 class="mt-0 mb-0 text-white"><?php echo $byF ?> <?php echo $byS ?></h4>
 <p class="small mb-4"> <i class="fa fa-map-marker mr-2"></i>New York</p> </div> 
</div>
 </div>
 <div class="bg-light p-4 d-flex mt-4 justify-content-end text-center">
   <ul class="list-inline mt-3"> 
    <li class="list-inline-item"> 
      <h5 class="font-weight-bold mb-0 d-block"><?php echo $total_post?></h5>
      <small class="text-muted"> <i class="fa fa-image mr-1"></i>Post</small> </li> <li class="list-inline-item"> 
  <h5 class="font-weight-bold mb-0 d-block">$<?php echo $total_earning ?></h5>
  <small class="text-muted"> <i class="fa fa-money mr-1"></i>Total Earning</small> </li> <li class="list-inline-item">
  

<h5 class="font-weight-bold mb-0 d-block"><?php echo $page_v ?></h5>

<small class="text-muted"> <i class="fa fa-eye mr-1"></i>Total post Views</small> </li> </ul> </div> <div class="px-4 py-3">
  
<!---create post section --->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm m-3" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus-square-o" aria-hidden="true"></i>
Create new blog
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

<!----- create post ---->
      <form action="formValidation/postValidation.php" method="post" name="sentMessage" enctype="multipart/form-data" id="contactForm">
      <input type="hidden" class="form-control" id="title" value=" <?php echo date(" jS \ F Y")  ?>" name="date">
      <input type="hidden" name="userID"  class="form-control" id="formGroupExampleInput2" value=" <?php echo $uid?>">
  <div class="form-group">
    <label for="formGroupExampleInput">Tittle</label>
    <input type="text" class="form-control" name="tittle" id="formGroupExampleInput" placeholder=" Input blog tittle hear">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Content</label>
    <input type="text" name="content"  class="form-control" id="formGroupExampleInput2" placeholder=" Input blog content">
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
    <label for="exampleFormControlFile1">Select file</label>
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
  </div>
</div>
<!----- end create post ---->

<h5 class="mb-0">About</h5> <div class="p-4 rounded shadow-sm bg-light"> <p class="font-italic mb-0"></p> <p class="font-italic mb-0">Lives in New York</p> <p class="font-italic mb-0">Photographer</p> </div> </div> 


   <h5 class="mb-0">Recent post</h5>
   <a href="#" class="btn btn-link text-muted">Show all</a> 
  

   <div class="banner-area     bg-black" id="banner">
        <div class="">
            
             <hr>
            <div class="row  no-gutters">
            <?php 
      if (isset($_SESSION["email"])) {
            $uid=$_SESSION['id'];
          $useridCODE=$uid*1540948579;  
           
        } else {
        $uid=0;
        } 

               $one='1';
             
               $sql="select * from blog where id2='$uid'  order by id desc LIMIT 50   ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
         
         
 

          while ($row=mysqli_fetch_array($result)) {
         
           



           $data=$row['id'];
           $date=$row['date'];
           $tittle=$row['tittle'];
           $image=$row['image'];
           $content=$row['content'];
           $category=$row['category'];
           $byF=$row['fname'];
           $byS=$row['sname'];
           $img=$row['img'];
           $dis=$row['dis'];
         $slug=$row['slug'];;
            $code=$data*1540948579;
            $new=$row['id'];
            $imag = str_replace(' ', '', $img);
           
  $links="blog_details.php?id=$slug";           $sql2 = "select * from pagehits where postID='$data' ";
           $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
           $page_view = mysqli_num_rows($result2) ;
         
           
//code for comment total number
$sql3 = "select * from comments where postID='$data' ";
$result3 = mysqli_query($conn,$sql3)or die( mysqli_error($conn));
$total_comment = mysqli_num_rows($result3) ;

//code for like total number
$sql4 = "select * from love where postID='$data' ";
$result4 = mysqli_query($conn,$sql4)or die( mysqli_error($conn));
$total_like = mysqli_num_rows($result4) ;

//code for like color this code was used to give color to like icon when the user has already liked the comment
$sql7 = "select * from love where userID='$uid' and postID='$data'  ";
$result7 = mysqli_query($conn,$sql7)or die( mysqli_error($conn));
$user_like = mysqli_num_rows($result7) ;
if(mysqli_num_rows($result7)>=1)
{
$like_color='red';
} 

else {
    $like_color='';
}
  $page_v=round($page_view/6);
           $file_t = substr(strrchr($image ,'.'),1);
           if ($file_t=='mp4') {
             $vi='block';
             $imgs='none';
           }
           else {
             $vi='none';
             $imgs='block';
           }
         
           
                 ?>


<div id="post" class=" post col-lg-3 ">
                    <div class=" pb-2 m-1 rounded text-center single-post-wrap style-white">
                    <div class="details">
                           
                            <div class="post-meta-single mt-3"> 
                            
                       

                            <ul>
                                 <li><img src="adm/user_pic/<?php echo $imag?>" alt="" width="40" class="rounded-circle" /> </i><span style=" font-size:15px;"><?php echo $byF ?>  </span> 

                           
                                <div class="topbar-social">
                           
                            <ul class=" social-area-2">
                              
                                <li><a class="facebook-icon" href="https://www.facebook.com/sharer.php?u=https://Gatmediagh.com/blog_details.php?id=<?php  echo $slug?>"><img src="assets/img/add/fb.png" alt="" width="25" class="rounded-circle" /></a></li>
                               
                                <li><a class="" href="whatsapp://send?text=https://Gatmediagh.com/blog_details.php?id=<?php  echo $slug?>"><img src="assets/img/add/wa1.png" alt="" width="25" class="rounded-circle" /></i></a></li>
                               
                            </ul>
                        </div>
                            
                            
                            </li>
                          
                          </ul>
                                <ul>
                                
                                    
                                    <li style="font-size:10px;"><img src="assets/img/add/ti.png" alt="" width="20" class="rounded-circle" /><?php echo $date?></li>
                                  
                             
                                   
<br>

                                </ul>
                            </div>
                            <p class="title m-2"><a onclick="demoDisplay()"  href="<?=$links;?>" class="text-white"  ><?php echo $tittle?></a></p>
                        </div>
                        <div class="thumb">
                            <a  onclick="demoDisplay()"  href="<?=$links;?>"  ><img style="display:<?php echo $imgs ?>;" src="adm/upload/<?php echo $image?>"  alt="img"></a>
                            <video style="display:<?php echo $vi ?>;"  width="100%"  controls controlsList="nodownload" loop   muted playsinline >
                               <source src="adm/upload/<?php echo  $row['image'];?>" type="video/mp4">

                             </video>
                            <a href="<?=$links;?>" class="tag-base tag-blue"><?php echo $category?></a>
                        </div>
                        <div class="details m-1">
                          
                            <hr class="bg-success">
                            <div class="post-meta-single">
                            <iframe name="votar" style="display:none;"></iframe>  
                    <form action="comm/love_submi.php"  method="POST"  >
                    <ul >
                        <input type="hidden" name="userID" value="<?php echo $useridCODE ?>">
                        <input type="hidden" name="postID" value="<?php echo $code ?>">
                                <li id="<?php echo $data ?>" class=" com "><samp class="p-1"><button   type="submit" name="submit" class="text-white btn btn-outline  btn-sm"  data-toggle="modal" data-target="#exampleModal"><i style="color:<?php echo $like_color ?> "  class="fa  fa-heart" aria-hidden="true"></i><span  id="refresh"  > <?php echo $total_like ?> Love  </span></button></samp></li>
                                <li class=" com  rounded"><samp class="p-1"><a  href="<?=$links;?>"  class=" btn btn-outline  btn-sm text-white" onclick="demoDisplay()" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-comment" aria-hidden="true"></i> Comment <?php echo $data ?></a></samp></li>
                 

              </ul>
                     </form>
                              
             
                            </div>
                        </div>
                    </div>
                    
                </div>
             
                
                <?php } ?>
                
            </div>
        </div>  
    </div>


    <?php
                
                //Code for submitting love
                if(isset($_POST['submit'])){
                
                    $userid =($_POST['userID'])/1540948579;
                    $postid=($_POST['postID'])/1540948579;
                    
                
                if (isset($_SESSION["email"]) ){
                
                    $sql7 = "select * from love where userID='$userid' and postID='$postid'  ";
                    $result7 = mysqli_query($conn,$sql7)or die( mysqli_error($conn));
                    $user_like = mysqli_num_rows($result7) ;
                 if(mysqli_num_rows($result7)>=1)
                   {
                    $like_color='red';
                   }   
                else{
                
                
                    $sql8 = "INSERT INTO `love`( `userID`, `postID`) VALUES ('$userid','$postid')";
                    if(mysqli_query($conn,$sql8)){
                        echo"<script>alert('like submited ; window.location='home'</script>";
                
                    }
                    else{
                        echo 'Error: '.mysqli_error($conn);
                      
                    }
                    
                       # code...
                           };
                
                
                
                  
                }
                else{
                    
                    echo"<script>alert('You must login before you can comment) ; window.location='login'</script>";
                }
                
                    
                    
                    }
                   
                
                ?>   
   
    <!---- comment----->
    <!-- Button trigger modal -->
 

    <script type="text/javascript">

setInterval(function() {
    $("#refresh").load( "#refresh");
}, 10000); // seconds to wait, miliseconds


      function tabl(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("tabl").innerHTML = this.responseText;
        }
        xhttp.open("GET", "syste.php");
        xhttp.send();
      }

      setInterval(function(){
        tabl();
      }, 1);
    </script>
    <script>


function demoDisplay() {
  document.getElementById("myP1").style.display = "block";
}

</script>
    
    <script>
      


let video = document.getElementById('video')
function playPauseVideo() {
    let videos = document.querySelectorAll("video");
    videos.forEach((video) => {
        // We can only control playback without insteraction if video is mute
        video.muted = true;
        // Play is a promise so we need to check we have it
        let playPromise = video.play();
        if (playPromise !== undefined) {
            playPromise.then((_) => {
                let observer = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (
                                entry.intersectionRatio !== 1 &&
                                !video.paused
                            ) {
                                video.pause();
                            } else if (video.paused) {
                                video.play();
                            }
                        });
                    },
                    { threshold: 0.2 }
                );
                observer.observe(video);
            });
        }
    });
}

// And you would kick this off where appropriate with:
playPauseVideo();



    </script>
    
    
    <!-- banner area end -->

    <div class="post-area pd-top-75 pd-bottom-10" id="trending">
        <div class="container">
            <div class="row">
                <!--trending starts-->
                <?php // include('trending.php')?>
                 <!--trending end-->   
                 <!--latex news start-->
                
                 <!--latex news end-->          

    
               <!--what's news end-->
                <!--join with as start-->
                <!--<?php //include('join.php')?> --->
                <!--join with as end-->
               
            </div>
        </div>
    </div>
           <!--categories start-->
           <?php//  include('category.php')?>
           <!--categories end-->
           <!--tech start-->
           <?php// include('tech.php')?>
           <!--tech end-->
           <!--footer start-->
           <?php include('comm/footer.php')?>
           <!--footer end-->

 

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- all plugins here -->
    <script src="assets/js/vendor.js"></script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>
</html>
   