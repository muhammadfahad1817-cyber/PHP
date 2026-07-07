<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if( isset( $_GET["submitbtn"])){
// help to get data url 
// echo"<hr>";


$name = $_GET["name"] ?? "";
$age = $_GET["age"] ??"";
$email = $_GET["email"] ??"";
$city = $_GET["city"] ??"";
$gander = $_GET["gander"] ??"";

 echo "<h2>Name : $name</h2>";
 echo "<h2>age : $age</h2>";
 echo "<h2>email : $email</h2>";
 echo "<h2>city : $city</h2>";
 echo "<h2>gander : $gander</h2>";
}
?>

</body>
</html>