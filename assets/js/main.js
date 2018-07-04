$('.status').change(function(){
	status=$(this).find(":selected").val();
	id=$(this).attr('data-id');

	if(confirm("Are you sure?")){

	
	$.ajax({
		url:"status/"+id+"/"+status
		
		
	})
}
})



