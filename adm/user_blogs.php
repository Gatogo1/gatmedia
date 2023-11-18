<?php include("common/head.php") ;?>
<?php 
  /* Total page code */
 $today = date("Y-m-d");   
 $rest = substr("$today",-2); 
 /* post page code */
 $my=date('jS \ F Y');
$mont=strtotime($my);

$id_user=$_SESSION['id'];


 ?>


<style>
.fa {
  padding:5px;
  font-size: 20px;
  width: 30px;
  border-radius: 50%;
    text-align: center;
  text-decoration: none;
  margin: 10px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-whatsapp {
  background: green;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}


</style>


<body>
<?php include("common/tittle.php") ;?>
    <div class="container-fluid">

        <div class="row">
            <div class="content col-sm-10 bg-light">
                <!--info-->
                <div class="container">
                 
                 
                    
                <?php

include('conn.php')   ;

$sql1="select * from blog  where Id_user='$user_id' ";
$result1 = mysqli_query($conn,$sql1)or die( mysqli_error($conn));


$row1=mysqli_fetch_array($result1); 

  $data=$row1['id'];
  $byF=$row1['byF'];
  $position=$row1['status'];
    $tittle=$row1['tittle'];
    $image=$row1['image'];
$month= date("F");


                          $sql1 = "select * from pagehits where user_id='$id_user'  ";
                          $result1 = mysqli_query($conn,$sql1)or die( mysqli_error($conn));
                          $total_views = mysqli_num_rows($result1) ;
                          
                           $sql4 = "select * from pagehits where date='$today' and user_id='$id_user'   ";
                          $result4 = mysqli_query($conn,$sql4)or die( mysqli_error($conn));
                          $today_views = mysqli_num_rows($result4) ;
                          
                          
                             $sql2 = "select * from pagehits where month='$month' and user_id='$id_user'  ";
                          $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
                          $blog_month = mysqli_num_rows($result2) ;
                      
                      
                      
                             $sql5 = "select * from pagehits where user_agent='Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36 X-Middleton/1'  ";
                          $result5 = mysqli_query($conn,$sql5)or die( mysqli_error($conn));
                          $ug = mysqli_num_rows($result5) ;
                      
                      $today_v=round($today_views/6);
                    
                      $month_v=round($blog_month/6);
                                      

                      $today_earning=$today_v*0.01;
                       $month_earning=$month_v*0.01;
                       
                       

                     
                     ?>



             
                                 <div class="row">
                                     <div class="col rounded-lg m-2 text-center bg-primary text-white" style="font-size: 18px;">
                                     <p>Today Earning</p>
                                    <b>$<?php echo $today_earning ?></b>

                                    </div>
                                     <div class="col text-center rounded-lg m-2 bg-primary text-white" style="font-size: 18px;">
                                      <p>Today Views</p>
                                    <b><?php echo $today_v ?></b>
                                    </div>
                                </div>

                                <div class="row">
                                     <div class="col text-center rounded-lg m-2 bg-primary text-white" style="font-size: 18px;">
                                    <p>October earning</p>
                                    <b>$<?php echo $month_earning ?></b>

                                    </div>
                                     <div class="col text-center rounded-lg m-2 bg-primary text-white" style="font-size: 18px;">
                                      <p>October Views</p>
                                    <b><?php echo $month_v?></b>
                                    </div>
                           
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<hr class="bg-warning">
          <!--- info end ---->
<div class="container-fluid">
    
  
                 <a href="add_lif.php" type="button" class="btn btn-warning m-2">Add Lifestyle Blogs</a>
                  <a href="add_news.php" type="button" class="btn btn-warning m-2">Add News Blogs</a>
                   <a href="add_story.php" type="button" class="btn btn-warning m-2">Add Story</a>
                  <a href="add_video.php" type="button" class="btn btn-warning m-2">Add Video</a>
<div class="row">




                
   <!--Table-->
   <h5 class='mb-3'>Blogs Management</h5>

   
               
                <div  >
<?php

   include('conn.php')   ;

 $sql="select * from blog   where  id_user='$id_user' order by id desc LIMIT 30 ";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
function create_slug($string){
   $slug=preg_replace('/[^A-Za-z0-9-:-?-()-,-’-]+/', '-', $string);
   return $slug;}

 while ($row=mysqli_fetch_array($result)) {
  $data=$row['id'];
  $position=$row['status'];
    $tittle=$row['tittle'];
    $image=$row['image'];
     $slug=$row['slug'];
  $link="delete/del_blog.php?id=".urlencode(base64_encode($data));
  $link1="update/edit_blog.php?id=".urlencode(base64_encode($data));
  $action="update/edit_blog_status.php?id=".urlencode(base64_encode($data));
  $dat=$data;
   
           
           
           
  $text='';

  if ($position==='1') {
    $text='Active';
    $read='btn-success';
  }
  else {
    $text='Inactive';
    $read='btn-danger';
  }

                 
          
           $sql2 = "select * from pagehits where id1='$dat' ";
           $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
           $page_view = mysqli_num_rows($result2) ;
           
$page_v=round($page_view/6);
     
           $file_t = substr(strrchr($image ,'.'),1);
if ($file_t=='mp4') {
  $vi='block';
  $img='none';
}
else {
  $vi='none';
  $img='block';
}


              ?>

   <!----- blog details area ----->
   <div class="row">
  <div class="col-sm-4 mb-2">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" style="display:<?php echo $img ?>;"  src="upload/<?php echo  $row['image'];?>" alt="Card image cap">
          
<video style="display:<?php echo $vi ?>;"  width="100%"  controls>
  <source src="upload/<?php echo  $row['image'];?>" type="video/mp4">

</video>
      <p class="date text-center"><?php echo  $row['date'];?> | <samp class="text-bold"><?php echo  $page_v;?></samp> Views</p>
        <h5 class="tittle text-center"><?php echo  $row['tittle'];?></h5>
        <p class="dis text-center"><?php echo  $row['category'];?></p>


          <div class="social text-center">
              <a href="https://www.facebook.com/sharer.php?u=https://Gatmediagh.com/blog_details.php?id=<?php  echo $slug?>" target="_blank" title="Share this post on Facebook" class="fa fa-facebook"></a>
              <a href="whatsapp://send?text=https://Gatmediagh.com/blog_details.php?id=<?php  echo $slug?>" data-action="share/whatsapp/share" class="fa fa-whatsapp"></a>
              <a href="#" class="fa fa-linkedin"></a>
          </div>
          <div class="button text-center">
              <a href="<?=$link1; ?>" class="btn btn-primary">Edit</a>
              <a href="<?=$link; ?>" class="btn btn-danger">Delete</a>
              <a href="<?=$action; ?>" class="btn <?php echo $read ?>"><?php echo $text ?></a>
          </div>
      </div>
    </div>
  </div>
  

</div>


<!----- end blog details area ----->




      <?php }?>
   
  </div>     

            </div>

        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
    
<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>


<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">


    

            </div>

        </div>

    </div>




</body>