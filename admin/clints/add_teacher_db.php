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
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    $allowed = array( 'jpg', 'jpeg', 'pdf', 'png');
    if (in_array($file_ext, $allowed)) {
        if ($file_error === 0) {
            if ($file_size <= 2097152) {
                $folder = "teacherimages/" . $file_name;
                move_uploaded_file($file_tmp, $folder);
            }
        }
    }
    $teacher_name=$_POST['teacher_name'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];  
    $email=$_POST['email'] ;  
    $subject=$_POST['subject'];
    $address=$_POST['address'];
    if($_POST['status']==='on'){
        $active=1;

    }else{
        $active=0;
    }
    // $active=$_POST['status'];
    // echo "Active===========".$_POST['status'];
    mysqli_set_charset($connect, "utf8");

    $query = "INSERT INTO add_teacher(teacher_name,gender,mobile_no,email_id,subject,address,teacher_image,status) Values
    ('$teacher_name','$gender','$mobile','$email','$subject','$address','$file_name','$active')";

    mysqli_query($connect, $query) or die($query); 
 
    echo "<script>
        alert('Add Teacher Successfully');
            window.location.href='all_teacher.php';
        </script>";
}

?>
