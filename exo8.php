<h2>Exercice 8</h2>

<?php

// VARIABLES
$nombre = 8;

// FONCTIONS
function generateMultiplicationTable($nombre) {
    $tableau = array();

    // Boucle pour calculer la table de multiplication de 1 à 10
    for ($i = 1; $i <= 10; $i++) {
        $resultat = $nombre * $i;
        $tableau[$i] = "$nombre x $i = $resultat";
    }

    return $tableau;
}

// AFFICHAGE
echo "Table de multiplication de $nombre :<br>";

$multiplicationTable = generateMultiplicationTable($nombre);

foreach ($multiplicationTable as $line) {
    echo $line . "<br>";
}
?>
