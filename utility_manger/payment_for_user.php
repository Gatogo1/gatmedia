<?php 
include("conns/conn.php");
if (isset($_GET['id'])) {
$id=mysqli_real_escape_string($conn, $_GET['id']);
$id2=base64_decode($id);

}
?>


<!DOCTYPE html>
<html lang="en">
<?php include("common/head.php");?>
<body>
<form class="login   p-4 " method="post">
            <h4 class="text-center">Utility manager add bill</h4>
          

              <?php 

    $query ="SELECT date FROM users_new_bill WHERE userid='$id2'";
    $result1 = $conn->query($query);
    if($result1->num_rows> 0){
      $options= mysqli_fetch_all($result1, MYSQLI_ASSOC);
    }
?>
     <div class=" row form-group">
<label class="text-white" for="department">Select bill date:</label>

<select  class="custom-select mb-3" id="department" name="bill_date">
<option value="select_dep">Select bill date</option>
<?php 
  foreach ($options as $option) {
  ?>
  <option value="<?php echo $option['date']; ?>"><?php echo $option['date']; ?> </option>
    <?php 
    }
   ?>
</select>
  </div>

                     
            <div class="form-group">
              <label class="text-white" for="exampleInputPassword1">Input amount payed</label>
              <input type="number"   name="payed"class="form-control" id="exampleInputPassword1" placeholder="Enter amount">
              <input type="hidden" name="id"  value="<?php echo $id2 ?>">
              <input type="hidden" name="payed_date"  value="<?php echo date("Y-m-d") ?>">
            </div>
          <!---
            <div class="form-group">
              <label class="text-white" for="exampleInputPassword1">Comment</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Input your comment if any">
            </div>
      
          ----->
            
            <button type="submit" name="submit" class="btn  btn-primary">Submit</button>
          
          </form>
</body>
</html>
<?php 
      if (isset($_POST['submit'])) {
        $month=$_POST['bill_date'];
        $payed=$_POST['payed'];
        $id=$_POST['id'];
        $payed_date=$_POST['payed_date'];
    
    
        
        $sql = "UPDATE users_new_bill SET`amount_paid`='$payed',`amount_paid_date`='$payed_date' WHERE userid='$id2' AND date='$month'";
        $query_run = mysqli_query($conn, $sql);
            
            
        if($query_run){
        echo"<script>alert('SUCCESSFULLY EDITED '); window.location='index.php'</script>";
        }
        }?>