<?php
include("dbconnection.php");

if (isset($_POST["saveemployee"])) {

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $designation = $_POST["designation"];
    $salary = $_POST["salary"];

    $query = "INSERT INTO employees
    (employee_first_name, employee_last_name, employee_age, employee_designation, employee_salary)
    VALUES
    ('$firstname', '$lastname', '$age', '$designation', '$salary')";

    $run = mysqli_query($connection, $query);

    if ($run) {
  echo "<script>
        alert ('Data Inserted Succesfully');
        window.location.href = 'read.php'
        
        </script>";
    } else {
        echo "Insertion Failed: ";
    }
}
?>
