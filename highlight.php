             <div class="art-sidebar2">
                        <div class="art-Block" >
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                        <div class="t">NEWEST PRODUCT</div>
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
                                      
    
<?PHP require_once('utility.php');


$str="SELECT * FROM articles where id='6'";

  $result=ExecuteQuery($str);
  $no_rows = mysql_num_rows($result);
  if ($no_rows > 0)
  {
    while($row = mysql_fetch_array($result))
    {
  ?>

<div class="homee12" style="position: relative;margin: 0;padding: 0;border: 0;float: left;width: 100%;">
<p align="left"><?PHP echo substr($row['content'], 0,700).""; ?></p>
</div>
                    
<?php
  }
}
?>
<video width="100%" controls>
  <source src="res/images/bb.mp4" type="video/mp4">
</video>
<p>
<a href="../../external.html?link=http://www.bigbuckbunny.org/" target="_blank">Hot Nigga</a>.
</p>
</div> 

                                    </div>
                                </div>
                            </div>
                    <?php include("sidebarpost.php");?>
                    <?php include("thread.php");?>
                        </div>