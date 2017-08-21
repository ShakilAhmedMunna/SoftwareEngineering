 <?php

include 'connect.php'; 

	// || $_POST['editor_data'] || $_POST['category'] || $_POST['news_type'] || $_POST['File']
	if(isset($_POST['post_title'])){
				
	$news_title = $_POST['post_title'];
	$description = $_POST['editor_data'];
	$category = $_POST['category'];
	$type_id= $_POST['news_type'];
	
	$file = $_FILES['post_image']['name'];						
	$file_type = $_FILES['post_image']['type'];						
	$file_size = $_FILES['post_image']['size'];
	$file_tmp = $_FILES['post_image']['tmp_name'];
	$random = rand();
	$date =date('Y-m-d H:i:s');
	
			
			

	move_uploaded_file($file_tmp,'../upload/'.$random.'.jpg');
	
	mysql_query("INSERT INTO `neub_news`.`all_news` (`id`, `news_title`, `description`, `cat_id`, `images`, `type_id`, `date`) VALUES ('', '$news_title', '$description', '$category', '$random.jpg', '$type_id', '$date');");

	
									 
			
		
		
		}
		
		?>
	