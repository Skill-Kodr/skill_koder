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
        <meta name="description" content="Clint Detail" />
        <meta name="author" content="Clint Detail" />
        <title>Clint Detail</title>
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
                                <div class="card-header">
                                    <i class="fas fa-plus mr-1"></i>
                                    <b>Update Clint Detail </b>
                                </div>
                                    <div class="gold-members p-4">
                                    <?php
                                        mysqli_set_charset($connect, "utf8");
                                        $query = "SELECT * FROM clint WHERE id = '$_GET[id]'";
                                        $result = mysqli_query($connect, $query);
                                        $row = mysqli_fetch_array($result);
                                    ?>
                                        <form action="update_teacher_db.php?id=<?= $row['id'] ?>" method="POST" enctype="multipart/form-data">
                                            <div class="row">                                            
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Clint Name *</label>
                                                        <input type="text" name="cnm" placeholder="Enter Clint Name" value="<?php echo $row['clint_name']; ?>" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label>Clint's Address*</label>   
                                                        <input type="text" name="ca" value="<?php echo $row['address']; ?>" placeholder="Enter Clint's Address" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Clint's Contact No*</label>   
                                                        <input type="text" name="ccn" placeholder="Enter Clint's Contact No" value="<?php echo $row['mobile_no']; ?>" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Clint's Wattsapp No*</label>   
                                                        <input type="text" name="cwn" value="<?php echo $row['wattsapp_no']; ?>" placeholder="Enter Clint's Wattsapp No" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Clint's Organisation Name*</label>   
                                                        <input type="text" name="con" value="<?php echo $row['org_name']; ?>" placeholder="Enter Clint's Oreanisation name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Clint's Organisation Type*</label>   
                                                        <input type="text" name="con" value="<?php echo $row['org_type']; ?>" placeholder="Enter Clint's Oreanisation name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>URL Link *</label>  
                                                        <input type="text" name="url_link" value="<?php echo $row['url_link']; ?>" placeholder="Enter Url Link" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">    
                                                        <label>Upload Logo *</label>                                              
                                                        <input type="file" name="img" value="<?php echo $row['logo']; ?>"  class="form-control" required><?php //echo $row['logo']; ?></input>
                                                    </div>
                                                </div>                                        
                                                <div class="col-md-1" style="text-align: center;"></br>
                                                    <input type="submit" name="submit" class="btn btn-md btn-success" value="Update" >
                                                </div>
                                        </form>
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