<?php
	ob_start();
	session_start();
	if($_SESSION['name']!='news')
	{
		header('location: admin.php');
	}
?>


<?php include 'header.php'; ?>
<?php include 'connect.php'; ?>




		<div class="container">
			<div class="row"> 
				<div class="col-md-5 col-md-offset-5">
				<br />
					<h4 class="cat_main">ENTER YOUR NOTICE</h4>
					
					<p class='cat_box' id="save_status" ></p>
			
			
			<form action="" method="POST" class="form-inline">		

				
					 <div class="form-group">
					  <label for="comment"></label>
					  
					 <!-- <textarea class="form-control" rows="2" id="comment"></textarea> -->
					<textarea class="form-control" rows="2" style="width: 239px; height: 63px;" id="comment"></textarea>
					</div>
										
					<br />
					<br />
					<p> <input class="btn btn-default" type="button" id="save_button" value="Submit" /> </p>
		
			</form>
				</div>
			</div>
		</div>   <!-- container end -->
		 
		 
		  <!--  --------------------------------------------------------------   -->
		 <?php
	 
		
			if(isset($_POST['UPDATE']))
			{

			
				$update_name = $_POST['note_up'];					
				$update_id = $_POST['hdn'];	
				$update_date =date('Y-m-d H:i:s');
					mysql_query("UPDATE `neub_news`.`notices` SET `note` = '$update_name',notices_time='$update_date' WHERE `notices`.`id` ='$update_id'");
			}	 
		?>
		 
		 
		 
		 
		 
		 
		<div class="container">
			<div class="row"> 
				<div class="col-md-8 col-md-offset-2 text-center">						          
					<table class="table table-striped table-responsive">
					
						<thead>
						  <tr>
							<th class="text-center">Notice</th>						
							<th class="text-center">Action</th>
						  </tr>
						</thead>
								<?php 
$i=0;
									 $cat_query = mysql_query("SELECT * FROM notices");	
										while($run_list = mysql_fetch_array($cat_query))
										{
$i++;											
												$view_note =$run_list['note'];
												$new_view_note = substr($view_note,0,70);
												$notices_id =$run_list['id'];
								?>					
						<tbody>
						  <tr>
							<td class="text-center">
							
								<?php echo $new_view_note." ...." ?> 
							</td>
							
			<td>
				<a class="fancybox" href="#inline<?php echo $i; ?>">Edit</a>
				<div id="inline<?php echo $i; ?>" style="width:400px;display: none;">
					<h3>Edit Data</h3>
					<p>
						<form action="" method="post">
							<input type="hidden" name="hdn" value="<?php echo $notices_id; ?>">
							<table>
								<tr>
									<td>Notices</td>
								</tr>
								
								<tr>
									<td>
										<textarea rows="4" name="note_up" cols="50">
											<?php echo $view_note; ?>
										</textarea>
									</td>
								</tr>
								<br />
								<tr>
									<td><input type="submit" value="UPDATE" name="UPDATE"></td>
									
								</tr>
							</table> 
						</form>
					</p>
				</div>
				&nbsp;|&nbsp;
				<a  href="delete.php?id=<?php echo $notices_id; ?>">Delete</a>
			</td>
						  </tr>
						</tbody>
									<?php
										} // this line must be end before table end .........
									?> 
					</table>	


									
				</div>
			</div>	
		</div>		  
		
		

		
		
		
	<script src="../js/jquery-1.9.0.min.js"></script>
	 <script src="../js/jquery.js"></script>
	 <script src="../js/jqr.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../fancybox/jquery.fancybox.js"></script>
	<script type="text/javascript" src="../fancybox/main.js"></script>
	<script src="edit.js"></script>
		
</body>
</html>