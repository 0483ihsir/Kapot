<?php
$db=mysqli_connect('localhost','id389671_1280217','ihsir2343','id389671_1280217') or die('check connection parametre');


$otpid=$_GET['hvid'];
$id=$_GET['vid'];
$query='SELECT otp from otp

	where otp_id='.$otpid;

$result=mysqli_query($db,$query);

$row=mysqli_fetch_assoc($result);

$query1='SELECT mail from login

	where member_id='.$id;

$result1=mysqli_query($db,$query1);

$now1=mysqli_fetch_assoc($result1);
$message= "One time Password is ".$row['otp']."  send for reg. in kapot messanger site. Thank You";

if($result1)
{
	$result2=mail($now1['mail'],'OTP',$message);

	if(!$result2 )
	{
		

		$query3='DELETE FROM login where member_id='.$id;

		$result3=mysqli_query($db,$query3);

		header("location:signup.php?error=INVALID_EMAIL_ID");
	}
}
else {

	echo 'Something went wrong. Please<a href="signup.php?error=NOT_DETERMINED" >Try Again</a>';
}

$time=time('m');

?>

<html>
<head><title>OTP...</title></head><link rel="stylesheet" href="style.css">
<body>
<CENTER>

<?php  echo '<form action="confirm.php?id='.$time.$id.$time.'&hid='.$time.$otpid.'&hvid='.$otpid.'&sid='.$id.'&nid='.$time.'" method="POST">'; ?>

<h3>ONE-TIME-PASSWORD HAS BEEN SENT IN YOUR EMAIL ID <BR> PLEASE ENTER HERE...</h3>
<input type="text" name="otp" placeholder="ENTER OTP HERE!!!" />
<input type="submit" name="submit" value="submit"/>
 
</form>
</CENTER>
</body>

</html>