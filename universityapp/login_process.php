<?php
session_start();

include("dbconnection.php");


if (isset($_POST["loginbtn"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];



    $query_select = "SELECT * FROM users WHERE  email = '$email' ";

    $row =  mysqli_query($connection, $query_select);

    $num_row = mysqli_num_rows($row);

    if ($num_row > 0) {
        //usre found

        $data = mysqli_fetch_assoc($row);

        if(password_verify($password, $data["password"])){

        $_SESSION["username"] = $data["username"];
               echo "<script>alert('login successful')
    window.location.href = 'index.php'
    </script>";

        }else{
             echo "<script>alert('incorrect password')
    window.location.href = 'login.php'
    </script>";
    }

        }



    } else {
        //user not found
        echo "<script>alert('User Not Found Kindly Sign Up')
    window.location.href = 'signup.php'
    </script>";
    }

