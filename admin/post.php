<?php
	ob_start();
	session_start();
	if($_SESSION['name']!='news')
	{
		header('location: admin.php');
	}
?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>NEUB NEWS Admin</title>
		<link href="admin.css" rel="stylesheet">
			<!-- CKEditor Start -->
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		
	
	<!-- // CKEditor End -->
</head>

<body>
	<?php include 'header.php'; ?>
	<?php include 'connect.php'; ?>
	

	
	<div class="container"> 
		<div class="row"> 
			<div class="col-lg-12"> 
				<div class="page-header post_header"> 
				
					<!-- <h1>Enter News</h1> -->
				</div>
				
				
				
				
				
				<!-- Form PHP Code here -->
				
				
					
	<p class='cat_box' id="post_status" ></p>
				
				
<form class="form-horizontal"  enctype="multipart/form-data" method="post">


				
				
		<?php
			
		/*	if(isset($_POST['submit'])){
				
				$news_title = $_POST['title'];
				$description = $_POST['post_description'];
				$category = $_POST['category'];
				$type_id= $_POST['news_type'];
				
				//$album_id = $_POST['albumm'];
				
				$file = $_FILES['post_image']['name'];						
				$file_type = $_FILES['post_image']['type'];						
				$file_size = $_FILES['post_image']['size'];
				$file_tmp = $_FILES['post_image']['tmp_name'];
				$random = rand();
				//$date = date('m/d/Y h:i:s', time());
				$date =date('Y-m-d H:i:s');
				
			/*
				 $up_filename=$_FILES["post_image"]["name"];
			  */ 
				
			  
			  //======================================================================
				/* if(empty($news_title) || empty($file)|| empty($file)){
					echo "Please Enter the file Name <br/><br/>";
							//$mess = "Please Enter the file Name";
				}else{  */						
				
			
			
			/*	that
					move_uploaded_file($file_tmp,'../upload/'.$random.'.jpg');
				//mysql_query("INSERT INTO all_news VALUES('','$news_title','$description','$category','$random.jpg''$type_id','')");         //$news_title','','','''
				mysql_query("INSERT INTO `neub_news`.`all_news` (`id`, `news_title`, `description`, `cat_id`, `images`, `type_id`, `date`) VALUES ('', '$news_title', '$description', '$category', '$random.jpg', '$type_id', '$date');");
			echo "<b/><b/>Successful <b/><b/>";
				$mess = "Successful";
									 
			//}
		
		//echo "$mess";
		}
		
	that	*/
		
	?>
		
				
				<!-- Form PHP Code here End -->
				



<p id="save_status"></p>

  <div class="form-group">
    <label for="text" class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
      <input type="text" value="" name="title" id="post_title" class="form-control" placeholder="Title" maxlength="30">
    </div>
  </div>
  
  <div class="form-group">
    <label for="form-control" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="post_description" rows="3" id="post_description"></textarea>
		<script type="text/javascript">
			if ( typeof CKEDITOR == 'undefined' )
			{
				document.write(
					'<strong><span style="color: #ff0000">Error</span>: CKEditor not found</strong>.' +
					'This sample assumes that CKEditor (not included with CKFinder) is installed in' +
					'the "/ckeditor/" path. If you have it installed in a different place, just edit' +
					'this file, changing the wrong paths in the &lt;head&gt; (line 5) and the "BasePath"' +
					'value (line 32).' ) ;
			}
			else
			{
				var editor = CKEDITOR.replace( 'post_description');
				//editor.setData( '<p>Just click the <b>Image</b> or <b>Link</b> button, and then <b>&quot;Browse Server&quot;</b>.</p>' );
			}

		</script>	
    </div>
  </div>

		  <div class="form-group">
		   <label for="" class="col-sm-2 control-label">Catagory & Type</label>
			<div class="col-lg-5 col-sm-10">
		 		<select name='category' id='category' class="form-control">
				<option value="">Select a Category</option>
					<?php 
						$query = mysql_query("SELECT cat_id,cat_name FROM category");
							
							while($run = mysql_fetch_array($query)){
								$cat_id=$run['cat_id'];
								$cat_name =$run['cat_name'];
										//echo"<option value='$album_id'>$cat_name</option>";
					
					echo"<option value='$cat_id'>$cat_name</option>";
					
						}
					?>
						
			</select>
			</div>
			
			<div class="col-lg-5 col-sm-10">
		 	<select name='news_type' id='news_type' class="form-control">
			<option value="">Select a Type</option>
			<?php 
				$query =mysql_query("SELECT type_id,type_name FROM news_type");
					
					while($run = mysql_fetch_array($query)){
						$type_id=$run['type_id'];
						$type_name =$run['type_name'];
								//echo"<option value='$album_id'>$cat_name</option>";
			?>
								
			<?php 
					echo"<option value='$type_id'>$type_name</option>";
			
				}
			?>
				
			</select>
			</div>
			</br>
			</br>
			<div class="col-sm-offset-2 col-sm-10">
			  <div class="form-group">
			<label for="">File input</label>
			<input type="file" name="post_image" id="post_image">
			<p class="help-block">Example block-level help text here.</p>
		  </div>
			</div>
			
			</br>
			</br>
			
			<div class="col-sm-offset-2 col-sm-10">
			  <!--  type="submit" name="sub" > -->
			
			 <p> <input class="btn btn-default" type="button" id="post_submit" value="Submit" /> </p>
			</div>
		</div>
		
</form>	
			
			</div>		
		</div>
	</div>
	
		<script src="../js/jquery-1.9.0.min.js"></script>
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="post.js"></script>
</body>
</html>