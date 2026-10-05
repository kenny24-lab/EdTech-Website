<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/bootstrap.css">
<body>
    <form action="" method="POST">
<div class="container mt-5">
 <div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card shadow">
      <div class="card-header bg-success">
        <h1>Create Account</h1>

      </div>
        
      <div class="card-body"></div>
      <input type="text" name="username" placeholder="Enter your username" class="form-control"><br>
      <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>
      <button type="submit" name="register" class="btn btn-primary">Register</button> <br>
      <button type="reset" name="cancel" class="btn btn-warning">Cancel</button>
    </div>


</div>
</div>

</div>


    </form>
</body>
</html>

<?php
  include("connection.php");
  session_start();
  if(isset($_POST['register'])){
    $a=$_POST['username'];
    $b=$_POST['password'];
    $query=mysqli_query($conn,"insert into users values('','$a','$b')");
    header("location: login.php");

  }



?>