<?php
include_once("../Connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>db</title>
	<style type="text/css">
		h1{
			text-align: center;
			font-family: Bodoni MT;
			font-size: 45px;
		}
		table{
			border-collapse: collapse;
			width: 100%;
			color: #d96459;
			font-family: Bell MT;
			font-size: 18px;
			text-align: center;
		}
		th{
			background-color: #d96459;
			color: white;
		}
		tr:nth-child(even)
		{
			background-color: #f2f2f2;
		}
	</style>
</head>
<body style="background-color: white;">
	<h1> Company Registration Information</h1>
<table>
	<tr>
		<th>Company Name</th>
		<th>Password</th>
		<th>Mobile No.</th>
		<th>Email</th>
		<th>Upload Id</th>
		<th>User Type</th>
	</tr>
	<?php
	$conn=mysqli_connect("localhost","root","","campus");
	if($conn-> connect_error)
	{
		die("Connection failed:".$conn-> connect_error);
	}
	$sql = "SELECT * from company_register";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0)
	{
		while($row = $result-> fetch_assoc())
		{
			echo"<tr><td>".$row["company_name"]."</td><td>".$row["passwd"]."</td><td>"
			.$row["mobile"]."</td><td>".$row["email"]."</td><td>".$row["comp_uploadid"]."</td><td>".$row["user_type"]."</td></tr>";
		}
		echo"</table>";
	}
	else
	{
		echo" 0 result";
	}
	$conn-> close();
	?>

</table>
</body>
</html>