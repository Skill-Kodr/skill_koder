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
        <title>Fee Collection List</title>
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
                                        <b> Fee Collection List </b>
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
                                                       <th>Student Name</th>
                                                        <th>Class</th>
                                                        <th>Father's Name</th>
                                                        <th>Mobile No</th>
                                                        <th>Address</th>
                                                        <th>Amount(&#8377; )</th>
                                                        <th>Invoice No</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = '1';
                                                    $query = "SELECT fcd.total_amt as amount ,fcd.invoice_no as receipt_no, stu.class_no as class_name,stu.student_name as student_name,stu.father_name as father_name,stu.address as address ,
                                                     stu.mobile_no as mobile_no   FROM fee_summary as fcd  
                                                     left join  add_student as stu on(stu.id=fcd.student_id)  left join class as cl on(cl.id=stu.class_no) where stu.status=1  ORDER BY fcd.id desc";
                                                    $result = mysqli_query($connect, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $i++; ?></td>
                                                            <td><?php echo $row['student_name']; ?></td>
                                                            <td><?php echo $row['class_name']?></td> 
                                                            <td><?php echo $row['father_name']; ?></td>
                                                            <td> <?php echo $row['mobile_no']; ?></td>                                                                  
                                                            <td><?php echo $row['address']?></td> 
                                                            <td>&#8377;<?php echo $row['amount']?></td>  
                                                            <td><?php echo $row['receipt_no']?></td>
                                                            <td>
                                                                <a href="print-receipt.php?receipt_no=<?=$row['receipt_no'];?>" class="btn btn-info btn-sm" target="_blank">
                                                                <i class="fa fa-print"></i> Print Receipt </a>
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
                        // 'copy', 'csv', 'excel', 'pdf', 'print'
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