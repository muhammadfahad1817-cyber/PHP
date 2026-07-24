<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Students</h1>
    <a href="form.php">Add A Student</a>
    <hr>

  

    <table align="center" border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Education</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Image</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        include("dbconnection.php");

        $query = "SELECT * FROM students";

        $rows = mysqli_query($connection, $query);

        $total_rows = mysqli_num_rows($rows);

        if($total_rows != 0){

           while( $data = mysqli_fetch_assoc($rows)){
                echo "<tr>
                <td>".$data["id"]."</td>
                <td>".$data["name"]."</td>
                <td>".$data["education"]."</td>
                <td>".$data["age"]."</td>
                <td>".$data["gender"]."</td>
                <td><img src='".$data["imageurl"]."' height='150' width='150' ></td>
                <td><a href='update.php?id=$data[id]'>Edit</a></td>
                <td><a href='delete.php?id=$data[id]'>Delete</a></td>
                </tr>";
           }

        }else{
            echo "No Data Found";
        }
        
        
        
        ?>
    </table>
</body>
</html>