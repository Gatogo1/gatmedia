<?php include("Common/head.php")?>
     <!--Nav bar-->
     <?php include("common/nav.php")?>
   <!--Carousel-->
   <?php include("common/carosel.php")?>
    <!---confirm user-->
  
    <div class="modal" id="first-modal" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog">
        <div class="modal-content">
          
      <div class="details m-2  col-sm-12">
        <div class="user-bill text-center rounded shadow p-3  text-white">
          <img class="rounded-circle" style="width: 100px; height:50px ;" src="img/my.jpg" alt="User image">
             <h4>Ewudor Seyram </h4>
             <p>Total Points: <b class="bg-dark p-1 rounded">6</b> </p>
             <p>Television <b class="bg-danger p-1 rounded">2</b> </p>
             <p>Lights <b class="bg-danger p-1 rounded">2</b> </p>
             <p>Iron <b class="bg-danger p-1 rounded">2</b> </p>
             <p>Refrigration <b class="bg-danger p-1 rounded">2</b> </p>
             <p>Air Conditioning <b class="bg-danger p-1 rounded">2</b> </p>
             <p>Blender <b class="bg-danger p-1 rounded">2</b> </p>
             <p>Microwave <b class="bg-danger p-1 rounded">2</b> </p>
             <p>Rice cooker <b class="bg-danger p-1 rounded">2</b> </p>
             <p>Home system <b class="bg-danger p-1 rounded">2</b> </p>
             <p>Water Heater <b class="bg-danger p-1 rounded">2</b> </p>
             <p>Celine fan <b class="bg-danger p-1 rounded">2</b> </p>
             <button class="btn btn-bill-detail m-2" style="width:60%"><i class="fa fa-bar-chart"></i> confirm</button>

            
            
        </div>
      </div>
      
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <?php 
/* Local Database*/

include("conns/conn.php");



 $sql="SELECT * FROM users where status='0'  ";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));

 while ($row=mysqli_fetch_array($result)) {

        ?>
    <div class="details m-2  col-sm-12">
      <div class="user-bill text-center rounded shadow p-3  text-white">
        <img class="rounded-circle" style="width: 100px; height:50px ;" src="img/my.jpg" alt="User image">
           <h4><?php echo $row['username']?> </h4>
           <p>Total Points: <b class="bg-dark p-1 rounded">6</b> </p>
           <p>Current bill: <b class="bg-danger p-1 rounded">-1000 cedis (January)</b> </p>
           <p>Amount paid (for january): <b class="bg-success p-1 rounded">100 cedis</b> </p>
           <p>Previous bills: <b class="bg-warning p-1 rounded">1000 cedis</b> </p>
           <p>Amount paid: <b class="bg-success p-1 rounded">1000 cedis</b> </p>
           <p>Remaining to be paid: <b class="bg-danger p-1 rounded">-100 cedis</b> </p>
           <button class="btn btn-bill-detail m-2 bg-warning" style="width:60%"><i class="fa fa-exclamation-triangle"></i> Send Reminder</button>
           <a href="edit-pro.html" class="btn btn-bill-detail" style="width:60%"><i class="fa fa-download"></i> Edit profile</a>
           <button class="btn btn-bill-detail m-2" style="width:60%"><i class="fa fa-bar-chart"></i> History</button>


      </div>
    </div>
    <?php } ?>
 <!-- Copyrights -->
</body>
</html>