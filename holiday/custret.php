<html>
<head><title>update</title></head>
<body>
<?php
if(isset($_POST['update']))
{
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
die('could not connect');
}
$p_id=$_POST['p_id'];
$places=$_POST['places'];
$sql="update package set places='$places' where p_id='$p_id'";
mysql_select_db('holiday tours');
$ret=mysql_query($sql,$conn);
if(!$ret)
{
  die('could not update data:');
}
echo "updated successfully\n";
echo "<a href='view.php'>view record</a>";
mysql_close($conn);
}
else
{
?>
<form method="post" action="">
<table width "400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">package id</td>
<td><input name="p_id" type="text" id="p_id"></td>
</tr>

<tr>
<td width="100">places</td>
<td><input name="places" type="text" id="places"></td>
</tr>
<tr>
<td width="100"></td>
<td></td>
</tr>
<td width="100"></td>
<td>
<input name="update" type="submit" id="update" value="UPDATE">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>