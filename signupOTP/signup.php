<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Signup</h1>
    <hr>
    
    <form action="send_otp.php" method="post">

    <input type="text" name="username" placeholder="username" required> <br><br>
    <input type="email" name="email" placeholder="example@domain.com" required> <br><br>
    <input type="password" name="password" placeholder="password" required> <br><br>

<button type="submit" name="signupbtn">Signup</button>

    </form>
</body>
</html>