<?php 
include "conn.php"; 

 
 if (isset($_POST['submit']) && isset($_POST['fee_id']) && !empty($_POST['fee_id'])) {

    $last_order = "select count( invoice_no ) + 01 as last_invoice from fee_summary";
    $invoiceresult = mysqli_query($connect, $last_order);
    $invoicerow = mysqli_fetch_assoc($invoiceresult);
    
    $invoice_no = 'VPS/2024-25/'. $invoicerow['last_invoice'];
    mysqli_set_charset($connect, "utf8");

    
    $fee_id = $_POST['fee_id'];
    $feetype_id = count($fee_id);
    $total_amount=0.0;

    $student_name=$_POST['student_name'];
    $class_name = $_POST['class_name'];     

    for ($i = 0; $i < $feetype_id; $i++) {
        $dues_amount=0.0;
        $total_paid_amount=0.0;
        $diff=0;
        $flag=0;
        $id=0;
        $total_amount += ($_POST['paidamount'][$i]);   
       

        $dquery="SELECT  * FROM fee_collection_detail WHERE student_id='".$_POST['student_name']."' and class_id='".$class_name."' and fee_type_id='" . $_POST['fee_id'][$i]. "'";
        $dresult=mysqli_query($connect, $dquery) or die($dquery); 
        while($row = mysqli_fetch_assoc($dresult)){
            $dues_amount=$row['dues_amt'];
            echo $dues_amount;
            if($row['status']==="Dues"){                
                $total_paid_amount+=$row['fee_amount'];
                $flag=1;
            } else{
                $flag=0;
            }
        
    }
        if($flag>0){           
            $duesquery = " SELECT * FROM fee_detail WHERE id= '" . $_POST['fee_id'][$i]. "' LIMIT 1";
            $duesresult=mysqli_query($connect, $duesquery) or die($duesquery); 
            $row = mysqli_fetch_assoc($duesresult);
            $amount=$row['amount'];
            $diff=$amount-($total_paid_amount+$dues_amount);
            // echo "If Difference-1===========".$diff;
            
            if($diff==0){
                $temp_dues=$dues_amount-$_POST['paidamount'][$i];
                $query = "INSERT INTO fee_collection_detail(student_id,class_id,fee_amount,dues_amt, fee_type_id, due_date,status,fee_receipt_no)  Values ('$student_name','$class_name','" . $_POST['paidamount'][$i]. "','$temp_dues','" . $_POST['fee_id'][$i]. "','".$_POST['due_date'][$i]."','No Dues','$invoice_no')";
                $updatequery="UPDATE fee_collection_detail SET status='No Dues' , dues_amt='0'  WHERE student_id='$student_name' and fee_type_id='".$_POST['fee_id'][$i]."' ";
                mysqli_query($connect, $updatequery) or die($updatequery);                 
            }else{
                $temp_dues=$dues_amount-$_POST['paidamount'][$i];               
                $query = "INSERT INTO fee_collection_detail(student_id,class_id,fee_amount,dues_amt, fee_type_id, due_date,status,fee_receipt_no)  Values ('$student_name','$class_name','" . $_POST['paidamount'][$i]. "','$temp_dues','" . $_POST['fee_id'][$i]. "','".$_POST['due_date'][$i]."','Dues','$invoice_no')";
                $updatequery="UPDATE fee_collection_detail SET dues_amt='$temp_dues' WHERE student_id='".$_POST['student_name']."' and class_id='".$_POST['class_name']."' and fee_type_id='" . $_POST['fee_id'][$i]. "'";
                mysqli_query($connect, $updatequery) or die($updatequery);
            }
            mysqli_query($connect, $query) or die($query); 

        }else{
            $diff=0;
            $duesquery = " select * from fee_detail where id= '" . $_POST['fee_id'][$i]. "'";
            $duesresult=mysqli_query($connect, $duesquery) or die($duesquery); 
            $row = mysqli_fetch_assoc($duesresult);
            $diff= $row['amount']-$_POST['paidamount'][$i]; 
            echo "Else Difference". $diff; 
            mysqli_set_charset($connect, "utf8");

            if($diff===0){
                $query = "INSERT INTO fee_collection_detail(student_id,class_id,fee_amount, fee_type_id ,status,fee_receipt_no)  Values ('$student_name','$class_name','" . $_POST['paidamount'][$i]. "','" . $_POST['fee_id'][$i]. "','No Dues','$invoice_no')";
            }else{
                $query = "INSERT INTO fee_collection_detail(student_id,class_id,fee_amount,dues_amt, fee_type_id, due_date,status,fee_receipt_no)  Values ('$student_name','$class_name','" . $_POST['paidamount'][$i]. "','$diff','" . $_POST['fee_id'][$i]. "','".$_POST['due_date'][$i]."','Dues','$invoice_no')";
            }
            mysqli_query($connect, $query) or die($query);         
            
        }
    }
    
    $invoicequery = "INSERT INTO fee_summary(student_id,invoice_no,total_amt) VALUES ('$student_name','$invoice_no','$total_amount')";
    mysqli_query($connect, $invoicequery) or die($invoicequery); 

    echo "<script>
        alert('Fee Collect Successfully Successfully');
            window.location.href='fee_collection_list.php';
        </script>";
}
 

?>
