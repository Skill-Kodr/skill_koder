<?php

include "conn.php";

$id = $_GET['id'];
$query = "DELETE FROM class where id='$id'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Class Successfully Deleted');
window.location.href='add_class.php';
</script>";
}
