<?php include("common/head.php") ;?>
<body>
<?php include("common/tittle.php") ;?>
    <div class="container-fluid">

        <div class="row">
        <?php include("common/menu.php") ;?>
        <?php include("common/info.php") ;?>
        <hr style="background-color: red;">
                <div class="container ">
                    <div class="row">
                        <div class=" col-sm-6">
                        <h4 class="text-center" >Page Visiters</h4>
                        <?php include ("include/page_visit.php")?>
                        </div>
                        <div class=" col-sm-6">
                            <h4 class="text-center" >Page subscribers</h4>
                        <?php include ("include/subscribers.php")?>
                        </div>
                    </div>
                </div>
                
                

            </div>

        </div>