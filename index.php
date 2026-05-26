<?php
echo " <h1> Hello world </h1> <br>";
//String , integer , float , boolean , array


$name = "Yan";
echo "Hello $name";

$age = 20;
echo "<br>";
echo "Hello $name , you are age $age years old?";

$height = 1.75;
echo "<br>";
echo "hello $name your height is $height meter talls";

$is_married = true;
echo "<br>";
echo "hello $name , are you $is_married ";

$hobbies = array("reading" , "writing" , "esport" , "coding");
echo "<br>";
echo "hello $name , are you interested in $hobbies[0] , $hobbies[2] , $hobbies[3] and  $hobbies[1]";

//control flow
//if ,else , elseif , switch



if($age < 18){
   
    echo "<br>";
    echo "you are not allowed to vote". $age;
}else{
    echo "<br>";
    echo "you are allowed to vote" . $age;
}

//loops
//while , do while , for

while($age < 18){
    echo "<br>";
    echo "you are allowed to vote";
    $age++;
}


for($i = 3 ; $i < 5; $i++){
    echo "<br>";
    echo "hello $name" ."<br>";
    
}

//function
//function name($paramenter){
//code
//}


//function
function sayHello($name){
echo "<br>";
echo "hello $name";
}
sayHello("jhon");
sayHello("Lee <br>");


//Php statement
//Variable and Data type
//Control flow
//loops
//Function

$name = "Yan";
echo $name;

$number = "7";
$result = sqrt($number);
echo "square root of $number is:" . $result . "<br>";


//swap
$a = 10;
$b = 20;
$temp = $a; //temp = 10 
$a = $b; //a = 20
$b = $temp; //b = 10
echo "<br>";
echo $a;
echo "<br>";
echo $b;
echo "<br>";

// check data type
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";

var_dump($height);
echo "<br>";
var_dump($is_married);
echo "<br>";
var_dump($hobbies);
echo "<br>";
?>

<html>
    