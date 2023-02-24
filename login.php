<?php

include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    session_start();
    $sql = "SELECT * FROM users_project WHERE username = '$username' AND passwo = '$password'";

    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) > 0){
        
        $data = mysqli_fetch_assoc($res);
        $_SESSION["user"] = $data;

        header("Location: project.php");

    } else {
        echo "Either Username or Password not Found";
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

        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="box">
            
            <input type="text" name="username" id="username" placeholder="Enter your Username or Email" required / >
 
            <input type="password" id="pw" name="pw" placeholder="Password"><br/>

            <input type="submit" value="Log In"><br/>
           
           <div class="hr"></div>
           <h3>New member?</h3>
           <a href="index.php"><input type="button" name="create" id="create" value="Sign Up"></a>
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