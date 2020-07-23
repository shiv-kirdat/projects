<?php
include_once("../Connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style type="text/css">
		
.pad1{
    margin-top: 10px;
    margin-left: 5%;
    width:40%;
    text-align: center;

}


table{     
    width: 125%;    
 color: black;

}
th,td {
    border:1px solid black;
    border-collapse: collapse;
}
th,td{
    width: 15%;
    padding: 10px;
/*    text-align: center; 
    float: left; */
}
table#t01 th{
    background-color :black;
    color: white;
}

	</style>
</head>
<body>

<div class="pad1">

	<h1>VIEW COMPANY</h1>
<?php



$sql="select * from company_register";
$result= mysqli_query($conn,$sql)or die(mysql_error($conn));


if (mysqli_num_rows($result)>0) 
{
    //Output data of each row
    echo "<table  id=t01    >
            <tr>
              <th>Company id</th>
              <th>Company Name</th>
              <th>Password</th>
              <th>Mobile no.</th>
              <th>Email</th>
              <th>Upload id</th>
              <th>Delete</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "     <tr>
                        <td>$row[company_id]</td>
                        <td>$row[company_name]</td>
                        <td>$row[passwd]</td>
                        <td>$row[mobile]</td>
                        <td>$row[email]</td>
                        <td>$row[comp_uploadid]
                        
                        <td><form action=delete_company.php method=POST>
                        <input type=hidden value=$row[company_id] name=company_id><button type=submit>Delete</button></form></td>
                    </tr>";
    }
    echo "</table>";
}
else
        echo "No result found";



?>
</div>


</body>
</html>