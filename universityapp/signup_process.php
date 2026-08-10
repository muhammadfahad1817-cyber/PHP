<?php
include("dbconnection.php");
if(isset($_POST["signupbtn"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    echo $username . "<br>";
    echo $email . "<br>";
    echo $password . "<br>"; //admin123 -> string

    //password -> convert -> hash
    //password_hash(string,algo);
    //algo -> PASSWORD_DEFAULT -> bycrypt
    //string -> algo -> hash
    //string -> bycrypt -> hash
    $hash_passowrd = password_hash($password,PASSWORD_DEFAULT);

    echo $hash_passowrd ."<br>";

    $query = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$hash_passowrd')";

    $run = mysqli_query($connection, $query);

    if($run){
        echo "<script> alert('User Created, Kindly Login.')
        window.location.href = 'login.php'
        </script>";
    }else{
        echo "Failed";
    }


}



?>