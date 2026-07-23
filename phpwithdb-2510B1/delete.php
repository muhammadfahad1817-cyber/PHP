<?php
include("dbconnection.php");

$id = $_GET["id"];

$query = "DELETE FROM employees WHERE employees_id = '$id'";

$run = mysqli_query($connection, $query);


if($run){
  echo "<script> alert ('Data deleted succesfully')
  window.location.href = 'index.php'
  
  
  
  </script>";
}else{
  echo "Not deleted";
}








?>