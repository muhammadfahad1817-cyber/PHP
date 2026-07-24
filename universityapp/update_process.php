<?php
if(isset($_POST["updatebtn"])){
  $id = $_POST["id"];
  $name = $_POST["name"];
  $gender = $_POST["gender"];
  $age = $_POST["age"];
  $education = $_POST["education"];

  $newImage = $_FILES["profile"];

 $newImageName = $newImage["name"];
 $newImageSize = $newImage["size"];
 $newImageType = $newImage["type"];
 $newImageTemp = $newImage["tmp_name"];
}

?>