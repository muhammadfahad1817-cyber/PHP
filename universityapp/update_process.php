<?php
include("dbconnection.php");
if (isset($_POST["updatebtn"])) {
    $id = $_POST["id"]; //hidden -> user update
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $education = $_POST["education"];
    $oldimage = $_POST["oldimage"];

    $newImage = $_FILES["profile"];

    $newImageName = $newImage["name"];
    $newImageSize = $newImage["size"];
    $newImageType = $newImage["type"];
    $newImageTemp = $newImage["tmp_name"];

    $uploadFolder = "images/";
    //check if user uploaded an image
    if (is_uploaded_file($newImageTemp)) {
        //user new upload

        if ($newImageType == 'image/jpeg' || $newImageType == 'image/png' || $newImageType == 'image/jpg') {
            //check image size
            if ($newImageSize < 5000000) {
                unlink($oldimage);

                //image is correct
                $newImageName = time() . "_" . $newImageName; //to avoid conflicts

                //combine uploadfolder + newImageName
                $fullPath = $uploadFolder . $newImageName; //images/7567863475_image.png

                //query for DB
                $query = "UPDATE students SET
            name = '$name',
            age = '$age',
            education = '$education',
            gender = '$gender',
            imageurl = '$fullPath'
            WHERE
            id = '$id'";

                $run = mysqli_query($connection, $query);

                if ($run) {
                    move_uploaded_file($newImageTemp, $fullPath); // uploads given to our server
                    echo "<script>alert('Student Updated')
                        window.location.href = 'index.php'
                        </script>";
                } else {
                    echo "Data not Upadated.";
                }
            } else {
                echo "<script>alert('Image Should be less then 5MB')
        window.location.href = 'update.php?id=$id'
        </script>";
            }
        } else {
            echo "<script>alert('Image should be PNG, JPG, JPEG')
        window.location.href = 'update.php?id=$id'
        </script>";
        }
    } else {
        //user not uploaded an image
        
 //query for DB
                $query = "UPDATE students SET
            name = '$name',
            age = '$age',
            education = '$education',
            gender = '$gender'
            WHERE
            id = '$id'";

                $run = mysqli_query($connection, $query);

                if ($run) {
                    echo "<script>alert('Student Updated')
                        window.location.href = 'index.php'
                        </script>";
                } else {
                    echo "Data not Upadated.";
                }
    }
}
