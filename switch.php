<?php
$num = "*" ;
$a = 10;
$b = 2;

switch ($num) {
    case "+":
        echo $a + $b;
        break;

    case "-":
         echo $a - $b;
         break;

     case "*":
        echo $a * $b;
        break;

     case "/":
        echo $a / $b;
        break;

    default:
        echo "It is not number";
}

echo "<br>";

$grade = "F";
switch ($grade){
    case "A":
        echo " $grade ,It is excellent work.";
        break;

    case "B":
        echo " $grade ,It is good work.";
        break;
    
    case "C":
        echo " $grade ,It is Pass.";
        break;
    case "D":
        echo " $grade ,It is Fail.";
        break;
    default:
        echo "It is not Grade";
}   

echo "<br>";

$day = "1";
switch ($day){
    case "1":
        echo " It is monday.";
        break;
    case "2":
        echo " It is tue.";
        break;
    case "3":
        echo " It is wed.";
        break;
    case "4":
        echo " It is thu.";
        break;
    case "5":
        echo " It is fri.";
        break;
    case "6":
        echo " It is sat.";
        break;
    case "7":
        echo " It is Sunday.";
        break;
    default:
        echo "It is not day.";
}

echo "<br>";



$Calculator = "+";
$c = 10;
$d = 5;
switch ($Calculator) {
    case "+":
        echo $c + $d;
        break;
    case "-":
         echo $c - $d;
         break;
     case "*":
        echo $c * $d;
        break;
     case "/":
        echo $c / $d;
        break;
    default:
        echo "It is not number";
}

echo "<br>";
$hi = 3;
switch ($hi) {
    case 1:
        echo "It is one";
        break;
    case 2:
        echo "It is two";
        break;
    case 3: 
        echo "It is three";
        break;
    default:
        echo "It is not number";
}
?>