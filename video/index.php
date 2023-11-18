
<!--head section-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="description" content="home page of Volta media Gh">
    <meta name="keywords" content="blogs,electricals,news,plumbing,history">
    <meta name="author" content="Gatogo Daniel">
    <title>Gat Media gh</title>
    
    <!-- favicon -->
    <link rel=icon href="../assets/img/log2.jpg" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../assets/css/vendor.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/blo.css">
    <link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2968819446328051"
     crossorigin="anonymous"></script>
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-234007409-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-234007409-1');
</script>
     
</head>

<style>
.bottom-left {
  position: absolute;
  bottom: 8px;
  left: 1px;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}


.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  color:white;
  font-size:70px;
  transform: translate(-50%, -50%);
}

</style>
<!--end head section-->
<body>

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
   <?php include('conn.php');?>
<div class="navbar-area">
        <!-- topbar end-->
        <div class="topbar-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-5 mt-2 mt-md-0 text-md-right text-center">
                        <div class="topbar-social">
                            <div class="topbar-date d-none d-lg-inline-block"><i class="fa fa-calendar"></i><?php echo date("l, F jS") ?></div>
                            <ul class="social-area social-area-2">
                                <li><a class="facebook-icon" href="https://web.facebook.com/Gatmediagh"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="twitter-icon" href="https://twitter.com/gatmediagh"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="youtube-icon" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a class="instagram-icon" href="https://www.instagram.com/gatmediagh"><i class="fa fa-instagram"></i></a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- topbar end-->

        <!-- adbar end-->
        <div class="adbar-area bg-black d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 align-self-center">
                        <div class="logo text-md-left text-center">
                            <a class="main-logo" href="index.php"><img src="assets/img/log2.jpg"style="width:200px;" alt="img"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7 text-md-right text-center">
                        <a href="#" class="adbar-right">
                            <img src="assets/img/add/1.png" alt="img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- adbar end-->

        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo d-lg-none d-block">
                        <a class="main-logo" href="index.php"><h5><span class="text-white">Gat</span> <span class="text-warning">Meida Gh</span></h5></a>
                    </div>
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#nextpage_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="nextpage_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li class="current-menu-item">
                            <a href="index.php">Home</a>
                        </li>           
                       
                          <li class="current-menu-item">
                            <a href="#contact">contact Us</a>
                        </li> 
                          <li class="current-menu-item">
                            <a href="#about">About Us</a>
                        </li> 
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <div class="menu-search-inner">
                        <input type="text" placeholder="Search For">
                        <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->

    <!-- banner area start -->

<!--banner area end -->

<div class="container">
            <div class="row mt-6">
            <?php 
                


               $one='1';
             
               $sql="select * from blog where contentType='video' AND status='$one'    ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
         
         
          while ($row=mysqli_fetch_array($result)) {
           $data=$row['id'];
           $date=$row['date'];
           $tittle=$row['tittle'];
           $image=$row['image'];
           $content=$row['content'];
           $category=$row['category'];
           $by=$row['by'];
             $code=$data*1540948579;
           
           $links="../blog_details.php?id=$code";

           $sql2 = "select * from pagehits where ide='$data' ";
           $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
           $page_view = mysqli_num_rows($result2) ;
                 ?>
               <div class="col-lg-3  mt-4 col-sm-6">
                    <div class="single-post-wrap ">
                    <a href="<?=$links;?>">
                        <div class="thumb">
                     <video   width="100%" height="300" id="myvideo">
                           <source src="../adm/upload/<?php echo $image?>" type="video/mp4" >
                        </video>
                        <div class="centered"><i class="fa fa-play" aria-hidden="true"></i></div>
                        <div class="bottom-left"> <a href="<?=$links;?>"><?php echo $tittle?>
                    
                    
                    </div>
                        </a>
          </a>
                        </div>
                        <div class="details">
                            <div class="post-meta-single mt-3">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i><?php echo $date?></li>
                                    <li><i class="fa fa fa-user-o"></i><?php echo $by?></li>
                                    <li><i class="fa fa-comment-o" aria-hidden="true"></i>20</li>
                                    <li><i class="fa fa-heart-o" aria-hidden="true">1k</i></li>
                                    <li><i class="fa fa fa-eye"></i><?php echo $page_view?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

        
                
                <?php } ?>
            </div>
        </div>  
    </div>





                <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>          

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- banner area end -->
  
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
           <?php include('../comm/footer.php')?>
           <!--footer end-->

 

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->

    <!-- all plugins here -->
    <script src="../assets/js/vendor.js"></script>
    <!-- main js  -->
    <script src="../assets/js/main.js"></script>
</body>
</html>