<?php

$con=mysql_connect('localhost','company','cpass');
$db=mysql_select_db("karya",$con);
if(!$con)
{
	echo mysql_error();
	echo '<a href="../index.php">Home</a>';
}


$sql="INSERT INTO job(company,JD,location,WorkingDays,package,title,skill1,skill2,skill3,experience,WorkingHours,sector,keywords) VALUES ('$_POST[name]','$_POST[jd]','$_POST[location]','$_POST[workingdays]','$_POST[package]','$_POST[title]','$_POST[skill1]','$_POST[skill2]','$_POST[skill3]','$_POST[exp]','$_POST[hrs]','$_POST[sector]','$_POST[keyword]') ";

if(!mysql_query($sql,$con))
{
	echo mysql_error();
	echo '<a href="../index.php">Try Again</a>';
}
else
{
	echo 'Successfully Posted.';
	echo '<a href="../companyhome.php">Home</a>';
}
?>