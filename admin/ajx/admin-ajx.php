<?php 
      include_once "../conn.php";     
     if(isset($_POST['coid']) && !empty($_POST['coid']) )
{
	$return['status']=0; 
	 $sql = "select *  from clint  where id = '".trim($_POST['coid'])."'";
	 $result = mysqli_query($connect, $sql);
	 $row = mysqli_fetch_assoc($result);
	 if($row)
	 {
	 	$return['status']=1;
	 	$return['row']=$row;

	 }
	 echo json_encode($return);
}

if(isset($_POST['pid']) && !empty($_POST['pid']) )
{
	$return['status']=0; 
	 $sql = "select  * from product where id = '".trim($_POST['pid'])."'";
	 $result = mysqli_query($connect, $sql);
	 $row = mysqli_fetch_assoc($result);
	 if($row)
	 {
	 	$return['status']=1;
	 	$return['row']=$row;

	 }
	 echo json_encode($return);
}
   ?>
                                                                               