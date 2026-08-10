<?php
include("dbconnection.php");

$id = $_GET["id"];

$query = "SELECT * FROM students WHERE id = '$id'";

$row = mysqli_query($connection, $query);

$data = mysqli_fetch_assoc($row);

// print_r($data);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Are You Sure?</h2>
    <hr>
    <img src="<?php echo $data["imageurl"]?>" alt="" height="150" >
    <p>You Want to delete <strong><?php echo $data["name"]?>.</strong></p>
    <a href="deleteConfirmed.php?id=<?php echo $data["id"]?>">Yes, Delete</a> <br><br>
    <a href="index.php">Cancel</a>
</body>
</html>