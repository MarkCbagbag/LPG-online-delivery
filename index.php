<?php
// Display record here...
require("connect.php");

//this is viewwing of records inside myql db

$result = mysqli_query($connection, 'SELECT * FROM user');


// these are record inside MYSQL
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<body>
    <form action="login.php" method="post">
    <h2>Sign in</h2>
        <label>Username</label>
        <input type="text" name="uname" autocomplet="off" required><br>
        <label>Password</label>
        <input type="Password" name="Password" autocomplet="off" required><br>
        <label> Dont have an account
            <a href="#"> register</a>
        </label><br><br>
        <button type="submit">Sign in</button>
    </form>
</body>
</html>