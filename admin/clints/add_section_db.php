<?php
include "conn.php";
?>
<?php


if (isset($_POST['submit'])) {
    $cat = $_POST['cat'];
    $class=$_POST['class'];    
    $query = "INSERT INTO section(class_id, section_name) VALUES ('$class','$cat') ";
    mysqli_query($connect, $query) or die($query);

    echo "<script>
        alert('Section Section Successfully');
            window.location.href='add_section.php';
        </script>";
}

?>
