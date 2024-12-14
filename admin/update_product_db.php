<?php
include "conn.php";
?>
<?php

$id = $_GET['id'];
// echo $_GET['id'];
if (isset($_POST['submit'])) {
    $cat = $_POST['pnm'];
    $amount=$_POST['price'];
    date_default_timezone_set('Asia/Kolkata');
    $time = date('d-m-y h:i:s');
    $query = "UPDATE product SET product_name = '$cat' , price='$amount'  WHERE id = '$id' "; 
    mysqli_query($connect, $query) or die($query); 
    echo "<script>
        alert('Product Detail updated  Successfully');
            window.location.href='product.php';
        </script>";
}

?>
