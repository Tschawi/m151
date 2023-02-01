<?php

    $resultat = 0;  

    $x = $_GET['x'];
    $x = intval($x);

    $y = $_GET['y'];
    $y = intval($y);

    $mode = $_GET['mode'];

    switch($mode){
        case "plus":
            $resultat = $x + $y;
            break;
        case "minus":
            $resultat = $x - $y;
            break;
        case "mal":
            $resultat = $x * $y;
            break;
        case "div":
            $resultat = $x / $y;
            break;
    }

    echo("Resultat = {$resultat}");

?>