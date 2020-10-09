<html>
<body>
<body bgcolor="grey">
<center>
<h1>RETRIEVE DETAILS </h1>
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
$e_id=$_POST['e_id'];
$sql="select  * from employee where e_id='$e_id'";
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
    echo "<tr><th><font size = 5>e_id</font></th><th><font size = 5>e_name </font></th><th><font size = 5> address </font></th><th><font size = 5> phone </font></th> <th><font size = 5> email_id </font></th> <th><font size = 5> gender </font></th> <th><font size = 5> salary </font></th></tr>";



	while($row=mysql_fetch_array($result,MYSQL_ASSOC))
	{
		echo "<tr>
	          <td><font size = 5>{$row['e_id']} </font></td>
			  <td><font size = 5>{$row['e_name']} </font></td>
			  <td><font size = 5>{$row['address']} </font></td>
			   <td><font size = 5>{$row['phone']} </font></td>
			    <td><font size = 5>{$row['email_id']} </font></td>
				 <td><font size = 5>{$row['gender']} </font></td>
				  <td><font size = 5>{$row['salary']} </font></td>
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
   <td width="100"><font size = 5>e_id : </font></td>
   <td><input name="e_id" type="text" id="e_id"required="required"</td>
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
echo "<a href='displayemp.php'><font color = black size=5pt >CLICK HERE TO VIEW RECORDS</a>";
echo"<br><br>";
echo "<a href='emp.html'><font color = black size=5pt >CLICK HERE TO GO BACK</a>";
   
?>  
</body>
</html>