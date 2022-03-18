<?php

$costFixe = 10;
$costMinAdicional = 5;

function costTrucada($tempsTrucada){
    global $costFixe;
    global $costMinAdicional;

    if ($tempsTrucada <=3){
        echo "La trucada realitzada té un cost de $costFixe cèntims";
    }else{
        $minutsAdicional=0;
        for($i=4; $i<=$tempsTrucada; $i++){
             $minutsAdicional += 1;
        }
        echo "La trucada realitzada té un cost de " . $costFixe + ($minutsAdicional * $costMinAdicional) . " cèntims";
    }
}
    costTrucada(6);
?>

<!-- En este programa que sólo pide una función que calcule el coste de llamada,
podríamos declarar las varaibles dentro de la función y no haría falta acceder
a ellas de forma global. Pero en un caso real podría ser que el dato del coste fijo
y del minuto adicional fuese necesario para otros cálculos, así que lo declaro fuera -->