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
        <meta name="description" content="Skill Coder" />
        <meta name="author" content="Skill Coder" />
        <title>Purchase Order</title>
        <link rel="icon" type="image/png" href="img/logo.png">
        <link href="vendor/icons/feather.css" rel="stylesheet" type="text/css">
        <link href="vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="admincss/styles.css" rel="stylesheet" /> 
        <link href="vendor/dataTables/dataTables/css/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                    <div class="row">
                    <div class="col-xl-12">
                    <form method="POST" action="po_db.php" enctype="multipart/form-data">
                        <div class="card mb-4 order-list">
                            <div class="card-header">
                            <i class="fas fa-box mr-1"></i> <b> Generate Purchase Order</b>
                            <button type="button" class="btn btn-primary" style='float:right;'>
                            <?php
                                $url = htmlspecialchars($_SERVER['HTTP_REFERER'] );
                                echo "<a href='$url' class='text-white'>Back</a>";
                            ?>
                            </button>
                        </div>
                            <div class="gold-members p-4">
                                     <div class="row">                                            
                                        <div class="col-md-3">
                                            <div class="form-group">
                                            <label>Clint Organisation Name *</label>
                                            <select required="" name="clint_org_name" id="clint_org_name" class="form-control">
                                                <option value="">Select Clint Orgnation </option>
                                                <?php
                                                $query = "SELECT * FROM clint";
                                                $result = mysqli_query($connect, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['org_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Clint's Name*</label>   
                                                <input type="text" name="con" placeholder="Clint name" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Clint's Contact No*</label>   
                                                <input type="text" name="ccn" placeholder="Clint's Contact No" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Clint's Wattsapp No*</label>   
                                                <input type="text" name="cwn" placeholder="Clint's Wattsapp No" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Clint's Address*</label>   
                                                <input type="text" name="ca" placeholder="Clint's Address" class="form-control" readonly>
                                            </div>
                                        </div>  
                                     </div>
                                      <div class="card-header">
                                    <i class="fas fa-marker"></i> <b> Product Detail</b>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>Product Type*</label>
                                            <select  id="fee_id" class="form-control" name="p_name" id="p_name" >
                                                <option value="">Select Product Type</option>
                                                    <?php
                                                    $query = "SELECT * FROM product";
                                                    $result = mysqli_query($connect, $query);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['product_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                                <div class="form-group">
                                                <label>Cost*</label>
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
                                                <label>Discount*</label>
                                                    <input type="number" class="form-control"  name="due_date" id="due_date">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label></label>
                                                <input type="button" id="add-fee" value="Add Product Detail" class="form-control btn btn-primary">
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
                                                                            <th style="width:40%;text-align:center">Product Detail</th>
                                                                            <th style="width:10%;text-align:center">Amount(&#8377;)</th>  
                                                                            <th style="width:10%;text-align:center">Paid Amount</th> 
                                                                            <th style="width:10%;text-align:center">Discount</th>                                                                            
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
                                    
                                </form>
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
        <script src="vendor/dataTables/dataTables/js/jquery.dataTables.min.js"></script>
        <script src="vendor/dataTables/dataTables/js/dataTables.bootstrap.min.js"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script src="js/rocket-loader.min.js"></script>
        <script src="./ajx/ajax.js"></script>

        <script>
            
              $(document).ready(function() {
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
<?php }


?>