<?php
include "conn.php";
session_start();
if (empty($_SESSION["admin"])) {
    header('location:index.php');
} else {
?>
    <!DOCTYPE html>
    <html lang="en">


    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Latest News" />
        <meta name="author" content="Latest News" />
        <title>Latest News</title>
        <link rel="icon" type="image/png" href="img/logo.png">
        <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
        <link href="vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="admincss/styles.css" rel="stylesheet" /> 
        <link href="vendor/dataTables/dataTables/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>

    <body class="sb-nav-fixed">
        <!-- start Header -->
        <?php include "header/header.php"; ?>
        <!-- End Header -->
        <div id="layoutSidenav">
            <!-- start sidebar -->
            <?php include "header/sidebar.php"; ?>
            <!-- End sidebar -->
            
            <div id="layoutSidenav_content">
                
                <main>
                    <div class="container-fluid mt-5"> 
                    <div class="row">
                    <div class="col-xl-12">
                        <div class="card mb-4 order-list">
                            <div class="gold-members p-4">
                                 <form method="POST" action="latest_news_db.php" enctype="multipart/form-data">
                                     <div class="row">                                            
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>News Head Line *</label>
                                                <input type="text" name="news" placeholder="Enter News Head Lines" class="form-control" required>
                                            </div>
                                        </div>                                        
                                        <div class="col-md-3">
                                            <div class="form-group">    
                                                <label>Upload Image *</label>                                              
                                                <input type="file" name="img" class="form-control" required>
                                            </div>
                                        </div>  
                                        <div class="col-md-6">
                                            <div class="form-group">    
                                                <!-- <label>Upload Image *</label>                                              
                                                <input type="file" name="img" class="form-control" required> -->
                                            </div>
                                        </div> 
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Content*</label>   
                                                <textarea name="msg"  placeholder="Enter News Detail" cols="90" rows="25" class="form-control"></textarea>
                                                </div>
                                        </div>
                                                                             
                                        <div class="col-md-12" style="text-align: center;">
                                            <input type="submit" name="submit" class="btn btn-lg btn-warning" value="Save" style="margin-top:15px;">
                                        </div>
                                        
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>                      
            </div>
        </main>
        <?php include "header/footer.php"; ?>
    </div>
</div>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/fontawesome/js/all.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script> 
        <script src="vendor/dataTables/dataTables/js/jquery.dataTables.min.js"></script>
        <script src="vendor/dataTables/dataTables/js/dataTables.bootstrap.min.js"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script src="js/rocket-loader.min.js"></script>



    </html>
<?php }


?>