<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]) {
    echo "Welcome back! You are still logged in.";
} else {
    echo "You are not logged in.";
}
?>



<?php
session_start();
if ($_SESSION["loggedin"]) {
    echo "Welcome back, " . $_SESSION["username"];
} else {
    echo "Please log in first.";
}
?>
