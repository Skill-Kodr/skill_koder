<?php
// $hostname = "localhost"; 
// $username = "erainf_safety";
// $password = "m#OsZ!SbX0e*";
// $databasename = "erainf_safety";
$hostname = "localhost"; 
$username = "root";
$password = "";
$databasename = "skc_admin";
$connect = mysqli_connect($hostname,$username,$password,$databasename) or die("Could not connect database");  
mysqli_set_charset($connect ,'utf8');
?>