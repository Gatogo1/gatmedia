<?php 

include('../conn.php');
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);
$sql= "DELETE FROM  `blog` WHERE id='$id2'";


$result=$conn->query($sql);
if ($result==TRUE) {
    echo "deleted Successfully ";
 header("location:../manage_blogs.php");
}
else{
    echo"not deleted";
    echo $id2;
}

}
echo $id

      
      ?>