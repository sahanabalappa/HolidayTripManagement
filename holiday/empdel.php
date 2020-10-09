<html>
<body>
<?php
	$dbh=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('holiday tours') or die (mysql_error());

	$e_id=$_REQUEST['e_id'];
	
	$result1=mysql_query("SELECT e_id from employee where e_id='$e_id'");
	$row1= mysql_fetch_array($result1);
	
	if($row1!=0){
	$e_id=$_GET['e_id'];
	$query1="DELETE from employee where e_id='$e_id'";
	$result=mysql_query($query1) or die(mysql_error());
	echo "data deleted successfully!!!!";
	$var=mysql_query("select * from package");
	echo"<table border size=1>";
	echo"<tr><th>e_id</th> <th>e_name</th> <th>address</th> <th>phone</th><th>email_id</th> <th>gender</th><th>salary</th> </tr>";
	while ($arr=mysql_fetch_row($var))
	{
		echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td></tr>";
	}
	echo"</table>";
	}else{
	echo "Invalid employee id !!!!";
	}
	
?>
<br>
<br>
<a href="empldel.html"><font color="black" face="Gill Sans MT" size=4> click here to delete another item </font> </a>
<br>
<br>
<a href="emp.html"><font color="black" face="Gill Sans MT" size=4> click here for main page </font></a>
</body>
</html>