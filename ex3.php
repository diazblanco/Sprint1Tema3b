<?php
// $contador = readline ("Introduce un número");

// function cuentaEscondite($contador){
//     global $contador;
//     for ($i=2; $i<=$contador; $i+=2){
//         echo "Número $i" . "<br>";
//     }
// }
// cuentaEscondite($contador);

$contador = 23;
function cuentaEscondite($contador){
    global $contador;
    for ($i=2; $i<=$contador; $i+=2){
        echo "Número $i" . "<br>";
    }
}
cuentaEscondite($contador);



?>