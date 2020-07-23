<?php 
	include_once("Connection.php");

?>


<!DOCTYPE html>
<html>
<head>
        <?php include_once('css_file.php');?>
	
</head>
<?php
	$query="select student_register.*,resume_table.* FROM student_register INNER JOIN resume_table ON student_register.stu_id=resume_table.stu_id where student_register.stu_id=".$_REQUEST['id'];	
	$res=mysqli_query($conn,$query) or die(mysqli_error($conn));
	$row_detail=mysqli_fetch_array($res);

?>
<?php

	
	$Select_Resume_Details="select * from resume_table where stu_id='".$_REQUEST['id']."'";
	$Select_Resume_Details_Exe=mysqli_query($conn,$Select_Resume_Details) or die(mysqli_error($conn));
	$Select_Resume_Details_Fetch=mysqli_fetch_array($Select_Resume_Details_Exe);

	if(isset($_REQUEST['btnAccept']))
	{
		$Email=$Select_Resume_Details_Fetch['email'];
		$Subject="Type your Subject here....";
		$Message="Type your Subject here....";
		mail($Email,$Subject,$Message);

		$Update="update student_register set IsAccept=1 where stu_id='".$_REQUEST['id']."'";
		$Update_Exe=mysqli_query($conn,$Update);
		$ids=$_REQUEST['id'];
		header("location:ResumeDetails.php?id=$ids");
	}

	if(isset($_REQUEST['btnDecline']))
	{
		$Email=$Select_Resume_Details_Fetch['email'];
		$Subject="Company DEcline your Resume";
		$Message="Company DEcline your Resume";
		mail($Email,$Subject,$Message);

		$Update="update student_register set IsAccept=0 where stu_id='".$_REQUEST['id']."'";
		$Update_Exe=mysqli_query($conn,$Update);
		$ids=$_REQUEST['id'];
		header("location:ResumeDetails.php?id=$ids");
	}
?>

