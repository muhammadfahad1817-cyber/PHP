<?php
include("dbconnection.php");

if(isset($_POST["savestudent"])){
    $Name = $_POST["name"];
    $Education = $_POST["education"];
    $fees = $_POST["fees"];
    $Feculty = $_POST["feculty"];
    $Course = $_POST["course"];

    $query =  "INSERT INTO students (Name, Education, Fees, Faculty, course)
    VALUES
    (' $Name',' $Education', ' $fees', '$Feculty', '$Course')";

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