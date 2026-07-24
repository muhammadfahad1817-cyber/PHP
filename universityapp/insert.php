<?php
include("dbconnection.php");

if(isset($_POST["createbtn"])){
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $education = $_POST["education"];

    $image = $_FILES["profile"]; //file info, format -> associative

    // print_r($image);
    $imageName = $image["name"];
    $imageType = $image["type"];
    $imageTemp = $image["tmp_name"];
    $imageSize = $image["size"];

    $uploadFolder = "images/";

    // echo $imageName . "<br>";
    // echo $imageType . "<br>";
    // echo $imageTemp . "<br>";
    // echo $imageSize . "<br>";


    if($imageType == 'image/jpeg' || $imageType == 'image/png' || $imageType == 'image/jpg'){
        //check image size
        if($imageSize < 5000000){
            //image is correct
            $newImageName = time() . "_" . $imageName; //to avoid conflicts

            //combine uploadfolder + newImageName
            $fullPath = $uploadFolder . $newImageName; //images/7567863475_image.png

            //query for DB
            $query = "INSERT INTO students(name, gender, age, education, imageurl)
            VALUES
            ('$name', '$gender', '$age', '$education', '$fullPath')";

            $run = mysqli_query($connection, $query);

            if($run){
                move_uploaded_file($imageTemp, $fullPath); // uploads given to our server
                   echo "<script>alert('Student Created')
                        window.location.href = 'index.php'
                        </script>";
            }else{
                echo "Data not Inserted.";
            }


        }else{
            echo "<script>alert('Image Should be less then 5MB')
        window.location.href = 'form.php'
        </script>";
        }
    }else{
        echo "<script>alert('Image should be PNG, JPG, JPEG')
        window.location.href = 'form.php'
        </script>";
    }
}


?>