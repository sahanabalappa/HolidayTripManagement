<html>
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());
$sql="CREATE VIEW vochures6 AS
SELECT reservation.r_id,reservation.c_id,package.price 
FROM reservation
LEFT JOIN package on reservation.p_id=package.p_id";
$results=mysql_query($sql) or die(mysql_error());
$var=mysql_query("SELECT * FROM vochures6");
echo "<table border size=1>";
echo "<tr><th>r_id</th> <th>c_id</th> <th>price</th></tr>";
 while($arr=mysql_fetch_row($var) )
   {
             
        echo "<tr><td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> </tr>";
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
<h3><a href="reset.php">reset</a></h3>
</html>