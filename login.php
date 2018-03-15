<?php
session_unset();
session_start();

$_SESSION["auth_zxdewas"]=" cft6ujm vgyhn b";

require_once('project111/database.php');
$query='select * from captcha';
$result=mysqli_query($db,$query);
$i=rand(1,5);
while($i>0)
{

$row=mysqli_fetch_assoc($result);
$auth=$row['captchaNo'];
$id=$row['captcha_id'];

$j=$i-1;

$i=$j;


}

$captcha=rand(12345,54321).time('m');

$query='update captcha set

	captchaNo="'.$captcha.'"';

$result=mysqli_query($db,$query);

?>

<html>
<head>
<title>login...</title>
</head>
<body>
<CENTER>

	<h1>..PDPD IIITDMJ.. </BR> ...BEING *SPeciallY* ONLINE ...</h1>
	<h2> please sign-in</h2>

	<form method ="Post" action ="main.php">
	<table>
	
	<tr>	
	<td>USERNAME:</td>
	<td><input type ="text" name="user"/></td>
	</tr>
	
	<tr>
	<td>PASSWORD:</td>
	<td><input type ="password" name="pass"/></td>
	</tr>
	
	<tr>
	<td>Captcha: <small>(case sensitive)</td><td>
	<input type ="text" name="captcha"/></td>
	</tr>
	
	<tr>
<?php echo '<td><img src="captcha/'.$id.'.jpg"></td>'; ?>
	</tr>	
		
	<tr>	
<?php echo '<td><input type="hidden" name="auth" value="'.$auth.'"><input type="hidden" name="SAUTH" value="'.$id.'"></td>'; ?>	
	<td><input type ="submit" name="submit" value="submit"/></td>
	<td><a href="server/signup.php">Register Now</a></td>
	</tr>

	</table>
	
	</form>
	
</center>


</body>

</html>