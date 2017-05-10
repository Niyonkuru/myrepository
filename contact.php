<?php  require("header.php"); ?>
<script type="text/javascript">
	document.getElementById("acontact").className="active";
</script>
<script type="text/javascript">
function validateForm1()
{
var a=document.forms["contact"]["name"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter your Name");
  return false;
  }
var b=document.forms["contact"]["email"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter your Email");
  return false;
  }
var c=document.forms["contact"]["message"].value;
if (c==null || c=="")
  {
  alert("Pls. Enter your Message");
  return false;
  }
var atpos=b.indexOf("@");
var dotpos=b.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=b.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
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
                                <span class="art-PostHeader"><h1>Write For Us</h1></span>
                            
                            <div class="art-PostContent">
                                  
    <table>
    
   If you have any questions, comments or concerns about our services, please don't hesitate to contact us. We ensure that we will make your stay here an enjoyable and pleasant experience.<br /><br />
    <tr><td rowspan="4"><img src="res/images/cc.jpg" style='height:100px; width:100px';></td><td>Name</td><td>:</td><td>Tell her</td></tr>
    <tr><td rowspan="1">Contact No</td><td>:</td><td>0789578583</td></tr>
    <tr><td rowspan="1">E-Mail Add</td><td>:</td><td>amirniyonkuru@gmail.com</td></tr>
   <tr><td rowspan="1">Website</td><td>:</td><td><a href="#">www.Everylady.com</a></td></tr>
    </table>
    <div class="panel" title="Panel 3">
            <div class="wrapper">
              <div class="contact">
                <div class="cleft">
                  <form action="savecomment.php" method="post" onsubmit="return validateForm1()" name="contact">
                    <p>Name:<br />
                        <input name="name" type="text" class="ed" style="width: 37%;"  />
                        <br />
                      Email Address:<br />
                      <input name="email" type="text" class="ed" style="width: 37%;"  />
                      <br />
                      Message:<br />
                      <textarea name="message" rows="8" cols="30" class="ed"></textarea>
                      <br />
                      <input name="Input" type="submit" value="Submit" id="button1" />
                    </p>
                  </form>
                </div>
              </div>
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


