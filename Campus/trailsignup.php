
<?php
include_once("Connection.php");


?>
<?php

    $_SESSION['message']='';
    if(isset($_REQUEST['stusubmit'])){
    // if($_SERVER['REQUEST_METHOD']=='POST'){
        $first_name=$_REQUEST['first_name'];
        $last_name=$_REQUEST['last_name'];
        $password=base64_encode($_REQUEST['password']);
       // $confirm_password=base64_encode($_POST['confirm_password']);
        $mobile=$_REQUEST['mobile'];
        $email=$_REQUEST['email'];
        $gender=$_REQUEST['gender'];
        $course=$_REQUEST['course'];
        $upload_id='uploadimage/'.$_FILES['upload_id']['name'];


        if(preg_match("!image!", $_FILES['upload_id']['type'])){
            if(copy($_FILES['upload_id']['tmp_name'],$upload_id)){
                $_SESSION['first_name']=$first_name;
                $_SESSION['upload_id']=$upload_id;

                $query="insert into student_register(first_name,last_name,password,mobile,email,gender,course,upload_id,user_type)values('$first_name','$last_name','$password','$mobile','$email','$gender','$course','$upload_id','s',NULL)";
                $run=mysqli_query($conn,$query);

                if($run){
                    
                    //echo"data inserted.";
                   $_SESSION['message']="Registration successfully";
                     //<script type="text/javascript">alert("Data inserted successfully");</script>
            
                }
               else{
                    $_SESSION['message']="user could not be added to the database";
                    // echo"error;",mysqli_error($conn);
                }
            }
            else{
            $_SESSION['message']="File upload failed!";
            }
            }
        else{
            $_SESSION['message']="Please upload only JPG, PNG or GIF image !!";
        }

        header("location:traillogin.php");
    }
?>

<!-- COMPANY PHP -->

<?php
   // session_start();
    // $_SESSION['message']='';
    if(isset($_REQUEST['compsubmit'])){
    // if($_SERVER['REQUEST_METHOD']=='POST'){
        $comp_name=$_REQUEST['company_name'];
        $comp_password=base64_encode($_REQUEST['passwd']);
       // $comp_confirm_password=md5($_POST['confirm_pass']);
        $comp_mobile=$_REQUEST['mobile'];
        $comp_email=$_REQUEST['email'];
        $comp_uploadid='compuploadimage/'.$_FILES['comp_uploadid']['name'];
        if(preg_match("!image!", $_FILES['comp_uploadid']['type'])){
            if(copy($_FILES['comp_uploadid']['tmp_name'],$comp_uploadid)){
                $_SESSION['company_name']=$comp_name;
                $_SESSION['comp_uploadid']=$comp_uploadid;

               /* $query="insert into company_register(company_name,passwd,mobile,email,comp_uploadid,user_type)values('$comp_name','$comp_password','$comp_mobile','$comp_email','comp_uploadid','c')";*/
               $insertSignup="insert into company_register values(null,'".$comp_name."','".$comp_password."','".$comp_mobile."','".$comp_email."','".$comp_uploadid."','c')";
                $run=mysqli_query($conn,$insertSignup);
                  echo $Last_CompanyID=mysqli_insert_id($conn);

                  $CompanyID=$Last_CompanyID;
                header("location:company_list_details.php?CompanyID=$CompanyID");

                if($run){
                     $_SESSION['message']="Registration successfully";
                    // <script type="text/javascript">alert("Data inserted successfully");</script>
   
                }
               else{
                    $_SESSION['message']="Company could not be added to the database";
                    // echo"error;",mysqli_error($conn);
                }
            }
            else{
            $_SESSION['message']="File upload failed!";
            }
            }
        else{
            $_SESSION['message']="Please upload only JPG, PNG or GIF image !!";
        }
    }
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/newsignup.css">



