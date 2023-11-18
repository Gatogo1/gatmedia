
                
                
                <!--banner area end -->
        <div class="container">
             <h3 id="plumbing" class="text-center text-white  bg-primary w-50  ">Plumbing</h3>
             <hr>
            <div class="row mt-2">
                
            <?php 



               $one='1';
             
               $sql="select *  from blog where  status='$one' AND category='plumbing' order by id desc LIMIT 7 OFFSET 1   ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
           include('cleanUrl.php');
         
          while ($row=mysqli_fetch_array($result)) {
           $data=$row['id'];
           $date=$row['date'];
           $tittle=$row['tittle'];
           $image=$row['image'];
           $content=$row['content'];
           $category=$row['category'];
           $by=$row['by'];
             $slug=create_slug($tittle);
        
            $code=$data*1540948579;
           
           $links="blog_details.php?id=$slug";
           $sql2 = "select * from pagehits where ide='$data' ";
           $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
           $page_view = mysqli_num_rows($result2) ;
                 ?>
               <div class="col-lg-3   col-sm-6">
                    <div class="single-post-wrap border-bottom ">
                        <div class="thumb">
                            <a href="<?=$links; ?>"><img src="adm/upload/<?php echo $image?>" alt="img"></a>
                            <a href="<?=$links;?>" class="tag-base tag-blue"><?php echo $category?></a>
                        </div>
                        <div class="details">
                            <h4 class="title"><a  href="<?=$links;?>"><?php echo $tittle?></a></h4>
                            <div class="post-meta-single  mt-3">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i><?php echo $date?></li>
                                    <li><i class="fa fa fa-user-o"></i><?php echo $by?></li>
                             
                                    <li><i class="fa fa fa-eye"></i><?php echo $page_view?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>  
        
        
        
        
        
           
                <!--Mechanicla-->
        <div class="container">
             <h3 id="mechanical" class="text-center text-white  bg-primary w-50  ">Mechanical</h3>
             <hr>
            <div class="row mt-2">
                
            <?php 
                


               $one='1';
             
               $sql="select *  from blog where  status='$one' AND category='mechanical' order by id desc LIMIT 7 OFFSET 1   ";
          $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
         
         
          while ($row=mysqli_fetch_array($result)) {
           $data=$row['id'];
           $date=$row['date'];
           $tittle=$row['tittle'];
           $image=$row['image'];
           $content=$row['content'];
           $category=$row['category'];
           $by=$row['by'];
          $slug=create_slug($tittle);
            $code=$data*1540948579;
           
           $links="blog_details.php?id=$slug";
           $sql2 = "select * from pagehits where ide='$data' ";
           $result2 = mysqli_query($conn,$sql2)or die( mysqli_error($conn));
           $page_view = mysqli_num_rows($result2) ;
                 ?>
               <div class="col-lg-3   col-sm-6">
                    <div class="single-post-wrap border-bottom ">
                        <div class="thumb">
                            <a href="<?=$links; ?>"><img src="adm/upload/<?php echo $image?>" alt="img"></a>
                            <a href="<?=$links;?>" class="tag-base tag-blue"><?php echo $category?></a>
                        </div>
                        <div class="details">
                            <h4 class="title"><a  href="<?=$links;?>"><?php echo $tittle?></a></h4>
                            <div class="post-meta-single  mt-3">
                                <ul>
                                    <li><i class="fa fa-clock-o"></i><?php echo $date?></li>
                                    <li><i class="fa fa fa-user-o"></i><?php echo $by?></li>
                             
                                    <li><i class="fa fa fa-eye"></i><?php echo $page_view?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>  