<?php	
	if(isset($_REQUEST['id']))
	{
		$req_id = $_REQUEST['id'];
		
	}else {
		header('location: index.php');
	}
?>

  </head>
  <?php include 'connect.php'; ?>
  <?php include 'header.php'; ?>
  <body>
		<div class="container-fluid head-container"> 		
			<div class="container head-container"> 
				<div class="row">							
					<div class="col-lg-12 col-md-12"> 
						<div class="page-header">
							<h2>Notices</h2>
						</div>					
							<div class="col-lg-10 col-md-12"> 
								<?php
									$sql = mysql_query("select * from notices where id = '$req_id'");
									$note = mysql_fetch_array($sql);								
									$notes = $note['note'];
									$date = $note['notices_time'];
								?>
								<h4><?php echo $date?></h4>
								<p>
								<?php
										echo $notes;
								?>										
								</br></br><hr />
								</p>									
							</div>						
					</div>
				</div>	<!-- row end -->
			</div> 
		</div> <!-- container end -->
			<!--  -------------------------------------  -All News Here ---------------------------------------- -->
			
			
		<div class="container"> 
			<div class="page-header"> <h2>All Notices </h2> </div>
				<div class="row"> 
				
				<?php 	 	 	 	 
					
				$sql1 = mysql_query("select * from notices");
						
						while($notee = mysql_fetch_array($sql1)){							
						$notics_id = $notee['id'];
						$notess = $notee['note'];
						$new_notices = substr($notess,0,60);
						$dates = $notee['notices_time'];

				?>	
		
	


		<div class="col-lg-4 col-md-6">
			
			<div class="col-lg-8 col-md-6"> 
				<h5> <?php echo $dates ;?>  </h5>
					<p> 
						<?php echo $new_notices; ?> 
						<br />
						<a href="note_view.php?id=<?php echo $notics_id; ?>" class="more"> &ndash; More </a> 
					</p>
			</div>
		</div>
			
			<?php
				}
			?>
			
			</div>
		</div>
		
		<div class="container-fluid custom-footer"> 			
			 <p>&#9400 Shakil Ahmed</p>		
		</div>
		
	
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		
		
		<script src="js/ticker.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
		
  </body>
</html>