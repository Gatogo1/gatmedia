

<!--head section-->
<!--head section-->
<?php session_start(); ?>
<?php 
include('comm/head.php');
include('comm/conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn,$_GET['id']);
$id2=$id;

}

?>
   <?php 
 $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    
    ?>
<!DOCTYPE html>
<html lang="zxx">
<head>

     <?php 
             include('cleanUrl.php');

          $sql="select * from blog where slug='$id2' ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
          
       
          while ($row=mysqli_fetch_array($result)) {
       
          
           $tittle=$row['tittle'];
      $image=$row['image'];
      $content=$row['content'];
          $cover=$row['cover_image'];
          $upload='upload';
              $file_t1 = substr(strrchr($image ,'.'),1);
           if ($file_t1=='mp4') {
             $image=$cover;
             $upload='cover_image';
        
           }
          ?>
              <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="<?php echo $slug?>">
    <meta property="og:image" content="https://gatmediagh.com/adm/upload/<?php echo $image?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="googlebot" content="notranslate">
    <meta name="description" content="<?php echo $tittle ?>">
    <meta name="google-adsense-account" content="ca-pub-2553699547868173">
    <title><?php echo $tittle ?></title>
  
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $tittle?>" />
<meta property="og:description"        content="<?php echo $tittle ?>" />
<meta property="og:image" content="https://gatmediagh.com/adm/<?php echo $upload?>/<?php echo $image?>" />


  
  
    <!-- favicon -->
    <link rel=icon href="assets/img/log2.jpg" sizes="20x20" type="image/png">
  <?php  } ?>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/blo.css">

     
     
     
     
     <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2553699547868173"
     crossorigin="anonymous"></script>
     
      <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9QC1MEJ1V2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9QC1MEJ1V2');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MPMWSP9X');</script>
<!-- End Google Tag Manager -->
     
     
     
     
     
     

















</head>

<style>
.con {
  position: relative;
  text-align: center;
 
  color: white;
}

video::-internal-media-controls-download-button {
    display:none;
}

video::-webkit-media-controls-enclosure {
    overflow:hidden;
}

video::-webkit-media-controls-panel {
    width: calc(100% + 30px); /* Adjust as needed */
}


.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 40px;

  transform: translate(-50%, -50%);
}

   
@media only screen and (max-width: 600px) {
	.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 10px;

  transform: translate(-50%, -50%);
}



}

p{
    color:black;
    font-size: 40px;
    
}
.space{
    width: 300px;
    height: 150px;
 
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
     margin: 0px !important; 
     background:red;
   }

</style>
<!--end head section-->
<body>
    
  
     <!-- preloader area start -->
     <?php// include('comm/preloder.php')?>
    <!-- preloader area end -->
     <!-- search popup start-->
     <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- header start -->
    <?php  include('comm/nav.php') ?>
    <!-- navbar end --> 

    <div class="space">


</div>
    <?php 
        if (isset($_SESSION["email"])) {
	$image=$_SESSION["image"];
    $uid=$_SESSION['id'];
    $uid=$_SESSION['id'];
   
    $useridCODE=$uid*1540948579;      
} else {
$image='';
$uid=0;
}  

        
        


               $one='1';
                $sql="select * from blog where slug='$id2'";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

          while ($row=mysqli_fetch_array($result)) {
         
           



           $data=$row['id'];
           $date=$row['date'];
           $creatorID=$row['id2'];
           $tittle=$row['tittle'];
           $image=$row['image'];
           $video=$row['video'];
           $content=$row['content'];
           $category=$row['category'];
           $byF=$row['fname'];
           $byS=$row['sname'];
           $img=$row['img'];
           $dis=$row['dis'];
         $slug=create_slug($tittle);
            $code=$data*1540948579;
          }
           $imag = str_replace(' ', '', $img);
           
            $file_t = substr(strrchr($image ,'.'),1);
           if ($file_t=='mp4') {
             $vi='block';
             $imgs='none';
           }
           else {
             $vi='none';
             $imgs='block';
           }


 $sql2 = "select * from pagehits where postID='$data' ";
$result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
$page_view = mysqli_num_rows($result2) ;
  
  $page_v=round($page_view/6);
           
//code to get user details
          $user_ip_address = $_SERVER['REMOTE_ADDR'];
          $user_agent = $_SERVER['HTTP_USER_AGENT']; 
           $today = date("Y-m-d");
           $month=date("F") ;

           $user_agent1=str_replace(' ', '', $user_agent);

