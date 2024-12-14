<?php
$hostname = "localhost"; 
$username = "root";
$password = "";
$databasename = "skc_admin";
$connect = mysqli_connect($hostname, $username, $password,$databasename) or die("Could not connect database");  
mysqli_set_charset($connect ,'utf8');
?>