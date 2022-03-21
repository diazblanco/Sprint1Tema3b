<?php

function cuentaEscondite($contador = 10){ //parámetro por defecto
    for ($i=2; $i<=$contador; $i+=2){
        echo "Número $i" . "<br>";
    }
}
cuentaEscondite();



?>
