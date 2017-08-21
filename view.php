<?php
	
	if(isset($_REQUEST['id']))
	{
		$req_id = $_REQUEST['id'];
		
	}else {
		header('location: index.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NEUB NEWS</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">  
    <link href="css/custom.css" rel="stylesheet">  
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="css/ticker.css">
	 
   
  </head>

  <body>
  
  <?php include 'connect.php'; ?>
  <?php include 'header.php'; ?>
	
		
		<div class="container-fluid custom-ticker"> 			
			    <div class="ticker-container">
				  <div class="ticker-caption">
					<p>Breaking News</p>
				  </div>
				
				  <ul>
				  
				    	<?php 	 	 	 	 
			
			$breaking = mysql_query("SELECT * FROM all_news ORDER BY `id` DESC LIMIT 0,10");	
			
		/* //	LIMIT 0,3"); */
					$coun = 0;
					$maxx = 10;
			
			while($bnews = mysql_fetch_array($breaking))
			{
		
				$bdes = $bnews['description'];			
				
				$new_b_des = substr($bdes,0,36);
				//echo $cat_id;
			?>
				  
					<div>
					  <li><span> <?php echo $new_b_des; ?> &ndash; <a href="#">read more</a></span></li>
					</div>
					<?php

			}
		?>
				 </ul>
		
		</div>

		
		

		
		<div class="container head-container"> 
			<div class="row"> 
			
			<?php
			
				/* $type_que = mysql_query("select * from all_news where id = 'Headline'");
				$type_query = mysql_fetch_array($type_que);
					$ty_id = $type_query['type_id'];
				 */		
					//echo $ty_id ; 	description 	cat_id 	images 	date 	type_id 
					
				$head_query = mysql_query("select * from all_news  where id = '$req_id'");
				$main_post = mysql_fetch_array($head_query);
				
					
					$news_title_main = $main_post['news_title'];
					$news_description_main = $main_post['description'];
					/* $new_news_description_main = substr($news_description_main,0,260); */
					$news_cat_id_main = $main_post['cat_id'];
					
					$main_cat_head =mysql_query("SELECT cat_name FROM category where cat_id = '$news_cat_id_main'");	
					$run2 = mysql_fetch_array($main_cat_head);
					$cat_name_main = $run2['cat_name'];
					
					
					$news_images_main = $main_post['images'];
					$news_date_main = $main_post['date'];
						
					
					
					//exit();
			?>
			
			
			
			
			
				<div class="col-lg-8 col-md-12"> 
					<img src="upload/<?php echo $news_images_main; ?>" alt="" class="img-responsive" style="width:630px;height:300px" />
						<h3 class="head_h2"><?php echo $news_title_main; ?></h3>
								<h4><?php echo $cat_name_main." </br>";?> <?php echo " </br>".$news_date_main; ?></h4>
						<div class="col-lg-10 col-md-10"> 
							
									<p class="">
										<?php echo $news_description_main; ?>
																			
										</br>
									</p>						
						</div> 
					
					
				</div>
				<div class="col-lg-4 col-md-12 custom-notics"> 
					<div class="page-header">
						<h2>Notices</h2>
					</div>					
					<div class="col-lg-10 col-md-12"> 
					
					<?php 
					
					
					$sql = mysql_query("select * from notices  LIMIT 0,3");
					$counter = 0;
					$max = 10;
					
					while($note = mysql_fetch_array($sql) and ($counter < $max) )
					{
											
						$notics_title = $note['notics_title'];
						$notes = $note['note'];
						$new_notices = substr($notes,0,60);
						//$notices_time = $notes['notices_time'];
						
						?>				
						<p>
						
						<?php echo $new_notices; ?>
							
						</br></br>
							<a href="no.html" class="more"> Read More </a>  
							</br>
							<hr />
						</p>						
					<?php
					$counter++;
				}			
					
					?>
							
						
					</div>
					
				</div>
			</div>	<!-- row end -->
		</div> <!-- container end -->
			<!--  -------------------------------------  -All News Here ---------------------------------------- -->
			
			
		<div class="container"> 
			<div class="page-header"> <h2>All News </h2> </div>
				<div class="row"> 
				
		<?php 	 	 	 	 
			//exit;
			$allnews = mysql_query("SELECT * FROM all_news where cat_id= '$news_cat_id_main' ORDER BY `id` DESC");	
			
			while($news = mysql_fetch_array($allnews))
			{
				$id=$news['id'];
				$news_title = $news['news_title'];	
				$new_tit = substr($news_title,0,20);
				$des = $news['description'];			
				$cat_id = $news['cat_id'];			
				$images = $news['images'];			
				$type_id = $news['type_id'];			
				$date = $news['date'];
				$new_des = substr($des,0,260);
				//echo $cat_id;
				$query1 =mysql_query("SELECT cat_name FROM category where cat_id = '$cat_id'");	
						$run1 = mysql_fetch_array($query1);
						$cat_name = $run1['cat_name'];

		?>	
		
		<div class="col-lg-4 col-md-6">
			<div class="col-lg-4 col-md-6">
				<img src="upload/<?php echo $images; ?>" alt="" class="img-responsive" style="width:80px;height:80px"/>
			</div>
			<div class="col-lg-8 col-md-6"> 
			<h4> <?php echo $new_tit."..." ;?>  </h4>
			<h4> <?php echo $cat_name; ?>  </h4>
			<h5> <?php echo $date ;?>  </h5>
				<p> 
					<?php echo $new_des."..."; ?> 
					<br />
					<a href="view.php?id=<?php echo $id; ?>" class="more"> &ndash; More </a>
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