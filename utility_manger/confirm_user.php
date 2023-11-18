<?php include("common/head.php")?>
<?php 


if (isset($_GET['id'])) {
   $id=mysqli_real_escape_string($conn, $_GET['id']);
   $id2=$id/2023;
   }
   
  $sql = "SELECT * FROM `users` WHERE id='$id2' ";

  $result=mysqli_query($conn,$sql);

  $row=mysqli_fetch_array($result);
  $data=$row['id'];



  ?>
    <body>
        <div class="details m-2  col-sm-12">
        <form class="login  p-4 " method="post" enctype="multipart/form-data" action="login/user-sign-in.php">
            <div class="user-bill text-center rounded shadow p-3  text-white">
              <img class="rounded-circle" style="width: 100px; height:50px ;" src="login/upload/<?php echo $row['image'] ?>" alt="User image">
                 <h4><?php echo $row['username'] ?></h4>
                 <div class="form-group">
                    <label for="exampleFormControlFile1">Username :</label>
                    <input  readonly type="text" name="username" class="form-control-file" value="<?php echo $row['username'] ?>" id="exampleFormControlFile1">
                 </div>                 
                 
                 <div class="form-group">
                    <label for="exampleFormControlFile1"> Total Points:</label>
                    <input    readonly  type="number" class="form-control-file"value="<?php echo $row['total_equip'] ?>" id="exampleFormControlFile1">
                 </div> 

                 <div class="form-group">
                    <label for="exampleFormControlFile1"> TV:</label>
                    <input   readonly  type="number" name="tv" class="form-control-file" value="<?php echo $row['tv'] ?>" id="exampleFormControlFile1">
                 </div> 
            
                 <div class="form-group">
                    <label for="exampleFormControlFile1">Ceiline Fan:</label>
                    <input   readonly  type="number" name="fan" class="form-control-file" value="<?php echo $row['fan'] ?>" id="exampleFormControlFile1">
                 </div> 

                 <div class="form-group">
                    <label for="exampleFormControlFile1">  Air conditioning:</label>
                    <input   readonly  type="number"  name="ac"class="form-control-file" value="<?php echo $row['ac'] ?>" id="exampleFormControlFile1">
                 </div> 

                 <div class="form-group">
                    <label for="exampleFormControlFile1">Iron:</label>
                    <input    readonly type="number" name="iron" class="form-control-file"value="<?php echo $row['iron'] ?>" id="exampleFormControlFile1">
                 </div> 

                 <div class="form-group">
                    <label for="exampleFormControlFile1"> Bender:</label>
                    <input   readonly  type="number" name="blender" class="form-control-file" value="<?php echo $row['blender'] ?>" id="exampleFormControlFile1">
                 </div> 

                 <div class="form-group">
                    <label for="exampleFormControlFile1">Lights:</label>
                    <input   readonly  type="number" name="lights" class="form-control-file"value="<?php echo $row['ligths'] ?>" id="exampleFormControlFile1">
                 </div> 

                 <div class="form-group">
                    <label for="exampleFormControlFile1">Microwave:</label>
                    <input   readonly  type="number" class="form-control-file" value="<?php echo $row['microwave'] ?>" id="exampleFormControlFile1">
                 </div> 

                 <div class="form-group">
                    <label for="exampleFormControlFile1"> Fridge:</label>
                    <input   readonly  type="number" class="form-control-file" value="<?php echo $row['fridge'] ?>" id="exampleFormControlFile1">
                 </div> 

                 <div class="form-group">
                    <label for="exampleFormControlFile1">Music System:</label>
                    <input   readonly  type="number" class="form-control-file" value="<?php echo $row['music_system'] ?>" id="exampleFormControlFile1">
                 </div> 

                 <div class="form-group">
                    <label for="exampleFormControlFile1">Hot Plate:</label>
                    <input    readonly type="number" class="form-control-file" value="<?php echo $row['Hot_plate'] ?>" id="exampleFormControlFile1">
                 </div> 

                 <div class="form-group">
                    <label for="exampleFormControlFile1">Water Heater:</label>
                    <input    readonly type="number" class="form-control-file" value="<?php echo $row['water_heater'] ?>" id="exampleFormControlFile1">
                 </div>

                 <div class="form-group">
                    <label for="exampleFormControlFile1">Rice cooker:</label>
                    <input    readonly type="number" class="form-control-file" value="<?php echo $row['rice_cooker'] ?>" id="exampleFormControlFile1">
                 </div> 
                 <form  method="post" action="confirm_users/user_con.php">
                  <input type="hidden" name="status" value="1">
                  <input type="hidden" name="id" value="<?php echo $id_econde ?>">
                <button type="submit" name="submit" class="btn btn-bill-detail m-2" style="width:60%"><i class="fa fa-bar-chart"></i> confirm</button>
                </form>
         </form>
                 <button class="btn btn-danger m-2" style="width:60%"><i class="fa fa-bar-chart"></i>block User</button>
                 <a href="edit-pro.php" class="btn btn-bill-detail m-2" style="width:60%"><i class="fa fa-close"></i>Close</a>
    
                
                
            </div>
          </div>
    </body>


    </html>