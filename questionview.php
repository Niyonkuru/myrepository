<?php session_start(); 
require("header.php");
require("checkUser.php");
?>


<?php 
$upd="update question set views=views+1 where question_id=$_GET[qid]";
$res=ExecuteNonQuery($upd);
	
$str="SELECT * from question, user where  user.user_id=question.user_id AND question_id=$_GET[qid]";
	$result=ExecuteQuery($str);
	
	$no_rows = mysql_num_rows($result);
	$head="";
	
	if ($no_rows > 0)
	{	
		while($row = mysql_fetch_array($result))
		{
			
			
			$head = $row['heading'];
			echo "<h4>";
			echo $head;	
			echo "</h4>";
			echo "<span class='box2'>";
			echo "<span class='head'><a href='answer.php?id=$_GET[qid]'><h4>REPLY</h4></a></span>";
			
			echo "<table>";
			echo "<tr><td valign='top' width='100px'>
				<img src='$row[uimg]' alt='' class='uimg'/>
				<br/>
			<b>By $row[fullname]</b>
			<td valign='top'>
			<b>$head</b><br/>
			$row[datetime]<br/><br/>
			$row[question_detail]</tr>";
			
			
			echo "</table></span>";
		}
		
	}
?>

<?php
	$sql="select * from answer,user where question_id=$_GET[qid] and answer.user_id=user.user_id ORDER BY  datetime desc";

	$result=ExecuteQuery($sql);
	$no_rows = mysql_num_rows($result);
	
	if ($no_rows > 0)
	{	
		
		while($row1 = mysql_fetch_array($result))
		{
			
			echo "<span class='box2'>";
			echo "<span class='head'><a href='answer.php?id=$_GET[qid]'><h4>REPLY</h4></a></span>";
			echo" <span class='view2'> <a href='like.php?id=$row1[answer_id]'>Like $row1[like]</a> &nbsp;
			<a href='dwdpap.php?id=$_GET[qid]'>Download</a>
</span>";
	
			echo "<table>";
			echo "<tr><td valign='top' width='100px'>
			<img src='$row1[uimg]' alt='' class='uimg'/>
				<br/>
			<b>$row1[fullname]</b><td valign='top'><b>Re : $head</b><br/>$row1[datetime]<br/><br/>$row1[answer_detail]</tr>";
			
			echo "</table></span>";	
			
		}
	}
		
?>

<?php 
require("footer.php");?>