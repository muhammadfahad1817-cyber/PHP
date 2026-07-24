<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Student Records</h1>

    <?php
    include("dbconnection.php");

    $query = "SELECT * FROM Students";
    $rows = mysqli_query($connection, $query);
    $total_rows = mysqli_num_rows($rows);

    echo "<p class='total'>Total Students Found: <strong>$total_rows</strong></p>";

    if($total_rows == 0){
        echo "<p class='nodata'>No Data Found!</p>";
    }

    while($data = mysqli_fetch_assoc($rows)){
    ?>

    <div class="card">
        <h2><?php echo $data["Student_first_name"] . " " . $data["Student_last_name"]; ?></h2>

        <p><strong>ID:</strong> <?php echo $data["Student_id"]; ?></p>
        <p><strong>Education:</strong> <?php echo $data["Student_education"]; ?></p>
        <p><strong>Fees:</strong> Rs. <?php echo $data["Student_fees"]; ?></p>
        <p><strong>Course:</strong> <?php echo $data["Student_course"]; ?></p>
        <p><strong>Gender:</strong> <?php echo $data["Student_gender"]; ?></p>
        <p><strong>Age:</strong> <?php echo $data["Student_age"]; ?></p>
    </div>

    <?php } ?>

</div>

</body>
</html>