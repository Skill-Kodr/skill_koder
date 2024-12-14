<?php
include "conn.php";
?>
<?php

$id = $_GET['id'];
// echo $_GET['id'];
if (isset($_POST['submit'])) {
    $cat = $_POST['cat'];
    date_default_timezone_set('Asia/Kolkata');
    $time = date('d-m-y h:i:s');
    $query = "UPDATE class SET class_name = '$cat'  WHERE id = '$id' "; 
    mysqli_query($connect, $query) or die($query); 
    echo "<script>
        alert('Update Class  Successfully');
            window.location.href='add_class.php';
        </script>";
}

?>
