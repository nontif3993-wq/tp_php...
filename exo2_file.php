<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Structures de contrôle et boucles.
Date : 18/10/2026
*/

require_once "config.php";

echo "<h1>Partie 2 : Structures de contrôle</h1>";

// Exercice 2.1 : Fonction mention

function mention($note)
{
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}

echo "<h2>Exercice 2.1 : Mentions</h2>";

$notes_test = [18, 15, 13, 10, 7];

foreach ($notes_test as $note) {
    echo "Note : $note - Mention : " . mention($note) . "<br>";
}

// Exercice 2.2 : Switch sur le mois

echo "<h2>Exercice 2.2 : Mois</h2>";

$mois = date("m");

switch ($mois) {
    case "01": $nom_mois = "Janvier"; break;
    case "02": $nom_mois = "Février"; break;
    case "03": $nom_mois = "Mars"; break;
    case "04": $nom_mois = "Avril"; break;
    case "05": $nom_mois = "Mai"; break;
    case "06": $nom_mois = "Juin"; break;
    case "07": $nom_mois = "Juillet"; break;
    case "08": $nom_mois = "Août"; break;
    case "09": $nom_mois = "Septembre"; break;
    case "10": $nom_mois = "Octobre"; break;
    case "11": $nom_mois = "Novembre"; break;
    case "12": $nom_mois = "Décembre"; break;
    default: $nom_mois = "Mois inconnu";
}

echo "Nous sommes en $nom_mois.<br>";

// Exercice 2.3 : Triangle

echo "<h2>Triangle</h2>";

for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

// Boucle while : nombres pairs de 0 à 20

echo "<h2>Nombres de 0 à 20</h2>";

$i = 0;

while ($i <= 20) {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }

    $i += 2;
}

// For et continue

echo "<h2>Nombres pairs de 0 à 10</h2>";

for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;
    }

    echo "$i<br>";
}

// Do-while

echo "<h2>Do-while</h2>";

$i = 0;

do {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }

    $i += 2;
} while ($i <= 20);
