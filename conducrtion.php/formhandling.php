<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form handling </title>
</head>
<body>
    <h1>form handling </h1>
    <hr> 
    <form action="formhandling2.php" method= "get"> 
        <br>
        <div>
            <label for="">Name :</label>
            <input type="text"  name= "name">
        </div>
        <br>
        <div>
            <label for="">Age :</label>
            <input type="age"  name= "age" >
        </div>
        <br>
        <div>
            <label for="">Email :</label>
            <input type="email" name="email" >
        </div>
        <br>
        <div>
            <label for="">City :</label>
            <input type="text" name="city" >
        </div>
        <br>
        <div>
            <label for="">Gander :</label>
            <input type="radio" name= "gander" value= "male">
            <label for="">Male </label>
            <input type="radio" name= "gander" value= "female">
            <label for="">female </label>
        </div>
        <br><br>
        <button type ="submit" name = "submitbtn">
            submit
        </button>

        </form>

        
           
</body>
</html>