<?php

        $age = 20;
        $name = "Mg Mg"; 
    function greeting(string $name , int $age) : string{
        

        if ($age < 18 ){
            return "Mingalarpar  $name ($age)";
        }else{
            return "Hello $name ($age)";
        }
    }

    echo  greeting($name,$age);
?>