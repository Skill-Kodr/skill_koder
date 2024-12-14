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
        <meta name="description" content="Aakarshan Homes Pvt. Ltd." />
        <meta name="author" content="Aakarshan Homes Pvt. Ltd." />
        <title>Contact</title>
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
                        <div class="col-xl-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    <b>All Contact Enquiry </b>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable"  cellspacing="0">
                                            <thead class="table-dark">
                                                <tr class="text-uppercase">
                                                    <th style="text-align: center;"> Id</th>
                                                    <th style="text-align: center;"> Name</th>
                                                    <th style="text-align: center;"> Email</th>
                                                    <th style="text-align: center;"> Mobile</th> 
                                                    <th style="text-align: center;"> Message</th>
                                                    <th style="text-align: center;"> Date</th>
                                                    <th style="text-align: center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = '1'; 
                                                $query = "SELECT * FROM contact ORDER BY id desc ";
                                                $result = mysqli_query($connect, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <tr>
                                                        <td style="text-align: center;"><?php echo $i++; ?></td>
                                                        <td style="text-align: center;"> <?php echo $row['name']; ?></td>
                                                        <td style="text-align: center;"> <?php echo $row['email']; ?></td>
                                                        <td style="text-align: center;"> <?php echo $row['mobile']; ?></td> 
                                                        <td style="text-align: center;"> <?php echo $row['message']; ?></td> 
                                                        <td style="text-align: center;"><?php echo $row['contact_date']; ?> </td>
                                                        <td style="text-align: center;"> <a href="delete_contact_enq.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> </td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>
                                        </table>
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
<?php } ?>