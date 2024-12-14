<?php

include "conn.php";

$id = $_GET['id'];
$query = "UPDATE add_student SET status=0 where id='$id'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Student Successfully Deleted');
window.location.href='all_student.php';
</script>";
}
