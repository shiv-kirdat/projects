<!DOCTYPE html>
<html>
<head>
        <?php include_once('css_file.php');?>

        <style>
        	/*.emply-listbox{
        		float: left;
        	}*/
        	.col-lg-4 col-md-2 col-sm-4 col-xs-10{
        		float: right;
        	}
        	/*.emply-list box{
        		float: left;
        	}*/
        	.emply-list-sec{
        		float: right;
        	/*.row{
        		float: left;
        	}*/
        	/*.col-lg-9 column{
        		float: right;
        	}*/
        </style>
</head>
<body>

<div class="page-loading">
	<img src="images\loader.gif" alt="">
	<span>Skip Loader</span>
</div>

<div class="theme-layout" id="scrollup">
	
	<div class="responsive-header">
		<div class="responsive-menubar">
			<div class="res-logo"><a href="index.html" title=""><img src="images\resource\mslider1.jpg" alt=""></a></div>
			<div class="menu-resaction">
				<div class="res-openmenu">
					<img src="images\icon.png" alt=""> Menu
				</div>
				<div class="res-closemenu">
					<img src="images\icon2.png" alt=""> Close
				</div>
			</div>
		</div>
		<div class="responsive-opensec">
			<div class="btn-extars">
				<a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
				<ul class="account-btns">
					<li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
					<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>
				</ul>
			</div><!-- Btn Extras -->
			<form class="res-search">
				<input type="text" placeholder="Job title, keywords or company name">
				<button type="submit"><i class="la la-search"></i></button>
			</form>
		</div>
	</div>
	</div>
    <?php include_once('trailheader.php');?>
    

	<section class="overlape">
		<div class="block no-padding">
			<div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner-header">
							<h3>Companies</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block less-top">
			<div class="container">
				 <div class="row">
				 	<aside class="col-lg-3 column margin_widget">
				 		<div class="widget">
				 			<div class="search_widget_job">
				 				<!-- <div class="field_w_search">
				 					<input type="text" placeholder="Search Keywords">
				 					<i class="la la-search"></i>
				 				</div>Search Widget
				 				<div class="field_w_search">
				 					<input type="text" placeholder="All Locations">
				 					<i class="la la-map-marker"></i>
				 				</div> --><!-- Search Widget -->
				 			</div>
				 		</div>
				 		
				 	
				 		
				 	</aside>
				 	<div class="col-lg-9 column">
				 		
<?php
	include_once("Connection.php");
?>
<?php
            $query = "SELECT company_list.company_logo as company_logo,company_list.company_name as company_name,company_list.company_type as company_type,company_list.location as location,company_list.year as year,company_list.URLWebsite as URLWebsite,company_register.* 
FROM company_register
INNER JOIN company_list ON company_register.company_id = company_list.company_id ";  
                $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
                if($result->num_rows!=0)
                {  
                    while($row=$result->fetch_array())  
                    {
                        //$compid=$row['comp_id'];
                        $comp_logo=$row['company_logo'];
                        $comp_name=$row['company_name'];
                        $comp_type=$row['company_type'];
                        $locations=$row['location'];
                        $companyid=$row['company_id'];
                      ?>


				 		<div class="emply-list-sec">
				 			<div class="row" id="masonry">
				 				<div class="col-lg-4 col-md-2 col-sm-4 col-xs-10">
						 			<div class="emply-list box">
						 				<div class="emply-list-thumb">
						 				<a class="single" href="infosys_aboutus.php?id=<?php echo $row['company_id']; ?>" target="_self">
						 					<img src="<?php echo $comp_logo;?>" height="75px;">
						 				</a></div>
						 				<div class="emply-list-info">
						 					<!-- <div class="emply-pstn"></div> -->
						 					<h5><a href="infosys_aboutus.php?CompanyID=<?php echo $companyid; ?>" target="_self"><?php echo $comp_name;?></h5></a>
						 					<span><?php echo $comp_type;?></span>
						 					<h6><i class="la la-map-marker"></i> 
						 					<?php echo $locations;?></h6>
						 				</div>
						 			</div>
						 		</div>
								<?php }?>
				 		<?php }?>
				 		</div>
				 		</div>
				 		</div>
					</div>
				 </div>
			</div>
		</div>
	</section>

	<?php include_once('footer.php');?>	

</div>

<?php include_once('login.php');?>

<?php include_once('sign_up.php');?>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js\jquery.min.js" type="text/javascript"></script>
<script src="js\modernizr.js" type="text/javascript"></script>
<script src="js\script.js" type="text/javascript"></script>
<script src="js\bootstrap.min.js" type="text/javascript"></script>
<script src="js\wow.min.js" type="text/javascript"></script>
<script src="js\isotop.js" type="text/javascript"></script>
<script src="js\parallax.js" type="text/javascript"></script>
<script src="js\select-chosen.js" type="text/javascript"></script>
<script src="js\jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="js\rslider.js" type="text/javascript"></script>

</body>
</html>