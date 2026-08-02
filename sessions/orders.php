<?php session_start();

if(isset($_SESSION["username"])){
    // session created -> login

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_SESSION["username"];?>'s Orders</h1>
</body>
</html>

<?php

}else{
    echo "<script>
    alert('error') 
    window.location.href = 'index.php'</script>";
}