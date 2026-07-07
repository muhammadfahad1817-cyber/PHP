<?php


if(isset($_POST["Loginbtn"])){

    $actualsername= "asp";
    $actualpassword= "aptech";

    $username= $_POST["username"] ?? "";
    $Password= $_POST["Password"] ?? "";

    if($username != "" && $Password != ""){
        if($username == $actualsername){
           if($Password == $actualpassword){
            echo "login successful";
           }else{
            echo "<script>alert('Invalid password')</script>";
           }
        }else{
            echo "<script>alert('Invalid username')</script>";
    }
        
      
    }else{
        echo "<script>alert('Enter Your Credential')</script>";
    }

}


?>