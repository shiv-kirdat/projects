<?php
include_once("Connection.php");

?>


<!DOCTYPE html>
<html>
<head>
    
<?php include_once('css_file.php');?>

<style>
	.btn{

	width: 90px;
	height: 50px;
	border: none;
	text-transform: uppercase;
	cursor: pointer;
	text-align: center;
		background: #01A2C3;
		color: #fff;
		border-bottom: none;
		/*cursor: pointer;*/
		margin-bottom: 0;
		text-transform: uppercase; 
}
</style>
</head>
<body>

<?php

if(isset($_REQUEST['submitForm'])){
//echo "riya";
$job_title= $_POST['txtjob_title'];
$description= $_REQUEST['txtdescription'];
$email= $_REQUEST['txtemail'];
$categories= $_REQUEST['categories'];
$offered_salary=$_REQUEST['offered_salary'];
$experience=$_REQUEST['experience'];
$qualification=$_REQUEST['qualification'];
$app_deadline_date=$_REQUEST['app_deadline_date'];
$skills_required=$_REQUEST['skills_required'];
$country=$_REQUEST['country'];
$city=$_REQUEST['city'];
$address=$_REQUEST['address'];


$query="insert into job_requirement values(null,'".$job_title."','".$description."','".$email."','".$categories."','".$offered_salary."','".$experience."',
'".$qualification."','".$app_deadline_date."','".$skills_required."','".$country."','".$city."','".$address."','".$_SESSION['UserID']."')";
//echo $query;
$Exe=mysqli_query($conn,$query) or die(mysqli_error($conn));
/*if(mysqli_query($conn,$query))
            {
                echo 'Not inserted';
            }
            else{
                echo "Inserted";
            }
*/            
	echo " inserted";    
            header("location:job_requirement.php");
}

?>


<div class="page-loading">
	<img src="images\loader.gif" alt="">
	<span>Skip Loader</span>
