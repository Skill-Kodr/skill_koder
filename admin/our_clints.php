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
        <meta name="description" content="Clint Detail" />
        <meta name="author" content="Clint Detail" />
        <title>Clint Detail</title>
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
                                <div class="card mb-4 order-list">
                                <div class="card-header">
                                    <i class="fas fa-plus mr-1"></i>
                                    <b>Add Clints Detail </b>
                                </div>
                                    <div class="gold-members p-4">
                                        <form method="POST" action="clint_db.php" enctype="multipart/form-data">
                                            <div class="row">                                            
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Clint Name *</label>
                                                        <input type="text" name="cnm" placeholder="Enter Clint Name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label>Clint's Address*</label>   
                                                        <input type="text" name="ca" placeholder="Enter Clint's Address" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Clint's Contact No*</label>   
                                                        <input type="text" name="ccn" placeholder="Enter Clint's Contact No" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Clint's Wattsapp No*</label>   
                                                        <input type="text" name="cwn" placeholder="Enter Clint's Wattsapp No" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>Clint's Organisation Name*</label>   
                                                        <input type="text" name="con" placeholder="Enter Clint's Oreanisation name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label>URL Link *</label>  
                                                        <input type="text" name="url_link" placeholder="Enter Url Link" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">    
                                                        <label>Upload Logo *</label>                                              
                                                        <input type="file" name="img" class="form-control" required>
                                                    </div>
                                                </div>                                        
                                                <div class="col-md-1" style="text-align: center;">
                                                    <input type="submit" name="submit" class="btn btn-lg btn-warning" value="Save" style="margin-top:15px;">
                                                </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    <b>All Clints Detail </b>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable"  cellspacing="0">
                                            <thead class="table-dark">
                                                <tr class="text-uppercase">
                                                    <th style="text-align: center;"> Id</th>
                                                    <th style="text-align: center;"> Organisation Name</th>
                                                    <th style="text-align: center;"> Organisation Type</th>
                                                    <th style="text-align: center;"> Address</th> 
                                                    <th style="text-align: center;"> Date</th>
                                                    <th style="text-align: center;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = '1'; 
                                                $blogquery = "SELECT * FROM clint ORDER BY id desc";
                                                $fetchresult = mysqli_query($connect, $blogquery);
                                                while ($row = mysqli_fetch_assoc($fetchresult)) {
                                                ?>
                                                    <tr>
                                                        <td style="text-align: center;"><?php echo $i++; ?></td>
                                                        <td style="text-align: center;"> <?php echo $row['org_name']; ?></td> 
                                                        <td style="text-align: center;"> <?php echo $row['org_type']; ?></td> 
                                                        <td style="text-align: center;"> <?php echo $row['address']; ?></td> 
                                                        <td style="text-align: center;"><?php echo $row['created_date']; ?> </td>
                                                        <td style="text-align: center;"> <a href="clint_full_detail.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm "><i class="fas fa-expand-arrows-alt"></i> View </a>
                                                                <a href="update_clint.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info"><i class="fas fa-pen"></i></a>
                                                         <a href="delete_clint.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> </td>
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



    </html>
<?php }


?>