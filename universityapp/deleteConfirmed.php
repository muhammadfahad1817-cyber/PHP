<?php
//we have to read student by given id
//to get its imageurl
//to delete an image from server
include("dbconnection.php");

$id = $_GET["id"];

$query = "SELECT * FROM students WHERE id = '$id'";

$row = mysqli_query($connection, $query);

$data = mysqli_fetch_assoc($row);

// print_r($data);

unlink($data["imageurl"]);

$query2 = "DELETE FROM students WHERE id = '$id'";

$run = mysqli_query($connection, $query2);

if($run){
    echo "<script>alert('Student Deleted')
        window.location.href = 'index.php'
        </script>";
}else{
    echo "Data not deleted";
}

?>