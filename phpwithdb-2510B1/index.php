<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>All Employees</h1>
<a href="form.php">Add Employee</a>
<hr>
    <?php
    include("dbconnection.php");

    $query = "SELECT * FROM employees";

    $rows = mysqli_query($connection, $query);  // format: SQL FORM (Garbage)

    $total_rows = mysqli_num_rows($rows);

    echo "Total Employess Found: " . $total_rows . "<br>";

    if($total_rows != 0){
        ?>
        <table border="1" align="center">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Designation</th>
                <th>Salary</th>
                <th colspan="2">Actions</th>
            </tr>
        <?php
        while($data = mysqli_fetch_assoc($rows)){
        echo "<tr>
        <td>".$data["employees_id"]."</td>
        <td>".$data["employees_first_name"]."</td>
        <td>".$data["employees_last_name"]."</td>
        <td>".$data["employees_age"]."</td>
        <td>".$data["employees_designation"]."</td>
        <td>".$data["employees_salary"]."</td>
        <td><a href='update.php?id=$data[employees_id]'>Edit</a></td>
        <td><a href='delete.php?id=$data[employees_id]'>Delete</a></td>
        </tr>";
    }
    }else{
        echo "No Data";
    }
    ?>
</table>
</body>
</html>