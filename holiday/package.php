<html>
<body bgcolor="white">
<?php
$dbh=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());
$pd=$_REQUEST['pd'];
$pn=$_REQUEST['pn'];
$pr=$_REQUEST['pr'];
$pl=$_REQUEST['pl'];
$rt=$_REQUEST['rt'];
$dpr=$_REQUEST['dpr'];
$arvl=$_REQUEST['arvl'];
$query="INSERT INTO package VALUES('$pd','$pn','$pr','$pl','$rt','$dpr','$arvl')";
$result=mysql_query($query) or die(mysql_error());
echo "data inserted successfully!!!";

echo "<a href=displaypack.php>
<font color = black size=5pt >   CLICK HERE TO VIEW RECORDS </a>";

$db_host="localhost";
$db_name="holiday tours";
$db_user="root";
$db_pass="";
$con= mysql_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysql_select_db('holiday tours') or die(mysql_error());
$pO=mysql_query("call income(@out);");
$rs=mysql_query('SELECT @out');
while($row=mysql_fetch_row($rs))
{
echo 'Income= ',$row[0];
}
mysql_close($con); 
 
?>
<h3><a href="package.html">return</a></h3>
</body>
</html>


