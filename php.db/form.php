<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">
        <label for="">Employee First Name : </label>
        <input type="text" name ="firstname"><br><br>

        <label for="">Employee Last Name : </label>
        <input type="text" name ="lastname"><br><br>

        <label for="">Employee Age : </label>
        <input type="number" name ="age"><br><br>

        <label for="">Employee Designation : </label>
        <input type="text" name ="designation"><br><br>

        <label for="">Employee Salary : </label>
        <input type="number" name ="salary"><br><br>

        <button type= "submit" name = "insertemployee">add employee</button>
    </form>
</body>
</html>