<?php 
require_once("utility.php"); 
ob_start(); 
 
?>

<head>
<link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="res/style.css" type="text/css" media="screen" />
</head>
 
 <script type="text/javascript">
  document.getElementById("aforum").className="active";
</script>
<div class="menu">
  <?php
  $topic = ExecuteQuery ("SELECT * FROM topic");
  
  while ($r1 = mysql_fetch_array($topic))
  {
  echo" <ul style='float:left;'>";
     echo"<li style='float:left;'>";
     echo" <a href='#'>$r1[topic_name] <i class='fa fa-caret-down'></i></a>";
  $stopic = ExecuteQuery ("SELECT * FROM subtopic WHERE topic_id=$r1[topic_id]"); 
      
      while ($r2 = mysql_fetch_array ($stopic) )
      {
    echo" <ul style='position:relative;'>";
     echo"<li style='position:relative;'>";
     echo" <a href='questions.php?id=$r2[subtopic_id]'> $r2[subtopic_name]</a>";

    echo"</li>";
    echo"</ul>";
  }

    echo"</li>";
echo"</ul>";
}
?>
 </div>
