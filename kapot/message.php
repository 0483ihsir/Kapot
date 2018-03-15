<html>
<body id ="demo">

<?php
session_start();
if($_SESSION['authuser'])
{
 require_once('xdb.php');

$query='select text from next_massage where member_id='.$_SESSION['id'];
$result=mysqli_query($db,$query);
$row=mysqli_fetch_assoc($result);

echo '<table id="tab" width="100%" height="100%">';
echo '<tr><td>';
echo $row['text'];
echo '</td></tr>';
echo '</table>';
}
else { die('please login'); }
?>
<script>window.scrollTo(0,document.body.scrollHeight);</script>
    
<script type="text/JavaScript">

var x= loadDoc();
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if ( this.readyState==4 && this.status !=304) {
    
	
	x= loadDoc();
    }
  };
  xhttp.open("GET", "message_checker.php", true);
  xhttp.send();
}



  </script>
</body>
</html>