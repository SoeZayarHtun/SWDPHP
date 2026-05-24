

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="login_form.php" method="post">

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required> <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required> <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>


<?php
//collect data from form
if($_SERVER["REQUEST_METHOD"] == "POST" ){
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    //validate form data 
    if($username === "admin" && $password === "1234"){
        //login successfull
        session_start();
        $_SESSION["login"] = true ;
        $_SESSION['username'] = $username;
        header("location: profile.php");
        exit();
    }else{
        //login Failed
        $error = "Login failed.";
    }
}
?>

  <?php
    // Show error if login failed
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>