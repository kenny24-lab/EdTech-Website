<?php
include("connection.php");
$id=$_GET['id'];
mysqli_query($conn,"delete from course where c_id='$id'");
header("location:select.php");



?>