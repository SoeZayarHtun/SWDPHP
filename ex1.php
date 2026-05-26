<?php
$num = 4 ;

if($num % 2 == 0){
 echo "$num ,it is even";
}else{
echo " $num ,it is odd";
}
echo "<br>";

//Factorial
function factorial($n) {
    $fact = 1;
    for($i= 1;$i <= $n; $i++){
         $fact *= $i;
    }
    return $fact;
}

// Example usage:
$n = 5;
echo "Factorial of $n is " . factorial($n);


echo "<br>";
?>

<!-- // function default value -->
<?php
 function greeting($name = "Guest"){
    return "Hello $name";
 }
 $result  = greeting("Jone");
 
echo $result;

//scope(local,global)


echo "<br>";

?>


<?php
//Array
//1.indexed Array
//2. Associated Array
//3. Mutidimensional Array


// 1.Indexed Array

$fruit = array("apple", "Orange" , "Grap");
echo $fruit[0];

//Foreach
        // array as variable
foreach($fruit as $a){
    echo "<br>";
    echo $a;
}


//2.asssociated array
$person = array(
    "name" => "jone",
    "age"  => "30",
    "city" => "New York",
);

// for each loop 
foreach($person as $key => $value){
    echo "<br>";
    echo $key . ":" . $value;
}
echo "<br>";
echo "<br>";
?>

<?php
    echo "Exam grade";
    $mark = array(
        "Aung" => 90,
        "kyaw kyaw" => 60,
        "Hla Hla" => 30,
    );
    foreach($mark as $key => $value){
        if($value >= 50){
            echo "<br>";
            echo $key . " is  D";
        }else{
            echo "<br>";
            echo $key . " is Failed";
        }
    }
?>

<?php
    // multidimesional Array
    $user = array(
        array("name" => "Aung Aung", "age" => 30 , "city" => "Yangon"),
        array("name" => "Kyaw Kyaw", "age" => 40 , "city" => "Yangon"),
        array("name" => "Aung Aung", "age" => 30 , "city" => "Yangon")
        
    );

    foreach($user as $user){
        echo "<br>";
        echo $user["name"] . "," . $user ["age"] . "," .$user["city"];
    }
?>










