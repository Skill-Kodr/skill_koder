<?php
include "conn.php";
?>
<?php


if (isset($_POST['submit'])) {
    $class=$_POST['class_name'];
    $cat = $_POST['cat'];
    $amount=$_POST['amount'];
    $query = "INSERT INTO fee_detail (Class_id,fee_type, amount) VALUES ('$class','$cat','$amount') ";
    mysqli_query($connect, $query) or die($query);

    echo "<script>
        alert('Fee Type Added  Successfully');
            window.location.href='add_fee_type.php';
        </script>";
}

?>
