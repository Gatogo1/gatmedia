<?php
include("conns/conn.php") ;
$sql = "SELECT  * FROM `users` ORDER BY id DESC LIMIT 1";

$result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result);

    $new_id=$row['id']+1;
?>

          <form class="login  p-4 " method="post" enctype="multipart/form-data" action="login/user-sign-in.php">
            <h4 class="text-center">Utility manager Sign up <?php echo $new_id ?></h4>
            <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter full name ">
              <input type="hidden" name="id" value="<?php echo $new_id ?>">
              <small id="emailHelp" class="form-text text-warning">Please enter your correct name.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">email</label>
              <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email ">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Phone number</label>
              <input type="text" name="contact" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone number ">
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">User image</label>
              <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
              <small id="emailHelp" class="form-text text-warning">Please Use an image to be easily identify</small>
            </div>        
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Confirm Password</label>
              <input type="text" name="pass1" class="form-control" id="exampleInputPassword1" placeholder="Re enter Password">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Apartment name</label>
              <input type="text" name="apartment_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apartment_name ">
              <input type="hidden" name="usertype" value="">
              <small id="emailHelp" class="form-text text-warning">Please enter your correct apartment name.</small>
            </div>
            
            <div class="form-group ">
              <h5 class="text-center">Select Your devices</h5>
              <label class="text-danger" for="exampleFormControlFile1">Select the number of individual devices in your room !!!</label>
              <label class="" for="exampleFormControlFile1">Enter number of Television </label>
              <input  type="number" name="tv" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" onfocus="this.value=''" value="0" placeholder="Enter number of Television ">

              <label class="" for="exampleFormControlFile1">Enter number of Celine fans </label>
              <input type="number" name="fan" onfocus="this.value=''" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp"value="0" placeholder="Enter number of Celine fans ">

              <label class="" for="exampleFormControlFile1">Enter number of Air air_conditioning </label>
              <input type="number" name="ac"onfocus="this.value=''" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" value="0" placeholder=" Enter number of Air conditioning ">

              <label class="" for="exampleFormControlFile1">Enter number of Iron </label>
              <input type="number" name="iron" onfocus="this.value=''"class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp"value="0" placeholder="Enter number of Iron">

              <label class="" for="exampleFormControlFile1">Enter number of Blender </label>
              <input type="number" name="blender" onfocus="this.value=''"class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp"value="0" placeholder="Enter number of Blender">

              <label class="" for="exampleFormControlFile1">Enter number of ligths </label>
              <input type="number" name="ligths"onfocus="this.value=''" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" value="0" placeholder=" Enter number of Lights">

              <label class="" for="exampleFormControlFile1">Enter number of Microwave </label>
              <input type="number" name="microwave"onfocus="this.value=''" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" value="0"placeholder=" Enter number of Microwave">

              <label class="" for="exampleFormControlFile1">Enter number of Fridge </label>
              <input type="number" name="fridge"onfocus="this.value=''" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp"value="0" placeholder=" Enter number of Fridge">

              <label class="" for="exampleFormControlFile1">Enter number of Music systems </label>
              <input type="number" name="music_system"onfocus="this.value=''" class="form-control m-2" id="exampleInputEmail1"value="0" aria-describedby="emailHelp" placeholder=" Enter number of Music systems ">

              <label class="" for="exampleFormControlFile1">Enter number of Hot plates </label>
              <input type="number" name="Hot_plate"onfocus="this.value=''" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp" value="0"placeholder=" Enter number of Hot plate ">

              <label class="" for="exampleFormControlFile1">Enter number of Water Heates </label>
              <input type="number" name="water_heater"onfocus="this.value=''" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp"value="0" placeholder=" Enter number of Water Heaters ">

              <label class="" for="exampleFormControlFile1">Enter number of Rice Cooker </label>
              <input type="number" name="rice_cooker" onfocus="this.value=''" class="form-control m-2" id="exampleInputEmail1" aria-describedby="emailHelp"value="0" placeholder=" Enter number of Rice Cooker ">

              <small id="emailHelp" class="form-text text-danger">Please Select all the equipments and their quantities in your room    </small>
            </div>
            
            <button type="submit" name="submit" class="btn  btn-primary">Submit</button>
          
          </form>
      