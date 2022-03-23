<?php
//Versión comandos de consola. En el visual no se ejecuta el programa, pero en el terminal de Git si. Mi no entender
$totalCarrito = 0;

do {
    $optionMenu = readline("<p>Indica amb un númro del 0 al 3 l'article que vols afegir al carret:<br>1) Xocolata<br>2) Xiclet<br>3) Carmel<br>0) Finalitzar compra<br></p>");
    switch ($optionMenu) {
        case 1:
            addXocolata();
            break;
        case 2:
            addXiclet();
            break;
        case 3:
            addCarmel();
            break;
        default:
        if (numCorrecto($optionMenu) == false){
            echo "El valor introduït no correspon amb cap opció del menú";
        }
    }
} while ($optionMenu != 0);
echo "El total de la seva compra és: $totalCarrito";

//Declaro las variables de los subtotales y el total y las inicializo a 0.
$totalCarrito = 0;
$totalXocolata = 0;
$totalXiclet = 0;
$totalCarmel = 0;


//añadir precio chocolatina
function addXocolata(){
    global $totalCarrito; //Accedo a la variable $totalCarrito ubicada fuera de la fnc
    global $totalXocolata; //Accedo a la variable $totalXocolata ubicada fuera de la fnc
    $xocolata = 1;
    $totalCarrito += $xocolata; //Cada vez que ejecute la fnc addXocolata, añado a la varible global $totalCarrito el precio de éste producto
}
//añadir precio chicle
function addXiclet(){
    global $totalCarrito;
    $xiclet = 0.5;
    $totalCarrito += $xiclet;
}
//añadir precio caramelo
function addCarmel(){
    global $totalCarrito;
    $carmel = 1.5;
    $totalCarrito += $carmel;
}

//Comprobar si selecciona num entre 0 y 3
function numCorrecto($num){
    $correcto = false;
    if ($num>=0 && $num<=3){
        $correcto = true;
    }
    return $correcto;
}

/*
otra manera de hacerlo es creando una funció para cada producto que al terminar no resetee el valor del producto,
sinó que vaya generando un acumulado.
Hará falta un a4ta fnc que se encargue de añadir los acumulados de cada producto a un Total

//añadir precio producto //repetir esta fnc x cada producto
function addXocolata(){
    static $xocolata = 0; //variable static para que al terminar la fnc no se resetee su valor y vaya generando un acumulado del producto
    $xocolata ++;
}
*/
?>
