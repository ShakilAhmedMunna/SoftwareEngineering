<!DOCTYPE HTML>
<html lang="en-US">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>NEUB NEWS Admin</title>

	<!-- Bootstrap -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/admin.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->   
		<script src="../js/html5shiv.min.js"></script>
		<script src="../js/respond.min.js"></script>
</head>
<style type="text/css"> 

.box{	
	background-color: #F9F9F9;
	color: #F5153D;
	height: auto;
	width: auto;
	text-align: center;
	padding: 12px;
	margin-top: 1px;
	margin-bottom: 12px;
	margin-left: -56px;
	border: 1px solid;
	border-color: #F5153D;
}

</style>


<body>
			<?php include 'connect.php'; ?>
	<div class="jumbotron">
		<div class="container"> 
			 <div class="row">			 
				<div class="col-md-12">
					<div class="page-header text-center"> 
						<h1>Admin Pannel</h1>
					</div>
				</div>
			</div>
		</div>	
	</div>
	
	<div class="container"> 
		<div class="row"> 
			 <div class="col-sm-5 col-sm-offset-2 col-md-4 col-md-offset-5">
			<div class="col-md-7"> 
		
				<form role="form" method='post'>
				
					<?php
		
						if(isset($_POST['Submit']))
						{
							$username = $_POST['email'];
							$password = $_POST['pwd'];
								if(empty($username) or empty($password))
								{
									$message ='Field can not be empty';			
								}
								else
								{
									$check_login = mysql_query("SELECT * FROM n_admin WHERE ad_name='$username' AND ad_pass ='" .md5($password)."'" );
								
										if(mysql_num_rows($check_login) == 1)
										{
											//$message ="ok !";	//check only ......
											
											session_start();
												$get =mysql_fetch_array($check_login);
												$user_id = $get['id'];
												$_SESSION ['user_id'] = $user_id;
												$_SESSION ['name'] = "news";
									
													header('location:main.php'); 
									
										}
										else
										{
											$message = "User name or password error ...";
										}
								}			
									echo "<div class='box'>$message</div>";
						}
					?>	
				
				
				
				
				  <div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" name="email" id="email">
				  </div>
				  <div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" name="pwd" id="pwd">
				  </div>
				  <button type="submit" name='Submit' class="btn btn-default">Submit</button>
				</form>	
			</div>				
		</div>	
	</div>
	
</body>
</html>