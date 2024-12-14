$(document).ready(function(){
	const student_id = $("#student_id");
	const fee_id=$("#fee_id");
	    student_id.change(function(){		
		let sid = this.value;
		if(sid)
		{
			$.ajax({
				url:'./ajx/admin-ajx.php',
				data:{sid:sid},
				type:'post',
				dataType:'json',
				success:function(data)
				{
					if(data.status == 1 )
					{
						$("input[name=father_name]").val(data.row.father_name);
						$("input[name=mobile]").val(data.row.mobile_no);
						$("input[name=address]").val(data.row.address);                        
					}
				}
			})
		}
	});

	fee_id.change(function(){		
		let fid = this.value;
		if(fid)
		{
			$.ajax({
				url:'./ajx/admin-ajx.php',
				data:{fid:fid},
				type:'post',
				dataType:'json',
				success:function(data)
				{
					if(data.status == 1 )
					{
						$("input[name=amount]").val(data.row.amount);
						// $("input[name=duesamount]").val(data.row.duesamount);
						                     
					}
				}
			})
		}
	});

})