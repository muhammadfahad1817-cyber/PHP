<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("dbconnection.php");
    $query = "SELECT * FROM employees";
    
   $rows = mysqli_query($connection, $query); //format : SQL FORM (Garbage)
   $total_rows = mysqli_num_rows($rows);
   echo "Total Employees Found :" . $total_rows . "<br>";

   if($total_rows !=0){
    echo "Data found";
   }else{
    echo "No Data";
   }

   //Data handle 
   //sql form -> key value
   //key value -> associative array

   // convertion mysqli_fetch_assoc

//    $data = mysqli_fetch_assoc($rows); //at a time single row convert
//    $data2 = mysqli_fetch_assoc($rows); //at a time single row convert

//    echo "<br>";
//    print_r($data);

   echo "<br>";
//    print_r($data2);

while($data = mysqli_fetch_assoc($rows)){

    // print_r($data);
    // echo "<br>";

    echo "ID: " . $data["employee_id"]. "<br>";
    echo "First name: " . $data["employee_first_name"]. "<br>";
    echo "Last name: " . $data["employee_last_name"]. "<br>";
    echo "Age: " . $data["employee_designation"]. "<br>";
    echo "Designation: " . $data["employee_salary"]. "<br>";
    echo "Salary: " . $data["employee_id"]. "<br>";
    echo "-------------------------------- <br>";

}
    
    ?>
</body>
</html>