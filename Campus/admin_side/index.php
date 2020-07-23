<?php
include_once("Connection.php");
?>
<html>
    <head>
        
        <link href="adminlogin.css" rel="stylesheet" type="text/css" media="all" />
      
         
		 
        
    </head>
	
	<?php 

	
    

	
	if(isset($_REQUEST['btn']))
	{
	$username= $_REQUEST["username"];
$password= $_REQUEST["pass"];

//$username=stripcslashes($username);
//$password=stripcslashes($password);

//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);


$result=mysqli_query($conn,"select * from adminlogin where username='$username' and password='$password'" ) ;
  
  $row=mysqli_fetch_array($result);
  
  if($row['username']== $username && $row['password'] == $password)
{
   echo "login success!!! welcome ".$row['username'];
   header("location:adminindex.html");
}
else
{
   echo "failed to login";
   }

}
?>
    <body>
<div class="register">
            <div class="container">
         <center>      <br><br> <h1>Admin Login</h1> </center>
                <div class="login-form-grids">
                    <h5></h5>
                    <form  method="post">
                        <label >USERNAME</label>                    
                        <input class="box" type="text"  name="username" required=" " > <br>
                        <label>PASSWORD</label>     
                        <input class="box" type="password" name="pass"  required=" " >
                        
<br> <br>
                        <center> <input class="button" type="submit"  name="btn" value="Login"> </center> 
                                         </form>
                </div>
                </div>
 </div>                
</body>
</html>
