<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styleConnexion.css?version=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Rich Ricasso</title>
</head>
<body>
    <div class="container">
        <?php include 'partials/header.php'; ?>
        <div class="connexion">
            <p id="titre">CONNEXION</p>
            <form action="" id="connexionForm" method="POST">
                <input id="email" name="email" type="text" placeholder="ADRESSE EMAIL">
                <br>
                <input id="mdp" name="mdp" type="text" placeholder="MOT DE PASSE">
                <br>
                <input id="buttonConnexion" type="submit" value="CONNEXION">
                <button type="button" id="buttonInscription" onclick="window.location.href='inscription.php';">S'INSCRIRE</button>
            </form>
        </div>
        <?php include 'partials/footer.php'; ?>
    </div>
</body>
</html>