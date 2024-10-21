<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleInscription.css?version=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Inscription — Rich Ricasso</title>
</head>
<body>
    <div class="container">
        <?php require 'php/Views/partials/header.php'; ?>
        <div class="connexion">
            <p id="titre">CRÉER UN COMPTE</p>
            <form action="php/Forms/registrationUser.php" id="connexionForm" method="POST">
                <p class="error"><?php echo $_SESSION['errors']['prenom'] ?? ''; ?></p>
                <input id="prenom" name="prenom" type="text" placeholder="PRENOM" value="<?php echo $_SESSION['old']['prenom'] ?? ''; ?>">
                <br>
                <p class="error"><?php echo $_SESSION['errors']['nom'] ?? ''; ?></p>
                <input id="nomDeFamille" name="nomDeFamille" type="text" placeholder="NOM DE FAMILLE" value="<?php echo $_SESSION['old']['nomDeFamille'] ?? ''; ?>">
                <br>
                <p class="error"><?php echo $_SESSION['errors']['email'] ?? ''; ?></p>
                <input id="email" name="email" type="text" placeholder="ADRESSE COURRIEL" value="<?php echo $_SESSION['old']['email'] ?? ''; ?>">
                <br>
                <p class="error"><?php echo $_SESSION['errors']['mdp'] ?? ''; ?></p>
                <input id="mdp" name="mdp" type="password" placeholder="MOT DE PASSE" value="<?php echo $_SESSION['old']['mdp'] ?? ''; ?>">
                <br>
                <input id="buttonInscription" type="submit" value="S'INSCRIRE">
            </form>
        </div>
        <?php require 'php/Views/partials/footer.php'; ?>
        <?php
        //Effacer les erreurs et les anciennes valeurs après affichage
        if (isset($_SESSION['errors'])) unset($_SESSION['errors']);
        if (isset($_SESSION['old'])) unset($_SESSION['old']);
         ?>
    </div>
</body>
</html>