<?php

if (isset($_POST['email']))
{


$m= mail( $_POST['email'],'registration on kapot','you have attempted for registration');

if(!$m) { 

           die('invalid email <a href ="signup.php">try again!!!</a>');

        }

$db=mysqli_connect('localhost','id389671_1280217','ihsir2343','id389671_1280217');


$query='select * from login where mail="'.$_POST['email'].'"';

$result=mysqli_query($db,$query);
$row=mysqli_fetch_assoc($result);


 	if($row['mail']==$_POST['email'])
	{
		die('ERROR EMAIL ALREADY REGISTERED<a href="https://kapot.000webhostapp.com/server/signup.php">try again</a>');

	}


$query='INSERT INTO login

	(phone,mail,pass,account)
value
	("'.$_POST['phone'].'","'.$_POST['email'].'","",0)';

$result=mysqli_query($db,$query) ;

$last_id=mysqli_insert_id($db);

if($result)
{
	$n=rand(10,99);
	$m=time('m')%100;
	$o=rand(0,9).rand(0,9);
 
	$nmo=$n.$m.$o;
	
	$query='INSERT INTO otp 

		(otp) VALUE ("'.$nmo.'")';

	
	$result1=mysqli_query($db,$query);

	$lastotp_id=mysqli_insert_id($db);
if($result1)
{
	$time=time('m');

	header("location:otp.php?vid=$last_id&hvid=$lastotp_id&tid=$time");
}


}

else die('Sorry!!! . An Error Has occured please try after sometime');

}
?>