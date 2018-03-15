<?php
session_start();

date_default_timezone_set("asia/kolkata");


if($_SESSION['authuser'] && isset($_POST['textarea']) && $_POST['message'] != $_SESSION['id'])
{
	require_once('xdb.php');
	$query1='select text from next_massage where member_id='.$_POST['message'];
	$result1=mysqli_query($db,$query1);
	$row1=mysqli_fetch_assoc($result1);

	$message1=$row1['text'] . "<center></br></br>" .$_SESSION['username']."(".date('d-m-y h:i:sa').") : -</br> </br> ".$_POST['textarea']."</center>";

	$query1='update  next_massage set text="'.$message1.'"  where member_id='.$_POST['message'];
	$result1=mysqli_query($db,$query1);

	$query='select text from next_massage where member_id='.$_SESSION['id'];
	$result=mysqli_query($db,$query);
	$row=mysqli_fetch_assoc($result);

	$message=$row['text'] ."<center></br></br>- :" .$_SESSION['username']."(".date('d-m-y h:i:sa').") : -</br></br> ".$_POST['textarea']."</center>";

	if(!$result1){ 
			$message=$message . "</br></br><SMALL>MESSAGE WAS NOT SENT</SMALL>" ; 

		}

	$query='update  next_massage set text="'.$message.'" where member_id='.$_SESSION['id'];
	$result=mysqli_query($db,$query);


	header('location:kapot.php?sendingto='.$_POST['message']);

}
else { die('authentication needed . or you are sending to your self or you have entered nothing to send'); }
?>