//Checking and submitting views into database
           $sql2 = "select * from pagehits where viewer='$user_agent1' and postID='$data'";
           $result2= mysqli_query($conn,$sql2)or die( mysqli_error($conn));
           $user_like = mysqli_num_rows($result2) ;
        if(mysqli_num_rows($result2)>=1)
          {
           $view_color='red';
          }  

 else{
    $sql9 = "INSERT INTO `pagehits`( `postID`, `viewer`, `creatorID`) VALUES ('$data','$user_agent1','$creatorID')";
    if(mysqli_query($conn,$sql9)){
       
    }
    else{
      echo 'Error: '.mysqli_error($conn);
    }   
   
                  };
                
          
              
                 $word= str_word_count( $content);
                   
              
                   
                 ?>

   
<div class="conn">
 <div class="img_blin" >
  </div>
 
</div>





<!---post details ---->

 <div class=" post-meta-single   mt-3">
    <div class="   border border-light rounded text-center single-post-wrap  ">
                    <div class="details">
                           
                            <div class=" post-meta-single  mt-3">
                            



                            <ul>
                           
                               <li ><img src="adm/user_pic/<?php echo $imag?>" alt="" width="40" class="rounded-circle" /> </i><span style=" font-size:15px;"><?php echo $row1['fname'] ?> <?php echo $row1['sname'] ?>
                               <i class="fa fa-clock-o "></i><?php echo $date?>  <i style="color:<?php echo $view_color ?>" class="fa pl-2 fa-eye" aria-hidden="true"></i><?php echo $user_like ?>
                            </span> 
                                <div class="topbar-social">
                           
                            <ul class=" social-area-2">
                              
                                <li><a class="facebook-icon" href="https://www.facebook.com/sharer.php?u=<?php echo $url ?>" target="_blank" title="Share this post on Facebook"><i class="fa fa-facebook"></i></a>
                                <li><a class="youtube-icon bg-success" href="https://api.whatsapp.com/send?text=<?php echo $url ?>" data-action="share/whatsapp/share "><i class="fa fa-whatsapp"></i></a></li>
                           
                            </ul>
                        </div>
                            
                            
                            </li>
                          
                          </ul>
                                <ul>
                                
                                    
                                    <li></li>
                                  
                             
                                    
                                </ul>
                            </div>
                          
                            <h4 class="title m-2"><?php echo $tittle?></h4>
                        </div>

