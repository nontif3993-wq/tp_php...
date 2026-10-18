<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Exporter les résultats au format JSON.
Date : 18/10/2026
*/

$fichier_csv = __DIR__ . "/data/notes.csv";
$fichier_json = __DIR__ . "/data/notes.json";

if (!file_exists($fichier_csv)) {
    exit("Le fichier CSV n'existe pas encore.");
}

$handle = fopen($fichier_csv, "r");

if ($handle === false) {
    exit("Impossible de lire le fichier CSV.");
}

$resultats = [];

while (($ligne = fgetcsv($handle, 0, ";")) !== false) {
    if (count($ligne) < 3) {
        continue;
    }

    [$nom, $info, $math] = $ligne;

    $info = (float) $info;
    $math = (float) $math;

    $resultats[] = [
        "nom" => $nom,
        "note_info" => $info,
        "note_math" => $math,
        "moyenne" => ($info + $math) / 2
    ];
}

fclose($handle);

$json = json_encode(
    $resultats,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);

if ($json === false) {
    exit("Erreur lors de la conversion JSON.");
}

if (file_put_contents($fichier_json, $json) === false) {
    exit("Impossible d'écrire le fichier JSON.");
}

$contenu = file_get_contents($fichier_json);

$donnees = json_decode($contenu, true);

echo "<h1>Export JSON</h1>";
echo "<pre>";
print_r($donnees);
echo "</pre>";
