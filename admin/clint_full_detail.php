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
                    <div class="container-fluid "> 
                        <div class="row mt-5">
                            <?php
                                $query = "SELECT * FROM clint WHERE id = '$_GET[id]'";
                                $result = mysqli_query($connect, $query);
                                $row = mysqli_fetch_array($result);
                            ?>  
                             <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-gift mr-1"></i> <strong> Clint full Detail </strong>
                                        <button type="button" class="btn btn-primary" style='float:right;'><?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                        echo "<a href='$url' class='text-white'>Back</a>"; ?></button>
                                    </div>
                                    <div class="card-body">
                                        <div class=" mb-4 order-list">
                                            <div class="gold-members">
                                                <div class="media">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <img class="mr-4" src="<?php echo 'img/clint/'.$row['logo']; ?>" class="img-fluid" alt="Generic placeholder image">
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="media-body">
                                                                    <p class="float-right mt-1 text-black mb-1 text-success d-none d-md-block" style="font-size:18px"> <b> Add Date: </b> <?php echo $row['created_date']; ?> <i class="feather-check-circle text-success"></i> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"><i class="fas fa-user"></i> <b>Clint  Name :</b> <?php echo $row['clint_name']; ?></p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-map"></i> <b>Address :</b> <?php echo $row['address']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-phone"></i> <b>Mobile No :</b> <?php echo $row['mobile_no']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fab fa-whatsapp-square"></i> <b>Whatsapp No:</b> <?php echo $row['wattsapp_no']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-box"></i> <b>Organisation Name :</b> <?php echo $row['org_name']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-box"></i> <b>Organisation Type :</b> <?php echo $row['org_type']; ?> </p>                                                                 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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