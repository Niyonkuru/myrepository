<?php include('header.php');?>
   
<div class="art-contentLayout">


<?PHP require_once('utility.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}

$str="SELECT * FROM articles where id='$idval'";
  $result=ExecuteQuery($str)  or die('Error, query failed');
  $no_rows = mysql_num_rows($result);
  if ($no_rows > 0)
  {
    while($row = mysql_fetch_array($result))
    {
  ?>
                    <div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-tl"></div>
                            <div class="art-Post-tr"></div>
                            <div class="art-Post-bl"></div>
                            <div class="art-Post-br"></div>
                            <div class="art-Post-tc"></div>
                            <div class="art-Post-bc"></div>
                            <div class="art-Post-cl"></div>
                            <div class="art-Post-cr"></div>
                            <div class="art-Post-cc"></div>
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
                            <div class="art-PostContent">
                              
<?PHP require_once('utility.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}

$str="SELECT * FROM articles where id='$idval'";
  $result=ExecuteQuery($str)  or die('Error, query failed');
  $no_rows = mysql_num_rows($result);
  if ($no_rows > 0)
  {
    while($row = mysql_fetch_array($result))
    {

  ?>
    <p><?PHP echo $row['content'];?></p>
   <?php
	}
}
?>
  
<?php
	}
}
?>

                     </div>
                            <div class="cleared"></div>
                        </div>
                        
                            </div>
                        </div>
                    </div>
                    
                    <?php include("sidebar1.php");?>
                  
                    <?php include("highlight.php");?>
                    </div>
                  </div>

<?php include('footer.php');?>
