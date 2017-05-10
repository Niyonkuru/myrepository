<?php 
require_once("utility.php"); 
ob_start(); 
 
?>

                    <div class="art-sidebar1">
                          <div class="art-Block">
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                        <div class="t">Popular Posts</div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-tl"></div>
                                    <div class="art-BlockContent-tr"></div>
                                    <div class="art-BlockContent-bl"></div>
                                    <div class="art-BlockContent-br"></div>
                                    <div class="art-BlockContent-tc"></div>
                                    <div class="art-BlockContent-bc"></div>
                                    <div class="art-BlockContent-cl"></div>
                                    <div class="art-BlockContent-cr"></div>
                                    <div class="art-BlockContent-cc"></div>
                                    <div class="art-BlockContent-body">
                                        <div>

<?php

  $sql="select * from question,user where question.user_id=user.user_id ORDER BY  views desc limit 0,5";
  
  $result=ExecuteQuery($sql);
  

  while($row = mysql_fetch_array($result))
  {

      echo "<span class='box3'>";
      echo "<table>";

      echo "<tr><td >
      <img src='$row[uimg]' alt='' class='uimg' style='width:20px;height:20px;'/>
      </td>";
      echo "<td>
      $row[fullname]<br>
         <a style='color:#5b61b1;' href='questionview.php?qid=$row[question_id]'>$row[heading]</a>
      </td></tr><hr>"; 
  
      echo "</table></span>";
        
    }
  
?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>