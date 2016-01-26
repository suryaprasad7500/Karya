<?php
$con=mysql_connect('localhost','company_register','companyregister');
$db=mysql_select_db('karya',$con);
$pass = md5($_POST['password']);
if(!$con)
{
	echo 'MySQL connection could not be established.'.mysql_error();
	}
$sql = "INSERT INTO company(name, email, username, password, nation, location1, location2, location3, PhNo) VALUES ('$_POST[name]','$_POST[email]','$_POST[uname]','$pass','$_POST[nationality]','$_POST[location1]', '$_POST[location2]', '$_POST[location3]','$_POST[PhNo]')";

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