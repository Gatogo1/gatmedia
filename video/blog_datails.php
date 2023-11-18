<!--head section-->
<?php session_start(); ?>
<?php 
include('conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=$id/1540948579;
}

?>
<!DOCTYPE html>
<html lang="zxx">
<head>

     <?php 
          

          $sql="select * from blog where id='$id2' ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
          
       
          while ($row=mysqli_fetch_array($result)) {
       
          
           $tittle=$row['tittle'];
      $image=$row['image'];
      $content=$row['content'];
          
          ?>
              <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="<?php echo $tittle?>">
    <meta property="og:image" content="adm/upload/<?php echo $image?>" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $tittle ?></title>
  
    <!-- favicon -->
    <link rel=icon href="../assets/img/log2.jpg" sizes="20x20" type="image/png">
  <?php  } ?>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../assets/css/vendor.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/blo.css">
     
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
  <script type='text/javascript'>
        var isCtrl = false;
        document.onkeyup=function(e)
        {
        if(e.which == 17)
        isCtrl=false;
        }
        document.onkeydown=function(e)
        {
        if(e.which == 123)
        isCtrl=true;
        if (((e.which == 85) || (e.which == 65) || (e.which == 88) || (e.which == 67) || (e.which == 86) || (e.which == 2) || (e.which == 3) || (e.which == 123) || (e.which == 83)) && isCtrl == true)
        {
        alert('This is Function Disabled');
        return false;
        }
        }
        // right click code
        var isNS = (navigator.appName == "Netscape") ? 1 : 0;
        if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
        function mischandler(){
            alert('This is Function Disabled');
        return false;
        }
        function mousehandler(e){
        var myevent = (isNS) ? e : event;
        var eventbutton = (isNS) ? myevent.which : myevent.button;
        if((eventbutton==2)||(eventbutton==3)) return false;
        }
        document.oncontextmenu = mischandler;
        document.onmousedown = mousehandler;
        document.onmouseup = mousehandler;
        //select content code disable  alok goyal
        function killCopy(e){
        return false
        }
        function reEnable(){
        return true
        }
        document.onselectstart=new Function ("return false")
        if (window.sidebar){
        document.onmousedown=killCopy
        document.onclick=reEnable
        }
        </script>
</head>

