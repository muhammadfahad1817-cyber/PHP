<?php
include("dbconnection.php");

$id = $_GET["id"];

$query = "DELETE FROM students where StudentID = '$id'";

$run = mysqli_query($connection,$query);

if($run){
    echo "<script>alert ('Data Deleted Successfully')
    window.location.href = 'index.php'</script>";
}else{
    echo "do not Deleted";
}




?>