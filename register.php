<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Karya-Registration</title>
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="register.css">
<script src="jquery-2.0.3.js">
</script>
<script>
$(document).ready(function(){
	$(".passrow").hide();
	$(".login_section").hide();
	$("#login").click(function(event){
	event.preventDefault();
	$(".login_section").fadeToggle();
		});
  $("#password").focusin(function(){
    $(".passrow").fadeIn();
  });
 $("input").blur(function(){
    $(this).css("background-color","#ffffff");
  });
});
function check()
{
	if(password!=password2)
	{
		alert("Password fields do not match.");
		return 0;
		}
	}

</script>
</head>

<body>
<div class="big">
<header class="main_header">
<img src="images/logo.PNG" class="header_img" alt="N/A"/>
<nav class="header_nav">
	<ul class="header_nav">
    <li><a href="index.php" class="header">Home</a></li>
    <li><a href="" id="login" class="header">Login</a></li>
    </ul>
</nav>
</header>
<section class="login_section" name="login_section">
	<form name="login_form" id="login_form" method="post" action="">
	<table width=80% cellspacing="25">
    <tr><td class="search">Username</td><td class="search"><input type="text" pattern="[^/\d/]{1,100}" name="username" required/></td></tr>
    <tr><td class="search">Password</td><td class="search"><input type="password" name="password" pattern="{6,30}" required/></td></tr>
    <tr><td class="search" colspan="2"><center><a href="companylogin.html">Company Log In</a></center></td></tr>
    <tr><td colspan="2"><button class="table_button" type="submit">Submit</button></td></tr>
    </table>
</form>
</section>
<section class="reg_section">
<h3>Registration</h3>
<br>
<form id="form" name="reg" action="includes/register.php" method="post">
<table cellspacing="17px" width=85% class="table_register">
<tr>
<td>First Name:</td><td><input class="input_register" type="text" name="fname" pattern="[^/\d/]{1,100}" required="required"/></td></tr>
<tr><td>Last Name:</td><td><input class="input_register" type="text" name="lname" pattern="[^/\d/]{1,100}" required="required"/></td></tr>
<tr><td>Gender:</td><td><input class="radio" type="radio" name="gender" required="required" value="male"/>Male<input class="radio" type="radio" name="gender" required="required" value="female"/>Female</td>
<tr><td>E-Mail<td><input class="input_register" type="email" name="email" required="required"/></td></td></tr>
</tr>
<tr><td>Username:</td><td><input type="text" name="uname" class="input_register" pattern="[^/\s/]{1,30}" required="required"></td></tr>
<tr><td>Password:</td><td><input type="password" id="password" name="password" class="input_register" required="required" pattern="{6,30}"></td></tr>
<tr class="passrow"><td class="passrow">Retype password:</td><td><input type="password" id="password2" onChange="check()" class="input_register" required="required" pattern="{6,30}"></td></tr>
<tr><th colspan="2">Personal Details</th></tr>
<tr><td>Nationality:</td><td><select name="nationality" class="register"><option value="India">India</option><option>Others</option></select></td></tr>
<tr><td>Current Location:</td><td><select name="current" class="register" required="required"/><option value="India">Hyderabad</option><option value="Vijayawada">Vijayawada</option></select></td></tr>
<tr><td>Mobile Number:</td><td><input type="text" name="PhNo" pattern="[/\d/]{10}" required="required"/></td></tr>
<tr><td>Date Of Birth:</td><td><input type="datetime" class="value" name="dob" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" placeholder="YYYY-MM-DD" required="required"/></td></tr>
</table>
<button type="submit">Submit</button>
</form>
</section>
</div>
<footer class="main_footer">
Wayne Tech<br>
All rights reserved<br>
Version 1.0
</footer>
</body>
</html>