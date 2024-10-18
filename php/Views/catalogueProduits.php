<?php
$database = new PDO('mysql:host=localhost:3306;dbname=boutique_vetements', 'root');
require "../Controllers/ProduitController.php";
require "ClassView/ProduitView.php";
$produitController = new ProduitController($database);
$produitView = new ProduitView();


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/styleCatalogueProduits.css?v=1" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Rich Ricasso</title>
</head>
<body>
<div class="container">
        <?php include 'partials/header.php'; ?>
        <div class="listeProduits">
          <?php
          $produits = $produitController->getAllProduits();

          $produitView->displayProduitsDetails($produits);
          ?>
        </div>
        <?php include 'partials/footer.php'; ?>
    </div>
</body>
</html>