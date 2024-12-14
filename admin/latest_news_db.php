<?php
include "conn.php";

if (isset($_POST['submit'])) {
   $news=$_POST['news'];
   $msg=$_POST['msg'];

   $file = $_FILES['img'];
   $file_name = rand()."_".$file['name'];
   $file_tmp = $file['tmp_name'];
   
   $folder = "img/news/".$file_name;
   move_uploaded_file($file_tmp, $folder);

   $query = "INSERT INTO news(news_head_lines,content,image) VALUES ('$news','$msg','$file_name')";
 
   mysqli_query($connect, $query) or die($query);
 
     echo "<script>
         alert('Latest News Added Successfully');
             window.location.href='add_latest_news.php';
         </script>";
     
 }
 
 ?>