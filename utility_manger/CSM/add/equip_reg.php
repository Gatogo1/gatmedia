<?php

include("../conns/conn.php") ;


if (isset($_POST['submit'])){
  $tv=$_POST['tv'];
  $fan=$_POST['fan'];
  $ac=$_POST['ac'];
  $iron=$_POST['iron'];
  $blender=$_POST['blender'];
  $ligths=$_POST['ligths'];
  $microwave=$_POST['microwave'];
  $fridge=$_POST['fridge'];
  $music_system=$_POST['music_system'];
  $Hot_plate=$_POST['Hot_plate'];
  $water_heater=$_POST['water_heater'];
  $rice_cooker=$_POST['rice_cooker'];
    
//to prevent php injection



$sql = "INSERT INTO `equipment`( `television`, `celine_fan`, `air_conditioning`, `iron`, `blender`, `lights`, `microwave`, `fridge`, `music_systems`, `hot_plate`, `water_heater`, `rice_cooker`) VALUES ('$tv','$fan','$ac','$iron','$blender','$ligths','$microwave','$fridge','$music_system','$Hot_plate','$water_heater','$rice_cooker')";
    
if(mysqli_query($conn,$sql)){
    
echo"<script>alert('YOU HAVE SUCCESFULLY ADDED NEW EQUIPMENT '); window.location='../equipment_mang.php'</script>";
}
else{
  echo"<script>alert('SORRY YOUR IT WAS NOT SUCCESFULL TRY AGAIN'); window.location='../equipment_mang.php'</script>";
}


}
