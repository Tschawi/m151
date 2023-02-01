<?php
    $anzahl_aufrufe = 1;
    session_start();
    

    if (isset($_SESSION['anzahl_aufrufe'])) {
        $anzahl_aufrufe = $_SESSION['anzahl_aufrufe'];
    }
    echo "Die Seite wurde {$anzahl_aufrufe}x aufgerufen.";
    $anzahl_aufrufe++;
    $_SESSION['anzahl_aufrufe'] = $anzahl_aufrufe
?>