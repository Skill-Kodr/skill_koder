<?php

include "conn.php";

$id = $_GET['id'];
$query = "DELETE FROM blog where id='$id'";

$deletequery= "SELECT image FROM blog where id='$id' ";
$deleteresult = mysqli_query($connect, $deletequery);
$deleterow = mysqli_fetch_assoc($deleteresult);
unlink( 'img/blog/'.$deleterow['image'] );


$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Blog Successfully Deleted');
window.location.href='blog_detail.php';
</script>";
}
