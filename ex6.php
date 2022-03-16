<?php
    // function isBitten(){ 
    //     $numRandom = rand(0,100);
    //     $probabilidad = false;
    //     if ($numRandom <50){
    //         $probabilidad = true;
    //     }
    //     return "El num es $numRandom por lo tnato es $probabilidad";
    // }


    function isBitten(){ 
        $numRandom = rand(0,100);
        $probabilidad = "Avui en Charlie m'ha mossegat";
        if ($numRandom <50){
            $probabilidad = "Avui en Charlie no m'ha mossegat";
        }
        return $probabilidad;
    }
    echo isBitten();

?>