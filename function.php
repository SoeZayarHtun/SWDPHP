<?php
//function
function factorial($n){
    $fact = 1;
    for($i=1; $i <= $n ; $i++){
        $fact *= $i;
    }
    return $fact;
}

$n = 5;
echo "Factorial of $n is " . factorial($n);

echo "<br>";
//function type

function greeting(string $name){
    echo $name * 5;
    echo "Mingalarpar $name";
    return $name;
}
greeting("jhon");
greeting();
?>