<html>
<body bgcolor="grey">
<center>
<h1>INSERT DETAILS</h1>
<br>
<hr>
<?php
if(isset($_POST['add'])){
$con=mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('holiday tours') or die(mysql_error());
//$con=mysql_connect("localhost","root","","holiday tours") or die("cannot connect".mysql_error());
if($con)


echo "<br><br>";

$h_id=$_REQUEST['h_id'];
$h_name=$_REQUEST['h_name'];
$address=$_REQUEST['address'];
$rating=$_REQUEST['rating'];



$sql="INSERT INTO hotel (h_id,h_name,address,rating)VALUES('$h_id','$h_name','$address','$rating')";

$res=mysql_query($sql);
if(!$res)
{
   echo "not entered".mysql_error($con);
   
}
echo "<tr><th><font size = 5>DATA INSERTED SUCESSFULLY!!!</font></th></tr>";
echo "<br><br>";
echo "<a href=displayhot.php><font color = black size=5pt > CLICK TO VIEW RECORD</a>";
echo "<br><br>";
echo "<a href=hot.html> <font color = black size=5pt >CLICK HERE TO GO BACK TO HOME PAGE</a>";
}
else{
?>


<form method="post" action ="hotins.php">
<table align ="center" cellpadding="5">
<tr>
<td><font size = 5>h_id :</font></td>
<td><input type="text" name="h_id" id="h_id" required="required" ></td>
</tr>

<tr>
<td><font size = 5>h_name :</font></td>
<td><input type="text" name="h_name" id="h_name"required="required" ></td>
</tr>


<tr>
<td><font size = 5>address:</font></td>
<td><input type="text" name="address" id="address" required="required"></td>
</tr>
<tr>
<td><font size = 5>rating :</font></td>
<td><input type="text" name="rating" id="rating" required="required"></td>
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

