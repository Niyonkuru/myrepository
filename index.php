<?php require("header.php");
?>

<script type="text/javascript">
  document.getElementById("homee").className="active";
</script>
                    
                <div class="art-contentLayout">
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

                    <div class="homee1">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
.w3-red,.w3-hover-red:hover{color:#fff!important;background-color:#f44336!important}
</style>



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
 <div class="art-BlockHeader">
<div class="l"></div>
<div class="r"></div>
<div class="art-header-tag-icon1">
<div class="t"><b><a style='color:black' href='#'><?PHP echo $row['title']; ?></a></b></div>
</div>
</div> <br>
  <?php
 }
}
?>
<div class="w3-content" style="margin-top:-20px;max-width:100%">

<div class="mySlides w3-container">
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
<div class="homee12" style="position: relative;margin: 0;padding: 0;border: 0;float: left;width: 100%;">
<p align="left"><?PHP echo substr($row['content'], 0,800).""."..<a style='color:#5b61b1;' href='readmore.php?pag=1'><b>Read Now</b></a>"; ?></p>
</div>                  
<?php
  }
}
?>
</div>

<div class="mySlides w3-container w3-xlarge w3-black w3-card-8">
    <?php

$str="SELECT * FROM articles where id='7'";

  $result=ExecuteQuery($str);
  $no_rows = mysql_num_rows($result);
  if ($no_rows > 0)
  {
    while($row = mysql_fetch_array($result))
    {
  ?>
<div class="homee12" style="position: relative;margin: 0;padding: 0;border: 0;float: left;width: 100%;">
<p align="left"><?PHP echo substr($row['content'], 0,700).""."..<a style='color:#5b61b1;' href='readmore.php?pag=7'><b>Read Now</b></a>"; ?></p>
  <?php
 }
}
?>
</div>
</div>

<div class="mySlides w3-container w3-xlarge w3-black w3-card-8">
    <?php

$str="SELECT * FROM articles where id='8'";

  $result=ExecuteQuery($str);
  $no_rows = mysql_num_rows($result);
  if ($no_rows > 0)
  {
    while($row = mysql_fetch_array($result))
    {
  ?>
<div class="homee12" style="position: relative;margin: 0;padding: 0;border: 0;float: left;width: 100%;">
<p align="left"><?PHP echo substr($row['content'], 0,700).""."..<a style='color:#5b61b1;' href='readmore.php?pag=8'><b>Read Now</b></a>"; ?></p>
  <?php
 }
}
?>
</div>
</div>

<div class="mySlides w3-container w3-xlarge w3-black w3-card-8">
    <?php

$str="SELECT * FROM articles where id='9'";

  $result=ExecuteQuery($str);
  $no_rows = mysql_num_rows($result);
  if ($no_rows > 0)
  {
    while($row = mysql_fetch_array($result))
    {
  ?>
<div class="homee12" style="position: relative;margin: 0;padding: 0;border: 0;float: left;width: 100%;">
<p align="left"><?PHP echo substr($row['content'], 0,700).""."..<a style='color:#5b61b1;' href='readmore.php?pag=9'><b>Read Now</b></a>"; ?></p>
  <?php
 }
}
?>
</div>
</div>

<div class="mySlides w3-container w3-xlarge w3-black w3-card-8">
    <?php

$str="SELECT * FROM articles where id='10'";

  $result=ExecuteQuery($str);
  $no_rows = mysql_num_rows($result);
  if ($no_rows > 0)
  {
    while($row = mysql_fetch_array($result))
    {
  ?>
<div class="homee12" style="position: relative;margin: 0;padding: 0;border: 0;float: left;width: 100%;">
<p align="left"><?PHP echo substr($row['content'], 0,700).""."..<a style='color:#5b61b1;' href='readmore.php?pag=10'><b>Read Now</b></a>"; ?></p>
  <?php
 }
}
?>
</div>
</div>


<div class="w3-center w3-section w3-large w3-text-black w3-display-bottom" style="width:100%;text-align:center;">
  <button class="w3-btn demo" onclick="currentDiv(1)"></button> 
  <button class="w3-btn demo" onclick="currentDiv(2)"></button> 
  <button class="w3-btn demo" onclick="currentDiv(3)"></button> 
  <button class="w3-btn demo" onclick="currentDiv(4)"></button> 
  <button class="w3-btn demo" onclick="currentDiv(5)"></button> 
  </div>


