<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Students</h1>
    <hr>

    <?php
    include("dbconnection.php");
    $id = $_GET ["id"];

    $query = "SELECT * FROM students WHERE StudentID = '$id'";

    $row = mysqli_query($connection, $query); // garbage form

    $data = mysqli_fetch_assoc($row); // associative array

    // print_r($data);

    // echo $data["employees_id"] . "<br>";
    // echo $data["employees_first_name"] . "<br>";
    // echo $data["employees_LAST_name"] . "<br>";
    // echo $data["employees_age"] . "<br>";
    // echo $data["employees_designation"] . "<br>";
    // echo $data["employees_salary"] . "<br>";
    ?>

<form action="update_process1.php" method="post">

    <input type="hidden" name="id" value="<?php echo $data["StudentID"]?>">

        <label for="">Name: </label>
        <input type="text" name="Name" id="" value="<?php echo $data["Name"]?>">
        <br>

        <label for="">Education: </label>
        <input type="text" name="Education" id="" value="<?php echo $data["Education"]?>">
        <br>

        <label for="">Fees: </label>
        <input type="text" name="Fees" id="" value="<?php echo $data["Fees"]?>">
        <br>

        <label for="">Faculty: </label>
        <input type="text" name="Faculty" id="" value="<?php echo $data["Faculty"]?>">
        <br>

        <label for="">course: </label>
        <input type="text" name="course" id="" value="<?php echo $data["course"]?>">
        <br>

        <button type="submit" name="updatestudents">Update Students</button>
    </form>
</body>
</html>