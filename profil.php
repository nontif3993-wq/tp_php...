<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Afficher le profil de l'utilisateur connecté.
Date : 18/10/2026
*/

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$login = htmlspecialchars($_SESSION["login"], ENT_QUOTES, "UTF-8");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
</head>
<body>

<h1>Bienvenue <?= $login ?></h1>

<a href="deconnexion.php">Se déconnecter</a>

</body>
</html>
