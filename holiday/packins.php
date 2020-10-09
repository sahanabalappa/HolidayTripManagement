<html>
<body bgcolor="grey">
<center>
<h1>PACKAGE DETAILS</h1>
<center>
<br>
<hr>
<?php
if(isset($_POST['add'])){
$con=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());
//$con=mysql_connect("localhost","root","","holiday tours") or die("cannot connect".mysql_error());
if($con)


echo "<br><br>";

$p_id=$_REQUEST['p_id'];
$p_name=$_REQUEST['p_name'];
$price=$_REQUEST['price'];
$places=$_REQUEST['places'];
$rating=$_REQUEST['rating'];
$departuredate=$_REQUEST['departuredate'];
$arrivaldate=$_REQUEST['arrivaldate'];
$discount=null;



$sql="INSERT INTO package (p_id,p_name,price,places,rating,departuredate,arrivaldate,discount)VALUES('$p_id','$p_name','$price','$places','$rating','$departuredate','$arrivaldate','$discount')";

$res=mysql_query($sql);
if(!$res)
{
   echo "not entered".mysql_error($con);
   
}
echo "<tr><th><font size = 5>DATA INSERTED SUCESSFULLY!!!</font></th></tr>";
echo "<br><br>";
echo "<a href=displaypack.php><font color = black size=5pt > CLICK TO VIEW RECORD</a>";
echo "<br><br>";
echo "<a href=pack.html> <font color = black size=5pt >CLICK HERE TO GO BACK TO HOME PAGE</a>";
}
else{
?>


<form method="post" action ="packins.php">
<table align ="center" cellpadding="5">
<tr>
<td><font size = 5>p_id :</font></td>
<td><input type="text" name="p_id" id="p_id" required="required" ></td>
</tr>

<tr>
<td><font size = 5>p_name :</font></td>
<td><input type="text" name="p_name" id="p_name"required="required" ></td>
</tr>

<tr>
<td><font size = 5>price:</font></td>
<td><input type="text" name="price" id="price"required="required" ></td>
</tr>


<tr>
<td><font size = 5>places:</font></td>
<td><input type="text" name="places" id="places" required="required"></td>
</tr>
<tr>
<td><font size = 5>rating :</font></td>
<td><input type="text" name="rating" id="rating" required="required"></td>
</tr>

<tr>
<td><font size = 5>departuredate :</font></td>
<td><input type="text" name="departuredate" id="departuredate" required="required"></td>
</tr>

<tr>
<td><font size = 5>arrivaldate :</font></td>
<td><input type="text" name="arrivaldate" id="arrivaldate" required="required"></td>
</tr>

</tr>

</table>

<tr>
<br>
<center>
<td><font size = 5><input type="submit" size="10" align ="center" name="add" id="add" value="insert" ></font></td>
</tr>
</center>




</form>
<?php
}
?> 

