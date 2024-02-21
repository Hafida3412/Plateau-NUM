<h1>Introduction PHP</h1>

<?php

/*
    commentaire sur plusieurs lignes
*/

// DECLARATION DE VARIABLES
$chaineDeCaracteres = "mon texte";   // string
$chaineDeCaracteres2 = "mon prix est très intéressant";  // string
$chaineDeCaracteres3 = "Mon prix est de";  // string
$entier = 50;  // integer
$flottant = 9.99;  // float
$booleen = true;  // boolean (true ou false)
$tableau1 = array("texte 1", "texte 2", "texte 3");   // array
$tableau2 = ["texte 1", "texte 2"];  // array
$date = new DateTime();  // programmation orientée objet (POO)

// AFFICHAGE
echo "Test<br>";
echo $chaineDeCaracteres."<br>";   // mon texte
echo $chaineDeCaracteres3." ".$entier." euros<br>";  // Mon prix est de 50 euros
echo "$chaineDeCaracteres3 $entier euros<br>"; // Mon prix est de 50 euros


// FONCTIONS CHAINES DE CARACTERES

// Compter le nombre de caractères (espaces inclus !)
$nbCaracteres = strlen($chaineDeCaracteres);
echo "La phrase contient $nbCaracteres caractères<br>";
echo "La phrase contient ".strlen($chaineDeCaracteres)." caractères<br>";

// Convertir une chaîne en majuscules
$chaineMajuscules = strtoupper($chaineDeCaracteres);
echo $chaineMajuscules."<br>";
echo mb_strtoupper($chaineDeCaracteres2)."<br>";  // prend en compte les caractères accentués

// Compter le nombre de mots
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase contient $nbMots mots<br>";

// FONCTIONS TABLEAUX

// Compter le nombre d'éléments présents dans un tableau
$tailleTableau1 = count($tableau1);
echo "Le tableau 1 contient $tailleTableau1 éléments<br>";
echo "Le tableau 2 contient ".count($tableau2)." éléments<br>";

// Accéder à la première valeur du tableau (attention 1er élément à l'indice 0 !)
echo $tableau1[0]."<br>";

$notes = [12, 14, 9, 8, 19, 17.25];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);

echo "La moyenne est $moyenne<br>";

// OPERATIONS MATHEMATIQUES

$nbArticles = 5;
$prixHT = 10.99;
$totalHT = $nbArticles * $prixHT;
echo "Le total HT est de $totalHT €<br>";

// Afficher le total TTC d'une facture
$tauxTVA = 0.20;

$totalTTC = $nbArticles * $prixHT + $nbArticles * $prixHT * $tauxTVA;
$totalTTC2 = $nbArticles * $prixHT * (1 + $tauxTVA);
echo "Le total TTC est de $totalTTC €<br>";

// Renvoie le type de la variable spécifiée en paramètre
echo gettype($tableau1);
var_dump($tableau1);


// STRUCTURES DE CONTROLE

// Conditions (IF = SI)

$prenom = "Georges";
$age = 22.5;

if($age >= 18) {
    $resultat = "majeur";
} else {
    $resultat = "mineur";
}

echo "$prenom est $resultat<br>";

// Ternaire
$result = $age >= 18 ? "majeur" : "mineur";
echo "$prenom est $result<br>";
echo "$prenom est ".($age >= 18 ? "majeur" : "mineur")."<br>";

// En fonction de l'âge, afficher une catégorie
/*
    si la personne a plus de 30 ans --> SENIOR
    si la personne a plus de 20 ans --> CADET
    sinon JUNIOR
*/

if(gettype($age) == "double" || gettype($age) == "integer" ) {
    if($age >= 30) {
        $resultat = "Senior";
    } elseif($age >= 20) {
        $resultat = "Cadet";
    } else {
        $resultat = "Junior";
    }
    
    echo "La personne qui a $age ans est : $resultat<br>";
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}

/*
    si la valeur est 1 --> OK !
    si la valeur est 0 --> KO !
    sinon afficher "valeur non gérée"
*/

$valeur = 99;
switch($valeur) {
    case 0: echo "KO !<br>"; break;
    case 1: echo "OK !<br>"; break;
    default: echo "Valeur non gérée !<br>";
}

$age = 18;

if(gettype($age) == "double" || gettype($age) == "integer" ) {
    switch(true) {
        case $age >= 30: echo "Senior<br>"; break;
        case $age >= 20: echo "Cadet<br>"; break;
        default: echo "Junior<br>";
    }
} else {
    echo "Veuillez saisir un âge numérique !<br>";
}


// BOUCLES (loop)
// Afficher les chiffres de 1 à 10

// FOR (pour)
// $i++  -->   $i = $i + 1

for($i = 1; $i <= 10; $i++) {
    echo $i." ";
}

// WHILE (tant que)

$j = 1;
while($j <= 10) {
    echo $j." ";
    $j++;
}

// FOREACH

$range = range(1,10);
var_dump($range);

foreach(range(1,10) as $v) { 
    echo $v." "; 
}

echo "<br>";

$marques = ["Mercedes", "BMW", "Toyota", "Tesla"];
$nbMarques = count($marques);

echo "<h3>Méthode for</h3>";
for ($i = 0; $i < $nbMarques; $i++) { 
    echo $marques[$i]."<br>";
}

echo "<h3>Méthode while</h3>";
$i = 0;
while($i < $nbMarques) {
    echo $marques[$i]."<br>";
    $i++;
}

echo "<h3>Méthode foreach</h3>";
foreach($marques as $marque) {
    echo $marque."<br>";
}