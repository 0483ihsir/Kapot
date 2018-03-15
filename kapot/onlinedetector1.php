<!DOCTYPE html>
<html id="demo">
<style>


</style>

<div class="yu">
<table id="rfs">
<tr><td>


<?php
session_start();
require_once('xdb.php');

$query='SELECT  * from login';

$result=mysqli_query($db,$query) or die(mysqli_error($db));

echo '<table id="rfs"';
echo '>';




while($row=mysqli_fetch_assoc($result))
{
	
	
	echo '<tr onmouseup="go(';
                
                echo $row['member_id'];
                echo ',';
                echo "'";
                echo $row['mail'];
                echo "'";
                echo ')" style="cursor: pointer";> ';
                echo '<td>';
	if( $row['account'] == 1)
	{
		
			
		echo '<img  src="https://kapot.000webhostapp.com/images/1.png"  style="cursor:pointer;"/>';
		
	
	}
	else
	{
		
		
		echo '<img src="https://kapot.000webhostapp.com/images/0.png" style="cursor:pointer;"/>';
		 
	}	
	 
	echo  $row['mail'];
	echo '</td></tr>';
}
	echo '</table>';


?>



</tr></td></table>

</div>

</html>