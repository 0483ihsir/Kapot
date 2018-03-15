<?php


	
if($_SESSION["dbauth"]!=1) die("Authintcation Needed");

$db=mysqli_connect('HOST','DATABASE','USERNAME','PASSWORD') or die('sorry !!! something went wrong');


?>
