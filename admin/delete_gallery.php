<?php

include "conn.php";

$id = $_GET['id'];
$query = "DELETE FROM gallery where id='$id'";


$deletequery= "SELECT image FROM gallery where id='$id' ";
$deleteresult = mysqli_query($connect, $deletequery);
$deleterow = mysqli_fetch_assoc($deleteresult);
if(!empty($deleterow['image'] )){
unlink( 'img/gallery/'.$deleterow['image'] );
}

$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
if ($result > 0) {
    echo "<script>
alert('Image Successfully Deleted');
window.location.href='add_gallery.php';
</script>";
}
