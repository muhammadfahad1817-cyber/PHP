<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<h1>🎓 Student Registration</h1>

<form action="insert.php" method="post">

<div class="form-group">
<label>First Name</label>
<input type="text" name="firstname">
</div>

<div class="form-group">
<label>Last Name</label>
<input type="text" name="lastname">
</div>

<div class="form-group">
<label>Education</label>
<input type="text" name="education">
</div>

<div class="form-group">
<label>Fees</label>
<input type="text" name="fees">
</div>

<div class="form-group">
<label>Course</label>
<input type="text" name="course">
</div>

<div class="form-group">
<label>Gender</label>
<input type="text" name="gender">
</div>

<div class="form-group full">
<label>Age</label>
<input type="text" name="age">
</div>

<button type="submit" name="savestudent">
Save Student
</button>

</form>

</div>
</body>
</html>