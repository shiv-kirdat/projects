<?php 

	$nameerror="";

	if(isset($_POST["submit"]))
	{
		if(empty($_POST["firstname"]))
		{
			$nameerror="Name is required";
		}
		else
		{
			$name=test_input($_POST["firstname"])
		}
	}

	function test_input($data)
	{
		return $data;
	}
?> 
