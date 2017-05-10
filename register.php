<style type="text/css">
@import url(css1.css);
.style2 {
	font-size: 24px;
	font-weight: bold;
}
</style>
<script type="text/javascript">
	function check(form1)
		{
		
			if (form1.u_name.value == "")
			{
				document.getElementById("a").innerHTML = "Please, Enter user name.";
			form1.u_name.focus();
			return false;
				
			}

			else if (form1.f_name.value == "")
			{
				document.getElementById("b").innerHTML = "Please, Enter full name.";
				form1.f_name.focus();
			return false;
				
			}

			else if (form1.pwd.value == "")
			{
				document.getElementById("c").innerHTML = "Please, Enter password.";
				form1.pwd.focus();
			return false;
				
			}

			
			else if (form1.e_mail.value == "")
			{
				document.getElementById("d").innerHTML = "Please, Enter e-mail address.";
				form1.e_mail.focus();
			return false;
				
			}

			else if (form1.gender.value == "")
			{
				document.getElementById("spuid").innerHTML = "Please, Enter the gender.";
				form1.gender.focus();
			return false;
				
			}


			else if (form1.dob.value == "")
			{
				document.getElementById("e").innerHTML = "Please, Enter date of birth.";
			return false;
				
			}


			else if (form1.add.value == "")
			{
				document.getElementById("f").innerHTML = "Please, Enter address.";
				form1.add.focus();
			return false;
				
			}


			else if (form1.sta.value == "")
			{
				document.getElementById("g").innerHTML = "Please, Enter state.";
				form1.sta.focus();
			return false;
				
			}

			else if (form1.cou.value == "")
			{
				document.getElementById("h").innerHTML = "Please, Enter country.";
				form1.cou.focus();
			return false;
				
			}
		else
			return true;
	}
</script>

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
                                <span class="art-PostHeader"><h1>Register Here</h1></span>
                            
                            <div class="art-PostContent">



<form action="registerH.php" method="POST" onsubmit="return check(this)">
<table>
<tr><td>Username</td><td>:</td><td><input type="text" name="u_name" ><span id='a' style="color: red;"></span></td></tr>
<tr><td>Fullname</td><td>:</td><td><input type="text" name="f_name"><span id='b' style="color: red;"></span></td></tr>
<tr><td>Password</td><td>:</td><td><input type="password" name="pwd"><span id='c' style="color: red;"></span></td></tr>
<tr><td>E_Mail</td><td>:</td><td><input type="text" name="e_mail"><span id='d' style="color: red;"></span></td></tr>
<tr><td>Gender</td><td>:</td><td><input type="radio" name="gender" value="1" checked="checked">male <input type="radio" name="gender" value="2">female<span id='spuid' style="color: red;"></span></td></tr>
<tr><td>Date Of Birth</td><td>:</td><td><input type="date" name="dob" ><span id='e' style="color: red;"></span></td></tr>
<tr><td>Image</td><td>:</td><td><input type="file" name="ima"></td></tr>
<tr><td>Address</td><td>:</td><td><textarea rows="3" cols="19" name="add"></textarea><span id='f' style="color: red;"></span></td></tr>
<tr><td>State</td><td>:</td><td><input type="text" name="sta"><span id='g' style="color: red;"></span></td></tr>
<tr><td>Country</td><td>:</td><td><input type="text" name="cou"><span id='h' style="color: red;"></span></td></tr>

<tr><td><input type="submit" value="Submit"></td><td></td><td><input type="reset" value="Reset"></td></tr></table></form>

</div>
                            <div class="cleared"></div>
                        </div>
                        
                            </div>
                        </div>
                    </div>
                  </div>