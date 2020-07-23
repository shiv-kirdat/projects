<!DOCTYPE html>
<html>
<head>
	<?php 
include_once("Connection.php");

	include_once('css_file.php');

	?>
	
</head>
<body>

	 <!-- <?php //session_start();?>
	<div class="content">
	<div class="success"><?= $_SESSION['message'] ?></div>
	<a href="logout.php" class="log_out">LOG OUT</a>
	<div class="user"><img src="<?= $_SESSION['upload_id'] ?>" height="100v"></div>
	<div> Welcome<span><?= $_SESSION['first_name'] ?></span></div>
	</div> -->

<!--  <?php session_start();?>
	<div class="content" style="background-color: red;">
	<div id="studentcontainer"><?= $_SESSION['message'] ?></div>
	<a href="logout.php" class="log_out">LOG OUT</a>
	<div class="user"><img src="<?= $_SESSION['upload_id'] ?>" height="100v"></div>
	<div> Welcome <span><?= $_SESSION['first_name'] ?>.....</span></div>
	</div> --> 
			<?php include_once('trailheader.php'); ?>

			
			<?php include_once('content.php');?>
			
			

			<?php include_once('flow.php');?>

			<?php 
				if (isset($_SESSION['UserID'])) {
					if($_SESSION['UserType']=='s'){
			?>
			
			<?php include_once('registeredcomp.php');?>
		<?php
			}}

		?>	
			<?php include_once('listofsite.php');?>

			

			

			

			<?php include_once('index_footer.php');?>

</div>




<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js\jquery.min.js" type="text/javascript"></script>
<script src="js\modernizr.js" type="text/javascript"></script>
<script src="js\script.js" type="text/javascript"></script>
<script src="js\bootstrap.min.js" type="text/javascript"></script>
<script src="js\wow.min.js" type="text/javascript"></script>
<script src="js\slick.min.js" type="text/javascript"></script>
<script src="js\parallax.js" type="text/javascript"></script>
<script src="js\select-chosen.js" type="text/javascript"></script>
<script src="js\counter.js" type="text/javascript"></script>

</body>
</html>

