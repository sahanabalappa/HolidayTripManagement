<html>
<body bgcolor="white">
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());
$cd=$_REQUEST['cd'];
$cn=$_REQUEST['cn'];
$ad=$_REQUEST['ad'];
$ph=$_REQUEST['ph'];
$ed=$_REQUEST['ed'];
$gn=$_REQUEST['gn'];
$query="INSERT INTO customer VALUES('$cd','$cn','$ad','$ph','$ed','$gn')";
$result=mysql_query($query) or die(mysql_error());
echo "data inserted successfully!!!";
$var=mysql_query("SELECT * FROM customer");
echo "<table border size=1>";
echo "<tr><th>c_id</th> <th>c_name</th> <th>address</th> <th>phone</th> <th>email_id</th> <th>gender</th> </tr>";
while($arr=mysql_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> </tr>";
}
echo "</table>";
$db_host="localhost";
$db_name="holiday tours";
$db_user="root";
$db_pass="";
$con= mysql_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysql_select_db('holiday tours') or die(mysql_error());
mysql_close($con); 
 
?>
<h3><a href="reservation.html">click here to reserve</a></h3>
</body>
</html>


