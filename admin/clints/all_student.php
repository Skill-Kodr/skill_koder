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
        <title>All Student </title>
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
            <!-- Start Sidebar -->
            <?php include "header/sidebar.php"; ?>
            <!-- End Sidebar-->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-box mr-1"></i>
                                        <b> All Student </b>
                                        <button type="button" class="btn btn-primary" style='float:right;'><?php
                                                                                                            $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                                                                                            echo "<a href='$url' class='text-white'>Back</a>"; ?></button>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered display nowrap" id="example" width="100%" cellspacing="0">
                                                <thead class="table-dark">
                                                    <tr class="text-uppercase">
                                                        <th>S. No</th>
                                                        <!-- <th>Image</th> -->
                                                        <th>Student Name</th>
                                                        <th>Class</th>
                                                        <th>Section</th>
                                                        <th>Gender</th>
                                                        <th>Mobile No</th>
                                                                                                            
                                                        <th>Address</th>                                                       
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = '1';
                                                    $query = "SELECT  stu.student_image as student_image,stu.id as id ,class.class_name as class_name , stu.student_name as student_name , stu.gender as gender,stu.mobile_no as mobile_no , stu.email as email ,stu.father_name as father_name , 
                                                    stu.mother_name , stu.address as address, sec.section_name as section   FROM add_student as stu left join class as class on(class.id=stu.class_no) left join section as sec on(sec.class_id=class.id) where stu.status=1 ORDER BY stu.id desc";
                                                    $result = mysqli_query($connect, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i++; ?></td>
                                                            <!-- <td><figure class="image"><?php //echo "<img src='studentimages/".$row['student_image']."' alt='' style='height:100px'>";?></figure></td> -->
                                                            <td> <?php echo $row['student_name']; ?></td>
                                                            <td>  <?php echo $row['class_name']; ?></td>
                                                            <td><?php echo $row['section'] ?></td>
                                                            <td>  <?php echo $row['gender']; ?></td>
                                                            <td> <?php echo $row['mobile_no']; ?></td> 
                                                              
                                                            <td> <?php echo $row['address']; ?></td> 
                                                                                                                
                                                            <td> <a href="student_full_detail.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm "><i class="fas fa-expand-arrows-alt"></i> View </a>
                                                                <!-- <a href="update_student.php?id=<?php //echo $row['id']; ?>" class="btn btn-sm btn-info"><i class="fas fa-pen"></i></a> -->
                                                                <a href="print_admission_form.php?id=<?= $row['id']; ?>" class="btn btn-info btn-success" target="_blank"><i class="fa fa-print"></i> Print </a>
                                                                <a href="delete_student.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="feather-trash"></i></a>

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

            $(".btnModal").click(function () {
                var passedID = $(this).data('id');//get the id of the selected button
                $('input:text').val(passedID);//set the id to the input on the modal
            });

        </script>


    </body>


    </html>
<?php } ?>