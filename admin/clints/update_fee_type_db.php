<?php
include "conn.php";
?>
<?php

$id = $_GET['id'];
// echo $_GET['id'];
if (isset($_POST['submit'])) {
    $cat = $_POST['cat'];
    $amount=$_POST['amount'];
    date_default_timezone_set('Asia/Kolkata');
    $time = date('d-m-y h:i:s');
    $query = "UPDATE fee_detail SET fee_type = '$cat' , amount='$amount'  WHERE id = '$id' "; 
    mysqli_query($connect, $query) or die($query); 
    echo "<script>
        alert('Update Fee Type  Successfully');
            window.location.href='add_fee_type.php';
        </script>";
}

?>
