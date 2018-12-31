<?php
include('config.php');
$sel="select * from practice order by id DESC";
?>
<html>
<head>
<title>Main page</title>
<head>
<body>
<a href="form.php">Add New Data</a>
<table width='30%' border=0>
<tr bgcolor='#40bf80'>
<td>Name</td>
<td>Email</td>
<td>Age</td>
<td colspan="2">Update</td>

</tr>
<?php 
$result= $conn->query($sel);
if($result->num_rows > 0) 
{
while($row = $result->fetch_assoc())
{
	echo "<tr>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['age']."</td>";
	echo "<td><a href='edit.php?id=$row[id]'>Edit</a> | <a href='delete.php?id=$row[id]'>Delete</a></td>";
}
}
?>
</table>
</body>
</html>