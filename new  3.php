<?php
echo "<select>
$con=mysql_connect('localhost','company','cpass');
$db=mysql_select_db("karya",$con);
if(!con)
{
	echo 'Error.'mysql_error();
}
$sql="SELECT skills FROM data";
$result=mysql_query($sql);
foreach($result as $option){
echo '<option>.$option.</option>';
}
</select>"
 ?>
 