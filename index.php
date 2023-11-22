<?php session_start(); ?>
<!--head section-->
<?php include('comm/head.php')?>
<!--end head section-->
<style>
a:hover {
  text-decoration: none;
}
a{

    color: #22166a;
}

    
    .img-sm {
    width: 46px;
    height: 46px;
}

.panel {
    box-shadow: 0 2px 0 rgba(0,0,0,0.075);
    border-radius: 0;
    border: 0;
    margin-bottom: 15px;
}

.panel .panel-footer, .panel>:last-child {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}

.panel .panel-heading, .panel>:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.panel-body {
    padding: 25px 20px;
}


.media-block .media-left {
    display: block;
    float: left
}

.media-block .media-right {
    float: right
}

.media-block .media-body {
    display: block;
    overflow: hidden;
    width: auto
}

.middle .media-left,
.middle .media-right,
.middle .media-body {
    vertical-align: middle
}

.thumbnail {
    border-radius: 0;
    border-color: #e9e9e9
}

.tag.tag-sm, .btn-group-sm>.tag {
    padding: 5px 10px;
}

.tag:not(.label) {
    background-color: #fff;
    padding: 6px 12px;
    border-radius: 2px;
    border: 1px solid #cdd6e1;
    font-size: 12px;
    line-height: 1.42857;
    vertical-align: middle;
    -webkit-transition: all .15s;
    transition: all .15s;
}
.text-muted, a.text-muted:hover, a.text-muted:focus {
    color: #acacac;
}
.text-sm {
    font-size: 0.9em;
}
.text-5x, .text-4x, .text-5x, .text-2x, .text-lg, .text-sm, .text-xs {
    line-height: 1.25;
}

.btn-trans {
    background-color: transparent;
    border-color: transparent;
    color: #929292;
}

.btn-icon {
    padding-left: 9px;
    padding-right: 9px;
}

.btn-sm, .btn-group-sm>.btn, .btn-icon.btn-sm {
    padding: 5px 10px !important;
}

.mar-top {
    margin-top: 15px;
}
.space{
    width: 300px;
    height: 100px;
 
}

.single-post-wrap{
    
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}
.com{

    font-weight: bold;
}
.btn{
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
   
}

.marginRow{
     margin:0px !important; 
     background:red;
   }
</style>
<body >
<?php 
if (isset($_SESSION["email"])) {
	$login_status='<i class="fa fa-sign-out" aria-hidden="true"></i>';
   $log_status='logout'; 
} else {
$login_status='<i class="fa fa-sign-in" aria-hidden="true"></i> ';
$log_status='login';
}

$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
?>

    <!-- header start -->
    <?php include('comm/nav.php')?>
    <!-- navbar end -->
        
    <!-- banner area start -->


<?php



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




// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
         include('cleanUrl.php');


       
                   
                 ?>




<div class="space">


</div>
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
             
               $sql="select * from blog where status='$one'  order by id desc LIMIT 30   ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
         
         
 

          while ($row=mysqli_fetch_array($result)) {
         
           



           $data=$row['id'];
           $creator=$row['id2'];
           $date=$row['date'];
           $tittle=$row['tittle'];
           $image=$row['image'];
           $content=$row['content'];
           $category=$row['category'];
           $img=$row['img'];
         $slug=$row['slug'];;
            $code=$data*1540948579;
            $new=$row['id'];
            $imag = str_replace(' ', '', $img);



            $sql1="select * from users where id='$creator' ";
            $result1 = mysqli_query($conn,$sql1)or die( mysqli_error($conn));
            $row1=mysqli_fetch_array($result1) ;
           
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
                                 <li><img src="adm/user_pic/<?php echo $row1['image']?>" alt="" width="40" class="rounded-circle" /> </i><span style=" font-size:15px;"><?php echo $row1['fname'] ?> <?php echo $row1['sname'] ?> </span> 

                           
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
                            <a  onclick="demoDisplay()"  href="<?=$links;?>"  ><img style="display:<?php echo $imgs ?>;" src="formValidation/upload/<?php echo $image?>"  alt="img"></a>
                            <video style="display:<?php echo $vi ?>;"  width="100%"  controls controlsList="nodownload" loop   muted playsinline >
                               <source src="formValidation/upload/<?php echo  $row['image'];?>" type="video/mp4">

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
                                <li class=" com  rounded"><samp class="p-1"><a  href="<?=$links;?>"  class=" btn btn-outline  btn-sm text-white" onclick="demoDisplay()" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-comment" aria-hidden="true"></i> Comment <?php echo $total_like ?></a></samp></li>
                 

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