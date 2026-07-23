<?php
include("dbconnection.php");

if (isset($_POST["updateemployee"] ) ){
  $id = $_POST["id"];
  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $age=$_POST["age"];
  $designation=$_POST["designation"];
  $salary=$_POST["salary"];

  $query="UPDATE employees SET 
  employees_first_name = '$firstname',
  employees_last_name = '$lastname',
  employees_age = '$age',
  employees_designation = '$designation',
  employees_salary = '$salary'
  WHERE 
  employees_id = '$id'";

$run = mysqli_query($connection,$query );

if($run){
  echo "<script>
  alert('Data updated');
  window.location.href = 'index.php'
  </script>";
}else{
  echo "Data not updated ";
}

}
?>