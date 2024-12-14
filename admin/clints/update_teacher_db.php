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
        $folder = "teacherimages/" . $filename;
        $p = "";
        if (move_uploaded_file($tempname, $folder)) {
            $p = " product_image = '$folder', ";
        }
        $teacher_name=$_POST['teacher_name'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];  
        $email=$_POST['email'] ;  
        $subject=$_POST['subject'];
        $address=$_POST['address'];
        $query = "UPDATE add_teacher  SET  teacher_name='$teacher_name',gender='$gender',mobile_no='$mobile',email_id='$email',subject='$subject',address='$address',teacher_image='$filename' WHERE id = '$id'";
        mysqli_query($connect, $query) or die($query);
        echo "<script>
            alert('Teacher Detail Updated Successfully');
                window.location.href='all_teacher.php';
            </script>";
        
    }

    ?>
