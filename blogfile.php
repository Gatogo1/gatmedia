

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
                           
                               <li ><img src="adm/user_pic/<?php echo $imag?>" alt="" width="40" class="rounded-circle" /> </i><span style=" font-size:15px;"><?php echo $byF ?>  <?php echo $byS ?>
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
                    <img style="display:<?php echo $imgs ?>;"  src="adm/upload/<?php echo $image?>" alt="<?php echo $tittle?>" style="width:100%;">
                    <video style="display:<?php echo $vi ?>;"  width="100%"    controls controlsList="nodownload" loop  playsinline >
                               <source src="adm/upload/<?php echo $image;?>" type="video/mp4">

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
           $category=$row['category'];
          $byf=$row['fname'];
           $bys=$row['sname'];
           $img=$row['img'];
           $dis=$row['dis'];
       $slug=$row['slug'];
       $code=$data*1540948579;
  $links="blog_details.php?id=$slug";           $sql2 = "select * from pagehits where postID='$data' ";
           $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
           $page_view = mysqli_num_rows($result2) ;
           
           $page_v=round($page_view/6);
                      
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
                                 <li><img src="adm/user_pic/<?php echo $imag?>" alt="" width="40" class="rounded-circle" /> </i><span style=" font-size:15px;"><?php echo $byF ?>  </span> 

                           
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
                               <source src="adm/upload/<?php echo  $row['image'];?>" type="video/mp4">

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