</div>


	
	<?php include_once('trailheader.php');?>

	<section class="overlape">
		<div class="block no-padding">
			<div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-header">
						<?php 

						if(isset($_SESSION['UserID']))
	{
?>
						<h1 style="color: white;"><center><a href="#" title="">WELCOME &nbsp;<?php echo $_SESSION['FirstName'];?></a></center></h1>
					<?php
			}
		?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block no-padding">
			<div class="container">
				 <div class="row no-gape">
				 	<!-- <aside class="col-lg-3 column border-right">
				 		<div class="widget">
				 			<div class="tree_widget-sec">
				 				<ul>
				 					<li><a href="employer_profile.html" title=""><i class="la la-file-text"></i>Company Profile</a></li>
				 					<li><a href="employer_manage_jobs.html" title=""><i class="la la-briefcase"></i>Manage Jobs</a></li>
				 					<li><a href="employer_transactions.html" title=""><i class="la la-money"></i>Transactions</a></li>
				 					<li><a href="employer_resume.html" title=""><i class="la la-paper-plane"></i>Resumes</a></li>
				 					<li><a href="employer_packages.html" title=""><i class="la la-user"></i>Packages</a></li>
				 					<li><a href="employer_post_new.html" title=""><i class="la la-file-text"></i>Post a New Job</a></li>
				 					<li><a href="employer_job_alert.html" title=""><i class="la la-flash"></i>Job Alerts</a></li>
				 					<li><a href="employer_change_password.html" title=""><i class="la la-lock"></i>Change Password</a></li>
				 					<li><a href="#" title=""><i class="la la-unlink"></i>Logout</a></li>
				 				</ul>
				 			</div>
				 		</div>
				 	</aside> -->
				 	<div class="col-lg-9 column">
				 		<div class="padding-left">
					 		<!-- <div class="profile-title">
					 			<h3>Post a New Job</h3>
					 			<div class="steps-sec">
					 				<div class="step active">
					 					<p><i class="la la-info"></i></p>
					 					<span>Information</span>
					 				</div>
					 				<div class="step">
					 					<p><i class="la la-cc-mastercard"></i></p>
					 					<span>Package & Payments</span>
					 				</div>
					 				<div class="step">
					 					<p><i class="la  la-check-circle"></i></p>
					 					<span>Done</span>
					 				</div>
					 			</div>
					 		</div> -->
					 		<div class="profile-form-edit">
					 			<form method="post">
					 				<div class="row">
					 					<div class="col-lg-12">
					 						<span class="pf-title">Job Title</span>
					 						<div class="pf-field">
					 							<input type="text" name="txtjob_title" placeholder="Designer">
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Description</span>
					 						<div class="pf-field">
					 							<textarea name="txtdescription"> </textarea>
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Email</span>
					 						<div class="pf-field">
					 							<input type="text" name="txtemail">
					 						</div>
					 					</div>
					 					 <!-- <div class="col-lg-6">
					 						<span class="pf-title">Username</span>
					 						<div class="pf-field">
					 							<input type="text">
					 						</div>
					 					</div> 
					 					<div class="col-lg-6">
					 						<span class="pf-title">Job Type</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen" name="">
													<option>Web Development</option>
													<option>Web Designing</option>
													<option>Art & Culture</option>
													<option>Reading & Writing</option>
												</select>
					 						</div>
					 					</div> -->
					 					<div class="col-lg-6">
					 						<span class="pf-title">Categories</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen" name="categories">
													<option value="Web Development">Web Development</option>
													<option value="Web Designing">Web Designing</option>
													<option value="Art ">Art & Culture</option>
													<option value="Reading">Reading & Writing</option>
												</select>
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Offerd Salary</span>
					 						<div class="pf-field">
                                             <input type="text" name="offered_salary">
					 						</div>
					 					</div>
					 					<!-- <div class="col-lg-6">
					 						<span class="pf-title">Career Level</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen" name="career_level">
													<option value="Web Development">Web Development</option>
													<option value="Web Designing">Web Designing</option>
													<option value="Art ">Art & Culture</option>
													<option value="Reading">Reading & Writing</option>
												</select>
					 						</div>
					 					</div> -->
					 					<div class="col-lg-6">
					 						<span class="pf-title">Experience</span>
					 						<div class="pf-field">
                                             <input type="text" name="experience">
					 						</div>
					 					</div>
					 					<!-- <div class="col-lg-6">
					 						<span class="pf-title">Gender</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen">
													<option>Web Development</option>
													<option>Web Designing</option>
													<option>Art & Culture</option>
													<option>Reading & Writing</option>
												</select>
					 						</div>
					 					</div> -->
					 					<!-- <div class="col-lg-6">
					 						<span class="pf-title">Industry</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen">
													<option>Web Development</option>
													<option>Web Designing</option>
													<option>Art & Culture</option>
													<option>Reading & Writing</option>
												</select>
					 						</div>
					 					</div> -->
					 					<div class="col-lg-6">
					 						<span class="pf-title">Qualification</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen" name="qualification">
													<option value="Web Development">Web Development</option>
													<option value="Web Designing">Web Designing</option>
													<option value="Art ">Art & Culture</option>
													<option value="Reading">Reading & Writing</option>
												</select>
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">Skills</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Skills" class="chosen" name="skills_required">
													<option value="HTML">HTML</option>
													<option value="cSS">css</option>
													<option value="PHP ">PHP</option>
												</select>
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Application Deadline Date</span>
					 						<div class="pf-field">
					 							<input type="date" placeholder="01.11.207" name="app_deadline_date">
					 						</div>
					 					</div>
					 					<!-- <div class="col-lg-12">
					 						<span class="pf-title">Skill Requirments</span>
					 						<div class="pf-field">
						 						<ul class="tags">
										           <li class="addedTag">Photoshop<span onclick="$(this).parent().remove();" class="tagRemove">x</span><input type="hidden" name="tags[]" value="Web Deisgn"></li>
							            			<li class="tagAdd taglist">  
							              				 <input type="text" id="search-field" name="skills_required">
										            </li>
												</ul>
											</div>
					 					</div> -->
					 					<div class="col-lg-6">
					 						<span class="pf-title">Country</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen" name="country">
													<option value="India">India</option>
													<option value="USA"> USA</option>
													<option value="china">china</option>
												</select>
					 						</div>
					 					</div>
					 					<div class="col-lg-6">
					 						<span class="pf-title">City</span>
					 						<div class="pf-field">
					 							<select data-placeholder="Please Select Specialism" class="chosen" name="city">
													<option value="pune">Pune</option>
													<option value="surat">surat</option>
												</select>
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Complete Address</span>
					 						<div class="pf-field">
					 							<textarea name="address"> </textarea>
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<!-- <a href="#" title="" class="srch-lctn">Search Location</a> -->
					 						<center><input type="submit" name="submitForm" value="submit" class="btn"></center></div><br>
					 					</div>
										 <br><br><br>
					 				</div>
					 			</form>
								 <div>
										 
								</div>
					 		</div>
							 
					 		<!-- <div class="contact-edit">
					 			<form>
					 				<div class="row">
					 					<div class="col-lg-6">
					 						<span class="pf-title">Find On Map</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="Collins Street West, Victoria 8007, Australia.">
					 						</div>
					 					</div>
					 					<div class="col-lg-3">
					 						<span class="pf-title">Latitude</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="41.1589654">
					 						</div>
					 					</div>
					 					<div class="col-lg-3">
					 						<span class="pf-title">Longitude</span>
					 						<div class="pf-field">
					 							<input type="text" placeholder="21.1589654">
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<a href="#" title="" class="srch-lctn">Search Location</a>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Maps</span>
					 						<div class="pf-map">
					 							<div id="map_div"></div>
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<input type="submit" name="next" value="next">
					 					</div>
					 				</div>
					 			</form>
					 		</div> -->
					 	</div>
					</div>
				 </div>
			</div>
		</div>
	</section>
	
	<div>
    	<?php include_once('footer.php');?>
    </div>
</div>

<?php include_once('login.php');?>


<?php include_once('sign_up.php');?>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js\jquery.min.js" type="text/javascript"></script>
<script src="js\modernizr.js" type="text/javascript"></script>
<script src="js\script.js" type="text/javascript"></script>
<script src="js\bootstrap.min.js" type="text/javascript"></script>
<script src="js\wow.min.js" type="text/javascript"></script>
<script src="js\slick.min.js" type="text/javascript"></script>
<script src="js\parallax.js" type="text/javascript"></script>
<script src="js\select-chosen.js" type="text/javascript"></script>
<script src="js\jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="js\tag.js" type="text/javascript"></script>
<script src="js\maps3.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&callback=initMap" type="text/javascript"></script>


<!-- Include Date Range Picker -->
<link rel="stylesheet" type="text/css" href="css\bootstrap-datepicker.css">
<script src="js\bootstrap-datepicker.js" type="text/javascript"></script>
<script>
		$(function(){
			$('.datepicker').datepicker({
			    format: 'mm-dd-yyyy'
			});
		});
</script>

</body>
</html>

