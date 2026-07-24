<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Student</h1>
    <hr><br>

    <form action="insert.php" method="post" enctype="multipart/form-data">
        <label for="">Student Name: </label>
        <input type="text" name="name" id=""> <br><br>

        <label for="">Student gender: </label>
        <select name="gender" id="">
            <option value="select">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>

        <label for="">Student age: </label>
        <input type="text" name="age" id=""> <br><br>

        <label for="">Student education: </label>
        <input type="text" name="education" id=""> <br><br>

        <label for="">Student Image: </label>
        <input type="file" name="profile"><br><br>

        <button type="submit" name="createbtn">Save Student</button>


    </form>
</body>
</html>