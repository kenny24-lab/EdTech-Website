<?php
include("connection.php");
session_start();
if(!isset($_SESSION['username'])){
   header("location: login.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
<body>

    <table border="2" class="table table-hover table-rounded table-striped">
      <thead class="table-dark">
         <tr>
           <th>Course ID</th>
           <th>Course Name</th>
           <th>Period</th>
           <th>Date</th>
           <th>Action</th>
         </tr>
      </thead>
    
     <tbody>
      <?php   
      include("connection.php");
      $select=mysqli_query($conn,"select * from course");
      while($row=mysqli_fetch_array($select)){
        ?>

        <tr>
            <td><?php echo $row['c_id']; ?></td>
            <td><?php echo $row['c_name']; ?></td>
            <td><?php echo $row['period']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td>
                <a href="delete.php?id=<?php echo $row['c_id']; ?>" onclick="return confirm('Are you sure you want to delete this course?')"><i class="fa-solid fa-trash"></i></a>
                <a href="edit.php?id=<?php echo $row['c_id']; ?>"><i class="fa-solid fa-edit"></i></a>
            </td>
        </tr>
        
        <?php
      }
      ?>
    </tbody>
    </table>




</body>
</html>