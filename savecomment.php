<?php 
ob_start();
require_once("utility.php");
?>

<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];	

	
	$sql="INSERT INTO comment (name, email, content) VALUES ('$name','$email','$message')";


$result=ExecuteNonQuery ($sql);

if($result)
{
	header("location: contact.php");
}
else
{
		mysql_close();
}
?> 	