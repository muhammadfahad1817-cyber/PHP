<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add Employee</h1>
    <hr>

    <form action="insert.php" method="post">
        <label for="">Employee First Name: </label>
        <input type="text" name="firstname" id="">
        <br>

        <label for="">Employee Last Name: </label>
        <input type="text" name="lastname" id="">
        <br>

        <label for="">Employee Age: </label>
        <input type="text" name="age" id="">
        <br>

        <label for="">Employee Designation: </label>
        <input type="text" name="designation" id="">
        <br>

        <label for="">Employee Salary: </label>
        <input type="text" name="salary" id="">
        <br>

        <button type="submit" name="saveemployee">Save Employee</button>
    </form>
</body>
</html>