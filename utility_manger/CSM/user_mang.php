<?php include("common/head.php")?>
   
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <?php include("common/top_nav.php")?>
        <!-- end navbar top -->
        <?php include("common/sid_nav.php")?>
        <!-- navbar side -->
       
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <?php include("common/massage_note.php")?>
   <!--end  Welcome -->

          <!----free space--->
          <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Users Management System
                        </div>
                      
                        <div class="panel-body">
   
                            <div class="table-responsive">
                 
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
    

<style>
    .status{
       color:<?php echo $color ?>;
    }
    td{
        font-size: 18px;
    }
</style>
                        
                                    <thead>
                                        <tr>
                                            <th>Apartment Name</th>
                                            <th>Admin Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Number of Users</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php 

                              $sql="SELECT * FROM register  ";
                              $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

                              while ($row=mysqli_fetch_array($result)) {
  
                             $color='0';
                                $status='0';
                                 if ( $row['status']=='1') {
                                    $status='Avtive';
                                    $color='Green';
                                 }
                                 else {
                                     $status='Inactive';
                                     $color='red';
                                 }

                                 $part=$row['apartment'];


                                 $data=$row['id'];

                                 $link="update/user_sta_upd.php?id=".urlencode(base64_encode($data));
                                 $link1="update/user_sta_de.php?id=".urlencode(base64_encode($data));

                        ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['apartment']?></td>
                                            <td><?php echo $row['fullname']?></td>
                                            <td><?php echo $row['email']?></td>
                                            <td class="center"><?php echo $row['tellphone']?></td>
                                            <?php

                                                $sql="select * from users where  apartment_name='$part'";
                                                 $res=mysqli_query($conn,$sql);
                                               $num= mysqli_num_rows($res); 
                                                ?>
                                            <td class="center"><?php echo $num ?></td>
                                            <td class="center"><samp class="status"> <?php echo $status?></samp></td>
                                            <td class="center">
                                            <button class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"> <i class="fa fa-check-square" aria-hidden="true"></i></button>
                                                <button class="btn btn-danger"data-toggle="modal" data-target=".bd-example-modal-sm" ><i class="fa fa-window-close fa-fw"></i></button>
                                                <button class="btn btn-primary"><i class="fa fa-phone" aria-hidden="true"></i></button>
                                               
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                    
                                </table>
                               
                            </div>
                         
                        </div>
                      
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
          <!--end free space--->

    </div>
    <!-- end wrapper -->
<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm ">
    <div class="modal-content">
    <style>

        
        .btn{
            font-size:20px;
        }

        a{
            text-decoration:none;
        }
     </style>
             
          
             <center>
          
              <h1>Activate User</h1>
              <p>Are you sure you want to activate User</p>        
              <div class="clearfix">
              <input name="status" value="0" type="hidden">
                <a href="user_mang.php"class=" w-25 btn btn-primary ">Cancel</a>
                <a href="<?=$link; ?>" class="btn w-25 mb-2 btn-warning" name="submit" type="submit">confirm</a>
              </div>
         
             </center>
            
         
           
    </div>
  </div>
</div>

<!-- Small modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <style>

        
.btn{
    font-size:20px;
}

a{
    text-decoration:none;
}
</style>
     
  
     <center>
  
      <h1>deactivate User</h1>
      <p>Are you sure you want to deactivate User</p>        
      <div class="clearfix">
      <input name="status" value="0" type="hidden">
        <a href="user_mang.php"class=" w-25 btn btn-primary ">Cancel</a>
        <a href="<?=$link1; ?>" class="btn w-25 mb-2 btn-warning" name="submit" type="submit">confirm</a>
      </div>
 
     </center>    </div>
  </div>
</div>
</body>
</script>

<!-- Core Scripts - Include with every page -->
<script src="assets/plugins/jquery-1.10.2.js"></script>
<script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="assets/plugins/pace/pace.js"></script>
<script src="assets/scripts/siminta.js"></script>
<!-- Page-Level Plugin Scripts-->
<script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
<script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
<script>
 $(document).ready(function () {
     $('#dataTables-example').dataTable();
 });
</script>
</html>