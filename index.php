<?php
$uri = $_SERVER['REQUEST_URI'];


if (preg_match('/\/Labo_02-VME_EAM_WEB\/utilisateur\?id=([0-9]+)/', $uri)) {
    require(__DIR__ . "/php/Views/espaceUtilisateur.php");
    exit();
}else if(preg_match('/\/Labo_02-VME_EAM_WEB\/produit\?id=([0-9]+)/', $uri)){
    require(__DIR__ . "/php/Views/pageProduit.php");
    exit();
}
    switch ($uri) {
        case "/Labo_02-VME_EAM_WEB/":
            require(__DIR__ . "/php/Views/home.php");
            break;
        case "/Labo_02-VME_EAM_WEB/catalogue":
            require(__DIR__ . "/php/Views/catalogueProduits.php");
            break;
        case "/Labo_02-VME_EAM_WEB/infolettre":
            require(__DIR__ . "/php/Views/infolettre.php");
            break;
        case "/Labo_02-VME_EAM_WEB/connexion":
            require(__DIR__ . "/php/Views/connexion.php");
            break;
        case "/Labo_02-VME_EAM_WEB/inscription":
            require(__DIR__ . "/php/Views/inscription.php");
            break;
        default:
            require(__DIR__ . "/php/Views/404.php");
            break;
    }

