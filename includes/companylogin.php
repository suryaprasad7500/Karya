<?php
header("location:../companyhome.php");
$name=array(28);
session_start();
if(isset($_POST))
{
	$password=md5($_POST['password']);
	$username=$_POST['username'];
	$con=mysql_connect('localhost','guest','guestpassword');
	$db=mysql_select_db('karya',$con);
	if(!$con)
	{
		die('Failed to connect to database.');
	}
	$sql="SELECT username, password from company WHERE username='$username' and password='$password'";
	$name_result=mysql_query($name_sql);
	$name=mysql_fetch_row($name_result);
	
	if($result=mysql_query($sql))
	
	{
		$num=mysql_num_rows($result);
		echo $num;
		
		if($num==1)
		{
			echo 'Logged in';
			$_SESSION["login"]="COMP";
			$_SESSION["username"]=$username;

		}
		else
		{
			$_SESSION["login"]="NO";
			header("location:../companyloginfailed.html");
		}
	}
}
?>