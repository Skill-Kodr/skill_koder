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
        <title>Add Section</title>
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
                                    <b>All Section</b>
                                    <button class="btn btn-primary text-right" data-toggle="modal" data-target="#exampleModal" style="float: right;">Add Section </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead class="table-dark">
                                                <tr class="text-uppercase">
                                                    <th>Id</th>
                                                    <th>Class  Name</th>
                                                    <th>Section Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                mysqli_set_charset($connect, "utf8");
                                                $query = "SELECT cls.class_name as class_name,sec.id as id,sec.section_name as section_name FROM section as sec left join class as cls on(cls.id=sec.class_id)  ";
                                                $result = mysqli_query($connect, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td> <?php echo $row['class_name']; ?></td>
                                                        <td> <?php echo $row['section_name']; ?></td>
                                                        <td> <a href="#!" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalEdit<?php echo $row['id']; ?>"><i class="fa fa-marker"></i></a>
                                                            <a href="delete_section.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="feather-trash"></i></a>
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
                    <div class="modal-dialog modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-user mr-1"></i> <b>Create Section</b></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12"> 
                                            <form action="add_section_db.php" name="add_category" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label>Class*</label>     
                                                            <select required="" name="class" id="class_id" class="form-control">
                                                                <option value="">Select Class</option>
                                                                <?php
                                                                    $query = "SELECT * FROM class";
                                                                    $result = mysqli_query($connect, $query);
                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['class_name']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label>Section*</label>     
                                                            <input type="text" name="cat" class="form-control" required placeholder="Enter Class Section">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group"></br>
                                                            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
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
                $query = "SELECT sec.class_id as class_id,sec.section_name as section_name , sec.id as id  FROM section as sec left join class as cl on(cl.id=sec.class_id) ";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="modal fade" id="exampleModalEdit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelEdit" aria-hidden="true">
                        <div class="modal-dialog modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelEdit"> <i class="fas fa-user mr-1"></i> <b>Edit Section </b></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="update_section_db.php?id=<?php echo $row['id']; ?>" method="POST">
                                                    <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                        <label>Class*</label>     
                                                            <select required="" name="class" id="class_id" class="form-control">
                                                                <option value="">Select Class</option>
                                                                <?php
                                                                    $query = "SELECT * FROM class";
                                                                    $result = mysqli_query($connect, $query);
                                                                    while ($rows = mysqli_fetch_assoc($result)) {
                                                                ?>
                                                                    <option <?php if ($rows['id'] == $row['class_id']) { ?> selected="selected" <?php } ?>value="<?php echo $rows['id']; ?>"><?php echo $rows['class_name']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                        <div class="col-md-5">                                                           
                                                            <div class="form-group"><label>Section*</label>  
                                                                <input type="text" name="cat" value="<?php echo $row['section_name']; ?>" required class="form-control form-control-lg" placeholder="Category Name*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group"><br>
                                                                <input type="submit" value="Edit" name="submit"  class="btn btn-success btn-block">
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