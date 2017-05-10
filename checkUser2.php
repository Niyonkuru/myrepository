<?php 
	if(!isset($_SESSION["fn"]))
		header("location:indexx.php");
?>

<span style="text-align:right ;width:90%; display:block; margin-bottom:5px;">
	welcome <a href="uedit.php"><img src="res/images/1.jpg" class="imagedel"/><?php echo $_SESSION["fn"];
	?></a>, [ <a href="logout.php">log-out</a> ] 
</span>