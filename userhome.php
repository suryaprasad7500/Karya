<?php
session_start();

if($_SESSION["login"]!="YES")
{
	header("Location: loginfailed.html");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Karya-User Home Page</title>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="userhome.css">
<script src="jquery-2.0.3.js">
$(document).ready(function(){
	$("#keywords").focus();
	});
</script>
</head>
<body>
<div class="big">
<header class="main_header">
	<img class="header_img"src="images/logo.PNG">
    <nav class="header_nav">
    <ul class="header_nav">
    <li><a href="index.php" class="header"/>Home</li>
    <li><a href="" class="header"/>Resume</li>
    <li><a href="includes/logout.php" class="header">Logout</a></li>
    </ul>
    </font>
</header>
<section class="profile">
<img src="images/profile_picture.jpg" width="85%"  alt="Picture not available"/>
<br>
<table class="profile">
<tr><td>Name:</td><td><?php /*?><?php echo $_SESSION['fname'].' '.$_SESSION['lname'];?><?php */?></td></tr>
<tr><td>Address:</td><td></td></tr>
<tr><td>Qualification:</td></tr>
<tr><td>Instituition:</td></tr>
<tr><td>Skills:</td></tr>
<tr><td>Sector:</td></tr>
</table>
</section>
<section class="context">
<iframe src="index2.html" width="76%">
</section>
</body>
</div>
</html>