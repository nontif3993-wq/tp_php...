<?php
/*
Auteur : NOUSSAIBA ONTIF
Objectif : Connexion avec session et cookie.
Date : 18/10/2026
*/

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = trim($_POST["login"] ?? "");

    if ($login === "") {
        $erreur = "Veuillez saisir un login.";
    } else {
        session_regenerate_id(true);

        $_SESSION["login"] = $login;

        setcookie(
            "dernier_login",
            $login,
            time() + 86400,
            "/"
        );

        header("Location: profil.php");
        exit;
    }
}

$dernier_login = $_COOKIE["dernier_login"] ?? "";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>

<h1>Connexion</h1>

<?php if (!empty($erreur)): ?>
    <p><?= htmlspecialchars($erreur) ?></p>
<?php endif; ?>

<form method="POST" action="login.php">

    <label>Login :</label>

    <input
        type="text"
        name="login"
        value="<?= htmlspecialchars($dernier_login, ENT_QUOTES, 'UTF-8') ?>"
        required
    >

    <button type="submit">Se connecter</button>

</form>

</body>
</html>
