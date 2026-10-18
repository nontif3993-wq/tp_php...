<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Manipulation des tableaux et statistiques.
Date : 18/10/2026
*/

require_once "config.php";
require_once "exo2_flux.php";

$notes = [
    "Mohamed" => 16,
    "Ahmed" => 14,
    "Hind" => 13,
    "Aicha" => 15,
    "Samir" => 13,
    "Zakaria" => 13,
    "Rafik" => 10,
    "Ilham" => 9,
    "Hamza" => 7,
    "Sami" => 7,
    "Noura" => 14
];

$modules = ["PHP", "HTML", "CSS"];

echo "<h1>Partie 3 : Tableaux</h1>";

echo "<h2>Liste des modules</h2>";

foreach ($modules as $module) {
    echo htmlspecialchars($module) . "<br>";
}

echo "<h2>Liste des notes</h2>";

echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Nom</th><th>Note</th><th>Mention</th></tr>";

foreach ($notes as $nom => $note) {
    $couleur = ($note < SEUIL) ? "red" : "black";

    echo "<tr style='color:$couleur'>";
    echo "<td>" . htmlspecialchars($nom) . "</td>";
    echo "<td>$note</td>";
    echo "<td>" . mention($note) . "</td>";
    echo "</tr>";
}

echo "</table>";

// Statistiques

$somme = 0;
$meilleure = null;
$faible = null;

foreach ($notes as $note) {
    $somme += $note;

    if ($meilleure === null || $note > $meilleure) {
        $meilleure = $note;
    }

    if ($faible === null || $note < $faible) {
        $faible = $note;
    }
}

$moyenne = $somme / count($notes);

echo "<h2>Statistiques</h2>";
echo "Somme : $somme<br>";
echo "Moyenne : $moyenne<br>";
echo "Meilleure note : $meilleure<br>";
echo "Plus faible note : $faible<br>";

echo "<h2>Vérification avec les fonctions PHP</h2>";

echo "Somme : " . array_sum($notes) . "<br>";
echo "Nombre d'apprenants : " . count($notes) . "<br>";
echo "Maximum : " . max($notes) . "<br>";
echo "Minimum : " . min($notes) . "<br>";

echo "<h2>Opérateurs de tableaux</h2>";

$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];

var_dump($a + $b);
var_dump($a == $b);
var_dump($a === $b);
