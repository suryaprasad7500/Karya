<?php
session_start();

if($_SESSION["login"]!="COMP")
{
	header("Location: companyloginfailed.html");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Karya-Company Home Page</title>
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
    <li><a href="includes/logout.php" class="header">Logout</a></li>
    </ul>
    </font>
</header>
<section class="profile">
<img src="images/profile_picture.jpg" width="85%" alt="Picture not available"/>
<br>
<form>
<table class="profile">
<tr><td>No of jobs: <?php 	$company=$_SESSION['username'];
$con=mysql_connect('localhost','company','cpass');
$db=mysql_select_db("karya",$con);
if(!$con)
{
	echo mysql_error();
	echo '<a href="index.php">Home</a>';
	}
	else
	{
		$sql = "SELECT * FROM `company` WHERE name=$company";
		if(mysql_query($sql))
		{
		$rows=mysql_num_rows($sql);
		echo $rows;
		}
		}
?></td></tr>
<tr><th colspan="2"><br>Filter applications</th></tr>
<tr><td>Experience</td></tr>
<tr><td><select id="experience" name="experience"><option value="0">0</option><option value="1">1</option><option value"2">2</option><option value="3">3</option></select></td></tr>
<tr><td>Qualification</td></tr>
<tr><td><select id="qualification" name="qualification"><option value="B.Tech">B.Tech</option><option value="M.Tech">M.Tech</option></select></td></tr>
<tr><td>Specialization</td></tr>
<tr><td><select id="spec" name="spec"><option>None</option></select></td></tr>
<tr><td><br><button type="submit">View applications</button></td></tr>
</table>
</form>
</section>
<section class="compcontext">
<a href="postjob.php" color="black" style="text-decoration:none;color=black">Post Job</a>
</section>
</body>
</div>
</html>