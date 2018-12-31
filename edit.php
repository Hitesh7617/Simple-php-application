<?php
include("config.php");
 
if(isset($_POST['update']))
{    
$id = $_POST['id'];
    
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];    
$sql = "UPDATE practice SET name='$name',email='$email',age='$age' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
}
header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];
$sql ="SELECT * FROM practice WHERE id='$id'";
$result= $conn->query($sql);
if($result->num_rows > 0) 
{
while($row = $result->fetch_assoc())
{
$name = $row['name'];
$age = $row['age'];
$email = $row['email'];
}
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="age" value="<?php echo $age;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>