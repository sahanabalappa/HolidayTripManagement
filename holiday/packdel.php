<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('holiday tours') or die (mysql_error());

	$p_id=$_REQUEST['p_id'];
	
	$result1=mysql_query("SELECT p_id from package where p_id='$p_id'");
	$row1= mysql_fetch_array($result1);
	
	if($row1!=0){
	$p_id=$_GET['p_id'];
	$query1="DELETE from package where p_id='$p_id'";
	$result=mysql_query($query1) or die(mysql_error());
	echo "data deleted successfully!!!!";
	$var=mysql_query("select * from package");
	echo"<table border size=1>";
	echo"<tr><th>p_id</th> <th>p_name</th> <th>price</th><th>places</th><th>rating</th> <th>departuredate</th><th>arrivaldate</th><th>discount</th></tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td><td>$arr[3]</td><td>$arr[4]</td> <td>$arr[5]</td><td>$arr[6]</td> <td>$arr[7]</td></tr>";
	}
	echo"</table>";
	}else{
	echo "Invalid package id !!!!";
	}
	
?>
<br>
<br>
<a href="packagedel.html"><font color="black" face="Gill Sans MT" size=4> click here to delete another item </font> </a>
<br>
<br>
<a href="pack.html"><font color="black" face="Gill Sans MT" size=4> click here for main page </font></a>
</body>
</html>