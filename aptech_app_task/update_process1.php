<?php
include("dbconnection.php");

if(isset($_POST["updatestudents"])){
    $id = $_POST["id"];
    $Name = $_POST["Name"];
    $Education = $_POST["Education"];
    $Fees = $_POST["Fees"];
    $Faculty = $_POST["Faculty"];
    $course = $_POST["course"];


    $query = "UPDATE students SET
    Name = '$Name',
    Education = '$Education',
    Fees = '$Fees',
    Faculty = '$Faculty',
    course = '$course'
    WHERE
    StudentID = '$id'";

    $run = mysqli_query($connection, $query);
 
    if($run){
        echo "<script>alert ('Data Inserted Successfully')
        window.location.href = 'index.php' </script>";
    }else{
        echo "do not updated";
    }



}
?>