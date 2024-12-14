$(document).ready(function(){
	const clint_org_name = $("#clint_org_name");
	const p_name=$("#p_name");
	clint_org_name.change(function(){		
		let coid = this.value;
		if(coid)
		{
			// alert(coid);
			$.ajax({
				url:'./ajx/admin-ajx.php',
				data:{coid:coid},
				type:'post',
				dataType:'json',
				success:function(data)
				{
					if(data.status == 1 )
					{
						$("input[name=con]").val(data.row.clint_name);
						$("input[name=ccn]").val(data.row.mobile_no);
						$("input[name=ca]").val(data.row.address);      
						$("input[name=cwn]").val(data.row.wattsapp_no);
					}
				}
			})
		}
	});

	p_name.change(function(){		
		let p_id = this.value;
		if(p_id)
		{
			alert(p_id);
			$.ajax({
				url:'./ajx/admin-ajx.php',
				data:{pid:p_id},
				type:'post',
				dataType:'json',
				success:function(data)
				{
					if(data.status == 1 )
					{
						$("input[name=amount]").val(data.row.price);
						// $("input[name=duesamount]").val(data.row.duesamount);
						                     
					}
				}
			})
		}
	});

})