
<!DOCTYPE html>
<html>
<head>
    
<?php include_once('css_file.php');?>

<style>
    .inner2{
        margin-top:50px;
    }
</style>

</head>
<body>

    <?php include_once('trailheader.php');?>

	<section>
		<div class="block no-padding " style="background-color: #c6c6c6;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="inner2">
							<div class="inner-title2">
								<h3>Contact</h3>
								<span>Keep up to date with the latest news</span>
							</div>
							<div class="page-breacrumbs">
								<ul class="breadcrumbs">
									<li><a href="#" title="">Home</a></li>
									<li><a href="#" title="">Pages</a></li>
									<li><a href="#" title="">Contact</a></li>
								</ul>
							</div>
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
				 	<div class="col-lg-6 column">
				 		<div class="contact-form">
				 			<h3>Keep In Touch</h3>
				 			<form action="contact_usDB.php" method="POST">
				 				<div class="row">
				 					<div class="col-lg-12">
				 						<span class="pf-title">Full Name</span>
				 						<div class="pf-field">
				 							<input type="text" placeholder="Full name" name="full_name">
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<span class="pf-title">Email</span>
				 						<div class="pf-field">
				 							<input type="text" placeholder="Email" name="email">
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<span class="pf-title">Subject</span>
				 						<div class="pf-field">
				 							<input type="text" placeholder="Subject" name="subject">
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<span class="pf-title">Message</span>
				 						<div class="pf-field">
				 							<textarea name="message"></textarea>
				 						</div>
				 					</div>
				 					<div class="col-lg-12">
				 						<button type="submit" name="submit">Send</button>
				 					</div>
				 				</div>
				 			</form>
				 		</div>
				 	</div>
				 	<div class="col-lg-6 column">
					 	<div class="contact-textinfo">
					 		<h3>Projob Office</h3>
					 		<ul>
					 			<li><i class="la la-map-marker"></i><span>Jobify Inc. 555 Madison Avenue, Suite F-2 Manhattan, New York 10282 </span></li>
					 			<li><i class="la la-phone"></i><span>Call Us : 0934 343 343</span></li>
					 			<li><i class="la la-fax"></i><span>Fax : 0934 343 343</span></li>
					 			<li><i class="la la-envelope-o"></i><span>Email : <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="224b4c444d62484d404a574c560c414d4f">[email&#160;protected]</a></span></li>
					 		</ul>
					 		<!-- <a class="fill" href="#" title="">See on Map</a><a href="#" title="">Directions</a> -->
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
<script src="js\slick.min.js" type="text/javascript"></script>
<script src="js\parallax.js" type="text/javascript"></script>
<script src="js\select-chosen.js" type="text/javascript"></script>
<script src="js\jquery.scrollbar.min.js" type="text/javascript"></script>

</body>
</html>

