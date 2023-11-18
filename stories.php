
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

    
</style>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPMWSP9X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- preloader area start -->
 
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
    <?php include('comm/nav.php')?>
    <!-- navbar end -->
        
    <!-- banner area start -->


<?php

 $servername = "localhost";
$username = "gatmedia_Gatogo";
$password = "Ga@1540948579";
$dbname = "gatmedia_gat-blog";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
         include('cleanUrl.php');


       
                   
                 ?>
  <div class="banner-area banner-inner-1 bg-black" id="banner">
      <h3 class="text-center pt-2  text-white">Feed</h3>
       
        <div class="container">
            
             <hr>
            <div class="row mt-6">
                
            <?php 
                


               $one='1';
             
               $sql="select * from blog where status='$one' and main_category='story' order by id desc LIMIT 50   ";
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
         $slug=create_slug($tittle);
            $code=$data*1540948579;
            
            $imag = str_replace(' ', '', $img);
           
  $links="blog_details.php?id=$slug";           $sql2 = "select * from pagehits where id1='$data' ";
           $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
           $page_view = mysqli_num_rows($result2) ;
             
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
               <div id="post" class=" post col-lg-3  col-sm-6">
                    <div class=" border border-light rounded text-center single-post-wrap style-white">
                    <div class="details">
                           
                            <div class="post-meta-single mt-3">
                            



                            <ul>
                                 <li><img src="adm/user_pic/<?php echo $imag?>" alt="" width="40" class="rounded-circle" /> </i><span style=" font-size:15px;"> by: <?php echo $byF ?>  <?php echo $byS ?></span> 

                           
                                <div class="topbar-social">
                           
                            <ul class=" social-area-2">
                              
                                <li><a class="facebook-icon" href="https://www.facebook.com/sharer.php?u=https://Gatmediagh.com/blog_details.php?id=<?php  echo $slug?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter-icon" href="https://www.twitter.com/sharer.php?u=https://Gatmediagh.com/blog_details.php?id=<?php  echo $slug?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube-icon bg-success" href="https://api.whatsapp.com/sharer.php?u=https://Gatmediagh.com/blog_details.php?id=<?php  echo $slug?>"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a class="instagram-icon" href="https://www.instagram.com/gatmediagh"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                            
                            
                            </li>
                          
                          </ul>
                                <ul>
                                
                                    
                                    <li><i class="fa fa-clock-o"></i><?php echo $date?></li>
                                  
                             
                                    
                                </ul>
                            </div>
                            <h4 class="title m-2"><a  class="text-white"  href="<?=$links;?>"><?php echo $tittle?></a></h4>
                        </div>
                        <div class="thumb">
                            <a href="<?=$links; ?>"><img style="display:<?php echo $imgs ?>;" src="adm/upload/<?php echo $image?>"  alt="img"></a>
                            <video style="display:<?php echo $vi ?>;"  width="100%"  controls controlsList="nodownload" loop   muted playsinline >
                               <source src="adm/upload/<?php echo  $row['image'];?>" type="video/mp4">

                             </video>
                            <a href="<?=$links;?>" class="tag-base tag-blue"><?php echo $category?></a>
                        </div>
                        <div class="details m-2">
                          
                            <hr class="bg-success">
                            <div class="post-meta-single mt-3">
                                <ul>
                                    <li class="border rounded"><samp class="p-1"><i class="fa fa-heart-o"></i>Love <?php echo'0'?></samp></li>
                                    <li class="border rounded"><samp class="p-1"><i class="fa fa fa-comment-o"></i>Comment <?php echo '0'?></samp></li>
                             
                                    <li class="border rounded"><samp class="p-1"><i class=" fa fa fa-eye"></i>Views <?php echo $page_v?></samp></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>  
    </div>
    
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