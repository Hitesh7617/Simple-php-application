<?php
include('config.php');
?>
<html>
<head>
  <title>Insert Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form class="form-inline" action="form.php" method="post">
<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <br>
  <br>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <br>
  <br>
  <div class="form-group">
    <label for="age">Age:</label>
    <input type="text" class="form-control" name="age" id="age">
  </div>
  <br>
  <br>
  <input type="submit" name="submit" value="submit">
</form>
</body>