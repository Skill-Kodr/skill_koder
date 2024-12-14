<?php
include "conn.php";

if (isset($_POST['submit'])) {
    $clint_name=$_POST['cnm'];
    $address=$_POST['ca'];
    $mobile_no=$_POST['ccn']; 
    $wattsapp_no=$_POST['cwn']; 
    $org_name=$_POST['con'];
    $url_link=$_POST['url_link'];
    
     $file = $_FILES['img'];
     $file_name = rand()."_".$file['name'];
     $file_tmp = $file['tmp_name'];
     $file_size = $file['size'];
     $file_error = $file['error'];
     $file_ext = explode('.', $file_name);
     $file_ext = strtolower(end($file_ext));
     $allowed = array('jpg', 'jpeg', 'pdf', 'png');
     $folder = "img/clint/" . $file_name;
     move_uploaded_file($file_tmp, $folder);
     $query = "INSERT INTO clint(clint_name, address, mobile_no, wattsapp_no, org_name,url_link,logo) VALUES ('$clint_name', '$address', '$mobile_no', '$wattsapp_no', '$org_name','$url_link','$file_name')";
 
     mysqli_query($connect, $query) or die($query);
 
     echo "<script>
         alert('Clints Added Successfully');
             window.location.href='our_clints.php';
         </script>";
}
?>