<?php
include "conn.php";
error_reporting(0);
?>

 <?php
    $id = $_GET['id'];
    mysqli_set_charset($connect, "utf8");

    if (isset($_POST['submit'])) {
        $filename = $_FILES['profile']['name'];
        $tempname = $_FILES['profile']['tmp_name'];
        $folder = "studentimages/" . $filename;
        $p = "";
        if (move_uploaded_file($tempname, $folder)) {
            $p = " product_image = '$folder', ";
        }
        $student_name=$_POST['student_name'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];  
        $email=$_POST['email'] ;  
        $class=$_POST['class'];
        $address=$_POST['address'];
        $mother_name=$_POST['mother_name'];
        $father_name=$_POST['father_name'];
        $query = "UPDATE add_student  SET  student_name='$student_name',father_name='$father_name',mother_name='$mother_name',class_no='$class',gender='$gender',mobile_no='$mobile',email='$email',student_image='$filename',address='$address' WHERE id = '$id'";
        mysqli_query($connect, $query) or die($query);
        echo "<script>
            alert('Student Detail Updated Successfully');
                window.location.href='all_student.php';
            </script>";
        
    }

    ?>
