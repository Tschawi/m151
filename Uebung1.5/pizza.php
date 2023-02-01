<?php
    $anzahl_aufrufe = 1;
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $zutaten = $_POST['zutat'];
    }
    
    if (isset($_SESSION['anzahl_aufrufe'])) {
          $anzahl_aufrufe = $_SESSION['anzahl_aufrufe'];
          $zutaten = $_SESSION['zutat'];
    }
        
        ?>
<h1>Pizza Bestellung</h1>
<ul>
    <?php
    echo("<li>{$zutat}</li>");
    ?>
</ul>
<form method="POST" action="?">
    <input type="text" name="zutat" placeholder="Mega geili Zutat(keine Ananas)" style="width: 250px;"/>
    <input type="submit" value="Hinzufügen" />
</form>