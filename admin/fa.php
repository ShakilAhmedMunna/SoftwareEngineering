<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>jdfdjfkjd</title>
	<!-- Fancybox jQuery -->
	<script type="text/javascript" src="fancybox/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="fancybox/jquery.fancybox.js"></script>
	<script type="text/javascript" src="fancybox/main.js"></script>
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css" />
	<!-- //Fancybox jQuery -->
	
	
</head>
<body>
<?php include 'connect.php'; ?>

    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->


		<div class="container">
			<div class="row"> 
				<div class="col-md-5 col-md-offset-5">
				<br />
					<h4 class="cat_main">ENTER YOUR CATAGORY</h4>
			
			
			<form action="" method="POST" class="form-inline">		

				<?php
						
					if(isset($_POST['Submit']))
					{							
						$cat_name = $_POST['Name'];					
														
							if(empty($cat_name)){					
								$message ='Field can not be empty';
							}else{
								mysql_query("INSERT INTO categorise VALUES('','$cat_name')");					
									$message ='Successful';
							}
								echo "<p class='cat_box'>$message</p>";
					}	
				?>										
					<input type="text" name="Name" class="form-control" id="">
					<input class="btn btn-default" name="Submit" type="submit" value="Submit">
			</form>
				</div>
			</div>
		</div>   <!-- container end -->
		 
		 
		  <!--  --------------------------------------------------------------   -->
		 
		 
		<div class="container">
			<div class="row"> 
				<div class="col-md-8 col-md-offset-2">						          
					<table class="table table-striped table-responsive">
					
						<thead>
						  <tr>
							<th class="text-center">Catagoery</th>						
							<th class="text-center">Action</th>
						  </tr>
						</thead>
								<?php 

									 $cat_query = mysql_query("SELECT * FROM categorise");	
										while($run_list = mysql_fetch_array($cat_query))
										{	
												$cat_name =$run_list['cat_name'];		
												$cat_id =$run_list['cat_id'];
								?>					
						<tbody>
						  <tr>
							<td class="text-center">
								<?php  echo $cat_name; ?> 
							</td>
							
									<td>
				<a class="fancybox" href="#inline">Edit</a>
				<div id="inline" style="width:400px;display: none;">
					<h3>Edit Data</h3>
					<p>
						<form action="" method="post">
						<input type="hidden" name="hdn" ">
						<table>
							<tr>
								<td>Category Name</td>
							</tr>
							<tr>
								<td><input type="text" name="cat_name" </td>
							</tr>
							<tr>
								<td><input type="submit" value="UPDATE" name="form2"></td>
							</tr>
						</table>
						</form>
					</p>
				</div>
				&nbsp;|&nbsp;
				<a onclick='return confirmDelete();' href="manage-category.php?id=<?php echo $row['cat_id']; ?>">Delete</a>
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
		
	
	<a class="fancybox" href="#inlhine">Edit</a>
				<div id="inlline" style="width:400px;display: none;">
					<h3>Edit Data</h3>
					<p>
						<form action="" method="post">
						<input type="hidden" name="hdn" value="<?php echo $cat_name; ?>">
						<table>
							<tr>
								<td>Category Name</td>
							</tr>
							<tr>
								<td><input type="text" name="cat_name" value="<?php echo $rcat_name; ?>"></td>
							</tr>
							<tr>
								<td><input type="submit" value="UPDATE" name="form2"></td>
							</tr>
						</table>
						</form>
					</p>
				</div>
	
	
</body>
</html>