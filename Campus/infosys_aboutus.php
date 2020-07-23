<?php 
	include_once("Connection.php");

?>


<!DOCTYPE html>
<html>
<head>
        <?php include_once('css_file.php');?>
	
</head>
<?php 
							
							$query="select * from company_list where company_id=".$_REQUEST['id'];
							$res= mysqli_query($conn,$query);
							$row= $res->fetch_array();

							$selJob="select * from job_requirement Where company_id=".$_REQUEST['id'];
									 		$Exe=mysqli_query($conn,$selJob) or die(mysqli_error($conn));
									 		$fetch=mysqli_fetch_array($Exe);
						
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
						
							
							 <h1 style="color:white"><center><?php echo $row['company_name']; ?></center></h1> <br>
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
				 				<div class="job-title2"><h3><?php echo $fetch['job_title'];?></h3><!-- <span class="job-is ft">Full time</span><i class="la la-heart-o"></i> --></div>
				 				<ul class="tags-jobs">
				 					<li><i class="la la-map-marker"></i><?php echo $fetch['city'].",".$fetch['country'];?></li>
				 					<!-- <li><i class="la la-money"></i> Monthly Salary : <span>$3000 - $5000</span></li>
				 					<li><i class="la la-calendar-o"></i> Post Date: July 29, 2017</li> -->
				 				</ul>
				 				<span><strong>Address</strong> :<?php echo $fetch['address'];?></span>
				 			</div><!-- Job Head -->
				 			<div class="job-details">
				 				<h3>Job Description</h3>
				 				<p><?php echo $fetch['description'];?></p>
				 				<h3>Email</h3>
				 				<p><?php echo $fetch['email'];?></p>
				 				<h3>Deadline Date</h3>
				 				<p><?php echo $fetch['app_deadline_date'];?></p>
				 				<!-- <h3>Required Knowledge, Skills, and Abilities</h3>
				 				<ul>
				 					<li>Ability to write code – HTML & CSS (SCSS flavor of SASS preferred when writing CSS)</li>
				 					<li>Proficient in Photoshop, Illustrator, bonus points for familiarity with Sketch (Sketch is our preferred concepting)</li>
				 					<li>Cross-browser and platform testing as standard practice</li>
				 					<li>Experience using Invision a plus</li>
				 					<li>Experience in video production a plus or, at a minimum, a willingness to learn</li>
				 				</ul>
				 				<h3>Education + Experience</h3>
				 				<ul>
				 					<li>Advanced degree or equivalent experience in graphic and web design</li>
				 					<li>3 or more years of professional design experience</li>
				 					<li>Direct response email experience</li>
				 					<li>Ecommerce website design experience</li>
				 					<li>Familiarity with mobile and web apps preferred</li>
				 					<li>Excellent communication skills, most notably a demonstrated ability to solicit and address creative and design feedback</li>
				 					<li>Must be able to work under pressure and meet deadlines while maintaining a positive attitude and providing exemplary customer service</li>
				 					<li>Ability to work independently and to carry out assignments to completion within parameters of instructions given, prescribed routines, and standard accepted practices</li>
				 				</ul> -->
				 			</div>
				 			<div class="job-overview">
					 			<h3>Job Overview</h3>
					 			<ul>
					 				<li><i class="la la-money"></i><h3>Offerd Salary</h3><span>
				 					<?php echo $fetch['offered_salary'];?></span></li>
					 				<li><i class="la la-mars-double"></i><h3>Experience</h3><span><?php echo $fetch['experience'];?> Years</span></li>
					 				<li><i class="la la-thumb-tack"></i><h3>Qualification</h3><span><?php echo $fetch['qualification'];?> </span></li>
					 				<li><i class="la la-puzzle-piece"></i><h3>Skill Required</h3><span><?php echo $fetch['skills_required'];?></span></li>
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
			 				<div class="job-thumb"> <img src="<?php echo $row['company_logo']; ?>" alt="" height="75px;"> </div>
			 				<div class="job-head-info">
			 					<h4><?php echo $row['company_name']; ?></h4>
			 					<span><?php echo $row['location']; ?></span>
			 					<p><i class="la la-unlink"></i> <a href="<?php echo $row['URLWebsite'];?>"><?php echo $row['URLWebsite']; ?></a></p>
			 					<p><i class="la la-phone"></i> <?php echo $_SESSION['ContactNo']; ?></p>
			 					<!-- <p><i class="la la-envelope-o"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="10717c793e646576717e507a7f7278657e643e737f7d">[email&#160;protected]</a></p> -->
			 				</div>
			 				<a href="candidates_resume_new.php?CompanyID=<?php echo $row['company_id']; ?>" title="" class="apply-job-btn"><i class="la la-paper-plane"></i>Apply for job</a>
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

