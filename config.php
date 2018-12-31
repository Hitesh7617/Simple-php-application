<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
$uname=$_POST['name'];
$uemail=$_POST['email'];
$uage=$_POST['age'];
$sel="insert into practice(name,email,age) values('$uname','$uemail','$uage')";
if ($conn->query($sel) === TRUE) 
{
echo "New Record Created";
} 
else 
{
echo "Try Again";
}
}
?>