<?php
session_start();
require_once('xdb.php');

				$query='update login set 

					account=0
				where member_id='.$_SESSION['id'];
			$result=mysqli_query($db,$query);






session_unset();

session_destroy();
HEADER("LOCATION:clear.php");
?>
