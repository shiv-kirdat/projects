<?php
include_once("Connection.php");
?>



<?php
if(isset($_REQUEST['comp_submit']))
{
    // if($_SERVER['REQUEST_METHOD']=='POST'){
	$Last_CompanyID=$_REQUEST['CompanyID'];
	$comp_name=$_REQUEST['name'];
	$comp_type=$_REQUEST['type'];
	$comp_location=$_REQUEST['location'];
	$comp_year=$_REQUEST['year'];
	$comp_url=$_REQUEST['url'];
	$comp_mobileno=$_REQUEST['mobile'];
	$upload_id='comp_logo/'.$_FILES['company_logo']['name'];

	if(preg_match("!image!", $_FILES['company_logo']['type']))
	{
		if(copy($_FILES['company_logo']['tmp_name'],$upload_id))
		{
			//$_SESSION['first_name']=$first_name;
			//$_SESSION['upload_id']=$upload_id;

			/*$query="insert into company_list(company_logo,company_name,company_type,location,year,URLWebsite)values('$upload_id','$comp_name','$comp_type','$comp_location','$comp_year','$comp_url''comp_mobileno')";*/
			$insert="insert into company_list values(null,'".$upload_id."','".$comp_name."','".$comp_type."','".$comp_location."','".$comp_year."','".$comp_url."','".$Last_CompanyID."')";
			$run=mysqli_query($conn,$insert);

			header("location:index.php");
			if($run)
			{                    //echo"data inserted.";
				$_SESSION['message']="Registration successfully";
                     // <script type="text/javascript">alert("Data inserted successfully");</script>
			}
			else{
				$_SESSION['message']="File upload failed!";
			}
		}
		else{
			$_SESSION['message']="Please upload only JPG, PNG or GIF image !!";
		}
	}
}
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<!-- <link rel="stylesheet" type="text/css" href="css/newsignup.css"> -->
		<title></title>
		<style>
			div{
				padding: 10px;
			}
			.placeholder{
				height: 10px;
			}
			.btn{

				width: 80px;
				height: 30px;
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
			#studentcontainer,
			#companycontainer{
				padding: 5px;

			}
			#student-tab,
			#company-tab{
				width: 29%;
				display: inline-block;
				padding: 12px;
				box-sizing: border-box;
				text-align: center;
				color: #fff;
				text-transform: uppercase;
				cursor: pointer;
			}
			.active{
				background: #2196F3;
			}
			.form-control{
				width: 30%;
				margin-bottom: 0px;
				box-sizing: border-box;
			}
			.inputbox{
				height: 10px;
				border: none;
				padding: 18px;
			}
			.inputbox:focus{
				outline-color: #01A2C3;
			}
			body
			{
				margin:0;
				padding: 0;
				font-family: algerian;
				background-image: url('images/resource/b8.jpg');
				background-size: cover;
				height: 100vh;
				background-repeat: no-repeat;
				font-size: 15px;
			}
			#main {
				background: rgba(0,0,0,0.3);
				width: 400px;
				position: absolute;
				top: 400px;
				/*bottom: 25px;*/
				left: 50%;
				transform: translate(-50%, -50%);
				box-shadow: 5px 5px 5px 0 rgba(0,0,0,0.50);
				transition: all 0.3s ease-in
				cursor: pointer;
				/*height: 200px;*/
			}
			#main-hover{
				box-shadow: 8px 8px 10px 0 rgba(0,0,0,0.30);
			}
		</style>


	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			<center><label>Company Profile Details</label>
				<div>Company Logo
					<input type="file" id="company-name" name="company_logo" placeholder="Company logo" required="" class="form-control inputbox">
					<span id="compname" style="color: red"></span></div>

					<div><input type="text" id="company-password" name="name" placeholder="Company Name" required="" class="form-control inputbox">
						<span id="comppassword" style="color: red"></span></div>

						<div><input type="text" id="company-type" name="type" placeholder="Company Type"  required="" class="form-control inputbox">
							<span id="compmobileno" style="color: red"></span></div>

							<div><input type="text" id="company-location" name="location" placeholder="Company Location" required="" class="form-control inputbox">
								<span id="compemailid" style="color: red"></span></div>

								<div><input type="text" id="year" name="year" placeholder="Company Establish Year" required="" class="form-control inputbox">
									<span id="uploads" style="color: red"></span></div>

								<div><input type="text" id="url" name="url" placeholder="Company URL Website" required="" class="form-control inputbox">
									<span id="url" style="color: red"></span></div>

								<div><input type="mobile" id="mobile" name="mobile" placeholder="Company Mobile" required="" class="form-control inputbox">
									<span id="mobileno" style="color: red"></span></div>

									<div>
										<input type="submit" name="comp_submit" value="submit" class="btn" onclick="validation()"><br><br>
									</div> 
								</center></form> 
							</body>
							</html>
