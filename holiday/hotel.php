<html>
<body bgcolor="white">
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());
$hd=$_REQUEST['hd'];
$hn=$_REQUEST['hn'];
$adr=$_REQUEST['adr'];
$rt=$_REQUEST['rt'];
$query="INSERT INTO hotel VALUES('$hd','$hn','$adr','$rt')";
$result=mysql_query($query) or die(mysql_error());
echo "data inserted successfully!!!";
$var=mysql_query("SELECT * FROM hotel");
echo "<table border size=1>";
echo "<tr><th>h_id</th> <th>h_name</th> <th>address</th> <th>rating</th> </tr>";
while($arr=mysql_fetch_row($var))
{
echo "<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
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
<h3><a href="hotel.html">return</a></h3>
</body>
</html>


