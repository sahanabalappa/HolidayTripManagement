<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('holiday tours') or die (mysql_error());

	$h_id=$_REQUEST['h_id'];
	
	$result1=mysql_query("SELECT h_id from hotel where h_id='$h_id'");
	$row1= mysql_fetch_array($result1);
	
	if($row1!=0){
	$h_id=$_GET['h_id'];
	$query1="DELETE from hotel where h_id='$h_id'";
	$result=mysql_query($query1) or die(mysql_error());
	echo "data deleted successfully!!!!";
	$var=mysql_query("select * from hotel");
	echo"<table border size=1>";
	echo"<tr><th>h_id</th> <th>h_name</th> <th>address</th><th>rating</th></tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td></tr>";
	}
	echo"</table>";
	}else{
	echo "Invalid hotel id !!!!";
	}
	
?>
<br>
<br>
<a href="hoteldel.html"><font color="black" face="Gill Sans MT" size=4> click here to delete another item </font> </a>
<br>
<br>
<a href="hot.html"><font color="black" face="Gill Sans MT" size=4> click here for main page </font></a>
</body>
</html>