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
        <title>Student Full Details </title>
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
                            $query = "SELECT asu.religion as religion,asu.cast as cast,asu.mother_qualification as mother_qualification,asu.father_qualification as father_qualification,asu.mother_occupation as mother_occupation,asu.father_occupation as father_occupation,asu.dob as dob,asu.admission_no as admission_no,asu.admission_sought as admission_sought,asu.student_image as student_image , asu.amission_date as amission_date , asu.student_name as student_name , cl.class_name as class_name , sec.section_name as section_name , asu.gender as gender ,asu.mobile_no as mobile_no , asu.email as email ,asu.father_name as father_name , asu.mother_name as mother_name , asu.address as address    FROM add_student as asu left join class as cl on(cl.id=asu.class_no) left join section as sec on(sec.class_id=cl.id) WHERE asu.id = '$_GET[id]'";
                            $result = mysqli_query($connect, $query);
                            $row = mysqli_fetch_array($result);
                            ?>
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-gift mr-1"></i> <strong> Student full Detail </strong>
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
                                                                <img class="mr-4" src="<?php echo 'studentimages/'.$row['student_image']; ?>" class="img-fluid" alt="Generic placeholder image">
                                                            </div>
                                                            <div class="col-md-10">
                                                                <div class="media-body">
                                                                
                                                                    <!-- <p class="float-right mt-1 text-black mb-1 text-success d-none d-md-block" style="font-size:18px"> <b> Addmision No: </b> <?php //echo $row['admission_no']; ?></p><br> -->
                                                                    <p class="float-right mt-1 text-black mb-1 text-success d-none d-md-block" style="font-size:18px"> <b> Addmision Date: </b> <?php echo $row['amission_date']; ?> <i class="feather-check-circle text-success"></i> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"><i class="fas fa-user"></i> <b>Student Name :</b> <?php echo $row['student_name']; ?></p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-box"></i> <b>Class In Which Admission Sought :</b> <?php echo $row['admission_sought']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-box"></i> <b>Admitted Class :</b> <?php echo $row['class_name']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-box"></i> <b>Section :</b> <?php echo $row['section_name']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-box"></i> <b>Gender :</b> <?php echo $row['gender']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-box"></i> <b>DOB :</b> <?php echo $row['dob']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-phone"></i> <b>Mobile No :</b> <?php echo $row['mobile_no']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-envelope"></i> <b>Email Id :</b> <?php echo $row['email']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-user"></i> <b>Father's Name :</b> <?php echo $row['father_name']; ?> </p>                                                                    
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-user"></i> <b>Mother's Name :</b> <?php echo $row['mother_name']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-user"></i> <b>Father's Occupation :</b> <?php echo $row['father_occupation']; ?> </p>                                                                    
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-user"></i> <b>Mother's Occupation :</b> <?php echo $row['mother_occupation']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-user"></i> <b>Father's Qualification :</b> <?php echo $row['father_qualification']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-user"></i> <b>Mother's Qualification :</b> <?php echo $row['mother_qualification']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-map"></i> <b>Address :</b> <?php echo $row['address']; ?> </p> 
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-user"></i> <b>Cast :</b> <?php echo $row['cast']; ?> </p>
                                                                    <p class="text-black mb-1" style="font-size:18px"> <i class="fas fa-user"></i> <b>Religion :</b> <?php echo $row['religion']; ?> </p>                                                                
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