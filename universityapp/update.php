<?php
include("dbconnection.php");

$id = $_GET["id"];

$query = "SELECT * FROM students WHERE id = '$id'";

$row = mysqli_query($connection, $query);

$data = mysqli_fetch_assoc($row);

print_r($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Update Student</h1>
    <hr>
    <form action="update_process.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $data["id"]?>">

        <label for="">Student Name: </label>
        <input type="text" name="name" id="" value="<?php echo $data["name"]?>"> <br><br>

        <label for="">Student gender: </label>
        <select name="gender" id="">
            <?php 
            if($data["gender"] == "male"){
                echo "<option value='select'>Select Gender</option>
                <option value='male' selected>Male</option>
                <option value='female' >Female</option>";
            }else{
                echo "<option value='select'>Select Gender</option>
                <option value='male' >Male</option>
                <option value='female' selected>Female</option>";
            }
            ?>
           
        </select><br><br>

        <label for="">Student age: </label>
        <input type="text" name="age" id="" value="<?php echo $data["age"]?>"> <br><br>

        <label for="">Student education: </label>
        <input type="text" name="education" id="" value="<?php echo $data["education"]?>"> <br><br>

        <label for="">Student Old Image: </label>
        <img src="<?php echo $data["imageurl"]?>" alt="" height="150" width="150"> <br><br>

        <label for="">Student Image: </label>
        <input type="file" name="profile"><br><br>

        <input type="hidden" name="oldimage" value="<?php echo $data["imageurl"]?>">

        <button type="submit" name="updatebtn">Update Student</button>


    </form>
</body>

</html>