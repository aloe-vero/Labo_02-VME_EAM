<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleEspaceUtilisateur.css?version=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Rich Ricasso</title>
</head>
<body>
<div class="container">
        <?php include 'header.php'; ?>
        <div class="connexion">
            <p id="titre">MON PROFIL</p>
            <p class="bienvenue">Bonjour Prénom Nom De Famille,<br>
                Bienvenue sur votre profil utilisateur!</p>
            <form action="" id="connexionForm" method="POST">
                <input id="prenom" name="prenom" type="text" placeholder="PRENOM" value="Prénom">
                <br>
                <input id="nomDeFamille" name="nomDeFamille" type="text" placeholder="NOM DE FAMILLE" value="Nom De Famille">
                <br>
                <input id="email" name="email" type="text" placeholder="ADRESSE EMAIL" value="2012345@collegeahuntsic.qc.ca">
                <br>
                <input id="mdp" name="mdp" type="text" placeholder="MOT DE PASSE" value="123456789">
                <br>
                <input id="buttonModification" type="submit" value="MODIFIER">
            </form>
        </div>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>