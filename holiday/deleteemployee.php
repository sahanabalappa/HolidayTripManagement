<html>
<head>
<title>delete employee record</title>
</head>
<body>
<table border=1>
<tr>
<th>e_id</th>
<th>e_name</th>
<th>phone</th>
<th>email_id</th>
<th>address</th>
<th>gender</th>
<th>salary</th>
<th>delete</th>
</tr>
<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'holiday tours');
$sql="SELECT * FROM employee";
$records=mysqli_query($con,$sql);


while($row=mysqli_fetch_array($records))
{
   echo"<tr>";
   echo"<td>".$row['e_id']."</td>";
   echo"<td>".$row['e_name']."</td>";
   echo"<td>".$row['phone']."</td>";
   echo"<td>".$row['email_id']."</td>";
   echo"<td>".$row['address']."</td>";
   echo"<td>".$row['gender']."</td>";
   echo"<td>".$row['salary']."</td>";
   echo"<td><a href=delemployee.php?e_id=".$row['e_id'].">delete</a></td>";
   echo"</tr>";
}
?>
<h3><a href="employee.html">return</a></h3>
</table>
</body>
<html>