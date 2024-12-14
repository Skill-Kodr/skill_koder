<?php
include "conn.php";
?>
<?php


if (isset($_POST['submit'])) {
    $file = $_FILES['profile'];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];   
  
    $folder = "syllabus/" . $file_name;
    move_uploaded_file($file_tmp, $folder);

    $cat = $_POST['cat'];
    
    $query = "INSERT INTO class (class_name,syllabus ) VALUES ('$cat','$file_name') ";

    mysqli_query($connect, $query) or die($query);

    echo "<script>
        alert('Class Added Successfully');
            window.location.href='add_class.php';
        </script>";
}

?>
