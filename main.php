<html>

	<head>
		<title>Kapot2.0</title>
		<link rel="stylesheet" href="style.css">
		
	</head>
		

</html>

<?php
require_once("project111/database.php");

$query='SELECT captcha from captcha

	where captcha_id="'.$_POST['SAUTH'].'"';

$result=mysqli_query($db,$query);

$row=mysqli_fetch_assoc($result);


if( $_POST['captcha'] != $row['captcha'])
{
	HEADER("LOCATION:login.php?error=captcha");
}

session_start();

if(isset($_POST['submit']) and isset($_POST['user']) and isset($_POST['captcha']))
{

	$_SESSION['username']= $_POST['user'];
	$_SESSION['userpass']= $_POST['pass'];
	$_SESSION['dbauth']=1;
	unset( $_POST['user']);
	unset( $_POST['pass']);
	
		
}

else die('incomplete request !!! plesae try again');
	
$_SESSION['authuser']=0;

?>

<?php

$db=mysqli_connect('localhost','id389671_1280217','ihsir2343','id389671_1280217');

$query='select * from login';
$result=mysqli_query($db,$query);
if($result)
{
	while($row=mysqli_fetch_assoc($result))
	{
	
		if($_SESSION['username']==$row['mail'] && $_SESSION['userpass'] ==$row['pass'])
		{
			if( $_SESSION['userpass'] ==$row['pass'])
			{
				$_SESSION['authuser']=1;
				$_SESSION['id']=$row['member_id']; 
				break;
			}}
                      if($row['pass']== "")
			{
				
                                     $queryy='DELETE FROM login where member_id='.$row['member_id'];

	                            $result=mysqli_query($db,$queryy);
			}
		

	}
	

}
else
{
	echo 'username or password is incorect !!!';
	echo '<br/><a href ="' + 'http://localhost/login.php">try again...</a>';

	exit();
}  


	if($_SESSION['authuser']!=1) 
		{  
		   header("location:login.php");
		}
	else
		{
			$quer='update login set 

					account=1
				where member_id='.$row['member_id'];

			$resul=mysqli_query($db,$quer); 

		$query3='select mail from text_massage where member_id='.$row['member_id'];

			$result3=mysqli_query($db,$query3); 
			$row3=mysqli_fetch_assoc($result3);
			
			if(!$row3)
			{	$query4='insert into text_massage (member_id,mail,text) value ('.$row['member_id'].',"'.$row['mail'] .'","rishi")';

			$result4=mysqli_query($db,$query4);	
			}

			$query4='select mail from next_massage where member_id='.$row['member_id'];

			$result5=mysqli_query($db,$query4);
			$row4=mysqli_fetch_assoc($result5);
			
			if(!$row4)
			{	$query5='insert into next_massage (member_id,mail,text) value ('.$row['member_id'].',"'.$row['mail'] .'","rishi")';

			$result6=mysqli_query($db,$query5);
			}

           
            echo '<script type="text/javascript">
           window.location = "https://kapot.000webhostapp.com/kapot/kapot.php"
      </script>';

		}



?>




		




