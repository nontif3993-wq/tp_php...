<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Valider et enregistrer les notes.
Date : 18/10/2026
*/

require_once "config.php";

if (
    !isset($_POST["nom"], $_POST["note_info"], $_POST["note_math"])
) {
    exit("Erreur : formulaire incomplet.");
}

$nom = trim($_POST["nom"]);

if (
    $nom === "" ||
    !is_numeric($_POST["note_info"]) ||
    !is_numeric($_POST["note_math"])
) {
    exit("Erreur : données invalides.");
}

$note_info = (float) $_POST["note_info"];
$note_math = (float) $_POST["note_math"];

if (
    $note_info < NOTE_MIN || $note_info > NOTE_MAX ||
    $note_math < NOTE_MIN || $note_math > NOTE_MAX
) {
    exit("Erreur : les notes doivent être comprises entre 0 et 20.");
}

$moyenne = ($note_info + $note_math) / 2;

$nom_affiche = htmlspecialchars($nom, ENT_QUOTES, "UTF-8");

echo "<h1>Récapitulatif</h1>";
echo "Nom : $nom_affiche<br>";
echo "Note Informatique : $note_info<br>";
echo "Note Mathématiques : $note_math<br>";
echo "Moyenne : $moyenne<br>";

// Enregistrement CSV

$dossier = __DIR__ . "/data";

if (!is_dir($dossier)) {
    mkdir($dossier, 0775, true);
}

$fichier = fopen($dossier . "/notes.csv", "a");

if ($fichier === false) {
    exit("Erreur : impossible d'ouvrir le fichier CSV.");
}

fputcsv(
    $fichier,
    [$nom, $note_info, $note_math],
    ";"
);

fclose($fichier);

echo "<p>Les notes ont été enregistrées avec succès.</p>";

echo '<a href="liste.php">Consulter la liste</a>';
