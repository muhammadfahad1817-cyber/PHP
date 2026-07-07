<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // arrays
    echo "<h1>Arrays</h1>";
    echo "<hr>";

// define
//                      element
$fruits = array("Apple", "Mango", "PineApple");
 //             0        1             2

// Access single element
// array-name [index]

echo $fruits[2];

echo "<br>";

// Accessing all elements

foreach($fruits as $fruit ){
    echo "$fruit <br>";
}
// Associative Arrays
echo "<hr>";
echo "<h2>Associative Arrays</h2>";
echo "<h3>Store values in key:value pair</h3>";
echo "<hr>";

$student = array(
    "Name" => "Ali",
    "Age" => 21,
    "City" => "Karachi"
);

echo $student["Name"];
echo "<br>";

// Accessing all element

foreach($student as $key => $value){
    echo "$key: $value <br>";
}


echo "<hr>";
echo "<h2>Multidimensional Arrays</h2>";
echo "<h3>Array inn array</h3>";
echo "<hr>";


$students = array(
   //   0     1      2  
array("Ali", 21, "Karachi"), // 0
array("Ahmed", 22, "lahore"), // 1
array("Aliyan", 23, "islamabad") // 2
);

// Access single ellement
echo $students[0][0];
echo "<br>";

// Access all element

foreach($students as $student){
    foreach($student as $detail){
        echo " $detail ";
    }
    echo "<br>";
}



?>
</html>