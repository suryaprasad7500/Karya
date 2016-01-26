<?php

$con=mysql_connect('localhost','register','registerpassword');
$db=mysql_select_db('karya',$con);
$pass = md5($_POST['password']);
if(!$con)
{
	echo 'MySQL connection could not be established.'.mysql_error();
	}
$sql = "INSERT INTO jobseeker(FirstName, LastName, gender, Email, username, password, nationality, location, number, dob) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[gender]','$_POST[email]','$_POST[uname]','$pass','$_POST[nationality]','$_POST[current]','$_POST[PhNo]','$_POST[dob]')";

if(!mysql_query($sql,$con))
{
	echo 'Error: '.mysql_error();
	}
else
{
	echo 'Registered successfully.';
	header("location:../index.php");
	}
?>