<?php require("header.php");?>
<?php 
session_start();

ExecuteNonQuery ("UPDATE User SET isuser=false WHERE user_id='$_SESSION[uid]'");

session_destroy();
?>
<h1>You have logged out.</h1>
<p>
	  <a href="login.php">Click here</a> to login again.
</p>
<?php require("footer.php");?>