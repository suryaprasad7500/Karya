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
$num=mysql_num_rows($result);
echo $num;
while($row=mysql_fetch_assoc($result))
{
$value='<option>'.$row["skills"].'</option>';
echo $value;
}

 ?>