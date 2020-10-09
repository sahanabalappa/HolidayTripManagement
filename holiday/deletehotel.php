<html>
<head>
<title>delete hotel record</title>
</head>
<body>
<table border=1>
<tr>
<th>h_id</th>
<th>h_name</th>
<th>address</th>
<th>rating</th>
<th>delete</th>
</tr>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'holiday tours');
$sql="SELECT * FROM hotel";
$records=mysqli_query($con,$sql);


while($row=mysqli_fetch_array($records))
{
   echo"<tr>";
   echo"<td>".$row['h_id']."</td>";
   echo"<td>".$row['h_name']."</td>";
   echo"<td>".$row['address']."</td>";
   echo"<td>".$row['rating']."</td>";
   echo"<td><a href=delhotel.php?h_id=".$row['h_id']." >delete</a></td>";
   echo"</tr>";
}
?>
<h3><a href="hotel.html">return</a></h3>
</table>
</body>
<html>