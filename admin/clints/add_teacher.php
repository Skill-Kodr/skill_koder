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
        <title>Add Teacher Full Detail</title>
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
                        <form action="add_teacher_db.php" method="POST" name="addproduct" enctype="multipart/form-data">
                            <div class="row mt-5">
                                <div class="col-xl-12">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-box mr-1"></i> <b> Add Teacher Detail </b>
                                            <button type="button" class="btn btn-primary" style='float:right;'><?php
                                    $url = htmlspecialchars($_SERVER['HTTP_REFERER'] );
                                    echo "<a href='$url' class='text-white'>Back</a>";?></button>
                                        </div>
                                        <div class="card-body">
                                            <div class="box_general padding_bottom">
                                                <div class="wrapper_indent">
                                                    <div class="form-group">
                                                        <label>Teacher Full Name *</label>
                                                        <input type="text" name="teacher_name" class="form-control form-control-lg" required placeholder="Enter Teacher Full Name" required>
                                                    </div>
                                                    <div class="strip_menu_items">
                                                        <div class="row">                                                            
                                                            <div class="col-xl-9">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Gender *</label>
                                                                            <div>
                                                                                <select class="custom-select" name="gender" required>
                                                                                    <option value="M">Male</option>
                                                                                    <option Value="F">Female</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Mobile No *</label>
                                                                            <input type="text" class="form-control" placeholder="Enter Mobile No" name="mobile" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Email</label>
                                                                            <input type="email" class="form-control" placeholder="Enter Email Id" name="email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Subject</label>
                                                                            <input type="text" class="form-control" placeholder="Enter Subject Name" name="subject">
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="row">                                                                
                                                                    <div class="col-md-9">
                                                                        <div class="form-group">
                                                                            <label>Address *</label>
                                                                            <input type="text" class="form-control" placeholder="Enter Address Detail" name="address" required>
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-1">
                                                                        <div class="form-group"><br><br>
                                                                            
                                                                        </div>
                                                                    </div> 
                                                                    <div class="col-md-2">
                                                                        <div class="form-group"><br><br>
                                                                             <input class="form-check-input" type="checkbox" name="status" id="flexCheckChecked" checked style="margin-top:0px">
                                                                             <label class="form-check-label" for="flexCheckChecked">
                                                                                Active
                                                                            </label>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="dropzone"  style="width:180px; height: 200px;">
                                                                    <img  src="" id="preview"   style="width:440px; height: 170px;" alt="No Image">
                                                                </div>
                                                                <input type="file"  class="form-control" name="profile" id="filetag"   onchange="changeimage()">
                                                            </div>
                                                        </div>                                                      
                                                    </div>
                                                    <div class="text-center mb-4 mt-4">
                                                        <input type="submit" name="submit" class="bnt btn-success  btn-lg" value="Add Teacher ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
                <?php include "header/footer.php"; ?>

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

                        var fileTag = document.getElementById("filetag"),
                        preview = document.getElementById("preview");
                        
                    fileTag.addEventListener("change", function() {
                    changeImage(this);
                    });

                    function changeImage(input) {
                    var reader;

                    if (input.files && input.files[0]) {
                        reader = new FileReader();

                        reader.onload = function(e) {
                        preview.setAttribute('src', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                    }
                </script> 

    </html>
<?php } ?>