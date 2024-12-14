<?php
include "conn.php";
if (isset($_POST['submit'])) {
    $product_name=$_POST['pnm'];
    $price=$_POST['price'];   
    $query = "INSERT INTO product(product_name,price) VALUES ('$product_name','$price')";
    mysqli_query($connect, $query) or die($query);
    echo "<script>
         alert('Product Added Successfully');
             window.location.href='product.php';
         </script>";
}
?>