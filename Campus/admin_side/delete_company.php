<?php

include_once("../Connection.php");

//include_once("Connection.php");
//if(isset($_POST['delete']))
//{

$id=$_POST['company_id'];   
//echo "$id";
$result = mysqli_query($conn, "DELETE FROM company_register WHERE company_id='$id'") or mysql_error();
//echo "<h2 align='center'><font color=white>Location of id $id Deleted Succesfully.<///font></h2>";
header("Location:view_company.php");
//}


?>