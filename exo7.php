<h2>Exercice 7</h2>


<?php

// VARIABLES

$age = 10;
$category = determineCategory($age);


// FONCTIONS


function determineCategory($age) {
    if($age >= 6 && $age <= 7) {
     return "Poussin";
    } elseif ($age >= 8 && $age <= 9 ) {
     return "Pupille";
    } elseif ($age >= 10 && $age <= 11) {
      return "Minime"; 
    } elseif ($age >= 12) {
    return "Cadet";
    } else {
     return "Merci de préciser la catégorie.";
    }
}

// AFFICHAGE

echo "L'enfant qui a $age ans appartient à la catégorie des $category.";