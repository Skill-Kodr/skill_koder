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
        <title>Student Fee Colletion</title>
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
                        <form action="fee_collect_db.php" method="POST" name="addproduct" enctype="multipart/form-data">
                            <div class="row mt-5">
                                <div class="col-xl-12">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-box mr-1"></i> <b> Student Fee Colletion </b>
                                            <button type="button" class="btn btn-primary" style='float:right;'><?php
                                    $url = htmlspecialchars($_SERVER['HTTP_REFERER'] );
                                    echo "<a href='$url' class='text-white'>Back</a>";?></button>
                                        </div>
                                        <div class="card-body">
                                            <div class="box_general padding_bottom">
                                                <div class="wrapper_indent">
                                                    <!-- <div class="form-group">
                                                        <label>Student Full Name *</label>
                                                        <input type="text" name="student_name" class="form-control form-control-lg" required placeholder="Enter Student Full Name" required>
                                                    </div> -->
                                                    <div class="strip_menu_items">
                                                        <div class="row">                                                           
                                                            <div class="col-xl-12">
                                                                <div class="row">                                                                
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label>Class's Name*</label>
                                                                                <select required="" name="class_name" id="class_id" class="form-control">
                                                                                    <option value="">Select Class</option>
                                                                                    <?php
                                                                                    $query = "SELECT * FROM class";
                                                                                    $result = mysqli_query($connect, $query);
                                                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                                                    ?>
                                                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['class_name']; ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            <!-- <input type="text" class="form-control" placeholder="Enter class Name" name="class_name" required> -->
                                                                        </div>
                                                                    </div>  
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label>Section*</label>
                                                                                <select required="" name="section_name" id="section_id" class="form-control">
                                                                                 </select>
                                                                            <!-- <input type="text" class="form-control" placeholder="Enter class Name" name="class_name" required> -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Student Name*</label>
                                                                            <select  id="student_id" required="" class="form-control" name="student_name">

                                                                            </select>
                                                                            <!-- <input type="text" class="form-control" placeholder="Enter Student's Name" name="student_name" required> -->
                                                                        </div>
                                                                    </div>                                                                 
                                                                    <div class="col-md-3">
                                                                        <div class="form-group">
                                                                            <label>Father's Name*</label>
                                                                            <input type="text" class="form-control" value="" readonly placeholder="Enter Father's Name" name="father_name" id="father_name" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                            <label>Mobile No *</label>
                                                                            <input type="text" class="form-control" value="" readonly placeholder="Enter Mobile No" name="mobile" id="mobile" required>
                                                                        </div>
                                                                    </div>                                                                    
                                                                </div>
                                                                <div class="row">                                                                    
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Address *</label>
                                                                            <input type="text" class="form-control" value="" readonly placeholder="Enter Address Detail" name="address" id="address" required>
                                                                        </div>
                                                                    </div> 
                                                                 </div>
                                                            </div>                                                      
                                                        </div>
                                                    <!-- <div class="text-center mb-4 mt-4">
                                                        <input type="submit" name="submit" class="bnt btn-success  btn-lg" value="Fee Collect ">
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-header">
                                                <i class="fas fa-marker"></i> <b> Fee Detail</b>
                                            </div>
                                        
                                           
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Fee Type*</label>
                                                    <select  id="fee_id" class="form-control" name="fee_type" >
                                                        <!-- <option value="">Select Fee Type</option>
                                                            <?php
                                                            // $query = "SELECT * FROM fee_detail";
                                                            // $result = mysqli_query($connect, $query);
                                                            // while ($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['fee_type']; ?></option>
                                                        <?php// } ?> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label>Fee Amount*</label>
                                                    <input type="Number" class="form-control" id="amount" name="amount" valu="" readonly value="" placeholder="Amount" readonly>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-2">
                                                <div class="form-group">
                                                <label>Dues Amount*</label>
                                                    <input type="Number" class="form-control" id="duesamount" name="duesamount" valu="" readonly value="" placeholder="Amount" readonly>
                                                </div>
                                            </div> -->
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label>Paid Amount*</label>
                                                    <input type="Number" class="form-control" id="paidamount" name="paidamount" valu=""  value="" placeholder="Amount">
                                                </div>
                                            </div>
                                             <div class="col-md-2">
                                                <div class="form-group">
                                                <label>Due Date*</label>
                                                    <input type="date" class="form-control"  name="due_date" id="due_date">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label></label>
                                                <input type="button" id="add-fee" value="Add Fee Detail" class="form-control btn btn-primary">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="box_general padding_bottom">
                                                <div class="wrapper_indent">
                                                    <div class="strip_menu_items">
                                                        <div class="row mt-1">

                                                            <div class="table-responsive mt-3">
                                                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                                    <thead>
                                                                        <tr>
                                                                        <th style="width:4%;text-align:center">ID</th>
                                                                            <th style="width:40%;text-align:center">Fee Detail</th>
                                                                            <th style="width:10%;text-align:center">Amount()</th>  
                                                                            <th style="width:10%;text-align:center">Paid Amount</th> 
                                                                            <th style="width:10%;text-align:center">Next Dues Date</th>                                                                            
                                                                            <th style="width:5%;text-align:center">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="feedetail">

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="text-right mb-4 mt-4">
                                                            <input type="submit" name="submit" class="bnt btn-success btn-block btn-lg" value="Save Fee Detail">
                                                        </div>
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
                <script src="./ajx/ajax.js"></script>
                <script>        
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

                    $(document).ready(function() {
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

                    $("#class_id").change(function() {
                            if (this.value) {
                            $.ajax({
                                url: "./ajx/admin-ajx-fee-type.php",
                                data: {
                                    class_name: this.value
                                },
                                type: 'post',

                                success: function(data) {
                                    console.log(data);
                                    $("#fee_id").html(data);
                                }
                            })
                        }
                    });


                    $("#section_id").change(function() {
                            if (this.value) {
                            $.ajax({
                                url: "./ajx/admin-ajx.php",
                                data: {
                                    section_name: this.value,
                                },
                                type: 'post',

                                success: function(data) {
                                    console.log(data);
                                    $("#student_id").html(data);
                                }
                            })
                        }
                    });

                    
                $("#add-fee").click(function() {
                    let fee_id = $("#fee_id option:selected").val();
                    let fee = $("#fee_id option:selected").text();                  
                    let amount = $("#amount").val();
                    let duesamount = $("#duesamount").val();
                    let paidamount=$('#paidamount').val();
                    let due_date=$('#due_date').val();
                    alert
                 
                    
                    let tr = `<tr >
                                <td>#<input type='hidden' value='${fee_id}' name='fee_id[]'/></td>
                                <td>${fee}<input type='hidden' value='${fee}' name='fee[]'/></td>
                                <td>${(amount)}<input type='hidden' name='amount[]' value='${amount}'/></td>
                                <td>${paidamount}<input type='hidden' name='paidamount[]' value='${paidamount}'/></td>
                                <td>${due_date}<input type='hidden' name='due_date[]' value='${due_date}'/></td>

                                <td><i class='fa fa-trash delete-row'></i></td>
                            </tr>`;
                    $("#feedetail").append(tr);
                  
                    $("#due_date").val('');
                    $("#fee_id").val('');
                    $("#amount").val('');
                    $("#paidamount").val('');
                    // $("#customer_id").attr('disabled','disabled');
                    $("#feedetail").on('click', '.delete-row', function() {
                        $(this).closest('tr').remove();
                //         var table = document.getElementById("dataTable");
                //     var tbodyRowCount = table.tBodies[0].rows.length; // 3
                //   if(tbodyRowCount==0){
                //     document.getElementById("customer_id").disabled=false;
                 // }
                        
                    });

                });

                    
                })
         </script> 

    </html>
<?php } ?>