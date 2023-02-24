<?php

include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users_project WHERE username = '$username' AND passwo = '$password'";

    $res = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($res);

    if($data["username"] == $username){

        echo "Username already exists";

    } else {
        $hashed_password = md5($password);

        $sql = "INSERT INTO users_project (username, email, passwo) VALUES ('$username', '$email', '$hashed_password')";
        mysqli_query($conn, $sql);

        header("Location: login.php");
    }
    
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome to Effective To-do List</title>

        <link rel="stylesheet" href="index.css" />
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="box">
            
            <input type="text" name="username" id="username" placeholder="Enter your Username" required / >
 
            <input type="email" name="email" id="email" placeholder="Enter your Email" required />

            <input type="password" id="pw" name="pw" placeholder="Password"><br/>

            <input type="submit" value="Register"><br/>
           
           <div class="hr"></div>
           <h3>Already a member?</h3>
           <a href="login.php"><input type="button" name="create" id="create" value="Login Here"></a>
        </div>
        <div class="words">
            <h1>Effective To-do List</h1><br/>
            <h3>Our program helps you to list down your daily <br/>
            to-do task and also has the ability to edit <br/>
            and erase any listed data at any moment.<br/>
            <br/>
            Created by:<br/>
            201424 - Nischal Tandukar<br/>
            201408 - Aryan Shrestha<br/>
            201412 - Darshan Shah Thakuri<br/>
            201419 - Md Irshad Raeen<br/>
        </h3>
        </div>
        </form>
    </body>
</html>