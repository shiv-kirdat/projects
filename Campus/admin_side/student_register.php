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
<?php 
		$query="select * FROM student_register";
		$res=mysqli_query($conn,$query) or die(mysqli_error($conn));
		
	?>
<body style="background-color: white;">
	<h1> Student Registration Information</h1>
<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		
		<th>Mobile No.</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Course</th>
		<th>Upload Id</th>
		<th>User Type</th>
	</tr>
	<?php
			while($row=mysqli_fetch_array($res))
		{
		?>
	<tr>
		
		<td><?php echo $row["first_name"];?></td>
		<td><?php echo $row["last_name"];?></td>

		<td><?php echo $row["mobile"];?></td>

		<td><?php echo $row["email"];?></td>

		<td><?php echo $row["gender"];?></td>

		<td><?php echo $row["course"];?></td>

		<td><?php echo $row["upload_id"];?></td>

		<td><?php echo $row["user_type"];?></td>
		
	</tr>

<?php
			}
		?>	
</table>
</body>
</html>