<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Variables, constantes, types et chaînes.
Date : 18/10/2026
*/

require_once "config.php";

echo "<h1>Exercice 1 : Bases PHP</h1>";

echo "<h2>Exercice 1.1 : Variables</h2>";

// Variables valides
$x = 10;
$_x = 20;
$Prix_HT = 60;
$état = "valide";

// $2x est invalide : le nom commence par un chiffre.
// $x-y est invalide : le tiret n'est pas autorisé.
// $prix ht est invalide : les espaces sont interdits.

$a = 10;
$A = 20;

echo "\$a = $a<br>";
echo "\$A = $A<br>";

echo "<h2>Exercice 1.2 : Constantes</h2>";

echo "Établissement : " . ETABLISSEMENT . "<br>";
echo "Note minimale : " . NOTE_MIN . "<br>";
echo "Note maximale : " . NOTE_MAX . "<br>";
echo "Seuil : " . SEUIL . "<br>";

var_dump(defined("SEUIL"));
var_dump(defined("INCONNUE"));

echo "<h2>Exercice 1.3 : Calcul</h2>";

$prix_ht = 60;
$tva = 20;

$prix_ttc = $prix_ht + ($prix_ht * $tva / 100);

echo "Le prix TTC du produit est de " . $prix_ttc . " €.<br>";

echo "<h2>Exercice 1.4 : Types et conversions</h2>";

$test = 42;
$test = (string) $test;

var_dump($test);

echo "<br>Conversions booléennes :<br>";

var_dump((bool) 0);
var_dump((bool) 0.0);
var_dump((bool) "0");
var_dump((bool) "");
var_dump((bool) "abc");
var_dump((bool) []);
var_dump((bool) null);

echo "<br>Conversions numériques :<br>";

var_dump((int) 3.9);
var_dump((int) "12abc");
var_dump((float) "1.5e3");
var_dump((int) true);

echo "<br>Représentations de 255 :<br>";

echo "Décimale : " . 255 . "<br>";
echo "Hexadécimale : " . dechex(255) . "<br>";
echo "Octale : " . decoct(255) . "<br>";
echo "Binaire : " . decbin(255) . "<br>";

echo "<h2>Exercice 1.5 : Chaînes</h2>";

$traitees = "égales à";
$ici = 2;

echo 'Ahmed a dit : "J\'ai réussi"<br>';
echo 'Voulez-vous supprimer C:\*.*?<br>';
echo 'Ceci n\'affichera pas \n de nouvelle ligne<br>';
echo 'Les variables ne seront pas $traitees $ici<br>';

echo "Les variables seront $traitees $ici<br>";

$chaine = "*Bonjour les développeurs*";

echo trim($chaine, "*") . "<br>";

$mot = "PHP";

for ($i = 0; $i < strlen($mot); $i++) {
    echo $mot[$i] . "<br>";
}
