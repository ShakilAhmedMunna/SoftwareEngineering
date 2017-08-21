$('#post_submit').click(function(){
	
	
	var post_title			 = $('#post_title').val();
	var category			 = $('#category').val();
	var news_type			 = $('#news_type').val();
	var File		 		 = $('#post_image').attr('src');
	
	//var File		 		 = $('#post_image').val();
	//var editor_data =  CKEDITOR.instances['post_description'].setData(data);
	var editor_data = CKEDITOR.instances['post_description'].getData()
 

 
 if (editor_data == '' || post_title == '' || category == '' || news_type =='' || File == '' )
{
			$('#post_status').text('Empty..');
	
	}else{
		$.post('post_insert.php',{post_title :post_title ,editor_data :editor_data ,category:category ,news_type : news_type , File : File },function(data){
		$('#post_status').text('Successful');
		$('#post_title').val("");
	});
		
	}
	
});
