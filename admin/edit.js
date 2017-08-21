$('#save_button').click(function(){
	
	
 var comment = $('#comment').val();
	
	if(comment==""){
		
		$('#save_status').text('Empty..');
	
	}else{
		$('#save_status').text('Loading ...');
		$.post('insert_jq.php',{ comment: comment },function(data){
		$('#save_status').text('Successful');
		$('#comment').val("");
	});
	}
	
	
	
});

//------------------------------------------------------------------





