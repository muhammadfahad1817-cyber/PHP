<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   if( isset( $_POST["loginbtn"])){
    $actualusername = "asp";
    $actualpassword = "1234";

    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ??"";

    if($username !=  "" && $password != ""){
        if($username == $actualUsername){
            if($password == $actualPassword){

                echo"<script>alert('login sucessfull')</script>";
                echo"welcome $username" ;
            }else{
                echo"<script>alert('enter your valid PASSWORD')</script>";
            }else{
            echo"<script>alert('enter your valid usernmae')</script>";
    }
        }
        
    }else{
               echo"<script>alert('enter your valid info')</script>";
    }

}
   

    ?>
</body>
</html>