<?php
session_start();

?>


<p><a href="php/Views/home.php">Site</a></p>
<p><a href="pageTest.php">Page Test</a></p>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .carte{
            display: flex;
            border: 1px solid black;
            width: 200px;
            height: 300px;
            flex-direction: column;
            align-items: center ;
        }
        img{
            width: 200px;
        }

        .p1, .p2{
            display: flex;
            flex-direction: row;

        }
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
</head>
<body>
<form action="registrationCompte.php" method="POST">
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom">
    <br>
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom">
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br>
    <input type="submit" value="S'inscrire">
</form>

<form action="inscrireInfolettre.php" method="POST">
    <label for="">S'inscrire à notre infolettre?</label>
    <input type="email" id="email" name="email">
    <input type="submit" value="S'inscrire">
</form>

</body>
</html>



</body>
</html>

