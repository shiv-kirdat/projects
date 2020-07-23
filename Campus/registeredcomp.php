<?php 
	include_once("Connection.php");

?>



	<section>
		<div class="block gray">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Top Company Registered</h2>
							<span>Some of the companies we've helped recruit excellent applicants over the years.</span>
						</div><!-- Heading -->
						<div class="top-company-sec">
							<div class="row" id="companies-carousel">
							<?php 
								$query="select * FROM company_list";
								$res=mysqli_query($conn,$query);
								while($row=mysqli_fetch_array($res))
								{
							?>
								<div class="col-lg-3">
									<div class="top-compnay">
									
										<img src="<?php echo $row['company_logo'];?>" alt="" style="height: 150px;width:350px;">
										<h3><a href="#" title=""><?php echo $row['company_name'];?> </a></h3>
										<!-- <span>United States, Los Angeles</span>-->
										<a href="#" title=""><?php echo $row['company_type'];?> </a> 
									</div><!-- Top Company -->
								</div>

								<?php }
								?>
								<!-- <div class="col-lg-3">
									<div class="top-compnay">
										<img src="images\resource\tc2.jpg" alt="">
										<h3><a href="#" title="">Symtech</a></h3>
										<span>United States, Los Angeles</span>
										<a href="#" title="">4 Open Positon</a>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="top-compnay">
										<img src="images\resource\tc3.jpg" alt="">
										<h3><a href="#" title="">Symtech</a></h3>
										<span>United States, Los Angeles</span>
										<a href="#" title="">4 Open Positon</a>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="top-compnay">
										<img src="images\resource\tc4.jpg" alt="">
										<h3><a href="#" title="">Symtech</a></h3>
										<span>United States, Los Angeles</span>
										<a href="#" title="">4 Open Positon</a>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="top-compnay">
										<img src="images\resource\tc2.jpg" alt="">
										<h3><a href="#" title="">Symtech</a></h3>
										<span>United States, Los Angeles</span>
										<a href="#" title="">4 Open Positon</a>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</section>
