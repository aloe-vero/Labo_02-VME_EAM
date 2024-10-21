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
            <img src="img/web/rich.png" alt="Rich Ricasso" width="260" height="260">
            <div class="window">
                <p>Rich Ricasso, maître des cravates et chemises de luxe, est une figure majeure de la mode contemporaine. Reconnu pour ses créations en soie aux tons pastel comme le bleu ciel, le rose poudré et le violet lavande, il s'inspire du mouvement vaporwave et vaporfashion. Son style avant-gardiste, mêlant élégance et raffinement, a conquis l'élite de l'ultra-luxe.
                </p>
                <p>
                Il a débuté sa carrière en collaborant avec des maisons de couture renommées, où il a perfectionné son savoir-faire dans les textiles de luxe. Rapidement, il a lancé sa propre marque, proposant des collections unisexes en soie qui allient modernité artistique et élégance classique. Ses créations sont aujourd'hui prisées dans le monde de la mode de luxe.
                </p>
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


