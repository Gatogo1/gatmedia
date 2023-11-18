
      <?php 
  include("../conns/conn.php");


if (isset($_GET['id'])) {
    $id=mysqli_real_escape_string($conn, $_GET['id']);
    $id2=$id;
    }

      if (isset($_POST['submit'])) {
        $equip_name=$_POST['status'];
        $id=$_POST['id'];

        $id2=$id/2023;
    
        
        $sql = "UPDATE users SET`status`='1'WHERE id='$id2'";
        $query_run = mysqli_query($conn, $sql);
            
            
        if($query_run){
           
        echo"<script>alert('SUCCESSFULLY ADDED '); window.location='../edit-pro.php'</script>";
        }
        }?>