<?php
if(isset($_POST["loginbtn"])){
    //Assume -> DB
    $actualusername = "asp";
    $actualpassword = "aptech";


    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if($username != "" && $password != ""){
        if($username == $actualusername){
            if($password == $actualpassword){
                echo "login successful";
            }else{
                echo "<script>alert('Invalid password')</script>";         
            }
        }else{
            echo "<script>alert('Invalid username')</script>";     
        }
    }else{
       echo "<script>alert('Enter your credentials')</script>";
    }

    
}



?>