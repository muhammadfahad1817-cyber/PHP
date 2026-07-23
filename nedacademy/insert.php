<?php

include("dbconnection.php");

if(isset($_POST["savestudent"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $education = $_POST["education"];
    $fees = $_POST["fees"];
    $course = $_POST["course"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];

    $query = "INSERT INTO students
    (student_first_name, student_last_name, student_education, student_fees, student_course, student_gender, student_age)
    VALUES
    ('$firstname', '$lastname', '$education', '$fees', '$course', '$gender', '$age')";

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