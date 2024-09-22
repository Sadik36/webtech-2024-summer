<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div class="container">
        <h1>
            Login Page
        </h1>
        <form action="../Controllers/loginCheckController.php" method="post">
            <label>UserName : </label>
            <input type="text" name="username" placeholder="Enter your username"><br><br> 
            <label>Password : </label>
            <input type="password" name="password" placeholder="Enter your password"><br><br>
            <?php
            if(isset($_SESSION['Error']))
            {
                echo $_SESSION['Error'];
                unset($_SESSION['Error']);
            }
            ?>
            <button name="btn">Submit</button>
        </form><br><br>
        <h3>Not Registered Yet....<a href="registration.html">Click here</a></h3>
    </div>
</body>
</html>