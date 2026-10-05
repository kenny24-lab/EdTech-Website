<?php

session_start();
include("connection.php");

?>



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
        <div class="card-header  bg-primary">
          <h1 class="text-center  text-white">Course Registration</h1>
        </div>

          <div class="card-body">
            <label for="c_name" class="form-label">Course Name</label>
            <input type="text" name="c_name" class="form-control" required>

            <label for="c_name" class="form-label">Course Period</label>
            <input type="text" name="period" class="form-control" required>

            <label for="c_name" class="form-label">Course Date</label>
            <input type="date" name="date" class="form-control" required> <br>
             <button type="submit" name="send" class="btn btn-danger">send</button>
              <button type="reset" name="cancel" class="btn btn-warning">Cancel</button>
              <button type="logout" name="logout" class="btn btn-danger"><a href="logout.php">Logout</a></button>

          </div>
        </div>
         </div>

        </div>
</div>
    </form>    
</body>
</html>

<?php
include("connection.php");

if(isset($_POST['send'])){
    $a=$_POST['c_name'];
    $b=$_POST['period'];
    $c=$_POST['date'];
$query=mysqli_query($conn,"insert into course values('','$a','$b','$c')");
header("location: select.php");


}
?>