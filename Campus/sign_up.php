<?php
	include_once("Connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

if(isset($_REQUEST['submit'])){

$firstname=$_REQUEST['first_name'];
$lastname=$_REQUEST['last_name'];
$password=$_REQUEST['password'];
$confirmpassword=$_REQUEST['confirm_password'];
$mobile=$_REQUEST['mobile'];
$email=$_REQUEST['email'];
$gender=$_REQUEST['gender'];
$course=$_REQUEST['course'];

$query="insert into student_register(first_name,last_name,password,confirm_password,mobile,email,gender,course)values('$firstname','$lastname','$password','$confirmpassword','$mobile','$email','$gender','$course')";
if(!mysqli_query($conn,$query))
            {
                echo 'Not inserted';
            }
            else{
                echo "Inserted";
            }
                
            header("location:sign_up.php");
}

?>


<div class="account-popup-area signup-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>Sign Up</h3>
		<div class="select-user">
			<span>Student</span>
			<span>Company</span>
		</div>
		<form action="" method="POST">
			<div class="cfield">
				<input type="text" placeholder="Firstname" name="first_name">
				<i class="la la-user"></i>
			</div>
			<div class="cfield">
				<input type="text" placeholder="Lastname" name="last_name">
				<i class="la la-user"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="********" name="password">
				<i class="la la-key"></i>
			</div>
			<div class="cfield">
				<input type="password" placeholder="Confirm password" name="confirm_password">
				<i class="la la-key"></i>
			</div>
			<div class="cfield">
				<input type="text" placeholder="Email" name="email">
				<i class="la la-envelope-o"></i>
			</div>
			<!--<div class="dropdown-field">
				<select data-placeholder="Please Select Specialism" class="chosen">
					<option>Web Development</option>
					<option>Web Designing</option>
					<option>Art & Culture</option>
					<option>Reading & Writing</option>
				</select>
			</div>-->
			<div class="cfield">
				<input type="text" placeholder="Phone Number" name="mobile">
				<i class="la la-phone"></i>
			</div>
			<div class="cfield">
				<input type="text" placeholder="gender" name="gender">
				<i class="la la-user"></i>
			</div>
			<div class="dropdown-field">
				<select data-placeholder="Please Select course" class="chosen" name="course">
					<option>BCA</option>
					<option>BSC</option>
					<option>MCA</option>
					<option>MSC(BDA)</option>
					<option>MSC(CS)</option>
				</select>
			</div>
			<button type="submit" name="submit" >Signup</button>
		</form>
		<!--<div class="extra-login">
			<span>Or</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
				<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
			</div>
		</div>-->
	</div>
</div><!-- SIGNUP POPUP -->


</body>
</html>


