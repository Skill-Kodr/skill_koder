<?php

include "conn.php";

$id = $_GET['id'];
$query = "DELETE FROM fee_detail where id='$id'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Fee Type  Successfully Deleted');
window.location.href='add_fee_type.php';
</script>";
}
