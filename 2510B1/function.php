<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Functions</h1>";
    echo "<p>Block of code .that can be reuse.</p>";
    echo "<hr>";
    echo "<h2>Built-in functions</h2>";
    echo "<p>predefined function ceated by php dev.</p>";

    echo "lower case: " . strtolower ("HELLO WORLD") ."<br>";
    echo "Upper case: " . strtoupper ("welcome") ."<br>";
    echo "current date: " . date("d-m-y") . "<br>";
    echo "string length: " . strlen("pakistan") . "<br>";
    echo "timestamp: " . time() . "Second(since 1970) <br>";

    echo "<hr>";
    echo "<h2>User Define functions</h2>";
    echo "<h3>Custom function</h3>";

    function greet(){
        echo "Welcome to PHP! <br>";
    }

    greet();
    greet();
    greet();
    greet();
    greet();

    function addnumber($a , $b=5){
        return $a + $b;
    } 

    $sum = addnumber(10,20); // 30
    echo $sum;
    echo "<br>";

    $sum1 = addnumber(100); // 105
    echo $sum1;
    echo "<br>";


    function incrementnumber (&$sum){
        $sum ++ ;
    }

    $x = 10;
    incrementnumber($x);
    echo $x;
    
    
    ?>
</body>
</html>