     
<?php
include("../conns/conn.php");


if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);
$sql="select * from equipment where id='$id2'";
 $res=mysqli_query($conn,$sql);
 $row=mysqli_fetch_array($res);
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utility King </title>
    <!-- Core CSS - Include with every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
     <!-- Page-Level CSS -->
     <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
   </head>
<style>

        
.btn{
    font-size:20px;
}

a{
    text-decoration:none;
}
</style>

     <center>
     <form class="equip-registraion   p-4 " method="post" >
          
            <h4 class="text-center">Edit Equipment <?php echo $id2 ?></h4>
            <div class="form-group">
              <label for="exampleInputEmail1">Equipment Name</label>
              <input type="text" name="equip_name" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['equip_name'] ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Power Rating</label>
              <input type="number" name="power" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['Power_rating'] ?>">
              
            </div>
           
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
     </center> 


      <?php 
      if (isset($_POST['submit'])) {
        $equip_name=ucwords($_POST['equip_name']);
        $power=$_POST['power'];
    
        
        $sql = "UPDATE equipment SET`equip_name`='$equip_name',`Power_rating`='$power' WHERE id='$id2'";
        $query_run = mysqli_query($conn, $sql);
            
            
        if($query_run){
        echo"<script>alert('SUCCESSFULLY EDITED '); window.location='../equipment_mang.php'</script>";
        }
        }?>