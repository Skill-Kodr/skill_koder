<?php
session_start();
include "conn.php";

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query = "select * from admin";
	$result = mysqli_query($connect,$query);
	while($row = mysqli_fetch_assoc($result))
{
	if($row['admin_id'] == $username AND $row['password']==$password)
	{
		$_SESSION['admin'] = $username;
		header('location: dashboard.php');
		
	}
		
	else{ 
        echo "<script>
alert('Admin ID & Password is incorrect');
window.location.href='index.php';
</script>";
	}

}
}
?>