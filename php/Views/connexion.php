<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleConnexion.css?version=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Connexion — Rich Ricasso</title>
</head>
<body>
    <div class="container">
        <?php require 'php/Views/partials/header.php'; ?>
        <div class="connexion">
        <?php if (isset($_SESSION['inscriptionConf'])): ?>
                <div id="confirmation">
                    <p><?php echo $_SESSION['inscriptionConf']; ?></p>
                </div>
            <?php endif; ?>
            <p id="titre">CONNEXION</p>
            <form action="php/Forms/connexionUser.php" id="connexionForm" method="POST">

                <p class="error"><?php echo $_SESSION['errors']['email'] ?? ''; ?></p>
                <input id="email" name="email" type="text" placeholder="ADRESSE COURRIEL" value="<?php echo $_SESSION['old']['email'] ?? ''; ?>">
                <br>
                <p class="error"><?php echo $_SESSION['errors']['mdp'] ?? ''; ?></p>
                <input id="mdp" name="mdp" type="password" placeholder="MOT DE PASSE" value="<?php echo $_SESSION['old']['mdp'] ?? ''; ?>">
                <br>
                <input id="buttonConnexion" type="submit" value="CONNEXION">
                <button type="button" id="buttonInscription" onclick="window.location.href='inscription';" >S'INSCRIRE</button>
            </form>
        </div>
        <?php require 'php/Views/partials/footer.php'; ?>
        <?php
        if (isset($_SESSION['errors'])) unset($_SESSION['errors']);
        if (isset($_SESSION['old'])) unset($_SESSION['old']);
        if (isset($_SESSION['inscriptionConf'])) unset($_SESSION['inscriptionConf']);
         ?>
    </div>
</body>
</html>