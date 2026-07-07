<?php
// // variable
// $name  = "Ali Ahmed";

// //print
// echo $name;

//if
$age = 18;
if($age >= 18){
    echo "Eligible for Vote.";
}

echo "<br>";

//if else
$marks = 33;
if($marks >= 33){
    echo "Pass";
}else{
    echo "Fail";
}
echo "<br>";

//Grading -> if and elseif
if($marks >= 80){
    echo "A+";
}elseif ($marks >= 70){
    echo "A";
}elseif ($marks >= 60){
    echo "B";
}elseif ($marks >= 50){
    echo "C";
}elseif ($marks >= 40){
    echo "D";
}elseif ($marks >= 33){
    echo "E";
}else{
    echo "F";
}

echo "<br>";
//Nested IF
//if -> if

$age2 = 20;
$citizen = true;


if($age2 >= 18){
    if($citizen){
        echo "Eligible For Vote Cast.";
    }
}

echo "<br>";

$username = "admin";
$password = "12345";

if($username == "admin"){
    if($password == "1234"){
        echo "Login Successful.";
    }else{
        echo "Invalid Password";
    }
}else{
    echo "This user doesn't Exists.";
}





?>