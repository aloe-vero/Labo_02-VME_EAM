<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleInfolettre.css?v=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Infolettre — Rich Ricasso</title>
</head>
<body>
<div class="container">
    <?php require 'php/Views/partials/header.php'; ?>
        <div class="infolettreContainer">
            <img src="img/produits/shirt1.webp" alt="polo licorne" width="230" height="260">
            <div class="infolettre">
            <?php if (isset($_SESSION['confirmation'])): ?>
                <div id="confirmation">
                    <p><?php echo $_SESSION['confirmation']; ?></p>
                </div>
            <?php endif; ?>
                <br>
                <p id="lettrePlusGrande">INSCRIS-TOI À NOTRE INFOLETTRE!</p>
                <P>REÇOIS UN ACCÈS EXCLUSIF POUR NOS NOUVEAUTÉS AINSI QUE DES RABAIS SURPRISE</P>
                <br>
                <form id="infolettreForm" action="php/Forms/inscriptionInfolettre.php" method="POST">
                    <p class="error"><?php echo $_SESSION['errors'] ?? ''; ?></p>
                    <input id="email" name="email" type="text" placeholder="ADRESSE EMAIL"  value="<?php echo $_SESSION['old']['email'] ?? ''; ?>">
                    <input id="button" type="submit" value="S'INSCRIRE">
                </form>
            </div>
            <img src="img/produits/tie7.webp" alt="cravate avec motif de licornes">
        </div>
    <?php require 'php/Views/partials/footer.php'; ?>
        <?php
        //Effacer les erreurs, les anciennes valeurs et le message après affichage
        if (isset($_SESSION['errors'])) unset($_SESSION['errors']);
        if (isset($_SESSION['old'])) unset($_SESSION['old']);
        if (isset($_SESSION['confirmation'])) unset($_SESSION['confirmation']);
         ?>
</div>
</body>
</html>