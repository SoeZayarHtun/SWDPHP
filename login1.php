<?php
session_start();
$_SESSION["loggedin"] = true;
echo "You are logged in now.";
?>


<?php
session_start();
$_SESSION["username"] = "Soe Zayar";
$_SESSION["loggedin"] = true;
echo "Hello, you are now logged in!";
?>
