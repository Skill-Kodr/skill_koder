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
        <meta name="description" content="Trackmark Engicon Pvt. Ltd." />
        <meta name="author" content="Trackmark Engicon Pvt. Ltd." />
        <title>Teacher Full Details </title>
        <link rel="icon" type="image/png" href="img/favicon.png">
        <link href="vendor/dropzone/dist/dropzone.css" rel="stylesheet">
        <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
        <link href="vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
    </head>
 
    <body class="sb-nav-fixed">
        <!-- start Header -->
        <?php include "header/header.php"; ?>
        <!-- End Header -->
        <div id="layoutSidenav">
            <!-- Start Sidebar -->
            <?php include "header/sidebar.php"; ?>
            <!-- End Sidebar-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <div class="row mt-5">
                            <?php
                            $query = "SELECT * FROM add_teacher WHERE id = '$_GET[id]'";
                            $result = mysqli_query($connect, $query);
                            $row = mysqli_fetch_array($result);
                            ?>
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-gift mr-1"></i> <strong> Teacher full Detail </strong>
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
                                                                <img class="mr-4" src="<?php echo 'teacherimages/'.$row['teacher_image']; ?>" class="img-fluid" alt="Generic placeholder image">
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="media-body">
                                                                    <p class="float-right mt-1 text-black mb-1 text-success d-none d-md-block" style="font-size:18px"> <b> Add Date: </b> <?php echo $row['admission_date']; ?> <i class="feather-check-circle text-success"></i> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"><i class="fas fa-user"></i> <b>Teacher Name :</b> <?php echo $row['teacher_name']; ?></p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-box"></i> <b>Gender :</b> <?php echo $row['gender']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-phone"></i> <b>Mobile No :</b> <?php echo $row['mobile_no']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-envelope"></i> <b>Email Id :</b> <?php echo $row['email_id']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-box"></i> <b>Subject :</b> <?php echo $row['subject']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-map"></i> <b>Address :</b> <?php echo $row['address']; ?> </p>                                                                 
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
                        <?php ?>
                    </div>
                </main>
                <?php include "header/footer.php"; ?>
            </div>
        </div>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/fontawesome/js/all.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/rocket-loader.min.js"></script>
    </body>


    </html>
<?php } ?>