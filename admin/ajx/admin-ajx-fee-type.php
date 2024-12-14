<?php 
      include_once "../conn.php";
     if(isset($_POST['class_name']) && !empty($_POST['class_name']))
     {
     	 $query = "SELECT fd.id as id,fd.fee_type as fee_type , fd.amount as amount FROM fee_detail as fd left join class as cl on(cl.id=fd.class_id) where fd.class_id = '".$_POST['class_name']."'";
     	 $str="<option value=''>select</option>";
         $result = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            	$str.="<option value='".$row['id']."'>".$row['fee_type']."</option>";
            }
            echo $str;
			exit;
     }  
?>
                                                                               