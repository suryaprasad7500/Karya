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
<title>Karya-Post Job</title>
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
 /* $("#password").focusin(function(){
    $(".passrow").fadeIn();
  });
 $("input").blur(function(){
    $(this).css("background-color","#ffffff");
  });*/
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
<section class="reg_section">
<h3>Post Job</h3>
<br>
<form id="form" name="reg" onSubmit="check()" action="includes/postjob.php" method="post">
<table cellspacing="17px" width=85% class="table_register">
<tr>
<td>Name of the<br>Company:</td><td><input class="input_register" type="text" pattern="[^/\s/]{1,100}" name="name" required="required"/></td></tr>
<tr><td>Job Description:<td><textarea name="jd" required="required"></textarea></td></td></tr>
<tr><td>Location:</td><td><input type="text" name="location" class="input_register" pattern="[^/\s/][^/\d/]{1,30}[^/\d/]" required="required"></td></tr>
<tr><td>Working Days<br>per week:</td><td><input type="number" id="workingdays" name="workingdays" class="input_register" required="required" pattern="[1-7]"></td></tr>
<tr><td>Working Hours</td><td><input type="number" id="hrs" name="hrs" pattern="[/\d/]{1,2}" required></td></tr>
<tr><td>Package:</td><td><input type="text" name="package" class="register" required="required"/></td></tr>
<tr><td>Title:</td><td><input type="text" name="title" class="register" required="required"/></td></tr>
<tr><td>Skill 1:</td><td><select name="skill1" class="register"><?php
$con=mysql_connect('localhost','company','cpass');
$db=mysql_select_db('karya',$con);
if(!$con)
{
	echo 'Error.'.mysql_error();
}
$sql='SELECT * FROM data';
if(!mysql_query($sql))
{
	echo mysql_error();
}
else
{
	$result=mysql_query($sql);
}
while($row=mysql_fetch_assoc($result))
{
$value='<option value='.$row["skills"].'>'.$row["skills"] .'</option>';
echo $value;
}

 ?>
 </select></td></tr>
<tr><td>Skill 2:</td><td><select name="skill2" class="register">

<?php
$con=mysql_connect('localhost','company','cpass');
$db=mysql_select_db('karya',$con);
if(!$con)
{
	echo 'Error.'.mysql_error();
}
$sql='SELECT * FROM data';
if(!mysql_query($sql))
{
	echo mysql_error();
}
else
{
	$result=mysql_query($sql);
}
while($row=mysql_fetch_assoc($result))
{
$value='<option value='.$row["skills"].'>'.$row["skills"] .'</option>';
echo $value;
}

 ?>

</select></td></tr>
<tr><td>Skill 3:</td><td><select name="skill3" class="register">

<?php
$con=mysql_connect('localhost','company','cpass');
$db=mysql_select_db('karya',$con);
if(!$con)
{
	echo 'Error.'.mysql_error();
}
$sql='SELECT * FROM data';
if(!mysql_query($sql))
{
	echo mysql_error();
}
else
{
	$result=mysql_query($sql);
}
while($row=mysql_fetch_assoc($result))
{
$value='<option value='.$row["skills"].'>'.$row["skills"] .'</option>';
echo $value;
}

 ?>

</select></td></tr>
<tr><td>Experience</td><td><input type="number" name="exp" id="exp" pattern="[/\d/]"required="required"/> [0-9]Years</td></tr>
<tr><td>Sector:</td><td><input type="text" name="sector" id="sector" pattern="[^/\s/]{1,100}"required="required"/></td></tr>
<tr><td>Keyword:</td><td><input type="text" name="keyword" id="keyword" pattern="[^/\s/]{1,100}"required="required"/></td></tr>
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