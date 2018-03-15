<!DOCTYPE html>
<html>

<style>

div.yu
{

}

</style>
<div class="yu">
<table id="rfs">
<tr><td>


<?php
session_start();

 require_once('xdb.php');

$query='SELECT  * from login';

$result=mysqli_query($db,$query) or die(mysql_error($db));
echo '<body id="demo">';
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


<script> function go(v,u) 

{
	var nexturl = "kapot.php?sendingto=" +v+"&Reciver=" +u;

 window.top.location=nexturl;

 }

 </script> 


</tr></td></table>

</div>
</body>
<script type="text/JavaScript">
var x= loadDoc();
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if ( this.readyState==4 && this.status !=304) {
      document.getElementById("demo").innerHTML = this.responseText;
	
	x= loadDoc();
    }
  };
  xhttp.open("GET", "onlinedetector1.php", true);
  xhttp.send();
}
  </script>
</html>