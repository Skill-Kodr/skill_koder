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
        <title>Update Student Detail</title>
        <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>
        <link rel="icon" type="image/png" href="img/favicon.png">
        <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
        <link href="vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="vendor/dropzone/dist/dropzone.css" rel="stylesheet">
    </head>
    <style>
        input[type=file] {
            margin-top: 15px;
            background-color: #a6a4b357;
            padding: 3px;
            color: white;
        }
    </style>

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

                        <div class="row mt-4">
                            <?php
                            mysqli_set_charset($connect, "utf8");
                            $query = "SELECT * FROM add_student WHERE id = '$_GET[id]'";
                            $result = mysqli_query($connect, $query);
                            $row = mysqli_fetch_array($result);
                            ?>
                            <form action="update_student_db.php?id=<?= $row['id'] ?>" method="POST" enctype="multipart/form-data">
                                <div class="col-xl-12">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                          <i class="fas fa-marker"></i>  <b> Update Student Detail</b>
                                          <button type="button" class="btn btn-primary" style='float:right;'><?php
                                    $url = htmlspecialchars($_SERVER['HTTP_REFERER'] );
                                    echo "<a href='$url' class='text-white'>Back</a>";?></button>
                                        </div>
                                        <div class="card-body">
                                            <div class="box_general padding_bottom">
                                                <div class="wrapper_indent">
                                                    <div class="form-group">
                                                        <label>Teacher Full Name</label>
                                                        <input type="text" name="student_name" value="<?php echo $row['student_name']; ?>" class="form-control" placeholder="Enter Teacher Full Name">
                                                    </div>
                                                    <div class="strip_menu_items">
                                                        <div class="row">                                                           
                                                            <div class="col-xl-9 ">
                                                                <div class="row">
                                                                <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Class Name *</label>
                                                                            <input type="text" class="form-control" placeholder="Enter Class Name" name="class" value="<?php echo $row['class_no']?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Gender</label>
                                                                                <select class="custom-select" name="gender" required>
                                                                                    <option value="M">Male</option>
                                                                                    <option Value="F">Female</option>
                                                                                </select>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Mother Name *</label>
                                                                            <input type="text" class="form-control" placeholder="Enter Mother Name" name="mother_name" value="<?php echo $row['mother_name']?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Father Name *</label>
                                                                            <input type="text" class="form-control" placeholder="Enter Father Name" name="father_name" value="<?php echo $row['father_name']?>">
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Mobile No *</label>
                                                                            <input type="text" class="form-control" placeholder="Enter Mobile No" name="mobile" value="<?php echo $row['mobile_no']?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input type="email" class="form-control" placeholder="Enter Email Id" name="email" value="<?php echo $row['email']?>">
                                                                        </div>
                                                                    </div>
                                                                  
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Address *</label>
                                                                            <input type="text" class="form-control" placeholder="Enter Address Detail" name="address" value="<?php echo $row['address']?>" required>
                                                                        </div>
                                                                    </div> 
                                                                </div>                                                             
                                                             
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="dropzone"  style="width:180px; height: 200px;">
                                                                    <img src="studentimages/<?php echo $row['student_image']; ?>" class="img-fluid">
                                                                </div>
                                                                <input type="file" value="<?php echo "studentimages/".$row['student_image']; ?>" class="form-control" name="profile">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="text-right mb-4 mt-4">
                                                            <input type="submit" name="submit" class="bnt btn-success btn-block btn-lg" value="Update Teacher Detail">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/fontawesome/js/all.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script> 
        <script src="js/rocket-loader.min.js"></script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor1'))
                .then(editor => {
                    console.log(editor1);
                })
                .catch(error => {
                    console.error(error);
                });
        </script> 
    </html>
<?php } ?>