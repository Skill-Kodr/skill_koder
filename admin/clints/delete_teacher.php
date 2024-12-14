<?php

include "conn.php";

$id = $_GET['id'];
$query = "UPDATE add_teacher SET status=0 where id='$id'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Teacher  Successfully Deleted');
window.location.href='all_teacher.php';
</script>";
}
