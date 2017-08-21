<?php

	if(isset($_REQUEST['id']))
	{
		$id = $_REQUEST['id'];
			
				mysql_query("UPDATE `categorise` SET `username`='$username' WHERE  `id`='$id'");
		
		
		
		
		
		
		
		
	}else
	{
		header('location: main.php');
	}
	
	if(isset($_POST['Update']))
	{
		$username=$_POST['username'];
		//$password=md5($_POST['password']);
			if(empty($username))
			{
				echo "<p> Field can not Empty </p>";
			}
			else
			{
					echo "<p> ok </p>";
			}
	}	
					
?>
	<form method='post'>				
		
		<?php	
			
			$list_query = mysql_query("SELECT * FROM categorise WHERE cat_id='$id' ");	
			
			while($run_list = mysql_fetch_array($list_query)){
				$cat_id =$run_list['cat_id'];		
				$cat_name =$run_list['cat_name'];
			}
		?>
			<br\><br\>
		<input  type='text' name='username' value=<?php echo $cat_name ?>  />
				<br></br>		
		<input type="Submit" name="Update" value="update" />	
		<input type="hidden" name="id" value="<?php echo $id ?>"  >
	</form>


