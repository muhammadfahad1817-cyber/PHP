<?php
include("dbconnection.php");

if(isset($_POST["saveemployee"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $designation = $_POST["designation"];
    $salary = $_POST["salary"];

    $query =  "INSERT INTO employees (employees_first_name, employees_last_name, employees_age, employees_designation, employees_salary)
    VALUES
    ('$firstname','$lastname', '$age', '$designation', '$salary')";

    $run = mysqli_query($connection, $query);

    if($run){
        echo "<script>
        alert('Data Inserted Successfully');
        window.location.href = 'index.php'
        </script>";
    }else{
        echo "Insertion failed";
    }



}


?>