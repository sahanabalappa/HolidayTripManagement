<html>
<body bgcolor="grey">
<center>
<h1>CUSTOMER INSERT</h1>
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

$c_id=$_REQUEST['c_id'];
$c_name=$_REQUEST['c_name'];
$address=$_REQUEST['address'];
$phone=$_REQUEST['phone'];
$email_id=$_REQUEST['email_id'];
$gender=$_REQUEST['gender'];



$sql="INSERT INTO customer (c_id,c_name,address,phone,email_id,gender)VALUES('$c_id','$c_name','$address','$phone','$email_id','$gender')";

$res=mysql_query($sql);
if(!$res)
{
   echo "not entered".mysql_error($con);
   
}
echo "<tr><th><font size = 5>DATA INSERTED SUCESSFULLY!!!</font></th></tr>";
echo "<br><br>";
echo "<a href=displaycust.php><font color = black size=5pt > CLICK TO VIEW RECORD</a>";
echo "<br><br>";
echo "<a href=cust.html> <font color = black size=5pt >CLICK HERE TO GO BACK TO HOME PAGE</a>";
}
else{
?>


<form method="post" action ="custins.php">
<table align ="center" cellpadding="5">
<tr>
<td><font size = 5>c_id :</font></td>
<td><input type="text" name="c_id" id="c_id" required="required" ></td>
</tr>

<tr>
<td><font size = 5>c_name :</font></td>
<td><input type="text" name="c_name" id="c_name"required="required" ></td>
</tr>

<tr>
<td><font size = 5>address:</font></td>
<td><input type="text" name="address" id="address"required="required" ></td>
</tr>


<tr>
<td><font size = 5>phone:</font></td>
<td><input type="text" name="phone" id="phone" required="required"></td>
</tr>
<tr>
<td><font size = 5>email_id :</font></td>
<td><input type="text" name="email_id" id="email_id" required="required"></td>
</tr>

<tr>
<td><font size = 5>gender :</font></td>
<td><input type="text" name="gender" id="gender" required="required"></td>
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

