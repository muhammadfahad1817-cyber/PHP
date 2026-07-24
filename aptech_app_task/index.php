<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <center><h1 style>All Students</h1>
  <button><a href = "form.php">Add Students</a></button></center>
  <hr>

    <?php
    include("dbconnection.php");

    $query = "SELECT * FROM students";

    $rows = mysqli_query($connection, $query);  // format: SQL FORM (Garbage)

    $total_rows = mysqli_num_rows($rows);

    echo "Total Students Found: " . $total_rows . "<br>";

    if($total_rows != 0){
        ?>
        <table border="1" align="center">
            <tr>
                <th>StudentID</th>
                <th>Name</th>
                <th>Education</th>
                <th>Fees</th>
                <th>Faculty</th>
                <th>course</th>
                <th colspan="2">Actions</th>
            </tr>
        <?php
        while($data = mysqli_fetch_assoc($rows)){
        echo "<tr>
        <td>".$data["StudentID"]."</td>
        <td>".$data["Name"]."</td>
        <td>".$data["Education"]."</td>
        <td>".$data["Fees"]."</td>
        <td>".$data["Faculty"]."</td>
        <td>".$data["course"]."</td>
        <td><a href='update.php?id=$data[StudentID]'>Edit</a></td>
        <td><a href='delete.php?id=$data[StudentID]'>Delete</a></td>
        </tr>";
    }
    }else{
        echo "No Data";
    }
    ?>
</table>
</body>
</html>