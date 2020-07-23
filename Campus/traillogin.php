<?php

include_once("Connection.php");


$select_Query="SELECT * FROM student_register ";
            $Execute_Select_Query=mysqli_query($conn,$select_Query) or die(mysqli_error($conn));

            $fetch=mysqli_fetch_array($Execute_Select_Query);

            //echo base64_decode($fetch['password']);
//echo"shiv";
        if(isset($_REQUEST['stusubmit']))
        {
            $select_Query="SELECT * FROM student_register WHERE email='".$_REQUEST['stu_log']."' AND password='".base64_encode($_REQUEST['stu_pass'])."'";
            $Execute_Select_Query=mysqli_query($conn,$select_Query) or die(mysqli_error($conn));
            if(mysqli_num_rows($Execute_Select_Query)>0)
            {
                $fetch_data=mysqli_fetch_array($Execute_Select_Query);
                $_SESSION['UserID']=$fetch_data['stu_id'];
                $_SESSION['FirstName']=$fetch_data['first_name'];
                $_SESSION['LastName']=$fetch_data['last_name'];
                $_SESSION['Email']=$fetch_data['email'];
                $_SESSION['ContactNo']=$fetch_data['mobile'];
              	$_SESSION['UserType']=$fetch_data['user_type'];
                 //$_SESSION['IsVerifiedEmail']=$fetch_data['IsVerifiedEmail'];

                header("location:index.php");
            }
            else
            {
    ?>
                <script type="text/javascript" id="error">alert('Invalid Email / Password');</script>
    <?php
            }
        }
?>
<?php
$select_Query="SELECT * FROM company_register ";
            $Execute_Select_Query=mysqli_query($conn,$select_Query) or die(mysqli_error($conn));
            $fetch=mysqli_fetch_array($Execute_Select_Query);
            //echo base64_decode($fetch['passwd']);

        if(isset($_REQUEST['compsubmit']))
        {
            $select_Query="SELECT * FROM company_register WHERE email='".$_REQUEST['company_name']."' AND passwd='".base64_encode($_REQUEST['passwd'])."'";
            $Execute_Select_Query=mysqli_query($conn,$select_Query) or die(mysqli_error($conn));
            if(mysqli_num_rows($Execute_Select_Query)>0)
            {
                $fetch_data=mysqli_fetch_array($Execute_Select_Query);
                $_SESSION['UserID']=$fetch_data['company_id'];
                $_SESSION['FirstName']=$fetch_data['company_name'];
               // $_SESSION['LastName']=$fetch_data['last_name'];
                $_SESSION['Email']=$fetch_data['email'];
                $_SESSION['ContactNo']=$fetch_data['mobile'];
              	$_SESSION['UserType']=$fetch_data['user_type'];
                 //$_SESSION['IsVerifiedEmail']=$fetch_data['IsVerifiedEmail'];

                header("location:index.php");
            }
            else
            {
    ?>
                <script type="text/javascript" id="error">alert('Invalid Email / Password');</script>
    <?php
            }
        }
?>

<html>
<head>
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
	width: 100%;
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
	font-family: Bell MT;
	background-image: url('images/resource/b8.jpg');
	background-size: cover;
	height: 100vh;
	background-repeat: no-repeat;
	font-size: 14px;
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
<script type="text/javascript">
    function validate()
        {
    		var stuuser = document.getElementById('stu_name').value;
    		//var stupass = document.getElementById('stupass').value;
    	}

    	if(stuuser == ""){
    			document.getElementById('stu').innerHTML =" ** Please fill the firstname";
    			return false;
    		}

    	// if(stupass == ""){
    	// 		document.getElementById('stu_pass').innerHTML =" ** Please fill the Password";
    	// 		return false;
    	// 	}
    	</script>
<!-- COMPANY JS -->
<script type="text/javascript">
    function validation()
        {
    		var compuser = document.getElementById('comp_log').value;
    		var comppass = document.getElementById('comp_pass').value;
    	}

    	if(compuser == ""){
    			document.getElementById('comp_name').innerHTML =" ** Please fill the Company name";
    			return false;
    		}
    	if(comppass == ""){
    			document.getElementById('comppass').innerHTML =" ** Please fill the Password";
    			return false;
    		}

 </script>
</head>

<body style="background-image: url('images/resource/b8.jpg');
	background-size: cover;">

<div class="form">
<main id=main>
<form name="myform"  method="post" enctype="multipart/form-data">
<center><h1><label>SIGNUP</label></h1></center>
<div id="signupcontainer">
<center>
<div class="select-user">

			<span id="student-tab" class="active">Student</span>
			<span id="company-tab">Company</span>
		</div>
		<div id="studentcontainer">

<div><input type="text" id="stu_name" name="stu_log" placeholder="Email" required="" class="form-control inputbox">
<span id="stu" style="color: red"></span></div>

<div><input type="password" id="stupass" name="stu_pass" placeholder="*******" required="" class="form-control inputbox">
<span id="stu_pass" style="color: red"></span></div>

<button type="submit" value="submit" name="stusubmit" class="btn" onclick="validate()">Signup</button></center> 
</form>
</div>
<form name="myform" method="post" enctype="multipart/form-data">
<!-- COMPANY HTML LOGIN -->


<div id="companycontainer" hidden>
<center>
<div><input type="text" id="comp_log" name="company_name" placeholder="Company email" required="" class="form-control inputbox">
<span id="comp_name" style="color: red"></span></div>

<div><input type="password" id="comp_pass" name="passwd" placeholder="********" required="" class="form-control inputbox">
<span id="comppass" style="color: red"></span></div>

<div>
      <input type="submit" name="compsubmit" value="submit" class="btn" onclick="validation()"><br><br>
</div> 
</center>
</div>
</html>

<script type="text/javascript">
var studentcontainer = document.querySelector("#studentcontainer");
var companycontainer = document.querySelector("#companycontainer");
var studenttab = document.querySelector("#student-tab");
var companytab = document.querySelector("#company-tab");

companytab.addEventListener('click',function(){
	companyactive();
});


studenttab.addEventListener('click',function(){
	studentactive();
});



function studentactive(){
	studentcontainer.style.display = "block";
	companycontainer.style.display = "none";
	studenttab.classList.add('active');
	companytab.classList.remove('active');
}

function companyactive(){
	studentcontainer.style.display = "none";
	companycontainer.style.display = "block";
	companytab.classList.add('active');
	studenttab.classList.remove('active');
}</script>	
