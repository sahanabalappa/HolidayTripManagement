<html>
<body>
<center>
<h1> HOTEL DETAILS</h1>
<body bgcolor="LIGHTPINK">


<hr>

<?php
$dbh=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());

$var=mysql_query("SELECT * FROM hotel");

echo "<br><br>";

echo "<table border size=2 align=center>";
   echo"<tr><th><font size = 5> h_id</font></th><th><font size = 5> h_name</font></th><th><font size = 5> address</font></th><th> <font size = 5>rating</font> </th></tr>";
  while ($arr=mysql_fetch_row($var))
   {
	  
   echo"<tr><td><font size = 5>$arr[0]</font></td><td><font size = 5>$arr[1]</font></td> <td><font size = 5>$arr[2]</font></td> <td><font size = 5>$arr[3]</font></td> </tr>";
    } 
   echo"</table>";
 

   
   echo "<br><br>";
   echo "<a href=hot.html>
<font color = black size=5pt >   CLICK HERE TO GO BACK </a>";
   echo"<br><br>";
   echo "<a href=index2.html>
<font color = black size=5pt >    CLICK HERE TO GO BACK TO WELCOME PAGE</a>";
  
   
    mysql_close($dbh);
   ?>
   </body>
</html>

