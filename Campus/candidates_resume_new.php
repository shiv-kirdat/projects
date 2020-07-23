<?php 
	include_once("Connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once('css_file.php'); ?>

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

if(isset($_REQUEST['submitResume'])){

$email= $_REQUEST['res_email'];
$contact= $_REQUEST['res_contact'];
$address= $_REQUEST['res_address'];
$stream_1=$_REQUEST['stream_1'];
$from_date_1=$_REQUEST['from_date_1'];
$to_date_1=$_REQUEST['to_date_1'];
$institute_1=$_REQUEST['institute_1'];
$university_1=$_REQUEST['university_1'];
$percentage_1=$_REQUEST['percentage_1'];
$stream_2=$_REQUEST['stream_2'];
$from_date_2=$_REQUEST['from_date_2'];
$to_date_2=$_REQUEST['to_date_2'];
$institute_2=$_REQUEST['institute_2'];
$university_2=$_REQUEST['university_2'];
$percentage_2=$_REQUEST['percentage_2'];
$stream_3=$_REQUEST['stream_3'];
$from_date_3=$_REQUEST['from_date_3'];
$to_date_3=$_REQUEST['to_date_3'];
$institute_3=$_REQUEST['institute_3'];
$university_3=$_REQUEST['university_3'];
$percentage_3=$_REQUEST['percentage_3'];
$job_post=$_REQUEST['job_post'];
$experience=$_REQUEST['Experen'];
$front_end=$_REQUEST['front_end'];
$back_end=$_REQUEST['back_end'];
$hobbies=$_REQUEST['hobbies'];
$activities=$_REQUEST['activities'];
$pro_name=$_REQUEST['pro_name'];
$pro_descrip=$_REQUEST['pro_descrip'];
$comp_id=$_REQUEST['CompanyID'];
$stud_id=$_SESSION['UserID'];

$query="insert into resume_table values(null,'".$email."','".$contact."','".$address."','".$stream_1."','".$from_date_1."','".$to_date_1."','".$institute_1."','".$university_1."','".$percentage_1."','".$stream_2."','".$from_date_2."','".$to_date_2."','".$institute_2."','".$university_2."','".$percentage_2."','".$stream_3."','".$from_date_3."','".$to_date_3."','".$institute_3."','".$university_3."','".$percentage_3."','".$job_post."','".$experience."','".$front_end."','".$back_end."','".$hobbies."','".$activities."','".$pro_name."','".$pro_descrip."','".$comp_id."','".$stud_id."')";
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
            header("location:company_list.php");
}

?>

<div class="page-loading">
	<img src="images\loader.gif" alt="">
	<span>Skip Loader</span>
</div>


<?php include_once('trailheader.php'); ?>
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
							<!-- <h3>Welcome Ali TUFAN</h3> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block remove-top">
			<div class="container">
				 <div class="row no-gape">
				 	
				 	<div class="col-lg-9 column">
				 		<div class="padding-left">
				 		<form method="POST">
					 		<div class="manage-jobs-sec">
					 			
					 			<div class="border-title"><h3>Basic Info</h3></div>
					 			<div class="resumeadd-form">
						 			<div class="row">
						 				<div class="col-lg-10">
					 						<span class="pf-title">Email</span>
					 						<div class="pf-field">
					 							<input placeholder="Email" name="res_email" type="email">
					 						</div>
					 					</div>
					 					<div class="col-lg-5">
					 						<span class="pf-title">Contact No.</span>
					 						<div class="pf-field">
					 							<input placeholder="Contact" name="res_contact" type="text">
					 						</div>
					 					</div>
					 					<div class="col-lg-5">
					 						<span class="pf-title">Address</span>
					 						<div class="pf-field">
					 							<input placeholder="Address" name="res_address"
					 							type="text">
					 						</div>
					 					</div>
					 					<!-- <div class="col-lg-12">
					 						<span class="pf-title">Institute</span>
					 						<div class="pf-field">
					 							<input type="text">
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Description</span>
					 						<div class="pf-field">
					 							<textarea></textarea>
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						 <button type="submit">Save</button>
					 					</div> -->
						 			</div>
						 		</div>

					 			<div class="border-title"><h3>Education</h3><!-- <a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a> --></div>

						 		<div class="resumeadd-form"><u>12th Qualification:</u>
						 			<div class="row">
						 				<div class="col-lg-10">
					 						<span class="pf-title">Stream</span>
					 						<div class="pf-field">
					 							<input placeholder="stream" name="stream_1" type="text">
					 						</div>
					 					</div>
					 					<div class="col-lg-5">
					 						<span class="pf-title">From Date</span>
					 						<div class="pf-field">
					 							<input placeholder="06.11.2007" type="Date" name="from_date_1" class="">
					 						</div>
					 					</div>
					 					<div class="col-lg-5">
					 						<span class="pf-title">To Date</span>
					 						<div class="pf-field">
					 							<input placeholder="06.11.2012" type="Date" name="to_date_1" class="">
					 						</div>
					 					</div>
					 					<div class="col-lg-10">
					 						<span class="pf-title">Institute</span>
					 						<div class="pf-field">
					 							<input type="text" name="institute_1">
					 						</div>
					 					</div>
					 					<div class="col-lg-10">
					 						<span class="pf-title">University</span>
					 						<div class="pf-field">
					 							<input type="text" name="university_1">
					 						</div>
					 					</div>
					 					<div class="col-lg-10">
					 						<span class="pf-title">Percentage</span>
					 						<div class="pf-field">
					 							<input type="text" name="percentage_1">
					 						</div>
					 					</div>
						 			</div>
						 		</div>

						 		<div class="resumeadd-form"><u>Graduation Qualification:</u>
						 			<div class="row">
						 				<div class="col-lg-10">
					 						<span class="pf-title">Stream</span>
					 						<div class="pf-field">
					 							<input placeholder="stream" name="stream_2" type="text">
					 						</div>
					 					</div>
					 					<div class="col-lg-5">
					 						<span class="pf-title">From Date</span>
					 						<div class="pf-field">
					 							<input placeholder="06.11.2007" type="Date" name="from_date_2" class="">
					 						</div>
					 					</div>
					 					<div class="col-lg-5">
					 						<span class="pf-title">To Date</span>
					 						<div class="pf-field">
					 							<input placeholder="06.11.2012" type="Date" name="to_date_2" class="">
					 						</div>
					 					</div>
					 					<div class="col-lg-10">
					 						<span class="pf-title">Institute</span>
					 						<div class="pf-field">
					 							<input type="text" name="institute_2">
					 						</div>
					 					</div>
					 					<div class="col-lg-10">
					 						<span class="pf-title">University</span>
					 						<div class="pf-field">
					 							<input type="text" name="university_2">
					 						</div>
					 					</div>
					 					<div class="col-lg-10">
					 						<span class="pf-title">Percentage</span>
					 						<div class="pf-field">
					 							<input type="text" name="percentage_2">
					 						</div>
					 					</div>
						 			</div>
						 		</div>

						 		<div class="resumeadd-form"><u>Post Graduation Qualification:</u>
						 			<div class="row">
						 				<div class="col-lg-10">
					 						<span class="pf-title">Stream</span>
					 						<div class="pf-field">
					 							<input placeholder="stream" type="text" name="stream_3">
					 						</div>
					 					</div>
					 					<div class="col-lg-5">
					 						<span class="pf-title">From Date</span>
					 						<div class="pf-field">
					 							<input placeholder="06.11.2007" type="Date" name="from_date_3" class="">
					 						</div>
					 					</div>
					 					<div class="col-lg-5">
					 						<span class="pf-title">To Date</span>
					 						<div class="pf-field">
					 							<input placeholder="06.11.2012" type="Date" name="to_date_3" class="">
					 						</div>
					 					</div>
					 					<div class="col-lg-10">
					 						<span class="pf-title">Institute</span>
					 						<div class="pf-field">
					 							<input type="text" name="institute_3">
					 						</div>
					 					</div>
					 					<div class="col-lg-10">
					 						<span class="pf-title">University</span>
					 						<div class="pf-field">
					 							<input type="text" name="university_3">
					 						</div>
					 					</div>
					 					<div class="col-lg-10">
					 						<span class="pf-title">Percentage</span>
					 						<div class="pf-field">
					 							<input type="text" name="percentage_3">
					 						</div>
					 					</div>
						 			</div>
						 		</div>
						 		<div class="border-title"><h3>Work Experience</h3><!-- <a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a> --></div>
						 		<div class="resumeadd-form">
						 			<div class="row">
						 				<div class="col-lg-10">
					 						<span class="pf-title">Job Post</span>
					 						<div class="pf-field">
					 							<input placeholder="Post" type="text" name="job_post">
					 						</div>
					 					</div>
					 					<div class="col-lg-5">
					 						<span class="pf-title">Experience</span>
					 						<div class="pf-field">
					 							<input placeholder="years" type="text" name="Experen" >
					 						</div>
					 					</div>
					 					<!-- <div class="col-lg-5">
					 						<span class="pf-title">To Date</span>
					 						<div class="pf-field">
					 							<input placeholder="06.11.2012" type="text" class="form-control datepicker">
					 						</div>
					 					</div>
					 					<div class="col-lg-2">
					 						<p class="remember-label">
												<input type="checkbox" name="cb" id="fgfg"><label for="fgfg">Present</label>
											</p>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Company</span>
					 						<div class="pf-field">
					 							<input type="text">
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						<span class="pf-title">Description</span>
					 						<div class="pf-field">
					 							<textarea></textarea>
					 						</div>
					 					</div>
					 					<div class="col-lg-12">
					 						 <button type="submit">Save</button>
					 					</div>
	 -->					 			</div>
						 		</div> 
						 		<div class="border-title"><h3>Professional Skills</h3><!-- <a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a> --></div>
						 		<div class="resumeadd-form">
						 			<div class="row align-items-end">
						 				<div class="col-lg-10">
					 						<span class="pf-title">Front End Languages</span>
					 						<div class="pf-field">
					 							<input placeholder="" type="text" name="front_end">
					 						</div>
					 					</div>
					 					<div class="col-lg-10">
					 						<span class="pf-title">Back End Languages</span>
					 						<div class="pf-field">
					 							<input placeholder="" type="text" name="back_end">
					 						</div>
					 					</div>
					 					<!-- <div class="col-lg-2">
					 						 <button type="submit">Save</button>
					 					</div> -->
						 			</div>
						 		</div>
						 		<div class="border-title"><h3>Hobbies</h3><!-- <a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a> --></div><!-- add button -->
						 		<div class="resumeadd-form">
						 			<div class="row">
						 				<div class="col-lg-10">
						 					<div class="pf-field">
					 							<input placeholder="Hobbies" type="text" name="hobbies">
					 						</div>
					 						<!-- <p>Max file size is 1MB, Minimum dimension: 270x210 And Suitable files are .jpg & .png</p> -->
					 					</div>
<!-- 					 					<div class="col-lg-12">
					 						<div class="upload-portfolio">
					 							<div class="uploadbox">
					 								<label for="file-upload" class="custom-file-upload">
													    <i class="la la-cloud-upload"></i> <span>Upload Image</span>
													</label>
													<input id="file-upload" type="file" style="display: none;">
					 							</div>
					 							<div class="uploadfield">
							 						<span class="pf-title">Title</span>
							 						<div class="pf-field">
							 							<input placeholder="Tooms.." type="text">
							 						</div>
							 					</div>
							 					<div class="uploadbutton">
							 						<button type="submit">Save</button>
							 					</div>
					 						</div>
					 					</div> -->
						 			</div>
						 		</div>
						 		<div class="border-title"><h3>Curriculum Activities</h3><!-- <a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a> --></div>
						 		<div class="resumeadd-form"><!-- add button -->
						 			<div class="row">
						 				<div class="col-lg-10">
					 						<span class="pf-title">Activities</span>
					 						<div class="pf-field">
					 							<input placeholder="Post" type="text" name="activities">
					 						</div>
					 					</div>
					 				</div>
					 				</div>
						 		
						 		<div class="border-title"><h3>Project Details</h3><!-- <a class="cancel" href="#" title=""><i class="la la-close"></i> Cancel</a> --></div>
						 		<div class="resumeadd-form">
						 			<div class="row">
						 				<div class="col-lg-10">
					 						<span class="pf-title">Project Name</span>
					 						<div class="pf-field">
					 							<input placeholder="" type="text" name="pro_name">
					 						</div>
					 					</div>
					 					<div class="col-lg-10">
					 						<span class="pf-title">Project Description</span>
					 						<div class="pf-field">
					 							<textarea name="pro_descrip"></textarea>
					 						</div>
					 					</div>
					 					<!-- <div class="col-lg-12">
					 						<span class="pf-title">Description</span>
					 						<div class="pf-field">
					 							<textarea></textarea>
					 						</div>
					 					</div>-->
					 					<div class="col-lg-12">
					 						 <!-- <button type="submit">Save</button> -->
					 						 <center><input type="submit" name="submitResume" value="submit" class="btn"></center>
					 					</div> 
						 			</div>
						 		</div>
					 		</div>
					 		</form>
					 	</div>
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
<script src="js\circle-progress.min.js" type="text/javascript"></script>

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

