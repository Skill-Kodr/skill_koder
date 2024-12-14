<?php

include "conn.php";

$id = $_GET['id'];
$query = "DELETE FROM product where id='$id'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Product Successfully Deleted');
window.location.href='product.php';
</script>";
}
