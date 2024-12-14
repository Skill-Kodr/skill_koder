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
                $folder = "studentimages/" . $file_name;
                move_uploaded_file($file_tmp, $folder);
            }
        }
    }

    $year = ( date('m') > 6) ? date('Y') + 1 : date('Y');
    $last_admission_no = "select count( admission_no ) + 01 as admission_no from add_student";
    $result = mysqli_query($connect, $last_admission_no);
    $row = mysqli_fetch_assoc($result);
    $admission_no = 'VPS/'.$year.'/'. $row['admission_no'];
    mysqli_set_charset($connect, "utf8");


    $student_name=$_POST['student_name'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];  
    $email=$_POST['email'] ;  
    $class=$_POST['class'];
    $address=$_POST['address'];
    $mother_name=$_POST['mother_name'];
    $father_name=$_POST['father_name'];
    $section=$_POST['section_name'];
    $mother_occupation=$_POST['mother_occupation'];
    $father_occupation=$_POST['father_occupation'];
    $nationality=$_POST['nationality'];
    $cast=$_POST['cast'];
    $religion=$_POST['religion'];
    $mother_qualification=$_POST['mother_qualification'];
    $father_qualification=$_POST['father_qualification'];
    $admission_sounght=$_POST['admission_sounght'];
    $dob=$_POST['dob'];

    if($_POST['status']==='on'){
        $active=1;

    }else{
        $active=0;
    }


    mysqli_set_charset($connect, "utf8");
    $query = "INSERT INTO add_student(student_name,father_name,mother_name,gender,mobile_no,email,student_image,address,class_no,section_id,mother_occupation,father_occupation,mother_qualification,father_qualification,nationality,cast, religion,status,admission_no,
    admission_sought,dob) Values ('$student_name','$father_name','$mother_name','$gender','$mobile','$email','$file_name','$address','$class','$section','$mother_occupation','$father_occupation','$mother_qualification','$father_qualification','$nationality','$cast','$religion','$active','$admission_no','$admission_sounght','$dob')";
    mysqli_query($connect, $query) or die($query); 
 
    echo "<script>
        alert('Student Add Successfully');
            window.location.href='all_student.php';
        </script>";
}

?>