<body>

    <?php include_once('trailheader.php');?>

	<section class="overlape">
		<div class="block no-padding">
			<div data-velocity="-.1"  class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-header">
						
							
							 <h1 style="color:white"><center>Student detail</center></h1> <br>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
				 	<div class="col-lg-8 column">
				 		<div class="job-single-sec">
				 			<div class="job-single-head2">
				 				<div class="job-title2"><h3><?php echo $row_detail['first_name'];?></h3><!-- <span class="job-is ft">Full time</span><i class="la la-heart-o"></i> --></div>
				 				<ul class="tags-jobs">

				 					
				 					<!-- <li><i class="la la-money"></i> Monthly Salary : <span>$3000 - $5000</span></li>
				 					<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li> -->
				 				</ul>
				 				
				 			</div><!-- Job Head -->
				 			<div class="job-details">
				 				<h3>12th Qualification</h3>
				 				<ul class="tags-jobs">

				 					<li>Stream: <i></i><?php echo $Select_Resume_Details_Fetch['stream_1'];?></li>
				 					<li>From: <i></i><?php echo $Select_Resume_Details_Fetch['from_date_1'];?></li>
				 					<li>To: <i></i><?php echo $Select_Resume_Details_Fetch['to_date_1'];?></li>
				 					<li>Institute: <i></i><?php echo $Select_Resume_Details_Fetch['institute_1'];?></li>
				 					<li>University: <i></i><?php echo $Select_Resume_Details_Fetch['university_1'];?></li>
				 					<li>Percentage: <i></i><?php echo $Select_Resume_Details_Fetch['percenteage_1'];?></li>
				 					<!-- <li><i class="la la-money"></i> Monthly Salary : <span>$3000 - $5000</span></li>
				 					<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li> -->
				 				</ul>

				 				<h3>Graduation Qualification</h3>
				 				<ul class="tags-jobs">

				 					<li>Stream: <i></i><?php echo $Select_Resume_Details_Fetch['stream_2'];?></li>
				 					<li>From: <i></i><?php echo $Select_Resume_Details_Fetch['from_date_2'];?></li>
				 					<li>To: <i></i><?php echo $Select_Resume_Details_Fetch['to_date_2'];?></li>
				 					<li>Institute: <i></i><?php echo $Select_Resume_Details_Fetch['institute_2'];?></li>
				 					<li>University: <i></i><?php echo $Select_Resume_Details_Fetch['university_2'];?></li>
				 					<li>Percentage: <i></i><?php echo $Select_Resume_Details_Fetch['percentage_2'];?></li>
				 					<!-- <li><i class="la la-money"></i> Monthly Salary : <span>$3000 - $5000</span></li>
				 					<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li> -->
				 				</ul>

				 				<h3>Post Graduation Qualification</h3>
				 				<ul class="tags-jobs">

				 					<li>Stream: <i></i><?php echo $Select_Resume_Details_Fetch['stream_3'];?></li>
				 					<li>From: <i></i><?php echo $Select_Resume_Details_Fetch['from_date_3'];?></li>
				 					<li>To: <i></i><?php echo $Select_Resume_Details_Fetch['to_date_3'];?></li>
				 					<li>Institute: <i></i><?php echo $Select_Resume_Details_Fetch['institute_3'];?></li>
				 					<li>University: <i></i><?php echo $Select_Resume_Details_Fetch['university_3'];?></li>
				 					<li>Percentage: <i></i><?php echo $Select_Resume_Details_Fetch['percentage_3'];?></li>
				 					<!-- <li><i class="la la-money"></i> Monthly Salary : <span>$3000 - $5000</span></li>
				 					<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li> -->
				 				</ul>


				 				<h3>Front end</h3>
				 				<p><?php echo $Select_Resume_Details_Fetch['front_end_lang'];?></p>
				 				<h3>Back end</h3>
				 				<p><?php echo $Select_Resume_Details_Fetch['back_end_lang'];?></p>
				 				<h3>Project name</h3>
				 				<p><?php echo $Select_Resume_Details_Fetch['project_name'];?></p>
				 				<h3>Project description</h3>
				 				<p><?php echo $Select_Resume_Details_Fetch['project_details'];?></p>
				 				
				 			</div>
				 			<div class="job-overview">
					 			<h3>Job Overview</h3>
					 			<ul>
					 				<li><i class="la la-money"></i><h3>Job post</h3><span>
				 					<?php echo $Select_Resume_Details_Fetch['job_post'];?></span></li>
					 				<li><i class="la la-mars-double"></i><h3>Experience</h3><span><?php echo $Select_Resume_Details_Fetch['job_experience'];?> Years</span></li>
					 				<li><i class="la la-thumb-tack"></i><h3>Hobbies</h3><span><?php echo $Select_Resume_Details_Fetch['hobbies'];?> </span></li>
					 				<li><i class="la la-puzzle-piece"></i><h3>Activities</h3><span><?php echo $Select_Resume_Details_Fetch['curr_activities'];?></span></li>
					 			<!-- 	<li><i class="la la-shield"></i><h3>Experience</h3><span>2 Years</span></li>
					 				<li><i class="la la-line-chart "></i><h3>Qualification</h3><span>Bachelor Degree</span></li> -->
					 			</ul>
					 		</div><!-- Job Overview -->
				 			<!-- <div class="share-bar">
				 				<span>Share</span><a href="#" title="" class="share-fb"><i class="fa fa-facebook"></i></a><a href="#" title="" class="share-twitter"><i class="fa fa-twitter"></i></a>
				 			</div> -->
				 		</div>
				 	</div>
				 	<div class="col-lg-4 column">
				 		<div class="job-single-head style2">
			 				<div class="job-thumb"> <img src="<?php echo $row_detail['upload_id']; ?>" alt="" height="75px;"> </div>
			 				<div class="job-head-info">
			 					<!-- <h4><?php echo $row['company_name']; ?></h4> -->
			 					<span>Address:<?php echo $Select_Resume_Details_Fetch['address'] ?></span>
			 					<p><i class="la la-unlink"></i> <?php echo $Select_Resume_Details_Fetch['email']; ?></a></p>
			 					<p><i class="la la-phone"></i> <?php echo $Select_Resume_Details_Fetch	['contact']; ?></p>
			 					<!-- <p><i class="la la-envelope-o"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="10717c793e646576717e507a7f7278657e643e737f7d">[email&#160;protected]</a></p> -->
			 				</div>
			 				<?php
			 					$Select_Resume_Details="select * from student_register where stu_id='".$_REQUEST['id']."'";
	$Select_Resume_Details_Exe=mysqli_query($conn,$Select_Resume_Details) or die(mysqli_error($conn));
	$Select_Resume_Details_Fetch=mysqli_fetch_array($Select_Resume_Details_Exe);
								if($Select_Resume_Details_Fetch['IsAccept']==NULL)
								{


			 				?>
			 				<form method="post">
			 				<div class="select-user">
									<button class="btn btn-success" name="btnAccept">Accept</button>
									
								</div>
								<div class="select-user">
									<button class="btn btn-danger" name="btnDecline">Decline</button>
									
								</div>
							</form>
							<?php
								}
							?>
											 				<!-- <a href="candidates_resume_new.php" title="" class="apply-job-btn"><i class="la la-paper-plane"></i>Apply for job</a> -->
			 				<!-- <a href="#" title="" class="apply-job-linkedin"><i class="fa fa-linkedin"></i>Apply with Linkedin</a>
			 				<a href="#" title="" class="viewall-jobs">View all Jobs</a> -->
			 			</div><!-- Job Head -->
				 	</div>
				</div>
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

