
    <script type="text/javascript">
      function table(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("table").innerHTML = this.responseText;
        }
        xhttp.open("GET", "system.php");
        xhttp.send();
      }

      setInterval(function(){
        table();
      }, 1);
    </script>
 
 <script type="text/javascript">
      function tables(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("tables").innerHTML = this.responseText;
        }
        xhttp.open("GET", "systems.php");
        xhttp.send();
      }

      setInterval(function(){
        tables();
      }, 1);
    </script>


  

<?php include('conn.php');?>


<style>
    
div.scrollmenu {
padding:1px;
  overflow: auto;
  white-space: nowrap;
  font-size:20px;
  background:  #121A2F;
  
}


div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 15px;
  text-decoration: none;
  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
  margin-top:4px;
  margin-bottom:4px;
}

div.scrollmenu a:hover {
  background-color: #671d4d;
}

#myP1{
  display:none;
}

h1.loading{
  font-size: 3em;
  font-family: 'Roboto', sans-serif;
  font-weight: 700;
}

.dot-one{
  animation: dot-one 2s infinite linear
}
.dot-two{
  animation: dot-two 2s infinite linear
}
.dot-three{
  animation: dot-three 2s infinite linear
}
@keyframes dot-one{
  0%{
    opacity: 0;
  }
  15%{
    opacity: 0;
  }
  25%{
    opacity: 1;
  }
  100%{
    opacity: 1;
  }
}

@keyframes dot-two{
  0%{
    opacity: 0;
  }
  25%{
    opacity: 0;
  }
  50%{
    opacity: 1;
  }
  100%{
    opacity: 1;
  }
}

@keyframes dot-three{
  0%{
    opacity: 0;
  }
  50%{
    opacity: 0;
  }
  75%{
    opacity: 1;
  }
  100%{
    opacity: 1;
  }
}


  .nav{
    font-size:20px;
  }
</style>

<?php 
if (isset($_SESSION["email"])) {
	$login_status='<i class="fa fa-sign-out" aria-hidden="true"></i>';
   $log_status='logout'; 
} else {
$login_status='<i class="fa fa-sign-in" aria-hidden="true"></i> ';
$log_status='login';
}

$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
?>
<div class="navbar-area  fixed-top">
        <!-- topbar end-->
        <div class="topbar-area">
        <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5 align-self-center">
                        <div class="logo text-md-left text-center">
                            <a class="main-logo" href="index.php"><h3 class="text-white text-center">Gat<samp class="text-warning">media</samp></h3></a>
                           
                            <div class="wrapper">
  <div id="myP1" class="loading-text "> <!--Loading-text-->
    <h6 class="text-white">LOADING
      <span class="dot-one"> .</span>
      <span class="dot-two"> .</span>
      <span class="dot-three"> .</span>
    </h6>
  </div> <!--/Loading-text-->
</div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- topbar end-->



        

        <div class="  scrollmenu text-center">
  <a class="nav rounded" title="Home" href="home"  onclick="demoDisplay()"  ><i class="fa fa-home" aria-hidden="true"></i></a>
  <a class="nav rounded"title="Profile" href="profile.php" onclick="demoDisplay()"  ><i class="fa fa-user" aria-hidden="true"></i></a>  
  <a class="nav " title="Category" type="button" data-toggle="modal" data-target="#myModal"><i class="fa fa-list-ul" aria-hidden="true"></i></a>

  <a  onload = "table();" class="nav" title="Notification" href="#about_us" onclick="demoDisplay()"   ><i class="fa fa-bell" aria-hidden="true"></i><span    id="table" class="bg-danger rounded p-1"></span></a>
  <a  onload = "tables();" class="nav" title="Massage" href="#" onclick="demoDisplay()"  ><i  class="fa fa-envelope-o" aria-hidden="true"></i> <span  id="tables" class="bg-danger rounded p-1"></span></a>
  <a  class="nav" title="Work"href="#work" onclick="demoDisplay()"  ><i class="fa fa-briefcase" aria-hidden="true"></i></a>
  <a  class="nav" title="<?php echo $log_status ?> "href="<?php echo $log_status ?>" onclick="demoDisplay()"  ><?php echo $login_status ?></a>
</div>
    </div>
   
    <div class="container">


  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Category</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="list-group">
  
  <a href="news" class="list-group-item list-group-item-action">News</a>
  <a href="engineering" class="list-group-item list-group-item-action">Engineering</a>
  <a href="news" class="list-group-item list-group-item-action">Entertainment</a>
  <a href="lifestyle" class="list-group-item list-group-item-action">Lifestyle</a>
  <a href="stories" class="list-group-item list-group-item-action">Stories</a>

</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
 
</div>
