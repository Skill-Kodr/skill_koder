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
        <meta name="description" content="Skill Coder." />
        <meta name="author" content="Skill Coder." />
        <title>Welcome to ERP Software </title>
        <link rel="icon" type="image/png" href="img/favicon.png">
        <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
        <link href="vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
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
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-gray text-dark mb-4">
                                    <div class="card-body" style="font-size: 25px;"><b>All Teacher</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="all_teacher.php">View Teacher</a>
                                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-gray text-dark mb-4">
                                    <div class="card-body" style="font-size: 25px;"><b>All Student</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="all_student.php">View Student</a>
                                        <div class="small text-dark"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-gray text-dark mb-4">
                                    <div class="card-body" style="font-size: 25px;"><b>Fee Collection List</b></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-dark stretched-link" href="fee_collection_list.php">View Fee</a>
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
                                        <b>All Teacher</b>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                        <table class="table table-bordered display nowrap" id="example" width="100%" cellspacing="0">
                                                <thead class="table-dark">
                                                    <tr class="text-uppercase">
                                                    <th>S. No</th>
                                                        <th>Image</th>
                                                        <th>Teacher Name</th>
                                                        <th>Gender</th>
                                                        <th>Mobile No</th>
                                                        <th>Email</th>
                                                        <th>Subject</th>
                                                        <th>Address</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = '1';
                                                    $query = "SELECT * FROM add_teacher where status=1 ORDER BY id desc";
                                                    $result = mysqli_query($connect, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i++; ?></td>
                                                            <td><figure class="image"><?php echo "<img src='teacherimages/".$row['teacher_image']."' alt='' style='height:100px'>";?></figure></td>
                                                            <td> <?php echo $row['teacher_name']; ?></td>
                                                            <td>  <?php echo $row['gender']; ?></td>
                                                            <td> <?php echo $row['mobile_no']; ?></td>  
                                                            <td><?php echo $row['email_id']?></td>      
                                                            <td><?php echo $row['subject']?></td>      
                                                            <td> <?php echo $row['address']; ?></td>                                                                                                                 
                                                            <td> <a href="teacher_full_detail.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm "><i class="fas fa-expand-arrows-alt"></i> View </a>
                                                                <a href="update_teacher.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info"><i class="fas fa-pen"></i></a>
                                                                <a href="delete_teacher.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="feather-trash"></i></a>
                                                            </td>
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