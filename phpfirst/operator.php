<?php
echo "<h1>operator</h1>";
echo "<hr>";
echo "<h2>Arithematic</h2>";

$num1 = 100;
$num2 = 200;

echo "Addition:" . $num1 + $num2 . "<br>";
echo "Subtraction:" . $num1 - $num2 . "<br>";
echo "Multiplication:" . $num1 * $num2 . "<br>";
echo "Division:" . $num1 / $num2 . "<br>";
echo "Reminder:" . $num1 % $num2 . "<br>";

echo "<hr>";
echo "<h2>Conditional</h2>";
echo "<hr>";

//conditon
// < , > , >= , <= , == , === , != , !== 
if($num1 < $num2){
    echo "true";
}else{
    echo "fales";
}

echo "<hr>";
echo "<h2>inc. and dic.</h2>";
echo "<hr>";

$num3 = 1;

$num3++;
echo $num3 . "<br>";

$num3--;
echo $num3 . "<br>";


echo "<hr>";
echo "<h2>logical</h2>";
echo "<hr>";

if($num1 > $num2 && $num1 < $num2){
echo "true";
}else{
    echo "fales";

}





?>