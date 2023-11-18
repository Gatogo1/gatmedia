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
   <!--- Free Space--->
   <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <h3 class="panel-heading ">
                          Equipment Management System
                        </h3>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Equipment</button>
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
                                        <td>Television</td>
                                            <th>Celine Fan</th>
                                            <th>Air Conditioning</th>
                                            <th>Iron</th>
                                            <th>Blender</th>
                                            <th>Lights</th>
                                            <th>Microwave</th>
                                            <th>Fridge</th>
                                            <th>Music Systems</th>
                                            <th>Hot Plate</th>
                                            <th>Water Heater</th>
                                            <th>Rice Cooker</th>

                                        </tr>
                                    </thead>
                                    <?php 
            $sql="SELECT * FROM equipment  ";
            $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
            while ($row=mysqli_fetch_array($result)) {
             $data=$row['id'];
             $link="edit/edit_equip.php?id=".urlencode(base64_encode($data));
             $link1="delete/del_equip.php?id=".urlencode(base64_encode($data));

        ?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $row['television'];?></td>
                                            <td><?php echo $row['celine_fan'];?></td>
                                            <td><?php echo $row['air_conditioning'];?></td>
                                            <td><?php echo $row['iron'];?></td>
                                            <td><?php echo $row['blender'];?></td>
                                            <td><?php echo $row['lights'];?></td>
                                            <td><?php echo $row['microwave'];?></td>
                                            <td><?php echo $row['fridge'];?></td>
                                            <td><?php echo $row['music_systems'];?></td>
                                            <td><?php echo $row['hot_plate'];?></td>
                                            <td><?php echo $row['water_heater'];?></td></td>
                                            <td><?php echo $row['rice_cooker'];?></td>
                                         <!--   <td class="center">
                                            <a href="<?=$link1;?>"  class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg"> <i class="fa fa-trash" aria-hidden="true"></i></a>
                                                <a href="<?=$link; ?>" class="btn btn-danger"><i class="fa fa-edit fa-fw"></i></a>
                                            </td> ----->
                                        </tr>
                                      
                                        
                                    </tbody>
                                    <?php } ?>
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
             <form class="equip-registraion w-100  p-4 " method="post" action="add/equip_reg.php">
          <img style="width:300px;" src="img/logo.png" alt="">
            <h4 class="text-center">Add New Equipment</h4>
            <div class="form-group ">
              <h5 class="text-center">Select Your devices</h5>
              <label class="text-danger" for="exampleFormControlFile1">Enter Power rating for individual devices</label>
              <input  type="number" name="tv" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Television Power rating">

              <input type="number" name="fan" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Celine fans Power rating ">

              <input type="number" name="ac" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter Air conditioning Power rating ">

              <input type="number" name="iron" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Iron Power rating">

              <input type="number" name="blender" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Blender Power rating">

              <input type="number" name="ligths" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter Lights Power rating">

              <input type="number" name="microwave" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter Microwave Power rating">

              <input type="number" name="fridge" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter Fridge Power rating">

              <input type="number" name="music_system" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter Music systems Power rating">

              <input type="number" name="Hot_plate" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter  Hot plate Power rating ">

              <input type="number" name="water_heater" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter Water Heaters Power rating ">

              <input type="number" name="rice_cooker" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Enter Rice Cooker Power rating ">
           
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
 
          
         
             </center>
            
         
           
    </div>
  </div>
</div>

<!-- Small modal -->



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
     
<?php

$sql="select * from equipment ";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);

?>
     <center>
     <form class="equip-registraion w-100  p-4 " method="post" action="add/equip_reg.php">
          <img style="width:300px;" src="img/logo.png" alt="">
            <h4 class="text-center">Add New Equipment</h4>
            <div class="form-group">
              <label for="exampleInputEmail1">Equipment Name</label>
              <input type="text" name="equip_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php echo $row['equip_name'] ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Power Rating</label>
              <input type="number" name="power" class="form-control" id="exampleInputPassword1" placeholder="">
            </div>
           
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
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
          

    </div>
    <!-- end wrapper -->
    <?php include("common/js.php")?>
</body>

</html>