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
        <title>Add Product</title>
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
                        <div class="col-xl-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    <b>All Product</b>
                                    <button class="btn btn-primary text-right" data-toggle="modal" data-target="#exampleModal" style="float: right;">Add Product </button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead class="table-dark">
                                                <tr class="text-uppercase">
                                                    <th style="text-align:center">Sr. No.</th>
                                                    <th style="text-align:center">Product  Name</th>
                                                    <th style="text-align:center">Price(&#8377;)</th>
                                                    <th style="text-align:center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                mysqli_set_charset($connect, "utf8");
                                                $query = "SELECT * FROM product ORDER BY id DESC  ";
                                                $result = mysqli_query($connect, $query);
                                                $i=1;
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <tr>
                                                        <td style="text-align:center"><?php echo $i++; ?></td>
                                                        <td style="text-align:left"> <?php echo $row['product_name']; ?></td>
                                                        <td style="text-align:center"> &#8377;<?php echo $row['price']; ?></td>
                                                        <td style="text-align:center"> <a href="#!" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalEdit<?php echo $row['id']; ?>"><i class="fa fa-marker"></i></a>
                                                            <a href="delete_product.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"><i class="feather-trash"></i></a>
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
        </main>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-user mr-1"></i> <b>Create Product</b></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12"> 
                                            <form action="product_db.php" name="add_product" method="POST" enctype="multipart/form-data">
                                                <div class="row">                                                
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" name="pnm" class="form-control" required placeholder="Enter Product Name*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <input type="number" name="price" class="form-control" required placeholder="Enter Product Price*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <input type="submit" name="submit" class="btn btn-success">
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
                <?php
                mysqli_set_charset($connect, "utf8");
                $query = "SELECT * FROM product ";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                 <div class="modal fade" id="exampleModalEdit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelEdit" aria-hidden="true">
                        <div class="modal-dialog modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelEdit"> <i class="fas fa-user mr-1"></i> <b>Edit Product Detail</b></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form action="update_product_db.php?id=<?php echo $row['id']; ?>" method="POST">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <input type="text" name="pnm" value="<?php echo $row['product_name']; ?>" required class="form-control form-control-lg" placeholder="Category Name*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <input type="number" name="price" value="<?php echo $row['price']; ?>" required class="form-control form-control-lg" placeholder="Category Name*">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <input type="submit" name="submit"  class="btn btn-success btn-block">
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
                <?php } ?>
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