<?php
include("config.php");
$id = $_GET['id'];
$result = "DELETE FROM practice WHERE id=$id";

if ($conn->query($result) === TRUE)
header("Location:index.php");
?>