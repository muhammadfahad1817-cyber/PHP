<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Array Function</h1>";
    echo "<hr>";
    
    $fruits = array("Apple", "PineApple" ,"Mango");

    echo "<h1>Count</h1>";
    echo "<p>count the element in Array</p>";
    
    echo "Total fruits   " . count($fruits);
    
    echo "<h1>Array push</h1>";
    echo "<p>Add element in the last of Array</p>";
    
    Array_push($fruits,"Orange", "Banana");
    
    print_r($fruits);


    echo "<h1>Array pop</h1>";
    echo "<p>remove the element from last</p>";
    
    array_pop($fruits);
    print_r($fruits);
    
    echo "<h1>Array Shift</h1>";
    echo "<p>remove the element from first</p>";
    
    array_shift($fruits);
    print_r($fruits);
    
    echo "<h1>Array unShift</h1>";
    echo "<p>Add the element at the first</p>";
    
    array_unshift($fruits, "Apple");
    print_r($fruits);
    
    echo "<h1>In Array </h1>";
    echo "<p>check if value exists</p>";
    
    if (in_array("Mango", $fruits)){
        echo "mango is in the list";
    }
    
    echo "<h1>Array key and Array values</h1>";
    echo "<p>only work on associative Array</p>";
    
    $students =array("name"=>"Ali", "age"=>21, "city"=>"karachi");
    
   $array_of_keys = array_keys($students);
   $array_of_values = array_values($students);
   
   print_r($array_of_keys);
   echo "<br>";
   print_r($array_of_values);
   
   echo "<h1>Array merge</h1>";
   echo "<p>combine 2 arrays</p>";
   
   $a = array("red","green");
   $b = array("yellow","blue");
   
   $merged = array_merge($a,$b);
   print_r($merged);
   
   echo "<h1>sort and Rsort</h1>";
   echo "<p>Ascending and Descending</p>";

   $number = array(5,6,8,0,7);
   
   
   
   sort($number);
   echo "Ascending";
   print_r($number);
   
   echo"<br>";

   rsort($number);
   echo "descending";
   print_r($number);

   echo "<h1>Array combine</h1>";
   echo "<p>Only works with associative</p>";

   $key = array("name" ,"age","city");
   $values = array("yahya" ,21,"karachi");

   $combine = array_combine($key,$values);
   print_r($combine);



    
    
    
    
   
    ?>
</body>
</html>




