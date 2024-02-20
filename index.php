<h1>Introduction PHP</h1>

<?php

// DECLARATION DE VARIABLES
$chaineDeCaracteres = "mon texte";    //string
$chaineDeCaracteres2 = "mon prix est très intéressant<br>";    //string
$chaineDeCaracteres3 = "Mon prix est de";   // string
$entier = 50;  //integer
$flottant = 9.99;   //float
$booleen = true;    //boolean (true or false)  
$tableau1 = array("texte 1", "texte 2", "texte 3");   //array
$tableau2 = ["texte 1", "texte 2"];   //array
$date = new DateTime();   //programmation orientée objet (POO)

// AFFICHAGE
echo "Test<br>";
echo $chaineDeCaracteres."<br>";  // mon texte
echo $chaineDeCaracteres3." ".$entier." euros<br>";  // Mon prix est de 50 euros


// FONCTIONS CHAINE DE CARACTERES

// Compter le nombre de caractères (espaces inclus!)
$nbCaracteres = strlen($chaineDeCaracteres);
echo "La phrase contient $nbCaracteres caractères<br>";
echo "La phrase contient ".strlen($chaineDeCaracteres)." caractères<br>";

//Convertir une chaine en majuscules
$chaineMajuscules = strtoupper($chaineDeCaracteres);
echo $chaineMajuscules."<br>";
echo mb_strtoupper($chaineDeCaracteres2);  //prend en compte les caractères accentués

// Compter le nombre de mots
$nbMots = str_word_count($chaineDeCaracteres);
echo "La phrase contient $nbMots mots<br>";

// FONCTIONS TABLEAUX
$tailleTableau1 = count($tableau1);
echo "Le tableau 1 contient $tailleTableau1 éléments<br>";
echo "Le tableau 2 contient ".count($tableau2)." éléments<br>";