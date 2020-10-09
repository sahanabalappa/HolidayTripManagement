<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('holiday tours') or die (mysql_error());

	$c_id=$_REQUEST['c_id'];
	
	$result1=mysql_query("SELECT c_id from customer where c_id='$c_id'");
	$row1= mysql_fetch_array($result1);
	
	if($row1!=0){
	$c_id=$_GET['c_id'];
	$query1="DELETE from customer where c_id='$c_id'";
	$result=mysql_query($query1) or die(mysql_error());
	echo "data deleted successfully!!!!";
	$var=mysql_query("select * from customer");
	echo"<table border size=1>";
	echo"<tr><th>c_id</th> <th>c_name</th> <th>address</th> <th>phone</th><th>email_id</th> <th>gender</th> </tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td></tr>";
	}
	echo"</table>";
	}else{
	echo "Invalid customer id !!!!";
	}
	
?>
<br>
<br>
<a href="custmdel.html"><font color="black" face="Gill Sans MT" size=4> click here to delete another item </font> </a>
<br>
<br>
<a href="cust.html"><font color="black" face="Gill Sans MT" size=4> click here for main page </font></a>
</body>
</html>