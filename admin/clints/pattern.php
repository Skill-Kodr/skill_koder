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
        <meta name="author" content="Vision Play School" />
        <title>Add Pattern | Vision Play School</title>
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
                                    <b>All Pattern</b>
                                    <button class="btn btn-primary text-right" data-toggle="modal" data-target="#exampleModal" style="float: right;">Upload Pattern </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead class="table-dark">
                                                <tr class="text-uppercase">
                                                    <th style="text-align:center">Class</th>
                                                    <th style="text-align:center">Section</th=>
                                                    <th style="text-align:center">Pattern</the=>
                                                    <th style="text-align:center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                mysqli_set_charset($connect, "utf8");
                                                $i = '1'; 
                                                $query = "SELECT p.id as id ,p.image as image ,cl.class_name as class , sec.section_name as section FROM pattern as p left join class as cl on(cl.id=p.class_id) left join section as sec on(sec.class_id=cl.id)ORDER BY p.id desc ";
                                                $result = mysqli_query($connect, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <tr>
                                                        <td style="text-align:center"><?php echo $row['class']; ?></td>
                                                        <td style="text-align:center"><?php echo $row['section']; ?></td>
                                                        <td style="text-align:center"><p style="text-align: center;"><img src="<?php echo 'pattern/'. $row['image']?>" alt="" style="height: 100px;width: 100px;"><br><a href="download.php?path=<?php echo "pattern/". $row['image'] ; ?>"><i class="fa fa-download"></i></a></p></td>
                                                        <td style="text-align:center"><a href="delete_pattern.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="feather-trash"></i></a></td>      
                                                                                         
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
                    <div class="modal-dialog modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-user mr-1"></i> <b>Upload Pattern</b></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12"> 
                                            <form action="pattern.php" name="add_category" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
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
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <select required="" name="section_name" id="section_id" class="form-control">
                                                                                
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <input type="file" name="img" class="form-control" required >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="submit" name="submit" class="btn btn-primary">
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
                $("#class_id").change(function() {
                    if (this.value) {
                    $.ajax({
                        url: "./ajx/admin-ajx.php",
                        data: {
                            class_name: this.value
                        },
                        type: 'post',

                        success: function(data) {
                            console.log(data);
                            $("#section_id").html(data);
                        }
                    })
                }
            });
            });
        </script>
    </html>
<?php } 

if (isset($_POST['submit'])) {   
    $file = $_FILES['img'];
    $file_name =$file['name'];
    $file_tmp = $file['tmp_name'];
    // $file_size = $file['size'];
    // $file_error = $file['error'];
    // $file_ext = explode('.', $file_name);
    // $file_ext = strtolower(end($file_ext));
    // $allowed = array('jpg', 'jpeg', 'pdf', 'png');
    // if (in_array($file_ext, $allowed)) {
                $folder = "pattern/" . $file_name;
                move_uploaded_file($file_tmp, $folder);
   // }

   $class=$_POST['class'];
   $section=$_POST['section_name'];
    $query = "INSERT INTO pattern(class_id,section_id,image) VALUES ('$class','$section','$file_name') ";

    mysqli_query($connect, $query) or die($query);

    echo "<script>
        alert('Pattern Added Successfully');
            window.location.href='pattern.php';
        </script>";
    }
    ?>