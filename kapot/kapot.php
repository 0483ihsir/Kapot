<HTML>
<HEAD>
<TITLE>Welcome to KAPOt</TITLE>
<style>

input[type="submit"]{ width:15%;  cursor:pointer; background-color: #f3f955;font-size:12; 	margin: 8px 0; padding: 12px 30px; border: 1px solid #555;  height : 10px; box-sizing: border box;  border-radius : 6px; resize : none;  text-align:left; color:brown;} 


a{ width:15%; 	background-color: #f3f955; margin: 8px 0; padding: 12px 30px; border: 1px solid #555;  height : 10px; box-sizing: border box;  border-radius : 6px; resize : none; display: inline-block; text-align:left; color:brown;} 


 textarea{ width:80%; font-size:18;	margin: 8px 0; padding: 12px 20px; border: 3px solid #555;  height : 70px; box-sizing: border box;  border-radius : 6px; resize : none; display:inline-block;} </style>
</HEAD>

<body>

<table height="50%" width="100%">
<tr>
<td width="25%" height="450px" ><iframe src="online_detector.php" height="100%" width="100%"></iframe>

</td>
<td>
<iframe src="message.php" height="100%" width="100%"></iframe>
</td></tr>
</table>
<table width="100%" height="22%">
<tr><td height ="100%" width="15%"><a href="https://kapot.000webhostapp.com/index.php">Home</a> </td><td height ="100%" width="90%"><form action="sending.php" method="post"><textarea  name="textarea" placeholder="sending to <?php echo $_GET['Reciver']; ?>" rows="4" cols="120" id="send"  ></textarea><input type="hidden" name="message" value="<?php echo $_GET['sendingto']; ?>" /></td><td><input type="submit" value="send" /></form></td> 
</table>


</body>
</HTML>