</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1};
    for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-red", "");
  }    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 3 seconds
}

</script>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-red", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-red";
}
</script>

        </div>

                    <div class="homee2">

    <?php

$str="SELECT * FROM articles where id='2'";
  $result=ExecuteQuery($str);
  $no_rows = mysql_num_rows($result);
  if ($no_rows > 0)
  {
    while($row = mysql_fetch_array($result))
    {
  ?>
<div class="homee11" style="position: relative;margin-right: 5px;padding: 0;border: 0;float: left;overflow: hidden; width: 250px;">
<div class="art-BlockHeader">
<div class="l"></div>
<div class="r"></div>
<div class="art-header-tag-icon1">
<div class="t"><b><a style='color:black' href='readmore.php?pag=2'><?PHP echo $row['title']; ?></a></b></div>
</div>
</div>

<p align="left"><?PHP echo substr($row['content'], 0,470).""."..<a style='color:#5b61b1;' href='readmore.php?pag=2'><b>Read Now</b></a>"; ?></p>
   <?php
 }
}
?>
</div>

<?php

$str="SELECT * FROM articles where id='3'";
  $result=ExecuteQuery($str);
  $no_rows = mysql_num_rows($result);
  if ($no_rows > 0)
  {
    while($row = mysql_fetch_array($result))
    {
  ?>
<div class="homee12" style="position: relative;margin-left: 5px;padding: 0;border: 0;float: left;width: 250px;">
<div class="art-BlockHeader">
<div class="l"></div>
<div class="r"></div>
<div class="art-header-tag-icon1">
<div class="t"><b><a style='color:black' href='readmore.php?pag=3'><?PHP echo $row['title']; ?></a></b></div>
</div>
</div>
<p align="left"><?PHP echo substr($row['content'], 0,1000).""."..<a style='color:#5b61b1;' href='readmore.php?pag=3'><b>Read Now</b></a>"; ?></p>
   <?php
 }
}
?>
</div>

                    </div>  

                     <div class="homee3">
<?php

$str="SELECT * FROM articles where id='4'";

  $result=ExecuteQuery($str);
  $no_rows = mysql_num_rows($result);
  if ($no_rows > 0)
  {
    while($row = mysql_fetch_array($result))
    {
  ?>
<div class="homee144" style="position: relative;margin-right: 5px;padding: 0;border: 0;float: left;overflow: hidden; width: 100%;">
<div class="art-BlockHeader">
<div class="l"></div>
<div class="r"></div>
<div class="art-header-tag-icon1">
<div class="t"><b><a style='color:black' href='readmore.php?pag=4'><?PHP echo $row['title']; ?></a></b></div>
</div>
</div>
<p align="left"><?PHP echo substr($row['content'], 0,500).""."..<a style='color:#5b61b1;' href='readmore.php?pag=4'><b>Read Now</b></a>"; ?></p>
  <?php
 }
}
?>
</div>

                     </div>

                       <div class="homee4">
  <?php

$str="SELECT * FROM articles where id='5'";

  $result=ExecuteQuery($str);
  $no_rows = mysql_num_rows($result);
  if ($no_rows > 0)
  {
    while($row = mysql_fetch_array($result))
    {
  ?>
<div class="homee144" style="position: relative;margin-right: 5px;padding: 0;border: 0;float: left;overflow: hidden; width: 100%;">
<div class="art-BlockHeader">
<div class="l"></div>
<div class="r"></div>
<div class="art-header-tag-icon1">
<div class="t"><i class="fa fa-calendar fa-1x" style="color:black"></i>&nbsp;<b><a style='color:black' href='readmore.php?pag=5'><?PHP echo $row['title']; ?></a></b></div>
</div>
</div>
<p align="left"><?PHP echo substr($row['content'], 0,740).""."..<a style='color:#5b61b1;' href='readmore.php?pag=5'><b>Read Now</b></a>"; ?></p>
   <?php
 }
}
?>
</div>



                     </div>


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


