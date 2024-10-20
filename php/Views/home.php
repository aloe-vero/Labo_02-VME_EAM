<?php
require "php/Controllers/ProduitController.php";
require "php/Views/ClassView/ProduitView.php";
require_once "php/Database.php";
$db = Database::getInstance();
$conn = $db->getConnection();
$produitController = new ProduitController($conn);
$produitView = new ProduitView();
$produits = $produitController->getAllProduits();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleIndex.css?v=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Rich Ricasso</title>
</head>
<body>
    <div class="container">
        <?php require 'php/Views/partials/header.php'; ?>
        <div class="introduction">
            <img src="img/web/rich.png" alt="Rich Ricasso" width="300" height="300">
            <div class="window">
                <p>Rich Ricasso, maître des cravates et chemises de luxe, est une figure incontournable de la mode contemporaine. Ce créateur visionnaire, connu pour ses créations élégantes en soie, s'est fait un nom avec des collections inspirées du mouvement vaporwave et vaporfashion. Ses pièces, caractérisées par des tons pastel tels que le bleu ciel, le rose poudré et le violet lavande, incarnent une esthétique avant-gardiste et raffinée qui a séduit l'élite de l'ultra-luxe.</p>
            </div>
        </div>
        <div class="carrousel">
            <?php

            $produitView ->displayProduitsImage($produits);
            ?>
        </div>
        <div class="summerCollection">
            <p>Lookbook Été 2024</p>
            <div class="piecesPhares">
                <?php
                $produitView ->displayProduitsImage($produits);
                ?>
            </div>
        </div>
        <?php require 'php/Views/partials/footer.php'; ?>
    </div>
</body>
</html>


