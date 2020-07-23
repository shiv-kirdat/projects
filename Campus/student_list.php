<?php
	include_once("Connection.php");
?>
<!DOCTYPE html>
<html>
<head>

<?php include_once('css_file.php');?>
	
</head>
<body>

    <?php include_once('trailheader.php');?>
	
	
	<section class="overlape">
		<div class="block no-padding">
			<div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-header">
							<h3>Welcome</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php
	$query="select * from resume_table where company_id='".$_SESSION['UserID']."'";
	//echo $query;
	$res=mysqli_query($conn,$query);
	 while($res1=mysqli_fetch_array($res))
                    
                    {
                    	$query1="select * from student_register where stu_id='".$res1['stu_id']."'";
	//echo $query1;
	$res11=mysqli_query($conn,$query1);
                        //$compid=$row['comp_id'];
                      //  $first_name=$row['first_name'];
                        //$course=$row['course'];
                        //$email=$row['email'];
	$Fetch=mysqli_fetch_array($res11);
 ?>


	<section>

		<div class="block no-padding">
			<div class="container">
				 <div class="row no-gape">
				 	<aside class="col-lg-3 column border-right">
				 		<div class="widget">
				 			<div class="search_widget_job">
				 				
				 			</div>
				 		</div>
				 		
				 	</aside>
				 	<div class="col-lg-9 column">
				 		<div class="padding-left">
					 		<div class="emply-resume-sec">
					 			<div class="emply-resume-list">
					 				<div class="emply-resume-thumb">
					 					<a class="single" href="ResumeDetails.php?id=<?php echo $Fetch['stu_id']; ?>" target="_self">
					 					<img src="<?php echo $Fetch['upload_id'];?>" alt="">
					 				</div>
					 				<div class="emply-resume-info">

					 					<h3><a href="ResumeDetails.php?id=<?php echo $Fetch['stu_id']; ?>" target="_self"><?php echo $Fetch['first_name'];?></a></h3>
					 					<span><i><?php echo $Fetch['course'];?></i></span>
					 					<p><i class="la la-map-marker"></i><?php echo $Fetch['email'];?></p>

					 				</div>
					 				<!-- <div class="shortlists">
					 					<a href="#" title="">Shortlist <i class="la la-plus"></i></a>
					 				</div> -->
					 			</div><!-- Emply List -->
					 			
					 			
					 		</div>
					 	</div>

					</div>
				 </div>
				 <?php
					 		
					 	}
					 	?>
			</div>
		</div>
	</section>

    
    

<?php include_once('footer.php');?>

</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js\jquery.min.js" type="text/javascript"></script>
<script src="js\modernizr.js" type="text/javascript"></script>
<script src="js\script.js" type="text/javascript"></script>
<script src="js\bootstrap.min.js" type="text/javascript"></script>
<script src="js\wow.min.js" type="text/javascript"></script>
<script src="js\slick.min.js" type="text/javascript"></script>
<script src="js\parallax.js" type="text/javascript"></script>
<script src="js\select-chosen.js" type="text/javascript"></script>
<script src="js\jquery.scrollbar.min.js" type="text/javascript"></script>

</body>
</html>

