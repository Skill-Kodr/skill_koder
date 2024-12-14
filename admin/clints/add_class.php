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
        <title>Add Class</title>
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
                    <div class="container-fluid mt-5">
                        <div class="col-xl-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    <b>All Class List</b>
                                    <button class="btn btn-primary text-right" data-toggle="modal" data-target="#exampleModal" style="float: right;">Add Class </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead class="table-dark">
                                                <tr class="text-uppercase">
                                                    <th>Id</th>
                                                    <th>Class Name</th>
                                                    <!-- <th>Status</th> -->
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                mysqli_set_charset($connect, "utf8");
                                                $query = "SELECT * FROM class  ";
                                                $result = mysqli_query($connect, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['id']; ?></td>
                                                        </td>
                                                        <td> <?php echo $row['class_name']; ?></td>
                                                        <td> <a href="#!" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalEdit<?php echo $row['id']; ?>"><i class="fa fa-marker"></i></a>
                                                            <a href="delete_class.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="feather-trash"></i></a>
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

                </main>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-user mr-1"></i> <b>Create Class</b></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12"> 
                                            <form action="add_class_db.php" name="add_category" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group"> 
                                                        <label>Class Name*</label>                                                           
                                                            <input type="text" name="cat" class="form-control" required placeholder="Enter Class Name*">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group"> 
                                                            <label>Upload Syllabus *</label>                                                           
                                                            <input type="file"  class="form-control" name="profile" id="filetag"  onchange="changeimage()" style="margin-top:0px">
                                                        </div>
                                                    </div>
                                                    
                                                   <div class="col-md-2">
                                                        <div class="form-group">
                                                </br>
                                                            <input type="submit" name="submit" value="Submit" class="btn btn-primary " style="margin-top:120px important">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                mysqli_set_charset($connect, "utf8");
                $query = "SELECT * FROM class ";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="modal fade" id="exampleModalEdit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelEdit" aria-hidden="true">
                        <div class="modal-dialog modal-dialog modal-md" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelEdit"> <i class="fas fa-user mr-1"></i> <b>Edit Class Name</b></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="update_class_db.php?id=<?php echo $row['id']; ?>" method="POST">
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <div class="form-group">
                                                                <input type="text" name="cat" value="<?php echo $row['class_name']; ?>" required class="form-control form-control-lg" placeholder="Category Name*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <input type="submit" name="submit"  class="btn btn-success btn-block">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php include "header/footer.php"; ?>
            </div>
        </div>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/fontawesome/js/all.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/Chart.min.js" crossorigin="anonymous"></script>
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
                $('#dataTable').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });

            
        </script>
    </html>
<?php } ?>