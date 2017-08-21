<?php

include 'connect.php'; 

		
	if(isset($_POST['comment'])){		
		$comment = $_POST['comment'];
		$date =date('Y-m-d H:i:s');
		mysql_query("INSERT INTO notices VALUES('','$comment','$date')");
	}	
	
	
	
?>										