<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleInfolettre.css?v=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Rich Ricasso</title>
</head>
<body>
<div class="container">
        <?php include 'header.php'; ?>
        <div class="infolettreContainer">
            <img src="img/produits/shirt1.webp" alt="polo licorne" width="230" height="260">
            <div class="infolettre">
                <p id="lettrePlusGrande">INSCRIS-TOI À NOTRE INFOLETTRE!</p>
                <P>REÇOIS UN ACCÈS EXCLUSIF POUR NOS NOUVEAUTÉS AINSI QUE DES RABAIS SURPRISE</P>
                <br>
                <form id="infolettreForm" action="" method="POST">
                    <input id="email" name="email" type="text" placeholder="ADRESSE EMAIL">
                    <input id="button" type="submit" value="S'INSCRIRE">
                </form>
            </div>
            <img src="img/produits/tie7.webp" alt="cravate avec motif de licornes">
        </div>
        <?php include 'footer.php'; ?>
</div>
</body>
</html>