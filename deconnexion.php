<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Détruire la session et déconnecter l'utilisateur.
Date : 18/10/2026
*/

session_start();

session_unset();
session_destroy();

header("Location: login.php");
exit;

