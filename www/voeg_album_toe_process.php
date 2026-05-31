<?php

require 'database.php';

if (isset($_POST['$naam']) && !empty($_POST['$naam'])) {
    $naam = $_POST['naam'];

    if (strlen($naam) > 1) {
        $melding = urlencode('de naam mag niet groter zijn dan 100 karakters');
        exit;
    }
} else {
    $melding = urlencode('er moet een naam in gevuld zijn');
    exit;
}
echo "h";

if (!empty($melding)) {
    header("location: maak_les.php?melding=$melding");
    exit;
}

