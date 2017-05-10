<?php 
	session_start();
	require("utility.php");
?>

<link rel="stylesheet" href="res/style.css" type="text/css" media="screen" />
<?php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  views desc ";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysql_fetch_array($result))
	{
		   

			echo "<span class='box2'>";
			echo "<table>";
			echo "<tr><td valign='top' width='100px'>
			<a href='questionview.php?qid=$row[question_id]' >$row[heading]</a>:
				<br/><br/>
			By:$row[fullname]
			<td valign='top'>
			$row[question_detail]<br/>
			$row[datetime]<br/>
			Views : $row[views]
			</td></tr>";
			
			echo "</table></span><div class='h10'></div>";
		}
	
?>