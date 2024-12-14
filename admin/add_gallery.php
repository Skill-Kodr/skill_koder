<?php
include "conn.php";
session_start();
if (empty($_SESSION["admin"])) {
    header('location:admin.php');
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Skill Coder." />
        <meta name="author" content="Skill Coder" />
        <title>Gallery</title>
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

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card mb-4 order-list">
                            <div class="gold-members p-4">
                                 <form method="POST" action="add_gallery.php" enctype="multipart/form-data">
                                     <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">                                                  
                                                    <input type="file" name="img" class="form-control">
                                                </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-item">
                                                <select class="form-control" name="status">
                                                    <option value="Select">Select Status</option>
                                                    <option value="Gallery">Gallery</option>
                                                    <option value="News">News</option>
                                                    <option value="Event">Event</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="submit" name="submit" class="btn btn-lg btn-warning" value="Upload">
                                        </div>
                                        
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="container-fluid">
                        <div class="row">
                           <div class="col-xl-12">
                              <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    <b>All Gallery </b>
                                </div>
                                <!-- Gallery -->
                                <div class="carousel-item active">
                                    <div class="container-fluid">
                                        <div class="row">
                                        <?php
                                            $i = '1'; 
                                            $query = "SELECT * FROM gallery ORDER BY id desc ";
                                            $result = mysqli_query($connect, $query);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <div class="col-lg-2 d-none d-lg-block" style="height: auto;">
                                                </br>
                                                    <div class="card" >
                                                            <?php echo "<img src='img/gallery/".$row['image']."'   class='card-img-top ' style='height:200px;   alt='#' />";?>
                                                            <?php echo "<h3 style='text-align:center'>".$row['status']."</h3>"?>
                                                        <div class="card-body" style="text-align: center;">
                                                            <a  href="delete_gallery.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                 </div>
                                    <!-- Gallery -->
                               
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
<?php } 
if (isset($_POST['submit'])) {
    $file = $_FILES['img'];
    $file_name = $file['name'];
    if($_POST['status']=="Select"){
        echo "<script>
        alert('Please Select Project Status !!');
            window.location.href='add_gallery.php';
        </script>";


    }else{
    
    $status=$_POST['status'];
    echo $status;
    $file = $_FILES['img'];
    $file_name = rand()."_".$file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    $allowed = array('jpg', 'jpeg', 'pdf', 'png');
    $folder = "img/gallery/" . $file_name;
    move_uploaded_file($file_tmp, $folder);
    $query = "INSERT INTO gallery(image,status) VALUES ('$file_name','$status') ";

    mysqli_query($connect, $query) or die($query);

    echo "<script>
        alert('Add Gallery Successfully');
            window.location.href='add_gallery.php';
        </script>";
    }
}

?>


