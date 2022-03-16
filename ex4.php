<?php

define("CONTADOR", 10);
function cuentaEscondite(){
    for ($i=2; $i<=CONTADOR; $i+=2){
        echo "Número $i" . "<br>";
    }
}

cuentaEscondite(CONTADOR);

?>


<!-- No se pasar constante como parámetor función -->