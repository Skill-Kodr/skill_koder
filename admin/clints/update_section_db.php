<?php
include "conn.php";
?>
<?php

$id = $_GET['id'];
// echo $_GET['id'];
if (isset($_POST['submit'])) {
    $cat = $_POST['cat'];
    $class=$_POST['class'];
    date_default_timezone_set('Asia/Kolkata');
    $time = date('d-m-y h:i:s');
    $query = "UPDATE section SET class_id='$class',section_name = '$cat'  WHERE id = '$id' "; 
    mysqli_query($connect, $query) or die($query); 
    echo "<script>
        alert('Update Section  Successfully');
            window.location.href='add_section.php';
        </script>";
}

?>
