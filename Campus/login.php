<?php
	include_once("Connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script type="text/javascript">
    function validation()
    	{
    		var lemail = document.forms["myform"]["login-email"].value;
       		var lpass = document.forms["myform"]["login-password"].value;

                //login username and password
            if(lemail == ""){
                document.getElementById('emails').innerHTML =" ** Please fill the email";
                return false;
            }
            if(lemail.indexOf('@') <= 0){
    			document.getElementById('emails').innerHTML =" ** @ Invalid Position";
    			return false;
    		}
    		if((lemail.charAt(lemail.length-4)!='.') && (lemail.charAt(lemail.length-3)!='.'))
    		{
    			document.getElementById('emails').innerHTML =" ** . Invalid Position";
    			return false;
    		}

            // if (isNaN(luser)){
            //  document.getElementById('luser').innerHTML =" ** Only charcters are allowed.";
            //  return false;
            // }

            if(lpass == ""){
                document.getElementById('passw').innerHTML =" ** Please fill the Password";
            }
			//window.location.href = 'product.html';
			return false;
        }    		 
</script>
</head>
<body>

<?php 

if(isset($_REQUEST['submit']))
{
  echo	$email=$_REQUEST['email'];
	echo	$password=$_REQUEST['password'];

	// $res=mysqli_query($conn,"select email,password from student_register where email='$email' and password='$password'");

    // $row=mysqli_fetch_array($res);

    // if($row['email']==$email && $row['password']==$password)
    // {
    //     echo 'login successfull !!Welcome';
    // }
    // else
    // {
    //     echo "failed to login";
	// }
	// header("location:login.php");
}

?>

<div class="account-popup-area signin-popup-box">
	<div class="account-popup">
		<span class="close-popup"><i class="la la-close"></i></span>
		<h3>User Login</h3>
		<!-- <span>Click To Login With Demo User</span> -->
		<div class="select-user">
			<span>Student</span>
			<span>Company</span>
		</div>
		<form name="myform" action="" method="POST">
			<div class="cfield">
				<input type="text" placeholder="Email" name="email" id="login-email">
				<i class="la la-envelope-o"></i>
			</div>
			<span id="emails" style="color: red"></span>
			<div class="cfield">
				<input type="password" placeholder="********" name="password" id="login-password">
				<i class="la la-key"></i>
			</div>
			<span id="passw" style="color: red"></span>
			<p class="remember-label">
				<input type="checkbox" name="cb" id="cb1"><label for="cb1">Remember me</label>
			</p>
			<a href="#" title="">Forgot Password?</a>
			<button type="submit" name="submit" >Login</button>
		</form>
		<!-- <div class="extra-login">
			<span>Or</span>
			<div class="login-social">
				<a class="fb-login" href="#" title=""><i class="fa fa-facebook"></i></a>
				<a class="tw-login" href="#" title=""><i class="fa fa-twitter"></i></a>
			</div>
		</div> -->
	</div>
</div><!-- LOGIN POPUP -->


</body>
</html>


