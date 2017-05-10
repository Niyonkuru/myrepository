<?php session_start();
	require("header.php");
	require("checkUser.php");
	
	$id=$_GET["id"];
?>

<a href="question.php?stid=<?php echo $id ?>">Ask Question<img src="res/images/askq.jpg"  class='imagedel'/></a>
<hr />
<?php 
	
	$str="SELECT * FROM question, user WHERE question.user_id=user.user_id and subtopic_id=$id ORDER BY datetime desc ";
	$result=ExecuteQuery($str);
	
	$no_rows = mysql_num_rows($result);
	
	if ($no_rows > 0)
	{
		while($row = mysql_fetch_array($result))
		{
			$rowsc=ExecuteQuery("SELECT count(*) as counter from answer where question_id=$row[question_id]");
			$rowc = mysql_fetch_array($rowsc);
			$count = $rowc['counter'];
			
			echo "<span class='box2'>";
			echo "<span class='head'><a href='questionview.php?qid=$row[question_id]' ><h4>$row[heading]</h4></a> </span>";
			echo " <span class='view2'>Views : $row[views], Replies :$count</span>";
			echo "</span>";?>
			

			<?PHP echo substr($row['question_detail'],0,230);?>...
			
			<?php echo "<br/>";
			
			echo "<b>By $row[fullname]</b>";
			//echo  "<a href='answer.php?qid=$row[question_id]' class='reply'>REPLY</a>";
			
		}
	
		
	}
	
			

	else
	{
		echo "No questions at the moment";
	}
	
 

?>

<br>
<style>
.w3-center{text-align:center!important}
.w3-pagination{display:inline-block;padding:0;margin:0}.w3-pagination li{display:inline}
.w3-pagination li a{text-decoration:none;color:#000;float:left;padding:8px 16px}
.w3-pagination li a:hover{background-color:#ccc}
.w3-border{border:2px solid #ccc!important}
.w3-round-small{border-radius:2px!important}.w3-round,.w3-round-medium{border-radius:4px!important}
.w3-round-large{border-radius:8px!important}.w3-round-xlarge{border-radius:16px!important}
.w3-round-xxlarge{border-radius:32px!important}.w3-round-jumbo{border-radius:64px!important}
</style>
<div class="w3-container">
  <div class="w3-center">
    <ul class="w3-pagination w3-border w3-round">
    <li><a href="#">&laquo;</a></li>
    <li><a class="w3-green" href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">&raquo;</a></li>
  </ul>
</div>
</div>



<?php require("footer.php");?>