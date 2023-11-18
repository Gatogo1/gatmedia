<?php include("common/head.php") ;?>

<?php include('usablel/dep.php');?>
<body>
<?php include("common/tittle.php") ;?>
    <div class="container-fluid">

        <div class="row">
        <?php include("common/menu.php") ;?>
        <?php include("system.php") ;?>
           
                <hr style="background-color: red;">
                
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

/* Solid Social Share Buttons */

.btn-social,
.btn-social:visited,
.btn-social:focus,
.btn-social:hover,
.btn-social:active {
  color: #ffffff;
  text-decoration: none;
  transition: opacity .15s ease-in-out;
}

.btn-social:hover,
.btn-social:active {
 opacity: .75;
}

.btn-fb {
  background-color: #3b5998;
}

.btn-tw {
  background-color: #1da1f2;
}

.btn-in {
  background-color: #0077b5;
}

.btn-gp {
  background-color: #db4437;
}

.btn-rd {
  background-color:green;
}

.btn-hn {
  background-color: #ff4000;
}

/* Outline Social Share Buttons */

.btn-social-outline {
  background-color: transparent;
  background-image: none;
  text-decoration: none;
  transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}

.btn-fb-outline {
  color: #3b5998;
  border-color: #3b5998;
}

.btn-fb-outline:hover,
.btn-fb-outline:active {
  color: #ffffff;
  background-color: #3b5998;
}

.btn-tw-outline {
  color: #1da1f2;
  border-color: #1da1f2;
}

.btn-tw-outline:hover,
.btn-tw-outline:active {
  color: #ffffff;
  background-color: #1da1f2;
}

.btn-in-outline {
  color: #0077b5;
  border-color: #0077b5;
}

.btn-in-outline:hover,
.btn-in-outline:active {
  color: #ffffff;
  background-color: #0077b5;
}

.btn-gp-outline {
  color: #db4437;
  border-color: #db4437;
}

.btn-gp-outline:hover,
.btn-gp-outline:active {
  color: #ffffff;
  background-color: #db4437;
}

.btn-rd-outline {
  color: #ff4500;
  border-color: #ff4500;
}

.btn-rd-outline:hover,
.btn-rd-outline:active {
  color: #ffffff;
  background-color: #ff4500;
}

.btn-hn-outline {
  color: #ff4000;
  border-color: #ff4000;
}

.btn-hn-outline:hover,
.btn-hn-outline:active {
  color: #ffffff;
  background-color: #ff4000;
}

/* Fluid Styles */

.fluid {
  display: flex;
}

.fluid a {
  flex-grow: 1;
  margin-right: 0.25rem;
}

.fluid a:last-child {
  margin-right: 0rem;
}
</style>

    
                
   <!--Table-->
   <h5 class='mb-3'>User Management</h5>
   
                <a href="add_user.php" type="button" class="btn btn-primary m-2">Add New user</a>

                <div  >
                <table id="dtBasicExample" class="table table-striped table-sm table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">user Image
      </th>
      <th class="th-sm">Fullname
      </th>
      <th class="th-sm"> Number
    </th>
    <th class="th-sm"> email
    </th>
      <th class="th-sm">Usertype
      </th>
      <th class="th-sm">Status
      </th>
      <th class="th-sm">Action
      </th>
    </tr>
  </thead>
  <tbody>
<?php

      

 $sql="select * from users order by id desc";
 $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));
function create_slug($string){
   $slug=preg_replace('/[^A-Za-z0-9-:-?-()-,-’-]+/', '-', $string);
   return $slug;}

 while ($row=mysqli_fetch_array($result)) {
  $data=$row['id'];
  $position=$row['status'];
    $fname=$row['fname'];
    $sname=$row['sname'];

  $link="delete/del_blog.php?id=".urlencode(base64_encode($data));
  $link1="update/edit_blog.php?id=".urlencode(base64_encode($data));
  $action="update/edit_blog_status.php?id=".urlencode(base64_encode($data));
  $dat=$data;
 
           
  $text='';

  if ($position==='1') {
    $text='Active';
    $read='btn-success';
  }
  else {
    $text='Inactive';
    $read='btn-danger';
  }

                 
      
          
                  ?>
           
     
       

    <tr>
    <td> <img style="width: 100px;" src="user_pic/<?php echo  $row['image'];?>" alt=""></td>
      <td><?php echo  $row['fname'];?> <?php echo  $row['sname'];?></td>
      <td><?php echo  $row['number'];?></td>
      <td><?php echo  $row['email'];?></td>
      <td><?php echo  $row['usertype'];?></td>
 
      
      




      
       
      <!--- BLOG STATUS--->
       

      
      <td><a href="<?=$action; ?>"  class=" btn text-white  btn-sm <?php echo $read ?>"> <?php echo $text ?></a>
     </td>

      <td>

        <!--- end BLOG STATUS--->
            <a href="<?=$link1; ?>" class="btn btn-sm  bg-info "><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

            <a  href="<?=$link; ?>" class="btn btn-sm  bg-danger "><i class="fa fa-sm fa-trash-o" aria-hidden="true"></i></a>
            <!--<a  href="<?=$link; ?>" class="btn btn-sm m-2  bg-success "><i class="fa fa-window-close-o" aria-hidden="true"></i></a> ---->
      </td>
    </tr>
    <?php }?>

   
  
      
  </tbody>
  <tfoot>
  <tr>
      <th class="th-sm">user Image
      </th>
      <th class="th-sm">Fullname
      </th>
      <th class="th-sm"> Number
    </th>
    <th class="th-sm"> email
    </th>
      <th class="th-sm">Usertype
      </th>
      <th class="th-sm">Status
      </th>
      <th class="th-sm">Action
      </th>
    </tr>
  </tfoot>
</table>
                </div>

                           
                
 
     




        
  </div>     

            </div>

        </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    
    
<script language="JavaScript" src="https://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>


<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">


    

            </div>

        </div>

    </div>







