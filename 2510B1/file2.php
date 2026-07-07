  <?php
        // echo "<br>";
        // //url data get
        // //syntax: $_GET["FieldAttribeName"]
        // echo $_GET["UserName"]. " Thankyou For Conatcting Us";

        if(isset($_GET["submitbtn"])){
            //store given value in local variable
            $username = $_GET["username"] ??  "";
            $age = $_GET["age"] ??  "";
            $email = $_GET["email"] ??  "";
            $city = $_GET["city"] ??  "";
            
            // print $username
            echo "<h2>Username: $username</h2>";
            echo "<h2>Age: $age</h2>";
            echo "<h2>City: $city</h2>";
            echo "<h2>email: $email</h2>";
        }

    ?>