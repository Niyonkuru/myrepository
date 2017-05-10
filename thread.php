<?php require_once("utility.php"); 
ob_start(); 
 
?>

                    <div class="art-sidebar1">
                          <div class="art-Block">
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                        <div class="t">Forum Statistics</div>
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
$sql="SELECT count(question_id) as Threads from question";
$result=ExecuteQuery($sql);
  while($row = mysql_fetch_array($result))
  {
  $thread = $row['Threads'];
  echo "<i class='fa fa-comments'></i>Total Threads :$thread";                                
  }
?>
<br><br>
<?php 
$sql="SELECT count(user_id) as Users from user";
$result=ExecuteQuery($sql);
  while($row = mysql_fetch_array($result))
  {
  $user = $row['Users'];
  echo "<i class='fa fa-group'></i>Members :$user";                                
  }
?>
<br><br>
<?php 

$sql="SELECT count(user_id) as Online from user where isuser=true";
$rows=ExecuteQuery($sql);

if (mysql_num_rows($rows)>0)
{
while ($row = mysql_fetch_array ($rows))
{
    $onuser = $row['Online'];
  echo "<i class='fa fa-user'></i>Online Members :$onuser";
}
}
?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>