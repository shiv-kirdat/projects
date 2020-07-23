<?php 
include_once("Connection.php");

	
?>

	<header class="stick-top style2">
		<div class="menu-sec">
			<div class="container fluid">
				<div class="logo">
					<a href="index.html" title=""><img src="images\resource\logo2.png" alt=""></a>
				</div><!-- Logo -->
				<?php
					if(!isset($_SESSION['UserID']))
					{
				?>
				<div class="btn-extars">
					<!-- <a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a> -->
					<ul class="account-btns">
						<li class="signup-popup"><a href="trailsignup.php"><i class="la la-key"></i> Sign Up</a></li>
						<li class="signin-popup"><a href="traillogin.php"><i class="la la-external-link-square"></i> Login</a></li>
					</ul>
				</div><!-- Btn Extras -->
					<?php
						}
					?>
				<nav>
					<ul>
						<li class="">
							<a href="index.php" title="">Home</a>
							
						</li>

						<?php
							if(isset($_SESSION['UserID']))
							{
								if($_SESSION['UserType']=='c')
								{
						?>

						<li class="menu-item-has-children">
							<a href="employer_list3.html" title="">Company</a>
							<ul>
								
								<!-- <li><a href="company_list.php" title="">Company list</a></li> -->
								<!-- <li><a href="company_single.php" title="">Company Single </a></li> -->
								<li class="menu-item-has-children">
									<a href="#" title="">Company Dashboard</a>
									<ul>
										<!-- <li><a href="employer_manage_jobs.html" title="">Company Job Manager</a></li> -->
										<li><a href="company_profil.php" title="">Company Profile</a></li>
										<li><a href="job_requirement.php" title="">Company Post </a></li>
										<!-- <li><a href="employer_resume.html" title="">Company Resume</a></li>
										<li><a href="employer_job_alert.html" title="">Company Job Alert</a></li>
										<li><a href="employer_change_password.html" title="">Company Change Password</a></li> -->
									</ul>
								</li>

								
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Student</a>
							<ul>
								<li><a href="student_list.php">Student List</a></li>
								<!-- <li><a href="job_list_grid.html">Job List Grid</a></li>
								<li><a href="job_list_modern.html">Job List Modern</a></li>
								<li><a href="job_single1.html">Job Single 1</a></li>
								<li><a href="job_single2.html">Job Single 2</a></li>
								<li><a href="job-single3.html">Job Single 3</a></li> -->
							</ul>
						</li>
						<?php
								}
								elseif($_SESSION['UserType']=='s')
								{
						?>
						<li class="menu-item-has-children">
							<a href="#" title="">Student</a>
							<ul>
								<!-- <li><a href="student_list.php" title=""> Student List </a></li> -->
								<!-- <li><a href="student_single.php" title="">Student Single </a></li> -->
								<li class="menu-item-has-children">
									<a href="#" title="">Student Dashboard</a>
									<ul>
										<!-- <li><a href="candidates_my_resume.html" title="">Student Resume</a></li>
										<li><a href="candidates_my_resume_add_new.html" title="">Student Resume new</a></li> -->
										<li><a href="student_profile.php" title="">Student Profile</a></li>
										<!-- <li><a href="candidates_" title="">Student Resume</a></li> -->
										<!-- <li><a href="candidates_job_alert.html" title="">Student Job Alert</a></li> -->
										<!-- <li><a href="candidates_dashboard.html" title="">Student Dashboard</a></li> -->
										<!-- <li><a href="candidates_cv_cover_letter.html" title="">CV Cover Letter</a></li>
										<li><a href="candidates_change_password.html" title="">Change Password</a></li>
										<li><a href="candidates_applied_jobs.html" title="">Student Applied Jobs</a></li> -->
									</ul>
								</li>
							</ul>
						</li>

						<li class="menu-item-has-children">
							<a href="#" title="">Companies</a>
							<ul>
								<li><a href="company_list.php">Company List</a></li>
								<!-- <li><a href="job_list_grid.html">Job List Grid</a></li>
								<li><a href="job_list_modern.html">Job List Modern</a></li>
								<li><a href="job_single1.html">Job Single 1</a></li>
								<li><a href="job_single2.html">Job Single 2</a></li>
								<li><a href="job-single3.html">Job Single 3</a></li> -->
							</ul>
						</li>

						<?php
								}
							}else
							{


						?>

						<li class="menu-item-has-children">
							<a href="employer_list3.html" title="">Company</a>
							<ul>
								
								<li><a href="company_list.php" title="">Company list</a></li>
								
							</ul>
						</li>
						<li class="menu-item-has-children">
							<a href="#" title="">Student</a>
							<ul>
								<li><a href="student_list.php" title=""> Student List </a></li>
								
							</ul>
						</li>
						<?php
							}
						?>
						<li class="">
							<a href="about.php" title="">About Us</a>
							
						</li>
						<li class="">
							<a href="contact_us.php" title="">Contact Us</a>
							
						</li>
						<!-- <li class="menu-item-has-children">
							<a href="#" title="">Job</a>
							<ul>
								<li><a href="job_list_classic.html">Job List Classic</a></li>
								<li><a href="job_list_grid.html">Job List Grid</a></li>
								<li><a href="job_list_modern.html">Job List Modern</a></li>
								<li><a href="job_single1.html">Job Single 1</a></li>
								<li><a href="job_single2.html">Job Single 2</a></li>
								<li><a href="job-single3.html">Job Single 3</a></li>
							</ul>
						</li> -->
						
<?php 
//echo $_SESSION['email'];

	if(isset($_SESSION['UserID']))
	{
?>
						<li class="menu-item-has-children">
							<a href="#" title="">Hello,&nbsp;<?php echo $_SESSION['FirstName'];?></a>
							<ul>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>

						
		<?php
			}
		?>
						
				</nav><!-- Menus -->
			</div>
		</div>
	</header>
	
	