<?php
session_start();

if($_SESSION['authuser'])
{
require_once('xdb.php');
$query='select text from next_massage where member_id='.$_SESSION['id'];
$result=mysqli_query($db,$query);

while($row=mysqli_fetch_assoc($result))
{
	echo $row['text'];
}
}
else { die('authentication needed . please login'); }
?>