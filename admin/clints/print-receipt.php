<?php include_once "conn.php"; ?>
<link href="vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet" type="text/css">
<?php if (isset($_GET['receipt_no']) && !empty($_GET['receipt_no'])) { 
	$sql = "select * from fee_summary  where invoice_no='". trim($_GET['receipt_no']) ."'";
	$invoiceresult =  mysqli_query($connect, $sql);
	$invoiceorder_row = mysqli_fetch_assoc($invoiceresult);
	$id=$invoiceorder_row['student_id'] ;
	$sql="SELECT 
	cu.class_name as class_name,
	u.student_name as student_name,sec.section_name as section_name  ,u.address as address,u.mobile_no as mobile_no,u.father_name , u.email as email
                                     FROM  add_student as u left join class as cu ON u.class_no=cu.id 
									 left join section as sec on(sec.id=u.section_id)
                                     where u.id = '$id' and u.status=1";
									$result =  mysqli_query($connect, $sql);
									$order_row = mysqli_fetch_assoc($result);

								?>
<!DOCTYPE html>

<head>
	<title>Vission Play School</title>

	<style type="text/css">
		table {
			width: 100%;
			border-collapse: collapse;
		}

		.botam-border {
			border-bottom: 1px solid black;
		}

		.bdr {
			border-bottom: 1px solid lightgray;
		}

		.br {
			border-right: 1px solid lightgray;
			padding: 3px 10px 3px 10px;
		}
		

	</style>
</head>

<body onload="window.print();" >
	<div >
		<table class="table-responsive" style="border:1px solid black;">
		      
			<tr >
				<td colspan="8" style="text-align:center"> </p><img src="img/logo.png" class="img-fluid" style="width:230px;height:180px"><br><p style="margin-top:-6px">2nd Floor ,Rameshwar Bazar ,Near Bank Of Maharashtrap,<br>
				otur road Kalwan Tal-Kalwan Dist -Nashik 423501<br>
				<i class="fa fa-envelope"></i> visionschoolandcollege@gmail.com<br>
				 <i class="fa fa-phone-alt"></i> +91 8483919950</br><br><span ><strong>Fee Receipt</strong></span></p></td>
				 <!-- <td colspan="4"> 
                    <p style="text-align:center"><span style="font-size:30px"><b>VISSION PLAY SCHOOL</b></span>
                    <br>2nd Floor ,Rameshwar Bazar ,Near Bank Of Maharashtrap, 
                    <br>otur road Kalwan Tal-Kalwan Dist -Nashik 423501 
                    <br><span><b>Email:</b>visionschoolandcollege@gmail.com </span>
                    <br><b>Mobile No:</b>+91 8483919950
					<br><span ><strong>Fee Receipt</strong></span>
                </p></td> -->
			</tr>

			<tr>
				<td colspan="8" class="botam-border"></td>
			</tr>
			<tr>
			<td colspan="1"></td>
				<td colspan="3">Receipt No:-<?= $invoiceorder_row['invoice_no']; ?></td>
				<td colspan="3" style="text-align: right;">Date:-<?= date('d-m-Y', strtotime($invoiceorder_row['current_time'])); ?></td>
				<td colspan="1"></td>
			</tr>
			<tr>
				<td colspan="8" class="botam-border"></td>
			</tr>
			<tr>
				<td colspan="1"></td>
				<td colspan="4"><strong>Student Detail</strong></td>
				<td colspan="3"></td>
			</tr>
			<tr>
				<td colspan="1"></td>
				<td colspan="7" ><b>Student  Name:</b><?= $order_row['student_name']; ?></td>
			</tr>
			<tr>
				<td colspan="1"></td>
				<td colspan="7" ><b>Mobile:</b><?= $order_row['mobile_no']; ?></td>
			</tr>
			<tr>
				<td colspan="1"></td>
				<td colspan="7" ><b>Class:</b><?= $order_row['class_name']  ?></td>
			</tr>
			<tr>
				<td colspan="1"></td>
				<td colspan="7" ><b>Section:</b><?= $order_row['section_name'] ; ?></td>
			</tr>
			<tr>
				<td colspan="1"></td>
				<td colspan="7" ><b>Parent's Name:</b><?= $order_row['father_name']; ?></td>
			</tr>
			<tr>
				<td colspan="1"></td>
				<td colspan="7" ><b>Address:</b><?= $order_row['address']; ?></td>
			</tr>
			
			<td colspan="1"></td>
			<td colspan="7" ><b>Email:</b><?= $order_row['email']; ?></td>
			</tr>
		
			<tr>
				<td colspan="8" class="botam-border" style="text-align: center; font-weight:600;"></td>
			</tr>
        </table>
      	<table class="table-responsive" style="border:1px solid black;">
      	    <thead>
			<tr style="font-weight: 600;border:1px solid black;" >
			    <td class="botam-border br" style="text-align:center;font-size:14px;border:1px solid black;width:10%">Sr. No.</td>
				<td class="botam-border br" style="text-align:center;font-size:14px;border:1px solid black;width:60%">Fee Detail</td>
				<td class="botam-border br" style="text-align:center;font-size:14px;border:1px solid black;width:15%"> Fee</td>
				<td class="botam-border br" style="text-align:center;font-size:14px;border:1px solid black;width:15%">Next Due Date</td>

			</tr>
		</thead>
			<?php $psql = "select fcd.due_date as due_date,fcd.fee_amount as fee_amount,fd.fee_type as fee_type from fee_collection_detail as fcd  left join fee_detail as fd on(fd.id=fcd.fee_type_id)  where fcd.fee_receipt_no = '" . $_GET['receipt_no']. "' ";
			$presult = mysqli_query($connect, $psql);
			$i = 1;			
			while($prow = mysqli_fetch_assoc($presult)){
				?>
				<tr class="bdr">
					<td class="br" style="text-align:center;font-size:14px;border:1px solid black;"><?= $i++; ?></td>
					<td class="br" style="font-size:14px;border:1px solid black;text-align:center">
					<span style="font-size:14px "> <?= $prow['fee_type']?></span></td>
					
					<td class="br" style="font-size:14px;border:1px solid black; text-align:center">&#8377;<?= $prow['fee_amount']; ?></td>
					<td class="br" style="font-size:14px;border:1px solid black; text-align:center"><?= $prow['due_date']; ?></td>
					
				</tr>
			<?php }?>
			<tr class="bdr">
				<td colspan="1" class="br" style="text-align:center;border:1px solid black;"></td>
				<td class="br" style="text-align:right;border:1px solid black;">Total&nbsp;:</td>
				<td class="br" style="text-align:center;border:1px solid black;">&#8377;<?= number_format($invoiceorder_row['total_amt'], 2); ?></td>
			</tr>
		
			
			<tr class="bdr">
				<td colspan="15" class="br" style="text-align:right;border:1px solid black;"><b>Amount In Words:</b>
					<?php
					$number =$invoiceorder_row['total_amt'];
					$no = floor($number);
					$point = round($number - $no, 2) * 100;
					$hundred = null;
					$digits_1 = strlen($no);
					$i = 0;
					$str = array();
					$words = array('0' => '', '1' => 'One', '2' => 'Two',
					 '3' => 'three', '4' => 'Four', '5' => 'Five', '6' => 'Six',
					 '7' => 'seven', '8' => 'Eight', '9' => 'Nine',
					 '10' => 'Ten', '11' => 'Eleven', '12' => 'Twelve',
					 '13' => 'Thirteen', '14' => 'Fourteen',
					 '15' => 'Fifteen', '16' => 'Sixteen', '17' => 'Seventeen',
					 '18' => 'Eighteen', '19' =>'Nineteen', '20' => 'Twenty',
					 '30' => 'Thirty', '40' => 'Forty', '50' => 'Fifty',
					 '60' => 'Sixty', '70' => 'Seventy',
					 '80' => 'Eighty', '90' => 'Ninety');
					$digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
					while ($i < $digits_1) {
					  $divider = ($i == 2) ? 10 : 100;
					  $number = floor($no % $divider);
					  $no = floor($no / $divider);
					  $i += ($divider == 10) ? 1 : 2;
					  if ($number) {
						 $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
						 $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
						 $str [] = ($number < 21) ? $words[$number] .
							 " " . $digits[$counter] . $plural . " " . $hundred
							 :
							 $words[floor($number / 10) * 10]
							 . " " . $words[$number % 10] . " "
							 . $digits[$counter] . $plural . " " . $hundred;
					  } else $str[] = null;
				   }
				   $str = array_reverse($str);
				   $result = implode('', $str);
				   $points = ($point) ?
					 "." . $words[$point / 10] . " " . 
						   $words[$point = $point % 10] : '';
				   echo $result . "Rupees  Only";
				  ?> 
				</td>
			</tr>
		</table>
				</br>
				</br></br></br></br>
				<h4 style="text-align:right">Principal Signature's</h4>
	</div>
	<script src="vendor/fontawesome/js/all.min.js"></script>
</body>
<?php
} else {
	header('location:dashboard.php');
}
?>