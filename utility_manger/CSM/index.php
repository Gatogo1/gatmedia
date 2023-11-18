<?php include("common/head.php")?>
   
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <?php include("common/top_nav.php")?>
        <!-- end navbar top -->
        <?php include("common/sid_nav.php")?>
        <!-- navbar side -->
       
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <?php include("common/massage_note.php")?>
   <!--end  Welcome -->

            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                    <div class="panel-body yellow">
                            <i class="fa fa-bar-chart-o fa-3x"></i>
                            <h3>20,741 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Daily User Visits
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                    <div class="panel-body blue">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <h3>2,060 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">New Users
                            </span>
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                    <div class="panel-body green">
                            <i class="fa fa fa-floppy-o fa-3x"></i>
                            <h3>20 GB</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Users
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                    <div class="panel-body red">
                            <i class="fa fa-thumbs-up fa-3x"></i>
                            <h3>2,700 </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">New User Registered
                            </span>
                        </div>
                    </div>
                </div>
                <!--end quick info section -->
            </div>

           <!--Graph-->
           <?php include("common/graph.php")?>

            </div>

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->
    <?php include("common/js.php")?>
</body>

</html>
