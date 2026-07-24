<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Update Employee</h1>
    <hr>

    <?php
    include("dbconnection.php");

    $id =  $_GET["id"];

    $query = "SELECT * FROM employees WHERE employees_id = '$id'";

    $row = mysqli_query($connection, $query); //garbage form

    $data = mysqli_fetch_assoc($row); //associtive array

    // print_r($data);
    
    //    echo $data["employees_id"]."<br>";
    //    echo $data["employees_first_name"]."<br>";
    //    echo $data["employees_last_name"]."<br>";
    //    echo $data["employees_age"]."<br>";
    //    echo $data["employees_designation"]."<br>";
    //    echo $data["employees_salary"]."<br>";
        
       
    ?>
    <form action="update_process.php" method="post">

        <input type="hidden" name="id" value="<?php echo $data["employees_id"]?>">

        <label for="">Employee First Name: </label>
        <input type="text" name="firstname" id="" value="<?php echo $data["employees_first_name"]?>">
        <br>

        <label for="">Employee Last Name: </label>
        <input type="text" name="lastname" id="" value="<?php echo $data["employees_last_name"]?>">
        <br>

        <label for="">Employee Age: </label>
        <input type="text" name="age" id="" value="<?php echo $data["employees_age"] ?>">
        <br>

        <label for="">Employee Designation: </label>
        <input type="text" name="designation" id="" value="<?php echo $data["employees_designation"] ?>">
        <bemployees_designationr> <br>

        <label for="">Employee Salary: </label>
        <input type="text" name="salary" id="" value="<?php echo $data["employees_salary"] ?>">
        <br>

        <button type="submit" name="updateemployee">update Employee</button>
    </form>
</body>
</html>