<script type="text/javascript">
    function validate()
        {
    		var fuser = document.getElementById('register-fname').value;
    	    var luser = document.getElementById('register-lname').value;
    		var rpass = document.getElementById('register-password').value;
    		var mobilenumber = document.getElementById('mobilenumber').value;
    		var email = document.getElementById('email').value;
    		//var gender = document.getElementById('gender').value;
    		var course = document.getElementById('course').value;
    		// var uploadid = document.getElementById('uploadid').value;

    		// student registeration info
    		if(fuser == ""){
    			document.getElementById('frstname').innerHTML =" ** Please fill the firstname";
    			return false;
    		}
    		// if (!isNaN(ruser)){
    		// 	document.getElementById('username').innerHTML =" ** Only charcters are allowed.";
    		// 	return false;
    		// }
    		if(luser == ""){
    			document.getElementById('lstname').innerHTML =" ** Please fill the lastname";
    			return false;
    		}
    		if(rpass == ""){
    			document.getElementById('passwords').innerHTML =" ** Please fill the Password";
    			return false;
    		}

    		

    		

    		if(mobilenumber == ""){
    			document.getElementById('mobileno').innerHTML =" ** Please fill mobile number";
    			return false;
    		}

   //  		if (isNaN(mobilenumber)) {
   //  			document.getElementById('mobileno').innerHTML =" ** User must write digits only not characters.";
   //  			return false;
   //  		}
    		if (mobilenumber.length!=10) {
    			document.getElementById('mobileno').innerHTML =" ** Mobile number must be 10 digits only.";
    			return false;
    		}
    		

    		if(email == ""){
    			document.getElementById('emailids').innerHTML =" ** Please fill Email Id";
    			return false;
    		}
    		if(email.indexOf('@') <= 0){
    			document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
    			return false;
    		}
    		if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.'))
    		{
    			document.getElementById('emailids').innerHTML =" ** . Invalid Position";
    			return false;
    		}


    		// if(gender == ""){
    		// 	document.getElementById('genders').innerHTML =" ** Please select gender";
    		// 	return false;
    		// }

    		if(course == ""){
    			document.getElementById('course').innerHTML =" ** Please fill course name";
    			return false;
    		}

   //  		if(uploadid == ""){
   //  			document.getElementById('upload').innerHTML =" ** Please upload id";
   //  			return false;
			// }
			window.location.href = 'index.php';	
			return false;
    	}

</script>
<!-- COMPANY JS -->
<script type="text/javascript">
    function validation()
        {
    		var cuser = document.getElementById('company-name').value;
    		var cpass = document.getElementById('company-password').value;
    		var mobilenum = document.getElementById('company-mobilenumber').value;
    		var cemail = document.getElementById('company-email').value;
      //       var cuploadid = document.getElementById('uploadid').value;

    		if(cuser == ""){
    			document.getElementById('compname').innerHTML =" ** Please fill the Company name";
    			return false;
    		}
    		// if (!isNaN(ruser)){
    		// 	document.getElementById('username').innerHTML =" ** Only charcters are allowed.";
    		// 	return false;
    		// }
    		
    		if(cpass == ""){
    			document.getElementById('comppassword').innerHTML =" ** Please fill the Password";
    			return false;
    		}

    		// if (cpass!=cconpass) {
    		// 	document.getElementById('compconfirmpass').innerHTML =" ** Password are not matching";
    		// 	return false;
    		// }

    		// if(cconpass == ""){
    		// 	document.getElementById('compconfirmpass').innerHTML =" ** Please fill the confirm password";
    		// 	return false;
    		// }

    		if(mobilenum == ""){
    			document.getElementById('compmobileno').innerHTML =" ** Please fill mobile number";
    			return false;
    		}

    		// if (isNaN(mobilenum)) {
    		// 	document.getElementById('compmobileno').innerHTML =" ** User must write digits only not characters.";
    		// 	return false;
    		// }
    		if (mobilenum.length!=10) {
    			document.getElementById('compmobileno').innerHTML =" ** Mobile number must be 10 digits only.";
    			return false;
    		}
    		

    		if(cemail == ""){
    			document.getElementById('compemailid').innerHTML =" ** Please fill Email Id";
    			return false;
    		}
    		if(cemail.indexOf('@') <= 0){
    			document.getElementById('compemailid').innerHTML =" ** @ Invalid Position";
    			return false;
    		}
    		if((cemail.charAt(cemail.length-4)!='.') && (cemail.charAt(cemail.length-3)!='.'))
    		{
    			document.getElementById('compemailid').innerHTML =" ** . Invalid Position";
    			return false;
    		}

      //       if(cuploadid == ""){
      //           document.getElementById('uploads').innerHTML =" ** Please upload id";
      //           return false;
      //       }
    	}

