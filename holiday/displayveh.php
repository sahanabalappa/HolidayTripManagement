<html>
<body>
<body bgcolor="LIGHTPINK">
<center>

<hr>

<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());

$var=mysql_query("SELECT * FROM vehicle");

echo "<br><br>";

echo "<table border size=1 align=center>";
   echo"<tr><th><font size = 5> v_no</font></th><th><font size = 5> v_name</font></th></tr>";
  while ($arr=mysql_fetch_row($var))
   {
	  
   echo"<tr><td><font size = 5>$arr[0]</font></td><td><font size = 5>$arr[1]</font></td> </tr>";
 } 
   echo"</table>";
 

   
   echo "<br><br>";
   echo "<a href=veh.html>
<font color = black size=5pt >   CLICK HERE TO GO BACK </a>";
   echo"<br><br>";
   echo "<a href=index2.html>
<font color = black size=5pt >    CLICK HERE TO GO BACK TO WELCOME PAGE</a>";
  
   
    mysql_close($dbh);
   ?>
   </body>
</html>

