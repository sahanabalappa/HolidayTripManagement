<html>
<body>
<body bgcolor="grey">
<center>
<h1>RETRIEVE DETAILS</h1>
<hr>
<br>
<?php
if(isset($_POST['retrieve']))
{

$conn=mysql_connect("localhost","root","");
if(!$conn)
{
	die('could not connect:');
}
$p_id=$_POST['p_id'];
$sql="select  * from package where p_id='$p_id'";
mysql_select_db('holiday tours');
$result=mysql_query($sql,$conn);
echo"<br><br>";

if(!$result)
{
	die('could not get data:');
}
	echo "<tr><th><font size = 5>FETCHED DATA SUCCESSFULLY!!!</font></th></tr>";
	echo "<br><br>";
	echo "<table border size=1 align='center'>";
    echo "<tr><th><font size = 5>p_id </font></th><th><font size = 5>p_name </font></th><th><font size = 5>price </font></th><th><font size = 5>places </font></th> <th><font size = 5>rating </font></th><th><font size = 5>departuredate </font> <th><font size = 5>arrivaldate</font></th></th></tr>";


	while($row=mysql_fetch_array($result,MYSQL_ASSOC))
	{
		echo "<tr>
	          <td><font size = 5>{$row['p_id']} </font></td>
			  <td><font size = 5>{$row['p_name']} </font></td>
			  <td><font size = 5>{$row['price']} </font></td>
			   <td><font size = 5>{$row['places']} </font></td>
			   <td><font size = 5>{$row['rating']} </font></td>
			   <td><font size = 5>{$row['departuredate']} </font></td>
			     <td><font size = 5>{$row['arrivaldate']} </font></td>
	</tr>\n";

	}
	echo "</table>";
	mysql_close($conn);
}
else{
	?>
	<form method="post" action="" >
	<table width="400" border="0" cellspacing="1" cellpadding="2">
	<tr>
   <td width="100"><font size = 5>p_id : </font></td>
   <td><input name="p_id" type="text" id="p_id"required="required"</td>
   </tr>
   <tr>
  <td width="100"></td>
  <td></td>
  </tr>
  <td width="100"></td>
  <td>
  <input name="retrieve" type="submit" id="retrieve" value="RETRIEVE">
  </td>
  </tr>
  </table>
  </form>
 <?php 
}
echo"<br><br>";
echo "<a href='displaypack.php'><font color = black size=5pt >CLICK HERE TO VIEW RECORDS</a>";
echo"<br><br>";
echo "<a href='index2.html'><font color = black size=5pt >CLICK HERE TO GO BACK</a>";
   
?>  
</body>
</html>