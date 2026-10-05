```php
<?php
include("connection.php");

$id = $_GET['id'];

$select = mysqli_query($conn, "SELECT * FROM course WHERE c_id='$id'");
$row = mysqli_fetch_array($select);

if (isset($_POST['update'])) {
    $c_name = $_POST['c_name'];
    $period = $_POST['period'];
    $date = $_POST['date'];

    mysqli_query($conn, "UPDATE course SET c_name='$c_name', period='$period', date='$date' WHERE c_id='$id'");

    header("Location: select.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>

    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Edit Course</h4>
                </div>

                <div class="card-body">

                    <form method="POST">

                        <div class="mb-3">
                            <label class="form-label">Course Name</label>
                            <input type="text"
                                   name="c_name"
                                   class="form-control"
                                   value="<?php echo $row['c_name']; ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Period</label>
                            <input type="text"
                                   name="period"
                                   class="form-control"
                                   value="<?php echo $row['period']; ?>">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="date"
                                   name="date"
                                   class="form-control"
                                   value="<?php echo $row['date']; ?>">
                        </div>

                        <button type="submit" name="update" class="btn btn-primary" onclick="return confirm('Are you sure you want to edit this id ?')">
                            Update
                        </button>

                        <a href="select.php" class="btn btn-secondary">
                            Cancel
                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
```
