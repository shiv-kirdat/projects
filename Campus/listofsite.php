<section>
		<div class="block">
			<div data-velocity="-.1" style="background: url(images/resource/parallax2.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color red"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading light">
							<h2>Projob Site Stats</h2>
							<span>Here we list our site stats and how many people we’ve helped find a job and companies have found <br>recruits. It's a pretty awesome stats area!</span>
						</div><!-- Heading -->
						<div class="stats-sec">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="stats">
										<span>
											
											<?php 
											$count="select count(*) as jobcount from job_requirement";

											$e=mysqli_query($conn,$count);
											$fetch=mysqli_fetch_array($e);
											echo $fetch['jobcount'];
											?>
										</span>
										<h5>Jobs Posted</h5>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="stats">
										<span>
											
											<?php
												$applied="select count(*) as appliedcount from resume_table";

												$app=mysqli_query($conn,$applied);
												$fetch=mysqli_fetch_array($app);
												echo $fetch['appliedcount'];

											?>
										</span>
										<h5>Applied Students </h5>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="stats">
										<span>
											<?php 
											$num="select count(*) as companycount from company_register";

											$ex=mysqli_query($conn,$num);
											$fetch=mysqli_fetch_array($ex);
											echo $fetch['companycount'];
											?>

										</span>
										<h5>Companies</h5>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="stats">
										<span>
											
											<?php 
												$var="select count(*) as studentcount from student_register ";

												$exe=mysqli_query($conn,$var);
												$fetch=mysqli_fetch_array($exe);
												echo $fetch['studentcount'];

											?>
										</span>
										<h5>Students</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>