<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

                    <div class="art-sidebar1">
                        <div class="art-Block">
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-header-tag-icon">
                                        <div class="t">Newsletter</div>
                                    </div>
                                </div>
                                <div class="art-BlockContent">
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
                                        <div><form action="" method="get" id="newsletterform" action="javascript:void(0)">
                                        <input type="text" value="" name="email" id="s" style="width: 95%;" placeholder="email" /><br><hr>
                                        <span class="art-button-wrapper">
                                          <span class="l"> </span>
                                          <span class="r"> </span>
                                          <input class="art-button" type="submit" name="search" value="Subscribe"/>
                                        </span>
                                        </form></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="art-Block">
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-header-tag-icon">
                                        <div class="t">Log In</div>
                                    </div>
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
                                        
                                        
                                        <script type="text/javascript">
                    function check(f)
                    {
                      if(f.uid.value=="") 
                      {
                        document.getElementById("spuid").innerHTML="Please,Enter the user id ";
                        //alert("Please,Enter Your User Id")
                        f.uid.focus()
                        return false;
                        }
                      else if(f.pwd.value=="")
                        {
                          document.getElementById("a").innerHTML="Please,Enter the password";
                          //alert("Please,Enter Your Password")
                          f.pwd.focus()
                          return false;
                          
                          } 
                        
                        else
                        return true;
                      }
                    
                    
                    </script>
                                        <form action="loginH.php" method="POST" onsubmit="return check(this)">
<table>
<tr><td>UserName:</td></tr><tr><td><input type="text" name="uid"><span id='spuid' style="color: red;"></span></td></tr>
<tr><td>Password:</td></tr><tr><td><input type="password" name="pwd"><span id='spuid' style="color: red;"></span></td></tr>
<tr><td><input type="submit" value="Log In"> &nbsp; <input type="reset" value="Cancel"></td></tr>
<tr><td><a rel="facebox" href="register.php"><input type="button" value="Sign Up"></a></td></tr>
</table>

<?php
      if (isset ($_GET["act"]))
        if ($_GET["act"] == "invalid")
          echo "Invalid User Id or password";
        
?>

</form>
<br>
<a href="#"><img src="/userfiles/image/theshellstation_01_03_2017.gif" width="157" height="450" hspace="0" alt="" /></a>
<br><br>
<div class="fb-page" width="157" height="250" data-href="https://www.facebook.com/facebook" data-tabs="timeline"
 data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
  data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook"
   class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>