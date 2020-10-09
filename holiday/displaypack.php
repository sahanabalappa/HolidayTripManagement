<html>
<body>
<body bgcolor="gray">
<center>

<hr>

<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());

$var=mysql_query("SELECT * FROM package");

echo "<br><br>";

echo "<table border size=2 align=center>";
   echo"<tr><th><font size = 5> p_id</font></th><th><font size = 5> p_name</font></th><th><font size = 5> price</font></th><th> <font size = 5>places</font> </th><th><font size = 5> rating </font></th><th><font size = 5> departuredate</font></th><th><font size = 5> arrivaldate </font></th><th><font size = 5> discount </font></th></th><th><font size = 5></th></tr>";
  while ($arr=mysql_fetch_row($var))
   {
	  
   echo"<tr><td><font size = 5>$arr[0]</font></td><td><font size = 5>$arr[1]</font></td> <td><font size = 5>$arr[2]</font></td> <td><font size = 5>$arr[3]</font></td><td><font size = 5>$arr[4]</font></td> <td><font size = 5>$arr[5]</font></td> <td><font size = 5>$arr[6]</font></td>  <td><font size = 5>$arr[7]</font></td>  <td><font size = 5>$arr[8]</font></td> </tr>";
 } 
   echo"</table>";
$p0=mysql_query("call income(@out);");
$rs=mysql_query('SELECT @out');
while($arr=mysql_fetch_row($rs))
{
	echo "<br><br>";
	echo "<tr><td><font size =5 color= black> Total Income = $arr[0]</font></td></tr>";
}
   
   echo "<br><br>";
   echo "<a href=pack.html>
<font color = black size=5pt >   CLICK HERE TO GO BACK </a>";
   echo"<br><br>";
   echo "<a href=index2.html>
<font color = black size=5pt >    CLICK HERE TO GO BACK TO WELCOME PAGE</a>";
  
   
    mysql_close($dbh);
   ?>
   </body>
</html>