</script> 
</head>


<body style="background-image: url('images/resource/b8.jpg');
	background-size: cover;">

<div class="form">
<main id=main>
<form name="myform" method="post" enctype="multipart/form-data">
<center><h1><label>SIGNUP</label></h1></center>
<div id="signupcontainer">
<center>
<div class="select-user">

			<span id="student-tab" class="active">Student</span>
			<span id="company-tab">Company</span>
		</div>
		<div id="studentcontainer"><!-- <?php echo ($_SESSION['message']) ?> -->

<div><input type="text" id="register-fname" name="first_name" placeholder="Firstname" required="" class="form-control inputbox">
<span id="frstname" style="color: red"></span></div>

<div><input type="text" id="register-lname" name="last_name" placeholder="Lastname" required="" class="form-control inputbox">
<span id="lstname" style="color: red"></span></div>

<div><input type="password" id="register-password" name="password" placeholder="********" required="" class="form-control inputbox">
<span id="passwords" style="color: red"></span></div>

<!-- <div><input type="password" id="register-cnfmpassword" name="confirm_password" placeholder="confirm password" required="" class="form-control inputbox">
<span id="confirmpass" style="color: red"></span></div> -->

<div><input type="text" id="mobilenumber" name="mobile" placeholder="mobile no" required="" class="form-control inputbox">
<span id="mobileno" style="color: red"></span></div>

<div><input type="text" id="email" name="email" placeholder="email" required="" class="form-control inputbox">
<span id="emailids" style="color: red"></span></div>

<div>
			<label>Gender</label>
				<input type="radio"  value="Male " name="gender">Male
				<input type="radio" value="Female " name="gender">Female
				
				<span id="genders" style="color: red"></span>
			</div>
<div><input type="text" id="course" name="course" placeholder="Course" required="" class="form-control inputbox">
<span id="course" style="color: red"></span></div>

<div><input type="file" id="upload_id" name="upload_id" placeholder="Upload id" required="" class="form-control inputbox">
<span id="upload" style="color: red"></span></div>

<button type="submit" value="submit" name="stusubmit" class="btn" onclick="validate()">Signup</button></center> 
</form>



<form name="myform"  method="post" enctype="multipart/form-data">
<!-- COMPANY HTML SIGNUP -->


<div id="companycontainer" hidden>
<center>
<div><input type="text" id="company-name" name="company_name" placeholder="Company name" required="" class="form-control inputbox">
<span id="compname" style="color: red"></span></div>

<div><input type="password" id="company-password" name="passwd" placeholder="********" required="" class="form-control inputbox">
<span id="comppassword" style="color: red"></span></div>

<!-- <div><input type="password" id="company-cnfmpassword" name="confirm_pass" placeholder="Confirm password" required="" class="form-control inputbox">
<span id="compconfirmpass" style="color: red"></span></div> -->

<div><input type="text" id="company-mobilenumber" name="mobile" placeholder="Mobile no" maxlength="10" required="" class="form-control inputbox">
<span id="compmobileno" style="color: red"></span></div>

<div><input type="text" id="company-email" name="email" placeholder="Email" required="" class="form-control inputbox">
<span id="compemailid" style="color: red"></span></div>

<div><input type="file" id="upload_id" name="comp_uploadid" placeholder="Upload id" required="" class="form-control inputbox">
<span id="uploads" style="color: red"></span></div>

<div>
    <input type="submit" name="compsubmit" value="submit" class="btn" onclick="validation()"><br><br>
</div> 
</center> 
</div>	
</body>
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
