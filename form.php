<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action ="form.php" method ="post">
        <label for="name">Name: </label>
        <input type="text" placeholder="Mg Mg" id="name" name="name"> <br>
        <label for="age">Age: </label>
        <input type="number" placeholder="18" id="age" name="age"><br>
        <label for="city">City: </label>
        <input type="text" placeholder="example - Dawei " id="city" name="city"><br>
        <button>Submit</button>
    </form>

    <hr>
</body>
</html>


<?php
//key take from Url bar
    if(isset($_GET["number"])){
        $number = $_GET["number"];
        echo "Number : $number";
        echo "<br>";
    }
?>


<?php
//Ms Go Post
// defult variable 
// $_SERVER
// $_POST

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST["name"]);
    $age = htmlspecialchars($_POST["age"]);
    $city = htmlspecialchars($_POST["city"]);
    echo "Name : $name <br>";
    echo "Age : $age <br>";
    echo "City : $city <br>";
}else{
    echo " Data is not submitted.";
}

?>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = htmlspecialchars($_POST["name"]);
        $age = htmlspecialchars($_POST["age"]);
        $city =htmlspecialchars($_POST["city"]);

        echo "Name : $name <br>";
        echo "Age : $age <br>";
        echo "City : $city <br>";
    }else{
        echo "Data is not Found";
    }
?>





























