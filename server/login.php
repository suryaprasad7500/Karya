<?php
$name=array(28);
session_start();
if(isset($_POST))
{
	$password=$_POST['password'];
	$username=$_POST['username'];
	$con=mysql_connect('localhost','adendent_karya','karyapassword');
	$db=mysql_select_db('adendent_karya',$con);
	if(!$con)
	{
		die('Failed to connect to database.');
	}
	$sql="SELECT username, password from jobseeker WHERE username='$username' and password='$password'";
	$name_sql="SELECT * FROM jobseeker WHERE username='$username'";
	$name_result=mysql_query($name_sql);
	$name=mysql_fetch_row($name_result);
	
	if($result=mysql_query($sql))
	
	{
		$num=mysql_num_rows($result);
		echo $num;
		
		if($num==1)
		{
			echo 'Logged in';
			$_SESSION["login"]="YES";
			$_SESSION['username']=$username;
			$_SESSION['fname']=$name[0];
			$_SESSION['lname']=$name[1];
			$_SESSION['address']=$name[10];
			$_SESSION['qualification']=$name[21];
			$_SESSION['inst']=$name[27];
			$_SESSION['skills']=$name[18];
			$_SESSION['sector']=$name[13];
			header("location:../userhome.php");
		}
		else
		{
			$_SESSION["login"]="NO";
			header("location:../loginfailed.html");
		}
	}
}
?>