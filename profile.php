<?php
 session_start();
    if(!isset($_SESSION["login"])){
        header("location: Login_form.php");
        exit();
    }else{
        $username = $_SESSION["username"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
</head>
<body>
        <h2>Profile</h2>
        <p>Username : <?= $username ?></p>
        <p>Your are logined!</p>
</body>
</html>