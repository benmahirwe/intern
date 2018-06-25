<?php
$username = $_POST['username'];

$password = $_POST['pwd'];
mysql_connect('localhost','root','');
mysql_select_db('intern') or die('cannot select database.' . mysql_error());


$sql_query = "insert into innovations (FNAME,LASTNAME) values('$username','$password')";
 mysql_query($sql_query);
//echo'your data has been sent to the database';
$row = mysql_fetch_array(mysql_query("select * from innovations where id = 3"));
echo $row['LASTNAME'];


?>