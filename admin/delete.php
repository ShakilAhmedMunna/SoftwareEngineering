<?php
	include 'connect.php';	
	
	if(isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
			mysql_query("delete FROM notices WHERE id='$id'");
				header('location: main.php');
		}else{
			header('location: main.php');
		}
?>		