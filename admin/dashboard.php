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
        <meta name="description" content="Paanee Re Paanee" />
        <meta name="author" content="Paanee Re Paanee" />
        <title>Welcome to Paanee Re Paanee</title>
        <link rel="icon" type="image/png" href="img/logo.png">
        <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
        <link href="vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="admincss/styles.css" rel="stylesheet" />
        <link href=" https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href=" https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" rel="stylesheet">
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
                    <div class="container-fluid">
                        <!-- <h1 class="mt-4">Admin Dashboard</h1> -->
                        <div class="row mt-5">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-gray text-dark mb-4">
                                    <div class="card-body" style="font-size: 25px;"> <b> Contact Enquiry</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="contact_enquiry.php">View </a>
                                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-gray text-dark mb-4">
                                    <div class="card-body" style="font-size: 25px;"><b>Blog</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="blog_detail.php">View </a>
                                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-gray text-dark mb-4">
                                    <div class="card-body" style="font-size: 25px;"><b>Gallery</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="add_gallery.php">View </a>
                                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
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
                                                    <th style="text-align: center;"> Subject</th>
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
                                                        <td style="text-align: center;"> <?php echo $row['subject']; ?></td> 
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
        <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>

    </body>

    </html>
<?php } ?>