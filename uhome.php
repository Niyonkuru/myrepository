<?php 
	session_start();
	require("header.php");
	require("checkUser2.php");
?>
<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>

<h4><a href="que.php">My Question</a>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="ans.php">My Answer </a></h4>


<span class="art-button-wrapper">
<span class="l"> </span>
<span class="r"> </span>
<a class="art-button" href="#">Recent Topics </a>
</span>
<br>

<?php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  datetime desc limit 0,5";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysql_fetch_array($result))
	{
		   
			echo "<span class='box3'>";
			echo "<table >";
			echo "<tr><td valign='top' width='100px' >
			<a href='questionview.php?qid=$row[question_id]' >$row[heading]</a>:
				<br/><br/>
			<b>By $row[fullname]</b>
			<td valign='top' >";?>
			<?PHP echo substr($row['question_detail'],0,230);?>...<br/><br/>
			<?php echo "$row[datetime]<br/>
			Views : $row[views]
			</td></tr><hr>";
			
			echo "</table></span>";
		}
	
?>
<br>
<span class="art-button-wrapper">
<span class="l"> </span>
<span class="r"> </span>
<a class="art-button" href="#">Most Liked Topics </a>
</span>

<br>
<?php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  views desc limit 0,5";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysql_fetch_array($result))
	{
		   

			echo "<span class='box3'>";
			echo "<table>";
			echo "<tr><td valign='top' width='100px'>
			<a href='questionview.php?qid=$row[question_id]' >$row[heading]</a>:
				<br/><br/>
			<b>By $row[fullname]</b>
			<td valign='top'>";?>
			<?PHP echo substr($row['question_detail'],0,230);?>...<br/><br/>
			<?php echo "$row[datetime]<br/>
			Views : $row[views]
			</td></tr><hr>";
			
			echo "</table></span>";
		}
	
?>

<br>
<span class="art-button-wrapper">
<span class="l"> </span>
<span class="r"> </span>
<a class="art-button" href="#">Trending Topics </a>
</span>
<br>

<?php

	$sql="select * from question,user where question.user_id=user.user_id ORDER BY  datetime desc limit 0,7";
	
	$result=ExecuteQuery($sql);
	

	while($row = mysql_fetch_array($result))
	{



			echo "<span class='box3'>";
			echo "<table>";
			echo "<tr>

			<td valign='top'>

		<a href='questionview.php?qid=$row[question_id]'>$row[heading]</a>
			</td></tr>";
			
			echo "</table></span>";

				
		}
	
?>
<?php require("footer.php");?>