<?php

include "conn.php";

$id = $_GET['id'];
$query = "DELETE FROM section where id='$id'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Section  Successfully Deleted');
window.location.href='add_section.php';
</script>";
}
