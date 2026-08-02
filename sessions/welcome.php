<?php session_start();

if(isset($_SESSION["username"])){
    // session created -> login

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION["username"];?></h1>
    <a href="orders.php">Go to my orders</a>
</body>
</html>


<?php

}else{
//    session not created -> user not logged in
header("location:index.php");
}

?>