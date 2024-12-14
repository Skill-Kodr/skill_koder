<?php
include "conn.php";

if (isset($_POST['submit'])) {
   $course_name=$_POST['course'];
   $course_duration=$_POST['duration'] ." Month";
   $no_of_day=$_POST['noc'] ." Days";
   $class_start_time=$_POST['stime'];
   $class_end_time=$_POST['etime'];

   $file = $_FILES['img'];
   $file_name = rand()."_".$file['name'];
   $file_tmp = $file['tmp_name'];
   
   $folder = "img/course/".$file_name;
   move_uploaded_file($file_tmp, $folder);

   $query = "INSERT INTO course(course_name, course_duration, no_of_day, class_start_time,class_end_time,image) VALUES ('$course_name','$course_duration','$no_of_day','$class_start_time','$class_end_time','$file_name') ";
 
   mysqli_query($connect, $query) or die($query);
 
     echo "<script>
         alert('Course Added Successfully');
             window.location.href='add_course_detail.php';
         </script>";
     
 }
 
 ?>