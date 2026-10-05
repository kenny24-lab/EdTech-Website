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
        <h1 class="">Login Here</h1>

      </div>
        
      <div class="card-body"></div>
      <input type="text" name="username" placeholder="Enter your username" class="form-control"><br>
      <input type="password" name="password" placeholder="Enter your password" class="form-control"><br>
      <button type="submit" name="login" class="btn btn-primary">Login</button> <br>
      <button type="reset" name="cancel" class="btn btn-warning">Cancel</button><br>
      <a href="register.php">Register Here</a>
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
  if(isset($_POST['login'])){
    $w=$_POST['username'];
    $e=$_POST['password'];
    $select=mysqli_query($conn,"select * from users where username='$w' && password='$e'");
    if(mysqli_num_rows($select)>=1){
        
        $row=mysqli_fetch_array($select);

        $_SESSION['username']=$row['username'];
        $_SESSION['password']=$row['password'];
          header("location: course.php");
        exit();
    } else {
        echo"<script>alert('Please you don't have account, try to register!!');</script>";
    }


    }


  



?>