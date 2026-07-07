<?php
echo" hello to php !";

$age = 18 ;

if ($age >= 18){

echo "you are eligable to vote";

}

echo"<br>";

$mark = 40;
if ($mark >= 40){
    echo "pass";
}else{
    echo"fail";
}
echo"<br>";
echo"<br>";

if ($mark >= 80){
    echo "Grade A+ ";
}elseif($mark >=70){
    echo"Grade A";
}
elseif($mark >=60){
    echo"Grade B";
}
elseif($mark >=50){
    echo"Grade C";
}

elseif($mark >=40){
    echo"Grade D";
}
elseif($mark >=33){
    echo"Grade E";
}
else{
    echo"Grade F";
}

// NESTED IF ||||
$age = 20 ;
$Citizion = true ;

echo"<br>";
echo"<br>";

if($age >= 18 ){
    if($Citizion){
        echo "eligibale to vote cast ";
    }
}
echo"<br>";
echo"<br>";

$username = "admin";
$password = "12345";

if($username == "admin"){
    if($password == "12345"){
        echo"login succesfully";
    }else{
        echo"incrrect password";
    }
}else{
    echo"plz kindly inter correct username";
}



?>