<?php
$id=$_GET['sid'];
$otp_id=$_GET['hvid'];
$db=mysqli_connect('localhost','id389671_1280217','ihsir2343','id389671_1280217') or die('check connection parametre');


$query='SELECT otp from otp

	where otp_id='.$otp_id;

$result=mysqli_query($db,$query);

$row=mysqli_fetch_assoc($result);


if( $_POST['otp'] == $row['otp'])

{


         $query='SELECT * from login

	where member_id='.$id;

         $result=mysqli_query($db,$query);

        $row=mysqli_fetch_assoc($result);


	$user=$row['mail'];
	

        $query='SELECT * from otp

	where otp_id='.$otp_id;

	$result=mysqli_query($db,$query);

	$now=mysqli_fetch_assoc($result);

	$pass=$now['otp'];


	$query='update login
		set 
		pass="'.$pass.'" where member_id='.$id;

	$result=mysqli_query($db,$query);

	

	$query='update logon
		set 
		pass="'.$pass.'" , mail= "'.$user.'"where member_id='.$id;

	$result=mysqli_query($db,$query);

		
	$message="kapot : YOUR USERNAME is your email AND PASSWORD is ".$pass;

	if($result)
	{ mail($row['mail'],'USERNAME & PASSWORD',$message);  }
}
else {

        $query='DELETE FROM otp where otp_id='.$otp_id;

	$result=mysqli_query($db,$query);


        $query1='DELETE FROM login where member_id='.$id;

	$result=mysqli_query($db,$query);

	die('INCORRECT OTP  PLEASE <A HREF="https://kapot.000webhostapp.com/clear.php">TRY AGAIN</a>');


	
    }
?>
	



<html>
<head>
<title>confirmation...</title>
</head>
<body>
<center>
<h1>CONGRATULATION!!!</h1>
<H2>YOU HAVE SIGNED-UP</H2>
<H3> USERNAME AND PASSWORD HAS BEEN SENT IN YOUR MAIL ID . PLEASE GET IT AND <A HREF="https://kapot.000webhostapp.com/login.php">LOGIN</a></H3>
</center>
</body>
</html>