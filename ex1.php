<?php
$edad = 35;

// function calculaModulo ($edad){
//     global $edad;
//     return $modulNum = $edad % 2;
// }

// if (calculaModulo ($edad) == 0){
//     echo "El número $edad es par";
// } else {
//     echo "el número $edad no es par";
// }

function esPar ($edad){
    global $edad;
    if ($edad % 2 == 0){
        echo "El número $edad es par.";
    } else {
        echo "El número $edad no es par.";
    }
}

esPar($edad);


?>