<div class=" ">
    <div class="row  m-0 p-0  ">
        <div class="col-sm-9 mt-4">
            <article class="  ">
              
                <div class="post-content">
                    <img style="display:<?php echo $imgs ?>;"  src="formValidation/upload/<?php echo $image?>" alt="<?php echo $tittle?>" style="width:100%;">
                    <video style="display:<?php echo $vi ?>;"  width="100%"    controls controlsList="nodownload" loop  playsinline >
                               <source src="formValidation/upload/<?php echo $image;?>" type="video/mp4">

                             </video>
                   <!-- <ul class="post-meta list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-user-circle-o"></i> <a href=""><?php echo $by ?></a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-tags"></i> <a href="#"><?php echo $category ?></a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-calendar-o"></i> <a href="#"><?php echo $date ?></a>
                        </li>
                    </ul>--->
                    <p style="font-size:5vw;" class="font-weight-normal"> <?php echo $content ?> </p>
                    <div class="video">
                        <?php echo $video ?>
                        
                    </div>
                    <?php include('comm/social_share.php')?>
                    <hr class="mb40">
 
              
                </div>
            </article>

               
            <?php /*
                    $da=$data;
          $sql = "select * from comments where id2='$da' ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
      $rowcount = mysqli_num_rows($result) ;
      

    // Return the number of rows in result set
  */
    ?>      
                   
                
               

            <!-- post article-->
            <?php include('comm/comment.php')?>  
        </div>

              

        <div class="col-md-3 mb40">
            <!--/col-->
   <!--banner area end -->
            
                
  <div class="banner-area banner-inner-1 bg-black" id="banner">
      <h3 class="text-center pt-2  text-white">Related Post</h3>
       
        <div class="">
            
             <hr>
            <div class="row mt-6">
                
            <?php 
                


               $one='1';
             
               $sql="select * from blog where status='$one'  AND category='$category' AND  NOT slug = '$id2' order by id desc LIMIT 8    ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
         
         
 

          while ($row=mysqli_fetch_array($result)) {

           $data=$row['id'];
           $date=$row['date'];
           $tittle=$row['tittle'];
           $image=$row['image'];
           $content=$row['content'];
          $creator=$row['id'];
       $slug=$row['slug'];
       $code=$data*1540948579;
  $links="blog_details.php?id=$slug";           $sql2 = "select * from pagehits where postID='$data' ";
           $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
           $page_view = mysqli_num_rows($result2) ;
           
           $page_v=round($page_view/6);
                   
           


           $sql1="select * from users where id='$creator' ";
           $result1 = mysqli_query($conn,$sql1)or die( mysqli_error($conn));
           $row1=mysqli_fetch_array($result1) ;   
//code for comment total number
$sql3 = "select * from comments where postID='$data' ";
$result3 = mysqli_query($conn,$sql3)or die( mysqli_error($conn));
$total_comment = mysqli_num_rows($result3) ;

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
               <div class="col-lg-12  col-sm-6">
                    <div class=" pb-2 m-2 rounded text-center single-post-wrap style-white ">
                    <div class="details">
                           
                            <div class="post-meta-single mt-3">
                            



                          
                            <ul>
                                 <li><img src="adm/user_pic/<?php echo $row['image']?>" alt="" width="40" class="rounded-circle" /> </i><span style=" font-size:15px;"><?php echo $row1['fname'] ?> <?php echo $row1['sname'] ?> </span> 

                           
                                <div class="topbar-social">
                           
                            <ul class=" social-area-2">
                              
                                <li><a class="facebook-icon" href="https://www.facebook.com/sharer.php?u=https://Gatmediagh.com/blog_details.php?id=<?php  echo $slug?>"><img src="assets/img/add/fb.png" alt="" width="40" class="rounded-circle" /></a></li>
                               
                                <li><a class="" href="whatsapp://send?text=https://Gatmediagh.com/blog_details.php?id=<?php  echo $slug?>"><img src="assets/img/add/wa1.png" alt="" width="40" class="rounded-circle" /></i></a></li>
                               
                            </ul>
                        </div>
                            
                            
                            </li>
                          
                          </ul>
                                <ul>
                                
                                    
                                    <li style="font-size:10px;" class="text-white"><i class="fa fa-clock-o "></i><?php echo $date?></li>
                                  
                             
                                    
                                </ul>
                            </div>
                            <p class="title m-2"><a onclick="demoDisplay()"  class="text-white"  href="<?=$links;?>"><?php echo $tittle?></a></p>
                        </div>
                        <div class="thumb">
                            <a onclick="demoDisplay()"  href="<?=$links; ?>"><img style="display:<?php echo $imgs ?>;" src="adm/upload/<?php echo $image?>" alt="img"></a>
                            <video style="display:<?php echo $vi ?>;"  width="100%"  controls controlsList="nodownload" loop  playsinline >
                               <source src="formValidation/upload/<?php echo  $row['image'];?>" type="video/mp4">

                             </video>
                            <a href="<?=$links;?>" class="tag-base tag-blue"><?php echo $category?></a>
                        </div>
                        <div class="details m-2">
   
                            <hr class="bg-success">
                            <div class="post-meta-single mt-3">
                            <ul>
                                <li  class=" com border rounded"><samp class="p-1"><i class="fa fa-heart-o" aria-hidden="true"></i> Love <?php echo $page_v?></samp></li>
                                    
                                    <li class=" com border rounded"><samp class="p-1"><a  href="<?=$links;?>"  class="text-white" onclick="demoDisplay()" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-comment-o" aria-hidden="true"></i> Comment <?php echo $total_comment?></a></samp></li>
                  
                                    <li  class=" com border rounded"><samp class="p-1"><i class="fa fa-eye" aria-hidden="true"></i> Views <?php echo $page_v?></samp></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>  
    </div>
    </div>
  
    <!-- banner area end -->
  
           <!--footer end-->
  <?php include('comm/footer.php')?>
         
           


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
<script  type="text/javascript">
$('#submit').click(function(){
$('#form_submit').submit();
});
</script>
    <!-- back to top area end -->
    
    <!-- all plugins here -->
    <script defer src="assets/js/vendor.js"></script>
    <!-- main js  -->
    <script defer src="assets/js/main.js"></script>
</body>
</html>