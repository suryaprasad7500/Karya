<?php
session_start();

if($_SESSION["login"]!="COMP")
{
	header("Location: companyloginfailed.html");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Post Job</title>
<link rel="stylesheet" href="main.css"/>
<link rel="stylesheet" href="register.css">
<script src="jquery-2.0.3.js">
</script>
<!--<script>
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
</script>-->
</head>

<body>
<div class="big">
<header class="main_header">
<img src="images/logo.PNG" class="header_img" alt="N/A"/>
<nav class="header_nav">
	<ul class="header_nav">
    <li><a href="index.php" class="header">Home</a></li>
    <!--<li><a href="" id="login" class="header">Login</a></li>-->
    </ul>
</nav>
</header>
<!--<section class="login_section" name="login_section">
	<form name="login_form" id="login_form" method="post" action="includes/companyregister.php">
	<table width=80% cellspacing="25">
    <tr><td class="search">Username</td><td class="search"><input type="text"  name="username" required/></td></tr>
    <tr><td class="search">Password</td><td class="search"><input type="password" name="password" pattern="{6,30}" required/></td></tr>
    <tr><td colspan="2"><center><a href="companylogin.html">Company Log In</a></center></td></tr>
    <tr><td colspan="2"><button class="table_button" type="submit">Submit</button></td></tr>
    </table>
</form>
</section>-->
<section class="reg_section">
<h3>Post Job</h3>
<br>
<form id="form" name="reg" onSubmit="check()" action="includes/postjob.php" method="post">
<table cellspacing="17px" width=85% class="table_register">
<tr>
<td>Name of the Company:</td><td><input class="input_register" type="text" name="name" required="required"/></td></tr>
<tr><td>Job Description:<td><textarea class="input_register" name="jd" required="required"></textarea></td></td></tr>
</tr>
<tr><td>Location:</td><td><input type="text" name="location" class="input_register" pattern="[^/\s/]{1,30}" required="required"></td></tr>
<tr><td>No of Working Days:</td><td><input type="text" id="workdays" name="workdays" class="input_register" required="required" pattern="[1-7]"></td></tr>
<tr><td>Field of Work:</td><td><input type="text" id="field" name="field" class="input_register"/></td></tr>
<tr><td>Skill 1:</td><td><select name="skill1" class="register" required="required"/><option value="India">None</option><option value="Vijayawada">Vijayawada</option></select></td></tr>
<tr><td>Skill 2:</td><td><select name="skill2" class="register" required="required"/><option value="None">None</option><option value="India">Hyderabad</option><option value="Vijayawada">Vijayawada</option></select></td></tr>
<tr><td>Skill 3:</td><td><select name="skill3" class="register" required="required"/><option value="None">None</option><option value="India">Hyderabad</option><option value="Vijayawada">Vijayawada</option><option value="Chennai">Chennai</option></select></td></tr>
<tr><td>Experience Required:</td><td><input class="input_register3" type="number" name="exp" pattern="[^/\s/][0-2][0-9]" required="required"/>&nbsp Years(Eg. 05 Years)</td></tr>
<tr><td>No of Working Hours:</td><td><input class="input_register3" type="text" name="hours" pattern="[0-2][0-9]"/>&nbsp Hours(Eg. 07 hours)</td></tr>
<tr><td>Keywords:</td><td><textarea name="keywords" id="keywords"></textarea></td></tr>
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