<?php
include_once("../Connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
		$query="select * FROM contact_us";
		$res=mysqli_query($conn,$query) or die(mysqli_error($conn));
		
	?>

<body style="background-color: white;">
	<h1>Contact us details</h1>
<table>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Subject</th>
		<th>Message</th>
		
	</tr>
	<?php
			while($row=mysqli_fetch_array($res))
		{
		?>
	<tr>
		
		<td><?php echo $row["full_name"];?></td>
		<td><?php echo $row["email"];?></td>

		<td><?php echo $row["subject"];?></td>

		<td><?php echo $row["message"];?></td>

		
	</tr>

<?php
			}
		?>	
</table>
</body>
</html>