<style>
.con {
  position: relative;
  text-align: center;
 
  color: white;
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


.cta {
    position: fixed;
    bottom: 20px;
    right:20px;
    width: 200px;
    height: 90px;
      border-radius: 30px 20px;
    background: #5875c4;
    z-index: 1;
    transition: all 1s;
}
.hide {
    opacity:0;
    left:-100%;
}
.show {
    opacity:1;
    left:0;
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
    <?php include('comm/nav.php')?>
    <!-- navbar end --> 
    <?php 
          

          $sql="select * from blog where id='$id2' ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
          
       
          while ($row=mysqli_fetch_array($result)) {
           $data=$row['id'];
           $_SESSION['id']=$row['id'];
           $date=$row['date'];
           $tittle=$row['tittle'];
           $image=$row['image'];
           $content=$row['content'];
           $category=$row['category'];
           $category1=$row['main_category'];
           $by=$row['by'];
           $video=$row['video'];
           $links="blog_details.php?id=$id";
          } 
          $user_ip_address = $_SERVER['REMOTE_ADDR'];
          $user_agent = $_SERVER['HTTP_USER_AGENT']; 
           $today = date("Y-m-d"); 
          $my_ip='Mozilla/5.0 (Linux; Android 12; itel A662L) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Mobile Safari/537.36';
           
          if ($user_agent!=$my_ip) {
               // Image db insert sql
               $sql = "INSERT INTO `pagehits`( `id1`,`user_agent`, `user_IP`,`ide`, `date`) VALUES ('$data','$user_agent','$user_ip_address','$data','$today')";
               if(mysqli_query($conn,$sql)){
             
               }
          }
               
               
          

                   
                 ?>

   
<div class="con">
 <div class="img_blind" >
  <img src="assets/img/de_logo.jpg" alt="Snow" style="width:100%;height:200px;">
  </div>
  
  <div class="centered"><?php echo $tittle ?>
  <div class="post-meta-single ">
        <ul>
            <li class="text-white"><i class="text-white fa fa-clock-o"></i><?php echo $date?></li>
            <li  class="text-white"><i class="fa fa fa-user-o"></i><?php echo $by?></li>
                     <?php 
                          $sql1 = "select * from comments where id2='$data' ";
                          $result1 = mysqli_query($conn,$sql1)or die( mysqli_error($conn));
                          $rowcount = mysqli_num_rows($result1) ;
                     ?>
            <li  class="text-white"><i class="fa  fa-comment-o"></i><?php echo $rowcount?> </li>
            
            <?php include('comm/page_view.php')?>
            <li  class="text-white"><i class="fa  fa-eye"></i><?php echo $page_view ?></li>
        </ul>
    </div>
  </div> 
</div>

<!---post details ---->
<div class="container pb50">
    <div class="row">
        <div class="col-md-9 mt-4 mb40">
            <article>
              
                <div class="post-content">
                    <img src="adm/upload/<?php echo $image?>" alt="<?php echo $tittle?>" style="width:100%;">
                    

                  
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
                    <p style="font-size:30px;"><?php echo $content ?> </p>
                    <div class="video">
                        <?php echo $video ?>
                        
                        <!--- publisher ----->
                     
                        <ul class="list-unstyled">
    <li class="media">
        <img class="d-flex mr-3 img-fluid" width="64" src="assets/img/ava.jpg" alt="Generic placeholder image">
        
        <div class="media-body">
            <p class="mt-3 mb-1"><?php echo $by?></p> 
        </div>
    </li>

</ul>
                        
                        <!---end publisher --->
                    </div>
                    <?php include('comm/social_share.php')?>
                    <hr class="mb40">
                    <!--
                    <h4 class="mb40 text-uppercase font500">About Author</h4>
                    <div class="media mb40"> 
                        <i class="d-flex mr-3 fa fa-user-circle fa-5x text-primary"></i>
                        <div class="media-body">
                            <h5 class="mt-0 font700">Jane Doe</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>--->
                    <hr class="mb40">
                    <?php
                    $da=$data;
          $sql = "select * from comments where id2='$da' ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
      $rowcount = mysqli_num_rows($result) ;
      

    // Return the number of rows in result set
  
    ?>
                    <h4 class="mb40 text-uppercase font500"><?php echo $rowcount?> Comments</h4>
                    <!--comment area
                
                     <!--- Comment on post end-->
                </div>
            </article>
            <!-- post article-->

        </div>
        <div class="col-md-3 mb40">
            <!--/col-->
            <div>
                <h4 class="sidebar-title">More Post </h4>
                <?php 
          

          $sql="select * from blog where  NOT id = '$id2'  order by id desc LIMIT 30 OFFSET 1 
         ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
         
         
          while ($row=mysqli_fetch_array($result)) {
           $data=$row['id'];
           $date=$row['date'];
           $tittle=$row['tittle'];
           $image=$row['image'];
           $content=$row['content'];
           $by=$row['by'];
               $category=$row['category'];
   $code=$data*1540948579;
           
           $links="blog_details.php?id=$code";

                   
                 ?>
                <ul class="list-unstyled">
                    <li class="media">
                        <img class="d-flex mr-3 img-fluid" width="64" src="adm/upload/<?php echo $image?>" alt="Generic placeholder image">
                        
                        <div class="media-body">
                            <h5 class="mt-0 mb-1"><a href="<?=$links;?>"><?php echo $tittle?></a></h3> <?php echo $category1?>
                        </div>
                    </li>
            
                </ul>
                    <hr>
                <?php }?> 
            </div>
        </div>
    </div>

</div>

<!-- Link to social media --->
<div id="customID" class="cta hide m-2 ">
<p class=" m-2 text-white">Please like and follow as </p>
<div class="col-lg-6 col-md-5 mt-2 mt-md-0 text-md-right text-center">
                        <div class="topbar-social">
                            <div class="topbar-date d-none d-lg-inline-block"><i class="fa fa-calendar"></i><?php echo date("l, F jS") ?></div>
                            <ul class="social-area social-area-2">
                                <li><a class="facebook-icon" href="https://web.facebook.com/Gatmediagh"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter-icon"href="https://twitter.com/gatmediagh?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false"><i class="fa fa-twitter"></i></a></li>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                <li><a class="instagram-icon" href="https://www.instagram.com/gatmediagh"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>

</div>
<!--- end link to social media--->

    <?php include('comm/footer.php')?>
           <!--footer end-->

           <?php include('comm/user-log.php')?> 
<script type="text/javascript">
$('#submit').click(function(){
$('#form_submit').submit();
});
</script>

<script>
      myID = document.getElementById("customID");

var myScrollFunc = function() {
  var y = window.scrollY;
  if (y >= 500) {
    myID.className = "cta show"
    modal.style.display = "block";
  } else {
    myID.className = "cta hide"
    modal.style.display = "none";
  }
};

window.addEventListener("scroll", myScrollFunc);
</script>
    <!-- back to top area end -->
    
    <!-- all plugins here -->
    <script src="assets/js/vendor.js"></script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>
</html>