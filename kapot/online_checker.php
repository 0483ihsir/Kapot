<?php
session_start();

if($_SESSION['authuser'])
{
$db=mysql_connect('XXXXX','XXXXX','XXXXX') or die('Opps !!! some error occured....');
mysql_select_db('XXXXX',$db);

$query='select * from login';
$result=mysql_query($query,$db);

while($row=mysql_fetch_assoc($result))
{
	echo $row['account'];
}
}
else { die('authentication needed . please login'); }
?>