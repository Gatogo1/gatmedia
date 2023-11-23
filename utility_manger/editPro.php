
<?php session_start();

if(!isset($_SESSION['email']))
{
    header("location:login");

}


        if (isset($_SESSION["email"])) {
	$image=$_SESSION["image"];
    $uid=$_SESSION['id'];

    $useridCODE=$uid*1540948579;      
} else {
  header("location:login");
$uid=0;
} 

?>

<?php include("common/head.php")?>
    <body>
    <?php 
/* Local Database*/

include("conns/conn.php");

$apart=$_SESSION['apartment-name'];

 $sql="SELECT * FROM users where status='0' AND apartment_name='$apart'  ";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {
   $data=$row['id'];
   $id_econde=$data*2023;


   $link="confirm_user.php?id=$id_econde";
   $link1="update/user_sta_de.php?id=".urlencode(base64_encode($data));
 
        ?>
        <div class="details m-2  col-sm-12">
            <a href="<?php echo $link?>">
               <div class="user-bill text-center rounded shadow p-3  text-white">
              <img class="rounded-circle" style="width: 100px; height:50px ;" src="login/upload/<?php echo $row['image'] ?>" alt="User image">
                 <h4 class="text-white"><?php echo $row['username'] ?></h4>
                 </a>
                 <div class="form-group">
                    <label for="exampleFormControlFile1">Username :</label>
                    <input type="text" class="form-control-file" value="<?php echo $row['username'] ?>" id="exampleFormControlFile1">
                 </div>                 
                 
                 <div class="form-group">
                    <label for="exampleFormControlFile1"> Total Points:</label>
                    <input type="number" class="form-control-file" value="<?php echo $row['total_equip'] ?>" id="exampleFormControlFile1">
                 </div> 
                <form  method="post" action="confirm_users/user_con.php">
                  <input type="hidden" name="status" value="1">
                  <input type="hidden" name="id" value="<?php echo $id_econde ?>">
                <button type="submit" name="submit" class="btn btn-bill-detail m-2" style="width:60%"><i class="fa fa-bar-chart"></i> confirm</button>
                </form>
                
                 <a href="<?=$link; ?>" class="btn btn-danger m-2" style="width:60%"><i class="fa fa-bar-chart"></i>block User</a>
               
                 <a href="index.php" class="btn btn-bill-detail m-2" style="width:60%"><i class="fa fa-close"></i>Close</a>
    
                
                
            </div>
          </div>
          <?php }?>
    </body>


    </html>