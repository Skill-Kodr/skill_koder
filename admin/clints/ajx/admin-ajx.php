<?php 
      include_once "../conn.php";
     if(isset($_POST['class_name']) && !empty($_POST['class_name']))
     {
     	 $query = "SELECT * FROM section where class_id = '".$_POST['class_name']."'";
     	 $str="<option value=''>select</option>";
         $result = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            	$str.="<option value='".$row['id']."'>".$row['section_name']."</option>";
            }
            echo $str;exit;
     }  
	 
	 if(isset($_POST['section_name']) && !empty($_POST['section_name']))
     {
     	 $query = "SELECT * FROM add_student  where status=1 and section_id = '".$_POST['section_name']."'";
     	 $str="<option value=''>select</option>";
         $result = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            	$str.="<option value='".$row['id']."'>".$row['student_name']."</option>";
            }
            echo $str;exit;
     }  
     
     if(isset($_POST['sid']) && !empty($_POST['sid']) )
{
	$return['status']=0; 
	 $sql = "select cust.*,usr.class_name   from add_student as cust left join  class as usr on(usr.id=cust.id) 
         where cust.id = '".trim($_POST['sid'])."'";
	 $result = mysqli_query($connect, $sql);
	 $row = mysqli_fetch_assoc($result);
	 if($row)
	 {
	 	$return['status']=1;
	 	$return['row']=$row;

	 }
	 echo json_encode($return);
}

if(isset($_POST['fid']) && !empty($_POST['fid']) )
{
	$return['status']=0; 
	 $sql = "select  *  from fee_detail where id = '".trim($_POST['fid'])."'";
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
                                                                               