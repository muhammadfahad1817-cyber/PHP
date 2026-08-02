<?php
session_start();
if(isset($_POST["loginbtn"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
}

// DB
$db_username = "ali";
$db_password = "admin123";

if($username == $db_username && $password == $db_password){
    // session variable -> create
    $_SESSION["username"] = $username;

    // php built in function -> from one file to another
    header("location:welcome.php");


}else{
    echo "Login failed";
}


?>