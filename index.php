<?php
session_start();
if(isset($_SESSION["login"]))
{
	if($_SESSION["login"]=="YES")
	{
		header("Location:userhome.php");
		}
	else if($_SESSION["login"]=="COMP")
	{
		header("Location:companyhome.php");
		}
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Karya-Home Page</title>
<link rel="stylesheet" href="main.css"/>
<script src="jquery-2.0.3.js">
</script>
<script>
$(document).ready(function(){
	$(".login_section").hide();
	$("#keywords").focus();
	$("#login").click(function(event){
	event.preventDefault();
	$(".login_section").fadeToggle();
		});
})
</script>
</head>
<body>
<header class="main_header">
<img class="header_img" src="images/logo.PNG" alt="Karya.com"/>
<nav class="header_nav">
<ul>
	<li><a class="header" name="selected" href="index.php">Home</a></li>
    <li><a class="header" href="">Resume</a></li>
    <li><a class="header" href="" id="login">Login</a></li>
    <li><a class="header" href="regselect.html">Register</a></li>
    <li><a class="header" href="">Services</a></li>
    <li><a class="header" href="">About</a></li>
</ul>
</nav>
</header>
<section class="login_section" name="login_section">
<form name="login_form" id="login_form" method="post" action="includes/login.php">
	<table width=80% cellspacing="25">
    <tr><td class="search">Username</td><td class="search"><input type="text" pattern="[^/\s/]{1,100}" name="username" required/></td></tr>
    <tr><td class="search">Password</td><td class="search"><input type="password" name="password" pattern="{6,30}" required/></td></tr>
    <tr><td class="search" colspan="2"><center><a href="companylogin.html">Company Log In</a></center></td></tr>
    <tr><td colspan="2"><button class="table_button" type="submit">Submit</button></td></tr>
    </table>
</form>
</section>
<section class="search_section">
Search for a job
<br><br><br>
<form>
<table width="90%">
<tr><td class="search">Keywords</td><td class="search">Experience</td><td class="search">Location</td>
</tr>
<tr>
<td><input type="text" name="keywords" id="keywords"></td>
<td><select class="search" name="exp"><option>0</option><option>1</option><option>2</option><option>3</option></select></td>
<td><input type="text" name="location"></td>
</tr>
<tr>
<td></td><td></td>
<td>
<br>
<button class="table_button" type="submit">Submit</button>
</td>
</tr>
</table>
</form>
</section>
<br>
<section class="options_section">
<table class="options_table1" width="45%" cellspacing="5px"><tr>
<td class="options">Companies<br><br>
<a href="http://www.infosys.com" target="_blank"><img class="company" src="images/infosys.png" alt="Infosys"></img></a><a href="http://www.tcs.com" target="_blank"><img class="company" src="images/tcs logo.png" alt="TCS"></img></a><a href="http://www.deloitte.com/in" target="_blank"><img class="company" src="images/deloitte.png" alt="deloitte"/></a></img><br><br>
</td>
</tr>
</table>
<table class="options_table2" width="45%">
<tr>
<td class="options">Locations<br><br>
<table cellspacing="5px">
<tr><td><a href="" class="options">Hyderabad</a></td><td><a href="" class="options">Mumbai</a></td><td><a href="" class="options">Banglore</a></td>
</tr>
<tr>
<td><a href="" class="options">Delhi</a></td><td><a href="" class="options">Vijayawada</a></td><td><a href="" class="options">Chennai</a></td>
</tr>
<tr><td><a href="" class="options">Coimbatore</a></td><td><a href="" class="options">Vizag</a></td><td><a href="" class="options">Ahmedabad</a></td>
</tr>
</table>
</td>
</tr>
</table>
</section>
<footer class="main_footer">
Wayne Tech<br>
All rights reserved<br>
Version 1.0
</footer>
</body>
</html>