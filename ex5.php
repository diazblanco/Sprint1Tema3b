<?php
    // $nota = readline ("Introduce la nota");
    // echo $nota;

    $nota = rand(0,100);
    
    if ($nota <33){
        echo "Has suspés";
    } elseif ($nota<=44){
        echo "El teu grau és: Tercera Divisió";
    } elseif ($nota<= 59){
        echo "El teu grau és: Segona Divisió";
    } elseif ($nota>=60){
        echo "El teu grau és: Primera Divisió";
    }
?>