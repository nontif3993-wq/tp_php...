<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Traitement du formulaire GET.
Date : 18/10/2026
*/

$nom = htmlspecialchars($_GET["nom"] ?? "");
$prenom = htmlspecialchars($_GET["prenom"] ?? "");
$sexe = $_GET["sexe"] ?? "";

if ($sexe === "M") {
    $civilite = "Monsieur";
} elseif ($sexe === "F") {
    $civilite = "Madame";
} else {
    exit("Sexe invalide.");
}

echo "Bonjour $civilite $prenom $nom";
