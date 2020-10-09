<html>
<body>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'holiday tours');
$sql="DELETE FROM employee WHERE e_id='$_GET[e_id]'";
if(mysqli_query($con,$sql))
header("refresh:1;url=deleteemployee.php");
else
echo"not deleted";
?>
<a href="employee.html">return</a>

</body>
</html>