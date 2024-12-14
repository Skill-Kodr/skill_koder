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
        <meta name="description" content="Paanee Re Paanee" />
        <meta name="author" content="Paanee Re Paanee" />
        <title>Blog Detail</title>
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
                                <div class="gold-members p-4">
                                    <form method="POST" action="blog_detail.php" enctype="multipart/form-data">
                                        <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">                                                  
                                                        <input type="file" name="img" class="form-control">
                                                    </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item">
                                                <input type="text" name="link" placeholder="Enter Social Link" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="input-item">
                                                <textarea name="msg"  placeholder="Enter Blog Content" cols="90" rows="5" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12" style="text-align: center;">
                                                <input type="submit" name="submit" class="btn btn-lg btn-warning" value="Upload" style="margin-top: 10px;">
                                            </div>
                                            
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table mr-1"></i>
                                    <b>Blog Detail </b>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable"  cellspacing="0">
                                            <thead class="table-dark">
                                                <tr class="text-uppercase">
                                                    <th style="text-align: center;width:2%"> Id</th>
                                                    <th style="text-align: center;width:10%"> Image</th>
                                                    <th style="text-align: center;width:40%"> Content</th> 
                                                    <th style="text-align: center;width:33%"> Link</th> 
                                                    <th style="text-align: center;width:10%"> Date</th>
                                                    <th style="text-align: center;width:5%">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = '1'; 
                                                $blogquery = "SELECT * FROM blog ORDER BY id desc";
                                                $fetchresult = mysqli_query($connect, $blogquery);
                                                while ($row = mysqli_fetch_assoc($fetchresult)) {
                                                ?>
                                                    <tr>
                                                        <td style="text-align: center;"><?php echo $i++; ?></td>
                                                        <td style="text-align: center;"> <?php echo "<img src='img/blog/".$row['image']."' class='card-img-top ' style='height:100px;width:100px'   alt='#' />";?></td>
                                                        <td style="text-align: center;"> <?php echo $row['content']; ?></td> 
                                                        <td style="text-align: center;"> <?php echo $row['social_link']; ?></td> 
                                                        <td style="text-align: center;"><?php echo $row['current_date']; ?> </td>
                                                        <td style="text-align: center;"> <a href="delete_blog.php?id=<?php echo $row['id'];?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> </td>
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
        <script src="vendor/dataTables/dataTables/js/jquery.dataTables.min.js"></script>
        <script src="vendor/dataTables/dataTables/js/dataTables.bootstrap.min.js"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script src="js/rocket-loader.min.js"></script>



    </html>
<?php }
if (isset($_POST['submit'])) {
   $link=$_POST['link'];
   $content=$_POST['msg'];
    $file = $_FILES['img'];
    $file_name = rand()."_".$file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    $allowed = array('jpg', 'jpeg', 'pdf', 'png');
    $folder = "img/blog/" . $file_name;
    move_uploaded_file($file_tmp, $folder);
    $query = "INSERT INTO blog(image, content, social_link) VALUES ('$file_name','$content','$link') ";

    mysqli_query($connect, $query) or die($query);

    echo "<script>
        alert('Blog Added Successfully');
            window.location.href='blog_detail.php';
        </script>";
    
}

?>