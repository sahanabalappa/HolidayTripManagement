<html>
<body>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'holiday tours');
$sql="DELETE FROM hotel WHERE h_id='$_GET[h_id]'";
if(mysqli_query($con,$sql))
header("refresh:1;url=deletehotel.php");
else
echo"not deleted";
?>
<h3><a href="index2.html">return</a></h3>

</body>
</html>